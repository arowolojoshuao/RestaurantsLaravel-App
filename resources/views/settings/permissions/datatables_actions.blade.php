{!! Form::open(['route' => ['permissions.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group btn-group-sm'>
    <a href="{{ route('permissions.edit', $id) }}" class='btn btn-link'>
        <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-link text-danger',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
