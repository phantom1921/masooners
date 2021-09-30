@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.profile.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.profiles.update", [$profile->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="first_name">{{ trans('cruds.profile.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', $profile->first_name) }}" required>
                @if($errors->has('first_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('first_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.profile.fields.first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="last_name">{{ trans('cruds.profile.fields.last_name') }}</label>
                <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', $profile->last_name) }}" required>
                @if($errors->has('last_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('last_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.profile.fields.last_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="about">{{ trans('cruds.profile.fields.about') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('about') ? 'is-invalid' : '' }}" name="about" id="about">{!! old('about', $profile->about) !!}</textarea>
                @if($errors->has('about'))
                    <div class="invalid-feedback">
                        {{ $errors->first('about') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.profile.fields.about_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customerid">{{ trans('cruds.profile.fields.customerid') }}</label>
                <input class="form-control {{ $errors->has('customerid') ? 'is-invalid' : '' }}" type="text" name="customerid" id="customerid" value="{{ old('customerid', $profile->customerid) }}">
                @if($errors->has('customerid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customerid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.profile.fields.customerid_helper') }}</span>
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

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.profiles.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $profile->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection