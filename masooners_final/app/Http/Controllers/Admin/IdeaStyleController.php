<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyIdeaStyleRequest;
use App\Http\Requests\StoreIdeaStyleRequest;
use App\Http\Requests\UpdateIdeaStyleRequest;
use App\Models\IdeaStyle;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IdeaStyleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('idea_style_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ideaStyles = IdeaStyle::all();

        return view('admin.ideaStyles.index', compact('ideaStyles'));
    }

    public function create()
    {
        abort_if(Gate::denies('idea_style_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ideaStyles.create');
    }

    public function store(StoreIdeaStyleRequest $request)
    {
        $ideaStyle = IdeaStyle::create($request->all());

        return redirect()->route('admin.idea-styles.index');
    }

    public function edit(IdeaStyle $ideaStyle)
    {
        abort_if(Gate::denies('idea_style_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ideaStyles.edit', compact('ideaStyle'));
    }

    public function update(UpdateIdeaStyleRequest $request, IdeaStyle $ideaStyle)
    {
        $ideaStyle->update($request->all());

        return redirect()->route('admin.idea-styles.index');
    }

    public function show(IdeaStyle $ideaStyle)
    {
        abort_if(Gate::denies('idea_style_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ideaStyles.show', compact('ideaStyle'));
    }

    public function destroy(IdeaStyle $ideaStyle)
    {
        abort_if(Gate::denies('idea_style_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ideaStyle->delete();

        return back();
    }

    public function massDestroy(MassDestroyIdeaStyleRequest $request)
    {
        IdeaStyle::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
