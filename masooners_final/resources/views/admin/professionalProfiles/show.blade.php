@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.professionalProfile.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.professional-profiles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.professionalProfile.fields.id') }}
                        </th>
                        <td>
                            {{ $professionalProfile->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.professionalProfile.fields.profile_image') }}
                        </th>
                        <td>
                            @if($professionalProfile->profile_image)
                                <a href="{{ $professionalProfile->profile_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $professionalProfile->profile_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.professionalProfile.fields.pro_cover') }}
                        </th>
                        <td>
                            @foreach($professionalProfile->pro_cover as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.professionalProfile.fields.pro_about') }}
                        </th>
                        <td>
                            {!! $professionalProfile->pro_about !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.professionalProfile.fields.user') }}
                        </th>
                        <td>
                            {{ $professionalProfile->user->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.professional-profiles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection