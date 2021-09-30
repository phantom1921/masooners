<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPortfolioRequest;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Portfolio;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class PortfolioController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('portfolio_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $portfolios = Portfolio::with(['user', 'media'])->get();

        return view('frontend.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        abort_if(Gate::denies('portfolio_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.portfolios.create', compact('users'));
    }

    public function store(StorePortfolioRequest $request)
    {
        $portfolio = Portfolio::create($request->all());

        foreach ($request->input('project_images', []) as $file) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('project_images');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $portfolio->id]);
        }

        return redirect()->route('frontend.portfolios.index');
    }

    public function edit(Portfolio $portfolio)
    {
        abort_if(Gate::denies('portfolio_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $portfolio->load('user');

        return view('frontend.portfolios.edit', compact('users', 'portfolio'));
    }

    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $portfolio->update($request->all());

        if (count($portfolio->project_images) > 0) {
            foreach ($portfolio->project_images as $media) {
                if (!in_array($media->file_name, $request->input('project_images', []))) {
                    $media->delete();
                }
            }
        }
        $media = $portfolio->project_images->pluck('file_name')->toArray();
        foreach ($request->input('project_images', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('project_images');
            }
        }

        return redirect()->route('frontend.portfolios.index');
    }

    public function show(Portfolio $portfolio)
    {
        abort_if(Gate::denies('portfolio_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $portfolio->load('user');

        return view('frontend.portfolios.show', compact('portfolio'));
    }

    public function destroy(Portfolio $portfolio)
    {
        abort_if(Gate::denies('portfolio_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $portfolio->delete();

        return back();
    }

    public function massDestroy(MassDestroyPortfolioRequest $request)
    {
        Portfolio::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('portfolio_create') && Gate::denies('portfolio_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Portfolio();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
