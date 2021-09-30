@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.createBlog.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.create-blogs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.createBlog.fields.id') }}
                        </th>
                        <td>
                            {{ $createBlog->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.createBlog.fields.category') }}
                        </th>
                        <td>
                            {{ $createBlog->category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.createBlog.fields.title') }}
                        </th>
                        <td>
                            {{ $createBlog->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.createBlog.fields.image') }}
                        </th>
                        <td>
                            @if($createBlog->image)
                                <a href="{{ $createBlog->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $createBlog->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.createBlog.fields.description') }}
                        </th>
                        <td>
                            {!! $createBlog->description !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.create-blogs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection