@extends('layouts/master')

@section('content')
    <h2>{{ $job->jobtitle }}</h2>
    <p>{{ $job->snippet }}</p>
    <a class="btn btn-lg btn-primary" href="{{ route('job.indeed', $job->jobkey) }}">Apply Placement</a>
@endsection