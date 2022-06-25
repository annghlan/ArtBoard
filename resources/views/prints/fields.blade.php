<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6 image">
    {!! Form::label('image', 'A photo:') !!}
    {!! Form::text('image', null, ['class' => 'form-control image']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Collect', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('prints.index') !!}" class="btn btn-default">Cancel</a>
</div>
