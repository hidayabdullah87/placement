@extends('layouts/master')

@section('content')
    {{--<h1>Hi {{ $user->name }}</h1>--}}
    {{--<h2>This is for login user.</h2>--}}

    <div class="row">
        @foreach($jobs as $job)
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $job->jobtitle }}</div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-sm-4">
                                Company
                            </div>
                            <div class="col-sm-8">
                                {{ $job->company }}
                            </div>

                            <div class="col-sm-4">
                                City
                            </div>
                            <div class="col-sm-8">
                                {{ $job->city or "" }}
                            </div>

                            <div class="col-sm-4">
                                Description
                            </div>
                            <div class="col-sm-8">
                                {!! $job->snippet !!}
                            </div>

                            <div class="col-sm-8 col-sm-offset-4">
                                <a class="btn btn-success" href="{{ route('job.detail', $job->jobkey) }}">Go to job page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection