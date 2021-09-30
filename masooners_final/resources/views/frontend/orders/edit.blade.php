@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.order.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.orders.update", [$order->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="order_no">{{ trans('cruds.order.fields.order_no') }}</label>
                            <input class="form-control" type="text" name="order_no" id="order_no" value="{{ old('order_no', $order->order_no) }}">
                            @if($errors->has('order_no'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('order_no') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.order.fields.order_no_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="status">{{ trans('cruds.order.fields.status') }}</label>
                            <input class="form-control" type="text" name="status" id="status" value="{{ old('status', $order->status) }}">
                            @if($errors->has('status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.order.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="total_bill">{{ trans('cruds.order.fields.total_bill') }}</label>
                            <input class="form-control" type="text" name="total_bill" id="total_bill" value="{{ old('total_bill', $order->total_bill) }}">
                            @if($errors->has('total_bill'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('total_bill') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.order.fields.total_bill_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="customer">{{ trans('cruds.order.fields.customer') }}</label>
                            <input class="form-control" type="text" name="customer" id="customer" value="{{ old('customer', $order->customer) }}">
                            @if($errors->has('customer'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('customer') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.order.fields.customer_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="address">{{ trans('cruds.order.fields.address') }}</label>
                            <input class="form-control" type="text" name="address" id="address" value="{{ old('address', $order->address) }}">
                            @if($errors->has('address'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('address') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.order.fields.address_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection