<!-- Id Field -->
<div class="form-group row col-6">
  {!! Form::label('id', 'Id:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $order->id !!}</p>
  </div>
</div>

<!-- User Id Field -->
<div class="form-group row col-6">
  {!! Form::label('user_id', 'User Id:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $order->user_id !!}</p>
  </div>
</div>

<!-- Order Status Id Field -->
<div class="form-group row col-6">
  {!! Form::label('order_status_id', 'Order Status Id:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $order->order_status_id !!}</p>
  </div>
</div>

<!-- Tax Field -->
<div class="form-group row col-6">
  {!! Form::label('tax', 'Tax:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $order->tax !!}</p>
  </div>
</div>

<!-- Hint Field -->
<div class="form-group row col-6">
  {!! Form::label('hint', 'Hint:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $order->hint !!}</p>
  </div>
</div>

<!-- Created At Field -->
<div class="form-group row col-6">
  {!! Form::label('created_at', 'Created At:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $order->created_at !!}</p>
  </div>
</div>

<!-- Updated At Field -->
<div class="form-group row col-6">
  {!! Form::label('updated_at', 'Updated At:', ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <p>{!! $order->updated_at !!}</p>
  </div>
</div>

