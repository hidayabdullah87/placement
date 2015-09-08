@extends('layouts/master')
@section('content')

        <div class="content projects">

                <div class="grid_12">
                    <br>
                    <h2><font color="black">STUDENTS</font><font style ="color:#0099CC"> DASHBOARD</font></h2>
                </div>

            <div class="grid_3">
                <div class="box ic8"><div class="maxheight">
                        <h3>STUDENT'S  <br><br>
                            PROFILE</h3><i class=" icon-cog"></i>
                        <p>Student profile update including the applications status and the assigned supervisor</p>
                        <a href="{{ route('student/profile') }}" class="btn">CLICK HERE !</a></div>
                </div>
            </div>

                <div class="grid_3">
                    <div class="box ic7"><div class="maxheight">
                            <h3>WORK  <br><br>
                                SUBMISSION</h3><i class=" icon-pencil"></i>
                            <p>Placement link for students weekly internship report submission to their supervisors.</p>

                            <a href="#" class="btn">CLICK HERE !</a></div>

                    </div>
                </div>

                <div class="grid_3">
                    <div class="box ic2"><div class="maxheight">
                            <h3>PLACEMENTS <br><br>
                                FORUM</h3><i class=" icon-group"></i>
                            <p>Placement forum for updates and sharing experiences with current and previous students</p>
                            <a href="{{ url('forum') }}" class="btn">CLICK HERE !</a></div>
                    </div>
                </div>

                <div class="grid_3">
                    <div class="box ic9"><div class="maxheight">
                            <h3>PLACEMENTS  <br><br>
                                HELP</h3><i class=" icon-question-sign"></i>
                            <p>Placement guidelines for registration, placement application, and internship report submissions</p>
                            <a href="#" class="btn">CLICK HERE !</a></div>
                    </div>
                </div>
            <a target="_blank" href="https://mail.google.com/mail?view=cm&tf=0&to=%27Afeeqah%20Sheffield%27%3Cnurafeeqah91@gmail.com%3E&su=Work%20Submission">CLICK HERE !</a>
            </div>

@endsection