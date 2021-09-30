@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.wishlist.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.wishlists.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="product">{{ trans('cruds.wishlist.fields.product') }}</label>
                            <input class="form-control" type="text" name="product" id="product" value="{{ old('product', '') }}">
                            @if($errors->has('product'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('product') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.wishlist.fields.product_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="customerid">{{ trans('cruds.wishlist.fields.customerid') }}</label>
                            <input class="form-control" type="text" name="customerid" id="customerid" value="{{ old('customerid', '') }}">
                            @if($errors->has('customerid'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('customerid') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.wishlist.fields.customerid_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="customer_type">{{ trans('cruds.wishlist.fields.customer_type') }}</label>
                            <input class="form-control" type="text" name="customer_type" id="customer_type" value="{{ old('customer_type', '') }}">
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

        </div>
    </div>
</div>
@endsection