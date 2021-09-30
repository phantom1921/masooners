@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.productComment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.product-comments.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="user_type">{{ trans('cruds.productComment.fields.user_type') }}</label>
                <input class="form-control {{ $errors->has('user_type') ? 'is-invalid' : '' }}" type="text" name="user_type" id="user_type" value="{{ old('user_type', '') }}" required>
                @if($errors->has('user_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productComment.fields.user_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="user">{{ trans('cruds.productComment.fields.user') }}</label>
                <input class="form-control {{ $errors->has('user') ? 'is-invalid' : '' }}" type="text" name="user" id="user" value="{{ old('user', '') }}" required>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productComment.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="comment">{{ trans('cruds.productComment.fields.comment') }}</label>
                <input class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}" type="text" name="comment" id="comment" value="{{ old('comment', '') }}" required>
                @if($errors->has('comment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('comment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productComment.fields.comment_helper') }}</span>
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