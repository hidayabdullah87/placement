@extends('layouts.master')

@section('content')

    <br><h2><font color="black">USERS</font><font style ="color:#0099CC"> INFORMATION</font></h2>

	<table class="table table-bordered table-striped">
        <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>LECTURER EMAIL</th>

            <th colspan="3">Actions</th>
        </tr>
        </thead>

        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td><a href="{{ route('student/profile') }}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td align="center">{{ $user->lecturer()->email or '' }}</td>
                <td>
                    @if($user->id != Request::user()->id)
                        @if(!$user->isAdministrator())
                            <a class="btn btn-xs btn-primary" href="{{ route('user.make_admin', $user->id) }}">Make admin</a>
                        @else
                            <a class="btn btn-xs btn-primary" href="{{ route('user.revoke_admin', $user->id) }}">Revoke admin</a>
                        @endif
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection