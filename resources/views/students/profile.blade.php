@extends('layouts.master')
@section('content')

    <div class="col-sm-9 col-sm-offset-3">
        <br>
        <h2><font color="black">Student</font><font style ="color:#0099CC"> Profile</font></h2>

        <form class="form-horizontal">

            {{--<div class="form-group">--}}
                {{--<label for="id" class="col-sm-2 control-label">ID:</label>--}}
                {{--<div class="col-sm-10">--}}
                    {{--<input type="text" class="form-control" id="id" placeholder="{{ Auth::user()->id }}" readonly>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="{{ Auth::user()->name }}" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="{{ Auth::user()->email }}" readonly></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="lecturer_id" class="col-sm-2 control-label">Lecturer ID:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="{{ Auth::user()->lecturer_id }}" readonly></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="created_at" class="col-sm-2 control-label">Date Registered:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="updated_at" placeholder={{ Auth::user()->created_at}} readonly>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="{{ url('student')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </form>
    </div>

@endsection