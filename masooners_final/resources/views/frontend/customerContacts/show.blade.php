@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.customerContact.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.customer-contacts.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $customerContact->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.city') }}
                                    </th>
                                    <td>
                                        {{ $customerContact->city }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.country') }}
                                    </th>
                                    <td>
                                        {{ $customerContact->country }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.state') }}
                                    </th>
                                    <td>
                                        {{ $customerContact->state }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.number') }}
                                    </th>
                                    <td>
                                        {{ $customerContact->number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.zip') }}
                                    </th>
                                    <td>
                                        {{ $customerContact->zip }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.address') }}
                                    </th>
                                    <td>
                                        {{ $customerContact->address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.address_2') }}
                                    </th>
                                    <td>
                                        {{ $customerContact->address_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.customerid') }}
                                    </th>
                                    <td>
                                        {{ $customerContact->customerid }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.customer-contacts.index') }}">
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