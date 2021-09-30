@extends('layouts.frontend')
@section('content')
<style>
    .navbar{
        display: none;
    }
</style>
<div class="container" style="width:60%;">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.professionalDetail.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.professional-details.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="business_name">{{ trans('cruds.professionalDetail.fields.business_name') }}</label>
                            <input class="form-control" type="text" name="business_name" id="business_name" value="{{ old('business_name', '') }}" required>
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
                                    <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                            @if($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.professionalDetail.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="country">{{ trans('cruds.professionalDetail.fields.country') }}</label>
                            <input class="form-control" type="text" name="country" id="country" value="{{ old('country', '') }}" required>
                            @if($errors->has('country'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('country') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.professionalDetail.fields.country_helper') }}</span>
                        </div>
                        <div class="form-group">

            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
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
@endsection
