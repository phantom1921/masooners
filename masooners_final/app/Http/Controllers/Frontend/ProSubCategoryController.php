<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyProSubCategoryRequest;
use App\Http\Requests\StoreProSubCategoryRequest;
use App\Http\Requests\UpdateProSubCategoryRequest;
use App\Models\Category;
use App\Models\ProSubCategory;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ProSubCategoryController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('pro_sub_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $proSubCategories = ProSubCategory::with(['prof_category', 'media'])->get();

        return view('frontend.proSubCategories.index', compact('proSubCategories'));
    }

    public function create()
    {
        abort_if(Gate::denies('pro_sub_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prof_categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.proSubCategories.create', compact('prof_categories'));
    }

    public function store(StoreProSubCategoryRequest $request)
    {
        $proSubCategory = ProSubCategory::create($request->all());

        if ($request->input('image', false)) {
            $proSubCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $proSubCategory->id]);
        }

        return redirect()->route('frontend.pro-sub-categories.index');
    }

    public function edit(ProSubCategory $proSubCategory)
    {
        abort_if(Gate::denies('pro_sub_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prof_categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $proSubCategory->load('prof_category');

        return view('frontend.proSubCategories.edit', compact('prof_categories', 'proSubCategory'));
    }

    public function update(UpdateProSubCategoryRequest $request, ProSubCategory $proSubCategory)
    {
        $proSubCategory->update($request->all());

        if ($request->input('image', false)) {
            if (!$proSubCategory->image || $request->input('image') !== $proSubCategory->image->file_name) {
                if ($proSubCategory->image) {
                    $proSubCategory->image->delete();
                }
                $proSubCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($proSubCategory->image) {
            $proSubCategory->image->delete();
        }

        return redirect()->route('frontend.pro-sub-categories.index');
    }

    public function show(ProSubCategory $proSubCategory)
    {
        abort_if(Gate::denies('pro_sub_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $proSubCategory->load('prof_category');

        return view('frontend.proSubCategories.show', compact('proSubCategory'));
    }

    public function destroy(ProSubCategory $proSubCategory)
    {
        abort_if(Gate::denies('pro_sub_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $proSubCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyProSubCategoryRequest $request)
    {
        ProSubCategory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('pro_sub_category_create') && Gate::denies('pro_sub_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ProSubCategory();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
