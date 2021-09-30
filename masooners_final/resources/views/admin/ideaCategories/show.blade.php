@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.ideaCategory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.idea-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.ideaCategory.fields.id') }}
                        </th>
                        <td>
                            {{ $ideaCategory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ideaCategory.fields.title') }}
                        </th>
                        <td>
                            {{ $ideaCategory->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ideaCategory.fields.image') }}
                        </th>
                        <td>
                            @if($ideaCategory->image)
                                <a href="{{ $ideaCategory->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $ideaCategory->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.idea-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection