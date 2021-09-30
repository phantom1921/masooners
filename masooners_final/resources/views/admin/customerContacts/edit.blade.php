@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.customerContact.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.customer-contacts.update", [$customerContact->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="city">{{ trans('cruds.customerContact.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', $customerContact->city) }}" required>
                @if($errors->has('city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerContact.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="country">{{ trans('cruds.customerContact.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $customerContact->country) }}" required>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerContact.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="state">{{ trans('cruds.customerContact.fields.state') }}</label>
                <input class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" type="text" name="state" id="state" value="{{ old('state', $customerContact->state) }}" required>
                @if($errors->has('state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerContact.fields.state_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="number">{{ trans('cruds.customerContact.fields.number') }}</label>
                <input class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" type="text" name="number" id="number" value="{{ old('number', $customerContact->number) }}" required>
                @if($errors->has('number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerContact.fields.number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="zip">{{ trans('cruds.customerContact.fields.zip') }}</label>
                <input class="form-control {{ $errors->has('zip') ? 'is-invalid' : '' }}" type="text" name="zip" id="zip" value="{{ old('zip', $customerContact->zip) }}" required>
                @if($errors->has('zip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('zip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerContact.fields.zip_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address">{{ trans('cruds.customerContact.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address" required>{{ old('address', $customerContact->address) }}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerContact.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address_2">{{ trans('cruds.customerContact.fields.address_2') }}</label>
                <textarea class="form-control {{ $errors->has('address_2') ? 'is-invalid' : '' }}" name="address_2" id="address_2">{{ old('address_2', $customerContact->address_2) }}</textarea>
                @if($errors->has('address_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerContact.fields.address_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customerid">{{ trans('cruds.customerContact.fields.customerid') }}</label>
                <input class="form-control {{ $errors->has('customerid') ? 'is-invalid' : '' }}" type="text" name="customerid" id="customerid" value="{{ old('customerid', $customerContact->customerid) }}">
                @if($errors->has('customerid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customerid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerContact.fields.customerid_helper') }}</span>
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