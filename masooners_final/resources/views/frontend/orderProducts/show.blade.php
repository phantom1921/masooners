@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.orderProduct.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.order-products.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.orderProduct.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $orderProduct->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.orderProduct.fields.order_no') }}
                                    </th>
                                    <td>
                                        {{ $orderProduct->order_no }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.orderProduct.fields.product') }}
                                    </th>
                                    <td>
                                        {{ $orderProduct->product }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.orderProduct.fields.quantity') }}
                                    </th>
                                    <td>
                                        {{ $orderProduct->quantity }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.order-products.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection