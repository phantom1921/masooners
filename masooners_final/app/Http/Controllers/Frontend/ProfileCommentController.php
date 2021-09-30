<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProfileCommentRequest;
use App\Http\Requests\StoreProfileCommentRequest;
use App\Http\Requests\UpdateProfileCommentRequest;
use App\Models\ProfileComment;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfileCommentController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('profile_comment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $profileComments = ProfileComment::all();

        return view('frontend.profileComments.index', compact('profileComments'));
    }

    public function create()
    {
        abort_if(Gate::denies('profile_comment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.profileComments.create');
    }

    public function store(StoreProfileCommentRequest $request)
    {
        $profileComment = ProfileComment::create($request->all());

        return redirect()->route('frontend.profile-comments.index');
    }

    public function edit(ProfileComment $profileComment)
    {
        abort_if(Gate::denies('profile_comment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.profileComments.edit', compact('profileComment'));
    }

    public function update(UpdateProfileCommentRequest $request, ProfileComment $profileComment)
    {
        $profileComment->update($request->all());

        return redirect()->route('frontend.profile-comments.index');
    }

    public function show(ProfileComment $profileComment)
    {
        abort_if(Gate::denies('profile_comment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.profileComments.show', compact('profileComment'));
    }

    public function destroy(ProfileComment $profileComment)
    {
        abort_if(Gate::denies('profile_comment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $profileComment->delete();

        return back();
    }

    public function massDestroy(MassDestroyProfileCommentRequest $request)
    {
        ProfileComment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
