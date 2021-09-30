@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.message.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.messages.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="message">{{ trans('cruds.message.fields.message') }}</label>
                <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" id="message">{{ old('message') }}</textarea>
                @if($errors->has('message'))
                    <div class="invalid-feedback">
                        {{ $errors->first('message') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.message.fields.message_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="userid">{{ trans('cruds.message.fields.userid') }}</label>
                <input class="form-control {{ $errors->has('userid') ? 'is-invalid' : '' }}" type="text" name="userid" id="userid" value="{{ old('userid', '') }}">
                @if($errors->has('userid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('userid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.message.fields.userid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customerid">{{ trans('cruds.message.fields.customerid') }}</label>
                <input class="form-control {{ $errors->has('customerid') ? 'is-invalid' : '' }}" type="text" name="customerid" id="customerid" value="{{ old('customerid', '') }}">
                @if($errors->has('customerid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customerid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.message.fields.customerid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="flow">{{ trans('cruds.message.fields.flow') }}</label>
                <input class="form-control {{ $errors->has('flow') ? 'is-invalid' : '' }}" type="text" name="flow" id="flow" value="{{ old('flow', '') }}">
                @if($errors->has('flow'))
                    <div class="invalid-feedback">
                        {{ $errors->first('flow') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.message.fields.flow_helper') }}</span>
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