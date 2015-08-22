
/**
 * Created by PhpStorm.
 * User: norhidayahabdullah
 * Date: 8/22/15
 * Time: 5:29 PM
 */

@extends('layouts.master')

@section('content')
    <table class="table table-bordered table-striped">
    <br><h2><font color="black">STUDENT'S</font><font style ="color:#0099CC"> PROFILE</font></h2>
    <tr><td>{{ Auth::user()->id }}</td></tr>
    <tr><td>{{ Auth::user()->name }}</td></tr>
    <tr><td>{{ Auth::user()->email }}</td></tr>

    </table>

@endsection