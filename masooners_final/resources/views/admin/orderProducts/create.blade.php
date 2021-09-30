@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.orderProduct.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.order-products.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="order_no">{{ trans('cruds.orderProduct.fields.order_no') }}</label>
                <input class="form-control {{ $errors->has('order_no') ? 'is-invalid' : '' }}" type="text" name="order_no" id="order_no" value="{{ old('order_no', '') }}">
                @if($errors->has('order_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderProduct.fields.order_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product">{{ trans('cruds.orderProduct.fields.product') }}</label>
                <input class="form-control {{ $errors->has('product') ? 'is-invalid' : '' }}" type="text" name="product" id="product" value="{{ old('product', '') }}">
                @if($errors->has('product'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderProduct.fields.product_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity">{{ trans('cruds.orderProduct.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="text" name="quantity" id="quantity" value="{{ old('quantity', '') }}">
                @if($errors->has('quantity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderProduct.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection