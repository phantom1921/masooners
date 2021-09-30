<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAwardRequest;
use App\Http\Requests\StoreAwardRequest;
use App\Http\Requests\UpdateAwardRequest;
use App\Models\Award;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AwardsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('award_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $awards = Award::with(['media'])->get();

        return view('frontend.awards.index', compact('awards'));
    }

    public function create()
    {
        abort_if(Gate::denies('award_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.awards.create');
    }

    public function store(StoreAwardRequest $request)
    {
        $award = Award::create($request->all());

        if ($request->input('image', false)) {
            $award->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $award->id]);
        }

        return redirect()->route('frontend.awards.index');
    }

    public function edit(Award $award)
    {
        abort_if(Gate::denies('award_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.awards.edit', compact('award'));
    }

    public function update(UpdateAwardRequest $request, Award $award)
    {
        $award->update($request->all());

        if ($request->input('image', false)) {
            if (!$award->image || $request->input('image') !== $award->image->file_name) {
                if ($award->image) {
                    $award->image->delete();
                }
                $award->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($award->image) {
            $award->image->delete();
        }

        return redirect()->route('frontend.awards.index');
    }

    public function show(Award $award)
    {
        abort_if(Gate::denies('award_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.awards.show', compact('award'));
    }

    public function destroy(Award $award)
    {
        abort_if(Gate::denies('award_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $award->delete();

        return back();
    }

    public function massDestroy(MassDestroyAwardRequest $request)
    {
        Award::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('award_create') && Gate::denies('award_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Award();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
