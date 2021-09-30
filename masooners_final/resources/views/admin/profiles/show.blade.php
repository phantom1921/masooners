@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.profile.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.profiles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.profile.fields.id') }}
                        </th>
                        <td>
                            {{ $profile->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.profile.fields.first_name') }}
                        </th>
                        <td>
                            {{ $profile->first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.profile.fields.last_name') }}
                        </th>
                        <td>
                            {{ $profile->last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.profile.fields.about') }}
                        </th>
                        <td>
                            {!! $profile->about !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.profile.fields.customerid') }}
                        </th>
                        <td>
                            {{ $profile->customerid }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.profiles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection