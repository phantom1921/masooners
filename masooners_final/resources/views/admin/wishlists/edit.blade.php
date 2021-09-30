@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.wishlist.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.wishlists.update", [$wishlist->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="product">{{ trans('cruds.wishlist.fields.product') }}</label>
                <input class="form-control {{ $errors->has('product') ? 'is-invalid' : '' }}" type="text" name="product" id="product" value="{{ old('product', $wishlist->product) }}">
                @if($errors->has('product'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.wishlist.fields.product_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customerid">{{ trans('cruds.wishlist.fields.customerid') }}</label>
                <input class="form-control {{ $errors->has('customerid') ? 'is-invalid' : '' }}" type="text" name="customerid" id="customerid" value="{{ old('customerid', $wishlist->customerid) }}">
                @if($errors->has('customerid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customerid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.wishlist.fields.customerid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_type">{{ trans('cruds.wishlist.fields.customer_type') }}</label>
                <input class="form-control {{ $errors->has('customer_type') ? 'is-invalid' : '' }}" type="text" name="customer_type" id="customer_type" value="{{ old('customer_type', $wishlist->customer_type) }}">
                @if($errors->has('customer_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.wishlist.fields.customer_type_helper') }}</span>
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