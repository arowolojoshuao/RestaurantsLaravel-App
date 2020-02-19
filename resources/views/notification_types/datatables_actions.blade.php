<div class='btn-group btn-group-sm'>
  @can('notificationTypes.show')
  <a data-toggle="tooltip" data-placement="bottom" title="{{trans('lang.view_details')}}" href="{{ route('notificationTypes.show', $id) }}" class='btn btn-link'>
    <i class="fa fa-eye"></i>
  </a>
  @endcan

  @can('notificationTypes.edit')
  <a data-toggle="tooltip" data-placement="bottom" title="{{trans('lang.notification_type_edit')}}" href="{{ route('notificationTypes.edit', $id) }}" class='btn btn-link'>
    <i class="fa fa-edit"></i>
  </a>
  @endcan

  @can('notificationTypes.destroy')
{!! Form::open(['route' => ['notificationTypes.destroy', $id], 'method' => 'delete']) !!}
  {!! Form::button('<i class="fa fa-trash"></i>', [
  'type' => 'submit',
  'class' => 'btn btn-link text-danger',
  'onclick' => "return confirm('Are you sure?')"
  ]) !!}
{!! Form::close() !!}
  @endcan
</div>
