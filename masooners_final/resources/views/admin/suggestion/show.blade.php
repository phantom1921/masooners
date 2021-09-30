@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.order.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.suggesttion.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Name
                        </th>
                        <td class="text-capitalize">
                            {{ $suggesttion->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $suggesttion->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Purpose
                        </th>
                        <td>
                            {{ $suggesttion->purpose }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Services Required
                        </th>
                        <td>
                            @foreach (json_decode($suggesttion->service) as $service )
                            {{$service}} {{ $loop->last ? '' : ',' }}
                            @endforeach
                            {{-- {{ $suggesttion->service }} --}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Appartment List
                        </th>
                        <td>
                            @foreach (json_decode($suggesttion->appartment) as $service )
                            {{$service}}{{ $loop->last ? '' : ',' }}
                            @endforeach
                            {{-- {{ $suggesttion->service }} --}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Request Recieved
                        </th>
                        <td>
                            {{ $suggesttion->created_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.suggesttion.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
