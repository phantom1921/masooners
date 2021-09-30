<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyIdeaRequest;
use App\Http\Requests\StoreIdeaRequest;
use App\Http\Requests\UpdateIdeaRequest;
use App\Models\Idea;
use App\Models\User;
use App\Models\IdeaCategory;
use Gate;
use App\Models\IdeaStyle;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class IdeasController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('idea_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ideas = Idea::with(['user', 'media'])->get();

        return view('frontend.ideas.index', compact('ideas'));
    }

    public function create()
    {
        abort_if(Gate::denies('idea_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ideaCategories = IdeaCategory::with(['media'])->get();

        $ideaStyles = IdeaStyle::all();

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.ideas.create', compact('users','ideaCategories','ideaStyles'));
    }

    public function store(StoreIdeaRequest $request)
    {
        $idea = Idea::create($request->all());

        if ($request->input('image', false)) {
            $idea->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $idea->id]);
        }

        return redirect()->route('frontend.ideas.index');
    }

    public function edit(Idea $idea)
    {
        abort_if(Gate::denies('idea_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $idea->load('user');

        return view('frontend.ideas.edit', compact('users', 'idea'));
    }

    public function update(UpdateIdeaRequest $request, Idea $idea)
    {
        $idea->update($request->all());

        if ($request->input('image', false)) {
            if (!$idea->image || $request->input('image') !== $idea->image->file_name) {
                if ($idea->image) {
                    $idea->image->delete();
                }
                $idea->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($idea->image) {
            $idea->image->delete();
        }

        return redirect()->route('frontend.ideas.index');
    }

    public function show(Idea $idea)
    {
        abort_if(Gate::denies('idea_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $idea->load('user');

        return view('frontend.ideas.show', compact('idea'));
    }

    public function destroy(Idea $idea)
    {
        abort_if(Gate::denies('idea_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $idea->delete();

        return back();
    }

    public function massDestroy(MassDestroyIdeaRequest $request)
    {
        Idea::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('idea_create') && Gate::denies('idea_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Idea();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
