@extends('layouts.admin')
@section('content')
@can('customer_contact_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.customer-contacts.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.customerContact.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.customerContact.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CustomerContact">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.customerContact.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerContact.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerContact.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerContact.fields.state') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerContact.fields.number') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerContact.fields.zip') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerContact.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerContact.fields.address_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerContact.fields.customerid') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customerContacts as $key => $customerContact)
                        <tr data-entry-id="{{ $customerContact->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $customerContact->id ?? '' }}
                            </td>
                            <td>
                                {{ $customerContact->city ?? '' }}
                            </td>
                            <td>
                                {{ $customerContact->country ?? '' }}
                            </td>
                            <td>
                                {{ $customerContact->state ?? '' }}
                            </td>
                            <td>
                                {{ $customerContact->number ?? '' }}
                            </td>
                            <td>
                                {{ $customerContact->zip ?? '' }}
                            </td>
                            <td>
                                {{ $customerContact->address ?? '' }}
                            </td>
                            <td>
                                {{ $customerContact->address_2 ?? '' }}
                            </td>
                            <td>
                                {{ $customerContact->customerid ?? '' }}
                            </td>
                            <td>
                                @can('customer_contact_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.customer-contacts.show', $customerContact->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('customer_contact_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.customer-contacts.edit', $customerContact->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('customer_contact_delete')
                                    <form action="{{ route('admin.customer-contacts.destroy', $customerContact->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('customer_contact_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.customer-contacts.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-CustomerContact:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection