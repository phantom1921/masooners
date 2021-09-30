@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('pro_sub_category_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.pro-sub-categories.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.proSubCategory.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.proSubCategory.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-ProSubCategory">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.proSubCategory.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.proSubCategory.fields.prof_category') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.proSubCategory.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.proSubCategory.fields.image') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($proSubCategories as $key => $proSubCategory)
                                    <tr data-entry-id="{{ $proSubCategory->id }}">
                                        <td>
                                            {{ $proSubCategory->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $proSubCategory->prof_category->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $proSubCategory->name ?? '' }}
                                        </td>
                                        <td>
                                            @if($proSubCategory->image)
                                                <a href="{{ $proSubCategory->image->getUrl() }}" target="_blank" style="display: inline-block">
                                                    <img src="{{ $proSubCategory->image->getUrl('thumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            @can('pro_sub_category_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.pro-sub-categories.show', $proSubCategory->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('pro_sub_category_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.pro-sub-categories.edit', $proSubCategory->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('pro_sub_category_delete')
                                                <form action="{{ route('frontend.pro-sub-categories.destroy', $proSubCategory->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('pro_sub_category_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.pro-sub-categories.massDestroy') }}",
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
  let table = $('.datatable-ProSubCategory:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection