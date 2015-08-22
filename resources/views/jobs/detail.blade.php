@extends('layouts/master')

@section('content')
<br>
    <h2>{{ $job->jobtitle }}</h2>
    <p>{{ $job->snippet }}</p>

    <h2>Placement Details</h2>

    <div class="col-sm-4">
        Company
    </div>
    <div class="col-sm-8">
        {{ $job->company }}
    </div>

    <div class="col-sm-4">
        Location
    </div>
    <div class="col-sm-8">
        {{ $job->formattedLocation }}, {{ $job->state or "" }}
        {{--{{ $job->city or "" }}, {{ $job->state or "" }}--}}
    </div>

    <div class="col-sm-4">
        Date Posted
    </div>
    <div class="col-sm-8">
        {!! $job->formattedRelativeTime !!} | {{ $job->date }}
    </div>

    <div class="col-sm-4">
        Source
    </div>
    <div class="col-sm-8">
        {!! $job->source !!}
    </div>

    <div class="col-sm-8"><br><a class="btn btn-lg btn-primary" href="{{ route('job.indeed', $job->jobkey) }}">Apply Placement</a></div>

@endsection