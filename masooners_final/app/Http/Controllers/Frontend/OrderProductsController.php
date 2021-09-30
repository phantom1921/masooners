<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOrderProductRequest;
use App\Http\Requests\StoreOrderProductRequest;
use App\Http\Requests\UpdateOrderProductRequest;
use App\Models\OrderProduct;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderProductsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('order_product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderProducts = OrderProduct::all();

        return view('frontend.orderProducts.index', compact('orderProducts'));
    }

    public function create()
    {
        abort_if(Gate::denies('order_product_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.orderProducts.create');
    }

    public function store(StoreOrderProductRequest $request)
    {
        $orderProduct = OrderProduct::create($request->all());

        return redirect()->route('frontend.order-products.index');
    }

    public function edit(OrderProduct $orderProduct)
    {
        abort_if(Gate::denies('order_product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.orderProducts.edit', compact('orderProduct'));
    }

    public function update(UpdateOrderProductRequest $request, OrderProduct $orderProduct)
    {
        $orderProduct->update($request->all());

        return redirect()->route('frontend.order-products.index');
    }

    public function show(OrderProduct $orderProduct)
    {
        abort_if(Gate::denies('order_product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.orderProducts.show', compact('orderProduct'));
    }

    public function destroy(OrderProduct $orderProduct)
    {
        abort_if(Gate::denies('order_product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderProduct->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrderProductRequest $request)
    {
        OrderProduct::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
