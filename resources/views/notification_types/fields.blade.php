@if($customFields)
<h5 class="col-12 pb-4">{!! trans('lang.main_fields') !!}</h5>
@endif
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
<!-- Type Field -->
<div class="form-group row ">
  {!! Form::label('type', trans("lang.notification_type_type"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    {!! Form::text('type', null,  ['class' => 'form-control','placeholder'=>  trans("lang.notification_type_type_placeholder")]) !!}
    <div class="form-text text-muted">
      {{ trans("lang.notification_type_type_help") }}
    </div>
  </div>
</div>
</div>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

<!-- Image Field -->
<div class="form-group row">
  {!! Form::label('image', trans("lang.notification_type_image"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <div style="width: 100%" class="dropzone image" id="image" data-field="image">
      <input type="hidden" name="image">
    </div>
    <a href="#loadMediaModal" data-dropzone="image" data-toggle="modal" data-target="#mediaModal" class="btn btn-outline-{{setting('theme_color','primary')}} btn-sm float-right mt-1">{{ trans('lang.media_select')}}</a>
    <div class="form-text text-muted w-50">
      {{ trans("lang.notification_type_image_help") }}
    </div>
  </div>
</div>
@prepend('scripts')
<script type="text/javascript">
    var var1567592841486841704ble = '';
    @if(isset($notification_type) && $notification_type->hasMedia('image'))
    var1567592841486841704ble = {
        name: "{!! $notification_type->getFirstMedia('image')->name !!}",
        size: "{!! $notification_type->getFirstMedia('image')->size !!}",
        type: "{!! $notification_type->getFirstMedia('image')->mime_type !!}",
        collection_name: "{!! $notification_type->getFirstMedia('image')->collection_name !!}"};
    @endif
    var dz_var1567592841486841704ble = $(".dropzone.image").dropzone({
        url: "{!!url('uploads/store')!!}",
        addRemoveLinks: true,
        maxFiles: 1,
        init: function () {
        @if(isset($notification_type) && $notification_type->hasMedia('image'))
            dzInit(this,var1567592841486841704ble,'{!! url($notification_type->getFirstMediaUrl('image','thumb')) !!}')
        @endif
        },
        accept: function(file, done) {
            dzAccept(file,done,this.element,"{!!config('medialibrary.icons_folder')!!}");
        },
        sending: function (file, xhr, formData) {
            dzSending(this,file,formData,'{!! csrf_token() !!}');
        },
        maxfilesexceeded: function (file) {
            dz_var1567592841486841704ble[0].mockFile = '';
            dzMaxfile(this,file);
        },
        complete: function (file) {
            dzComplete(this, file, var1567592841486841704ble, dz_var1567592841486841704ble[0].mockFile);
            dz_var1567592841486841704ble[0].mockFile = file;
        },
        removedfile: function (file) {
            dzRemoveFile(
                file, var1567592841486841704ble, '{!! url("notification_types/remove-media") !!}',
                'image', '{!! isset($notification_type) ? $notification_type->id : 0 !!}', '{!! url("uplaods/clear") !!}', '{!! csrf_token() !!}'
            );
        }
    });
    dz_var1567592841486841704ble[0].mockFile = var1567592841486841704ble;
    dropzoneFields['image'] = dz_var1567592841486841704ble;
</script>
@endprepend
</div>
@if($customFields)
<div class="clearfix"></div>
<div class="col-12 custom-field-container">
  <h5 class="col-12 pb-4">{!! trans('lang.custom_field_plural') !!}</h5>
  {!! $customFields !!}
</div>
@endif
<!-- Submit Field -->
<div class="form-group col-12 text-right">
  <button type="submit" class="btn btn-{{setting('theme_color')}}" ><i class="fa fa-save"></i> {{trans('lang.save')}} {{trans('lang.notification_type')}}</button>
  <a href="{!! route('notificationTypes.index') !!}" class="btn btn-default"><i class="fa fa-undo"></i> {{trans('lang.cancel')}}</a>
</div>
