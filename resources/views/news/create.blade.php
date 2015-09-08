
@extends('layouts/master')
@section('content')

    <div class="col-sm-6 col-sm-offset-3">
    <br>
    <h2><font color="black">Create</font><font style ="color:#0099CC"> News</font></h2>
    {!! Form::open(['route' => 'news.store']) !!}
    {{--<div class="form-group">--}}
        {{--{!! Form::label('ID', 'ID:') !!}--}}
        {{--{!! Form::text('id',null,['class'=>'form-control']) !!}--}}
    {{--</div>--}}
    <div class="form-group">
        {!! Form::label('Name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Description', 'Description:') !!}
        {!! Form::textarea('desc',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    </div>
@endsection
@stop