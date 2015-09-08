@extends('layouts/master')
@section('content')
    {{--<h1>Hi {{ $user->name  }}</h1>--}}

    <!-- tabs left -->
<div class="col-sm-5">
        <div class="pad1"><br>
            <h2><font color="black">BROWSE JOB</font><font style ="color:#0099CC"> BY</font></h2>

            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#a" data-toggle="tab">Location</a></li>
                    <li ><a href="#b" data-toggle="tab">Date Posted</a></li>
                    <li><a href="#c" data-toggle="tab">Keywords</a></li>
                    <li><a href="#d" data-toggle="tab">Company</a></li>
                    <li><a href="#e" data-toggle="tab">Placement Type</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="a">
                        <h4>Location</h4>
                        <a href="{{ route('placement', 'Home Counties') }}"><u>Home Counties</u></a><br>
                        <a href="{{ route('placement', 'London') }}"><u>London</u></a><br>
                        <a href="{{ route('placement', 'Midlands') }}"><u>Midlands</u></a><br>
                        <a href="{{ route('placement', 'Northern Ireland') }}"><u>Northern Ireland</u></a><br>
                        <a href="{{ route('placement', 'Scotland') }}"><u>Scotland</u></a><br>
                        <a href="{{ route('placement', 'South West') }}"><u>South West</u></a><br>
                        <a href="{{ route('placement', 'Southern') }}"><u>Southern</u></a><br>
                        <a href="{{ route('placement', 'Wales') }}"><u>Wales</u></a><br>
                        <a href="{{ route('placement', 'North West') }}"><u>North West</u></a><br>
                        <a href="{{ route('placement', 'Yorkshire') }}"><u>Yorkshire</u></a><br>

                    </div>

                    <div class="tab-pane" id="b">
                        <h4>Date Posted</h4>
                        <a href="{{ route('placement', 'hour') }}"><u>Today</u></a><br>
                        <a href="{{ route('placement', '1 day') }}"><u>Yesterday</u></a><br>
                        <a href="{{ route('placement', '3 days ago') }}"><u>Last 3 Days</u></a><br>
                        <a href="{{ route('placement', 'Northern Ireland') }}"><u>Last 7 Days</u></a><br>
                        <a href="{{ route('placement', 'Scotland') }}"><u>Last 14 Days</u></a><br>
                        <a href="{{ route('placement', 'South West') }}"><u>Last 30 Days</u></a><br>
                    </div>

                    <div class="tab-pane" id="c">
                        <h4>Keyword</h4>

                        {!! Form::open(['route'=>'placement.query', 'method'=>'get', 'class' => 'form-horizontal']) !!}
                        <div class="col-xs-6">
                            {!! Form::text("keyword", "", ["class"=>"form-control", "placeholder"=>"Any Keyword"]) !!}
                            <br>
                        </div>
                            <center>{!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}</center>
                        {!! Form::close() !!}
                     </div>

                    <div class="tab-pane" id="d">
                        <h4>Company</h4>

                            {!! Form::open(['route'=>'placement.query', 'method'=>'get', 'class' => 'form-horizontal']) !!}
                            <div class="col-xs-6">
                                {!! Form::text("keyword", "", ["class"=>"form-control", "placeholder"=>" "]) !!}
                                <br>
                            </div>
                            <center>{!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}</center>
                            {!! Form::close() !!}

                    </div>


                    <div class="tab-pane" id="e">
                        <h4>Placement Type</h4>
                        <a href="{{ route('placement', 'Short-Term') }}"><u>Short Term</u></a><br>
                        <a href="{{ route('placement', 'Long-Term') }}"><u>Long Term</u></a><br>
                        <a href="{{ route('placement', 'Sandwich Placement') }}"><u>Sandwich Placement</u></a><br>
                    </div>
                </div>

                <div class="grid_4">
                    <div class="pad1"><br><br>
                        <h2><font color="black">LATEST</font><font style ="color:#0099CC"> VACANCIES</font></h2><br>
                        <ul class="list pad2">
                            @foreach($jobs as $job)
                                <li><a href="{{ route('job.detail', $job->jobkey) }}">{{ $job->jobtitle }}</a></li><br>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
         </div>
    </div>
            <!-- /tabs -->

    <div class="grid_7 emp_box"><br>
        <h2><font color="black"></font>VIEW SELECTED <font style ="color:#0099CC"> {{ $keyword }}</font></h2><br>
        @foreach($jobs as $job)
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>{{ $job->jobtitle }}</b></div>
                    <div class="panel-body">
                        <div class="row">

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
                                Description
                            </div>
                            <div class="col-sm-8">
                                {!! $job->snippet !!}
                            </div>

                            <div class="col-sm-4">
                                Date Posted
                            </div>
                            <div class="col-sm-8">
                                {!! $job->formattedRelativeTime !!} | {{ $job->date }}
                            </div>

                            <div class="col-sm-8 col-sm-offset-4">
                                <br><a class="btn btn-success" href="{{ route('job.detail', $job->jobkey) }}">Go to job page</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection