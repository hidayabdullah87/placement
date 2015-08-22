@extends('layouts/master')

@section('content')
        <!-- resources/views/auth/login.blade.php -->
<p class="clearfix">&nbsp;</p>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">

        {!! Form::open(['route'=>'auth.register', 'method'=>'post', 'class' => 'form-horizontal']) !!}

        <h2><font color="black">USER</font><font style ="color:#0099CC"> REGISTER</font></h2>
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input class= form-control type="text" name="name" value="{{ old('name') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input class= form-control type="email" name="email" value="{{ old('email') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input class= form-control type="password" name="password">
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-10">
                <input class= form-control type="password" name="password_confirmation">
            </div>
        </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

        {!! Form::close() !!}
    </div>
</div>
</div>
@endsection