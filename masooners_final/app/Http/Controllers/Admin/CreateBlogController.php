<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCreateBlogRequest;
use App\Http\Requests\StoreCreateBlogRequest;
use App\Http\Requests\UpdateCreateBlogRequest;
use App\Models\BlogCategory;
use App\Models\CreateBlog;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CreateBlogController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('create_blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $createBlogs = CreateBlog::with(['category', 'media'])->get();

        return view('admin.createBlogs.index', compact('createBlogs'));
    }

    public function create()
    {
        abort_if(Gate::denies('create_blog_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = BlogCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.createBlogs.create', compact('categories'));
    }

    public function store(StoreCreateBlogRequest $request)
    {
        $createBlog = CreateBlog::create($request->all());

        if ($request->input('image', false)) {
            $createBlog->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $createBlog->id]);
        }

        return redirect()->route('admin.create-blogs.index');
    }

    public function edit(CreateBlog $createBlog)
    {
        abort_if(Gate::denies('create_blog_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = BlogCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $createBlog->load('category');

        return view('admin.createBlogs.edit', compact('categories', 'createBlog'));
    }

    public function update(UpdateCreateBlogRequest $request, CreateBlog $createBlog)
    {
        $createBlog->update($request->all());

        if ($request->input('image', false)) {
            if (!$createBlog->image || $request->input('image') !== $createBlog->image->file_name) {
                if ($createBlog->image) {
                    $createBlog->image->delete();
                }
                $createBlog->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($createBlog->image) {
            $createBlog->image->delete();
        }

        return redirect()->route('admin.create-blogs.index');
    }

    public function show(CreateBlog $createBlog)
    {
        abort_if(Gate::denies('create_blog_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $createBlog->load('category');

        return view('admin.createBlogs.show', compact('createBlog'));
    }

    public function destroy(CreateBlog $createBlog)
    {
        abort_if(Gate::denies('create_blog_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $createBlog->delete();

        return back();
    }

    public function massDestroy(MassDestroyCreateBlogRequest $request)
    {
        CreateBlog::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('create_blog_create') && Gate::denies('create_blog_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CreateBlog();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
