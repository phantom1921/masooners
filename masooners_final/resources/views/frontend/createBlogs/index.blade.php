@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('create_blog_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.create-blogs.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.createBlog.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.createBlog.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-CreateBlog">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.createBlog.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.createBlog.fields.category') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.createBlog.fields.title') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.createBlog.fields.image') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($createBlogs as $key => $createBlog)
                                    <tr data-entry-id="{{ $createBlog->id }}">
                                        <td>
                                            {{ $createBlog->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $createBlog->category->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $createBlog->title ?? '' }}
                                        </td>
                                        <td>
                                            @if($createBlog->image)
                                                <a href="{{ $createBlog->image->getUrl() }}" target="_blank" style="display: inline-block">
                                                    <img src="{{ $createBlog->image->getUrl('thumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            @can('create_blog_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.create-blogs.show', $createBlog->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('create_blog_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.create-blogs.edit', $createBlog->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('create_blog_delete')
                                                <form action="{{ route('frontend.create-blogs.destroy', $createBlog->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('create_blog_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.create-blogs.massDestroy') }}",
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
  let table = $('.datatable-CreateBlog:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection