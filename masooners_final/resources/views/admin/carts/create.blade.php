@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.cart.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.carts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="product">{{ trans('cruds.cart.fields.product') }}</label>
                <input class="form-control {{ $errors->has('product') ? 'is-invalid' : '' }}" type="text" name="product" id="product" value="{{ old('product', '') }}">
                @if($errors->has('product'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cart.fields.product_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity">{{ trans('cruds.cart.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="text" name="quantity" id="quantity" value="{{ old('quantity', '') }}">
                @if($errors->has('quantity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cart.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.cart.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" id="price" value="{{ old('price', '') }}">
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cart.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total">{{ trans('cruds.cart.fields.total') }}</label>
                <input class="form-control {{ $errors->has('total') ? 'is-invalid' : '' }}" type="text" name="total" id="total" value="{{ old('total', '') }}">
                @if($errors->has('total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cart.fields.total_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer">{{ trans('cruds.cart.fields.customer') }}</label>
                <input class="form-control {{ $errors->has('customer') ? 'is-invalid' : '' }}" type="text" name="customer" id="customer" value="{{ old('customer', '') }}">
                @if($errors->has('customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cart.fields.customer_helper') }}</span>
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