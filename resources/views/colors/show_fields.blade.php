<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $color->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $color->name !!}</p>
</div>

<!-- Color Field -->
<div class="form-group">
    {!! Form::label('color', 'Color:') !!}
    <p>{!! $color->color !!}</p>
    <span style="background-color:{!! $color->color !!}; padding: 5px 12px 5px 12px; "></span>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created at:') !!}
    <p>{!! $color->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated at:') !!}
    <p>{!! $color->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Delete at:') !!}
    <p>{!! $color->deleted_at !!}</p>
</div>

