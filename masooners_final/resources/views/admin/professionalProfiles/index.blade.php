@extends('layouts.admin')
@section('content')
@can('professional_profile_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.professional-profiles.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.professionalProfile.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.professionalProfile.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ProfessionalProfile">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.professionalProfile.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.professionalProfile.fields.profile_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.professionalProfile.fields.pro_cover') }}
                        </th>
                        <th>
                            {{ trans('cruds.professionalProfile.fields.user') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professionalProfiles as $key => $professionalProfile)
                        <tr data-entry-id="{{ $professionalProfile->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $professionalProfile->id ?? '' }}
                            </td>
                            <td>
                                @if($professionalProfile->profile_image)
                                    <a href="{{ $professionalProfile->profile_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $professionalProfile->profile_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @foreach($professionalProfile->pro_cover as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $professionalProfile->user->name ?? '' }}
                            </td>
                            <td>
                                @can('professional_profile_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.professional-profiles.show', $professionalProfile->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('professional_profile_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.professional-profiles.edit', $professionalProfile->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('professional_profile_delete')
                                    <form action="{{ route('admin.professional-profiles.destroy', $professionalProfile->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('professional_profile_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.professional-profiles.massDestroy') }}",
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
  let table = $('.datatable-ProfessionalProfile:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
