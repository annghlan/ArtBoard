@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <h1>
            Prints
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('prints.show_fields')
                    <a href="{!! route('prints.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
