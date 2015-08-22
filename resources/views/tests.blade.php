{{--@extends('layouts/master')--}}
{{--@section('content')--}}
    {{--{{ Form:: open(array('action' => 'ContactController@getContactUsForm')) }}--}}

    {{--<ul class="errors">--}}
        {{--@foreach($errors->all('<li>:message</li>') as $message)--}}

        {{--@endforeach--}}
    {{--</ul>--}}

    {{--<div class="form-group">--}}
        {{--{{ Form:: textarea ('message', '', array('placeholder' => 'Message', 'class' => 'form-control', 'id' => 'message', 'rows' => '4' )) }}--}}
    {{--</div>--}}



    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}--}}
    {{--{{ Form:: close() }}--}}
{{--</div>--}}
{{--@endsection--}}

@extends('layouts/master')

@section('content')
    <table class="table table-bordered table-striped">
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </table>
@endsection