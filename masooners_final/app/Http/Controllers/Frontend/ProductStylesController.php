<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductStyleRequest;
use App\Http\Requests\StoreProductStyleRequest;
use App\Http\Requests\UpdateProductStyleRequest;
use App\Models\ProductStyle;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductStylesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('product_style_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productStyles = ProductStyle::all();

        return view('frontend.productStyles.index', compact('productStyles'));
    }

    public function create()
    {
        abort_if(Gate::denies('product_style_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.productStyles.create');
    }

    public function store(StoreProductStyleRequest $request)
    {
        $productStyle = ProductStyle::create($request->all());

        return redirect()->route('frontend.product-styles.index');
    }

    public function edit(ProductStyle $productStyle)
    {
        abort_if(Gate::denies('product_style_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.productStyles.edit', compact('productStyle'));
    }

    public function update(UpdateProductStyleRequest $request, ProductStyle $productStyle)
    {
        $productStyle->update($request->all());

        return redirect()->route('frontend.product-styles.index');
    }

    public function show(ProductStyle $productStyle)
    {
        abort_if(Gate::denies('product_style_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.productStyles.show', compact('productStyle'));
    }

    public function destroy(ProductStyle $productStyle)
    {
        abort_if(Gate::denies('product_style_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productStyle->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductStyleRequest $request)
    {
        ProductStyle::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
