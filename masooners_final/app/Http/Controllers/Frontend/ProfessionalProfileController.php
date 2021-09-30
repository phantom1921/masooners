<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyProfessionalProfileRequest;
use App\Http\Requests\StoreProfessionalProfileRequest;
use App\Http\Requests\UpdateProfessionalProfileRequest;
use App\Models\ProfessionalProfile;
use App\Models\User;
use App\Models\ProSubCategory;
use App\Models\ProfessionalDetail;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ProfessionalProfileController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('professional_profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $professionalProfiles = ProfessionalProfile::with(['user', 'media'])->where('user_id',auth::id())->get();
        // dd(sizeof($professionalProfiles));
        if(sizeof($professionalProfiles)!=0){
            $professionalProfile=$professionalProfiles[0];
            $professionalProfile->load('user');

        }else{
            $professionalProfile=false;
        }
        $categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $professionalDetail = ProfessionalDetail::with(['category', 'user'])->where('user_id',auth::id())->get();
        $professionalDetail=$professionalDetail[0];
        $professionalDetail->load('category', 'user');

        $ProSubCategory = ProSubCategory::where('id',$professionalDetail->subcategory_id)->pluck('name', 'id');
        // dd($ProSubCategory);
        return view('frontend.professionalProfiles.index', compact('professionalProfile','categories', 'users', 'professionalDetail','ProSubCategory'));
    }

    public function create()
    {
        abort_if(Gate::denies('professional_profile_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.professionalProfiles.create', compact('users'));
    }

    public function store(StoreProfessionalProfileRequest $request)
    {
        $professionalProfile = ProfessionalProfile::create($request->all());

        if ($request->input('profile_image', false)) {
            $professionalProfile->addMedia(storage_path('tmp/uploads/' . basename($request->input('profile_image'))))->toMediaCollection('profile_image');
        }

        foreach ($request->input('pro_cover', []) as $file) {
            $professionalProfile->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('pro_cover');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $professionalProfile->id]);
        }

        return redirect()->route('frontend.professional-profiles.index');
    }

    public function edit(ProfessionalProfile $professionalProfile)
    {
        abort_if(Gate::denies('professional_profile_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $professionalProfile->load('user');

        return view('frontend.professionalProfiles.edit', compact('users', 'professionalProfile'));
    }

    public function update(UpdateProfessionalProfileRequest $request, ProfessionalProfile $professionalProfile)
    {
        $professionalProfile->update($request->all());

        if ($request->input('profile_image', false)) {
            if (!$professionalProfile->profile_image || $request->input('profile_image') !== $professionalProfile->profile_image->file_name) {
                if ($professionalProfile->profile_image) {
                    $professionalProfile->profile_image->delete();
                }
                $professionalProfile->addMedia(storage_path('tmp/uploads/' . basename($request->input('profile_image'))))->toMediaCollection('profile_image');
            }
        } elseif ($professionalProfile->profile_image) {
            $professionalProfile->profile_image->delete();
        }

        if (count($professionalProfile->pro_cover) > 0) {
            foreach ($professionalProfile->pro_cover as $media) {
                if (!in_array($media->file_name, $request->input('pro_cover', []))) {
                    $media->delete();
                }
            }
        }
        $media = $professionalProfile->pro_cover->pluck('file_name')->toArray();
        foreach ($request->input('pro_cover', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $professionalProfile->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('pro_cover');
            }
        }

        return redirect()->route('frontend.professional-profiles.index');
    }

    public function show(ProfessionalProfile $professionalProfile)
    {
        abort_if(Gate::denies('professional_profile_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $professionalProfile->load('user');

        return view('frontend.professionalProfiles.show', compact('professionalProfile'));
    }

    public function destroy(ProfessionalProfile $professionalProfile)
    {
        abort_if(Gate::denies('professional_profile_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $professionalProfile->delete();

        return back();
    }

    public function massDestroy(MassDestroyProfessionalProfileRequest $request)
    {
        ProfessionalProfile::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('professional_profile_create') && Gate::denies('professional_profile_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ProfessionalProfile();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
