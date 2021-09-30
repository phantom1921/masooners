@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.professionalDetail.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.professional-details.update", [$professionalDetail->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="business_name">{{ trans('cruds.professionalDetail.fields.business_name') }}</label>
                            <input class="form-control" type="text" name="business_name" id="business_name" value="{{ old('business_name', $professionalDetail->business_name) }}" required>
                            @if($errors->has('business_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('business_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.professionalDetail.fields.business_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="category_id">{{ trans('cruds.professionalDetail.fields.category') }}</label>
                            <select class="form-control select2" name="category_id" id="category_id" required>
                                @foreach($categories as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('category_id') ? old('category_id') : $professionalDetail->category->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('category') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.professionalDetail.fields.category_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="phone">{{ trans('cruds.professionalDetail.fields.phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', $professionalDetail->phone) }}" required>
                            @if($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.professionalDetail.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="country">{{ trans('cruds.professionalDetail.fields.country') }}</label>
                            <input class="form-control" type="text" name="country" id="country" value="{{ old('country', $professionalDetail->country) }}" required>
                            @if($errors->has('country'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('country') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.professionalDetail.fields.country_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="user_id">{{ trans('cruds.professionalDetail.fields.user') }}</label>
                            <select class="form-control select2" name="user_id" id="user_id" required>
                                @foreach($users as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $professionalDetail->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('user'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.professionalDetail.fields.user_helper') }}</span>
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