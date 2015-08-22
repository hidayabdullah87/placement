@extends('layouts.master')

@section('content')

    <br><h2><font color="black">STUDENT'S</font><font style ="color:#0099CC"> INFORMATION</font></h2>

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