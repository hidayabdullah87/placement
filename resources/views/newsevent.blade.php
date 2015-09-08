@extends('layouts.master')
@section('content')

    <br><h2><font color="black">NEWS & EVENTS </font><font style ="color:#0099CC"> University of Sheffield</font></h2><br>
    @foreach ($news as $new)
    <div class="grid_6 emp_box"><br>
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b><a href="{{url('news',$new->id)}}">{{ $new->name }}</a></b></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{asset('images/'.$new->image.'.png')}}" height="70" width="70">
                        </div>
                        <div class="col-sm-8">
                        {{ $new->desc }}
                        </div>
                        <div class="col-sm-4">
                            <p></p>
                        </div>
                        <div class="col-sm-8">
                            <b>{{ $new->updated_at }}</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection

