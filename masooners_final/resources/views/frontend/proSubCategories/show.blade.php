@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.proSubCategory.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.pro-sub-categories.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.proSubCategory.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $proSubCategory->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.proSubCategory.fields.prof_category') }}
                                    </th>
                                    <td>
                                        {{ $proSubCategory->prof_category->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.proSubCategory.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $proSubCategory->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.proSubCategory.fields.image') }}
                                    </th>
                                    <td>
                                        @if($proSubCategory->image)
                                            <a href="{{ $proSubCategory->image->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $proSubCategory->image->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.pro-sub-categories.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection