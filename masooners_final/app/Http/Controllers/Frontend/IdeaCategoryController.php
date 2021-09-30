<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyIdeaCategoryRequest;
use App\Http\Requests\StoreIdeaCategoryRequest;
use App\Http\Requests\UpdateIdeaCategoryRequest;
use App\Models\IdeaCategory;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class IdeaCategoryController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('idea_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ideaCategories = IdeaCategory::with(['media'])->get();

        return view('frontend.ideaCategories.index', compact('ideaCategories'));
    }

    public function create()
    {
        abort_if(Gate::denies('idea_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.ideaCategories.create');
    }

    public function store(StoreIdeaCategoryRequest $request)
    {
        $ideaCategory = IdeaCategory::create($request->all());

        if ($request->input('image', false)) {
            $ideaCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $ideaCategory->id]);
        }

        return redirect()->route('frontend.idea-categories.index');
    }

    public function edit(IdeaCategory $ideaCategory)
    {
        abort_if(Gate::denies('idea_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.ideaCategories.edit', compact('ideaCategory'));
    }

    public function update(UpdateIdeaCategoryRequest $request, IdeaCategory $ideaCategory)
    {
        $ideaCategory->update($request->all());

        if ($request->input('image', false)) {
            if (!$ideaCategory->image || $request->input('image') !== $ideaCategory->image->file_name) {
                if ($ideaCategory->image) {
                    $ideaCategory->image->delete();
                }
                $ideaCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($ideaCategory->image) {
            $ideaCategory->image->delete();
        }

        return redirect()->route('frontend.idea-categories.index');
    }

    public function show(IdeaCategory $ideaCategory)
    {
        abort_if(Gate::denies('idea_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.ideaCategories.show', compact('ideaCategory'));
    }

    public function destroy(IdeaCategory $ideaCategory)
    {
        abort_if(Gate::denies('idea_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ideaCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyIdeaCategoryRequest $request)
    {
        IdeaCategory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('idea_category_create') && Gate::denies('idea_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new IdeaCategory();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
