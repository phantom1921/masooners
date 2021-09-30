@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('professional_profile_create')
                @if (!$professionalProfile)
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.professional-profiles.create') }}">
                            {{ trans('Create') }} {{ trans('cruds.professionalProfile.title_singular') }}
                        </a>
                    </div>
                </div>
                @endif
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.professionalProfile.title_singular') }}
                </div>

                <div class="card-body">

                        @if ($professionalProfile!=false)
                        <form method="POST" action="{{ route("frontend.professional-profiles.update", [$professionalProfile->id]) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="profile_image">{{ trans('cruds.professionalProfile.fields.profile_image') }}</label>
                                <div class="needsclick dropzone" id="profile_image-dropzone">
                                </div>
                                @if($errors->has('profile_image'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('profile_image') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.professionalProfile.fields.profile_image_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="pro_cover">{{ trans('cruds.professionalProfile.fields.pro_cover') }}</label>
                                <div class="needsclick dropzone" id="pro_cover-dropzone">
                                </div>
                                @if($errors->has('pro_cover'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('pro_cover') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.professionalProfile.fields.pro_cover_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="pro_about">{{ trans('cruds.professionalProfile.fields.pro_about') }}</label>
                                <textarea class="form-control ckeditor" name="pro_about" id="pro_about">{!! old('pro_about', $professionalProfile->pro_about) !!}</textarea>
                                @if($errors->has('pro_about'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('pro_about') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.professionalProfile.fields.pro_about_helper') }}</span>
                            </div>
                            <div class="form-group">

            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                @if($errors->has('user'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('user') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.professionalProfile.fields.user_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">
                                    {{ trans('global.save') }}
                                </button>
                            </div>
                        </form>
                        @endif

                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">
                    Professional Details
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
                        <div class="form-group" id="default">
                            <label class="required" for="subcategory_id">Sub Category</label>
                            <select class="form-control select2" name="category_id" id="category_id" required>
                                @foreach($ProSubCategory as $id => $entry)
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
                        <div id="sub"></div>
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

            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
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
@if ($professionalProfile!=false)

@section('scripts')
<script>
    $('#category_id').on('change', function() {
        let cat_id=this.value;
      let _token   = $('meta[name="csrf-token"]').attr('content');
//   alert( this.value );
  $.ajax({
        url: "/ajax-request",
        type:"POST",
        data:{
            cat_id:cat_id,
            _token:_token
        },
        success:function(response){
            $('#default').empty();
            console.log(response);
            let data=JSON.parse(response);
            let html=`<div class="form-group">
                            <label class="required" for="subcategory">Sub Category</label>
                            <select class="form-control select2" name="subcategory_id" id="subcategory_id" required>
                            `;
          $.each( data, function( key, value ) {
            //   console.log(value['id']);
              html+=` <option value="`+value['id']+`" >`+value['name']+`</option>`;

});
html+=`</select></div>`;
console.log(html);
$("#sub").html(html);

        },
       });
});
</script>
<script>
    Dropzone.options.profileImageDropzone = {
    url: '{{ route('frontend.professional-profiles.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="profile_image"]').remove()
      $('form').append('<input type="hidden" name="profile_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="profile_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($professionalProfile) && $professionalProfile->profile_image)
      var file = {!! json_encode($professionalProfile->profile_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="profile_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    var uploadedProCoverMap = {}
Dropzone.options.proCoverDropzone = {
    url: '{{ route('frontend.professional-profiles.storeMedia') }}',
    maxFilesize: 4, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 4
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="pro_cover[]" value="' + response.name + '">')
      uploadedProCoverMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedProCoverMap[file.name]
      }
      $('form').find('input[name="pro_cover[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($professionalProfile) && $professionalProfile->pro_cover)
          var files =
            {!! json_encode($professionalProfile->pro_cover) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="pro_cover[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
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
                xhr.open('POST', '{{ route('admin.professional-profiles.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $professionalProfile->id ?? 0 }}');
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

@endif
