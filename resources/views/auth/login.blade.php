@extends('layouts/master')

@section('content')
<!-- resources/views/auth/login.blade.php -->

<p class="clearfix">&nbsp;</p>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">

        {!! Form::open(['route'=>'auth.login', 'method'=>'post', 'class' => 'form-horizontal']) !!}

            <h2>User Login</h2>
            <div class="form-group @if ($errors->has('email')) has-error @endif">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'autofocus'=>true]) !!}
                    @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                </div>
            </div>

            <div class="form-group @if ($errors->has('password')) has-error @endif">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('remember', 1, false) !!} Remember me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection