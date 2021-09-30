<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductCommentRequest;
use App\Http\Requests\StoreProductCommentRequest;
use App\Http\Requests\UpdateProductCommentRequest;
use App\Models\ProductComment;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductCommentsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('product_comment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productComments = ProductComment::all();

        return view('frontend.productComments.index', compact('productComments'));
    }

    public function create()
    {
        abort_if(Gate::denies('product_comment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.productComments.create');
    }

    public function store(StoreProductCommentRequest $request)
    {
        $productComment = ProductComment::create($request->all());

        return redirect()->route('frontend.product-comments.index');
    }

    public function edit(ProductComment $productComment)
    {
        abort_if(Gate::denies('product_comment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.productComments.edit', compact('productComment'));
    }

    public function update(UpdateProductCommentRequest $request, ProductComment $productComment)
    {
        $productComment->update($request->all());

        return redirect()->route('frontend.product-comments.index');
    }

    public function show(ProductComment $productComment)
    {
        abort_if(Gate::denies('product_comment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.productComments.show', compact('productComment'));
    }

    public function destroy(ProductComment $productComment)
    {
        abort_if(Gate::denies('product_comment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productComment->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductCommentRequest $request)
    {
        ProductComment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
