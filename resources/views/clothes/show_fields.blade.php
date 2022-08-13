<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $clothes->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $clothes->name !!}</p>
</div>

<div class="form-group">
    {!! Form::label('size', 'Size:') !!}
    <p>{!! $clothes->size !!}</p>
</div>

<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $clothes->price !!}</p>
</div>
<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'A photo:') !!}
    <p>{!! $clothes->image !!}</p>
    <img class="cloth" src="{{asset('img/')}}/t-shirts/{!! $clothes->image !!}_front.png">
    <img class="cloth" src="{{asset('img/')}}/t-shirts/{!! $clothes->image !!}_back.png">
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created:') !!}
    <p>{!! $clothes->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated:') !!}
    <p>{!! $clothes->updated_at !!}</p>
</div>

