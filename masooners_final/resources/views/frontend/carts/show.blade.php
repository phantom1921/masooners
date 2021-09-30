@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.cart.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.carts.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.cart.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $cart->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.cart.fields.product') }}
                                    </th>
                                    <td>
                                        {{ $cart->product }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.cart.fields.quantity') }}
                                    </th>
                                    <td>
                                        {{ $cart->quantity }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.cart.fields.price') }}
                                    </th>
                                    <td>
                                        {{ $cart->price }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.cart.fields.total') }}
                                    </th>
                                    <td>
                                        {{ $cart->total }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.cart.fields.customer') }}
                                    </th>
                                    <td>
                                        {{ $cart->customer }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.carts.index') }}">
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