@extends('layouts/master')
@section('content')

    <div class="col-sm-9 col-sm-offset-3">
        <br>
        <h2><font color="black">Show</font><font style ="color:#0099CC"> News</font></h2>

<form class="form-horizontal">
    <div class="form-group">
        <label for="image" class="col-sm-2 control-label">Image:</label>
        <div class="col-sm-10">
            <img src="{{asset('images/'.$news->image.'.png')}}" height="180" width="180" class="img-rounded">
        </div>
    </div>
    <div class="form-group">
        <label for="id" class="col-sm-2 control-label">ID:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" placeholder="{{$news->id}}" readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="{{$news->name}}" readonly>
        </div>
    </div>

    <div class="form-group">
        <label for="desc" class="col-sm-2 control-label">Description:</label>
        <div class="col-sm-10">
            <textarea rows="4" cols="50" class="form-control" id="desc" placeholder="{{$news->desc}}" readonly></textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="updated_at" class="col-sm-2 control-label">Date:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="updated_at" placeholder={{$news->updated_at}} readonly>
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a href="{{ url('news')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</form>
    </div>
@stop

