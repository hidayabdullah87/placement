@extends('layouts/master')

@section('content')
        <!-- resources/views/auth/login.blade.php -->
<p class="clearfix">&nbsp;</p>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">

        {!! Form::open(['route'=>'auth.register', 'method'=>'post', 'class' => 'form-horizontal']) !!}

        <h2><font color="black">USER</font><font style ="color:#0099CC"> REGISTER</font></h2>
        <div class="form-group @if ($errors->has('name')) has-error @endif">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input class= form-control type="text" name="name" value="{{ old('name') }}">
                @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('email')) has-error @endif">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input class= form-control type="email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('password')) has-error @endif">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input class= form-control type="password" name="password">
                @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('password_confirmation')) has-error @endif">
            <label for="password" class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-10">
                <input class= form-control type="password" name="password_confirmation">
                @if ($errors->has('password_confirmation')) <p class="help-block">{{ $errors->first('password_confirmation') }}</p> @endif
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