<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductSubCategoryRequest;
use App\Http\Requests\StoreProductSubCategoryRequest;
use App\Http\Requests\UpdateProductSubCategoryRequest;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductSubCategoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('product_sub_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productSubCategories = ProductSubCategory::with(['category'])->get();

        return view('frontend.productSubCategories.index', compact('productSubCategories'));
    }

    public function create()
    {
        abort_if(Gate::denies('product_sub_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = ProductCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.productSubCategories.create', compact('categories'));
    }

    public function store(StoreProductSubCategoryRequest $request)
    {
        $productSubCategory = ProductSubCategory::create($request->all());

        return redirect()->route('frontend.product-sub-categories.index');
    }

    public function edit(ProductSubCategory $productSubCategory)
    {
        abort_if(Gate::denies('product_sub_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = ProductCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $productSubCategory->load('category');

        return view('frontend.productSubCategories.edit', compact('categories', 'productSubCategory'));
    }

    public function update(UpdateProductSubCategoryRequest $request, ProductSubCategory $productSubCategory)
    {
        $productSubCategory->update($request->all());

        return redirect()->route('frontend.product-sub-categories.index');
    }

    public function show(ProductSubCategory $productSubCategory)
    {
        abort_if(Gate::denies('product_sub_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productSubCategory->load('category');

        return view('frontend.productSubCategories.show', compact('productSubCategory'));
    }

    public function destroy(ProductSubCategory $productSubCategory)
    {
        abort_if(Gate::denies('product_sub_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productSubCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductSubCategoryRequest $request)
    {
        ProductSubCategory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
