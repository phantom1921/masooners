@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.profileComment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.profile-comments.update", [$profileComment->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="user">{{ trans('cruds.profileComment.fields.user') }}</label>
                <input class="form-control {{ $errors->has('user') ? 'is-invalid' : '' }}" type="text" name="user" id="user" value="{{ old('user', $profileComment->user) }}" required>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.profileComment.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="comment">{{ trans('cruds.profileComment.fields.comment') }}</label>
                <textarea class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}" name="comment" id="comment">{{ old('comment', $profileComment->comment) }}</textarea>
                @if($errors->has('comment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('comment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.profileComment.fields.comment_helper') }}</span>
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