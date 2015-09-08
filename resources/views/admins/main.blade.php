@extends('layouts/master')
@section('content')

    <div class="content projects">

        <div class="grid_12">
            <br>
            <h2><font color="black">ADMINISTRATOR</font><font style ="color:#0099CC"> DASHBOARD</font></h2>
        </div>

        <div class="grid_3">
            <div class="box ic2"><div class="maxheight">
                    <h3>MANAGE  <br><br>
                        USERS</h3><i class=" icon-group"></i>
                    <p>Users profile update including the applications status and the assigned supervisor.</p>
                    <a href="{{ route('admin.user') }}" class="btn">CLICK HERE !</a></div>
            </div>
        </div>

        <div class="grid_3">
            <div class="box ic7"><div class="maxheight">
                    <h3>NEWS &  <br><br>EVENTS</h3><i class=" icon-bullhorn"></i>
                    <p>Placement News update for any information regarding placements including opputunity like interview .</p>
                    <a href="{{ route('new.index') }}" class="btn">CLICK HERE !</a></div>
            </div>
        </div>

        <div class="grid_3">
            <div class="box ic9"><div class="maxheight">
                    <h3>PLACEMENT  <br><br>
                        FORUM</h3><i class=" icon-calendar"></i>
                    <p>Organise and facilitate Placement forum for sharing experiences with current and previous students</p>
                    <a href="{{ url('forum') }}" class="btn">CLICK HERE !</a></div>
            </div>
        </div>

        <div class="grid_3">
            <div class="box ic9"><div class="maxheight">
                    <h3>PLACEMENTS  <br><br>
                        HELP</h3><i class=" icon-question-sign"></i>
                    <p>Placement guidelines for managing users data including assigned supervisor, news and events. </p>
                    <a href="#" class="btn">CLICK HERE !</a></div>
        </div>

    </div>
    </div>

@endsection