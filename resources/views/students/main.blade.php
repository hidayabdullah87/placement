@extends('layouts/master')
@section('content')

        <div class="content projects">

                <div class="grid_12">
                    <br>
                    <h2><font color="black">STUDENT'S</font><font style ="color:#0099CC"> DASHBOARD</font></h2>
                </div>

                <div class="grid_3">
                    <div class="box ic7"><div class="maxheight">
                            <h3>WORK  <br><br>
                                SUBMISSION</h3><i class=" icon-pencil"></i>
                            <p></p><br><br><br><br><br><br>
                            <a href="#" class="btn">CLICK HERE !</a></div>
                    </div>
                </div>

                <div class="grid_3">
                    <div class="box ic2"><div class="maxheight">
                            <h3>PLACEMENTS <br><br>
                                FORUM</h3><i class=" icon-group"></i>
                            <p></p><br><br><br><br><br><br>
                            <a href="#" class="btn">CLICK HERE !</a></div>
                    </div>
                </div>

                <div class="grid_3">
                    <div class="box ic8"><div class="maxheight">
                            <h3>STUDENT'S  <br><br>
                                PROFILE</h3><i class=" icon-cog"></i>
                            <p></p><br><br><br><br><br><br>
                            <a href="{{ route('student/profile') }}" class="btn">CLICK HERE !</a></div>
                    </div>
                </div>

                <div class="grid_3">
                    <div class="box ic9"><div class="maxheight">
                            <h3>PLACEMENTS  <br><br>
                                HELP</h3><i class=" icon-question-sign"></i>
                            <p></p><br><br><br><br><br><br>
                            <a href="#" class="btn">CLICK HERE !</a></div>
                    </div>
                </div>

            </div>

@endsection