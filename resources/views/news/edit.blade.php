@extends('layouts/master')
@section('content')

    <div class="col-sm-6 col-sm-offset-3">
    <br>
    <h2><font color="black">Update</font><font style ="color:#0099CC"> News</font></h2>

    {!! Form::model($news,['method' => 'PATCH','route'=>['news.update',$news->id]]) !!}
    <div class="form-group">
        {!! Form::label('Name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Description', 'Description:') !!}
        {!! Form::text('desc',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    </div>
@endsection
@stop