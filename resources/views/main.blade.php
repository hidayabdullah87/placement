@extends('layouts/master')

@section('content')
	

    <!--=======content================================-->

    <div class="grid_4">
      <div class="pad1"><br><br>
        <h2><font color="black">LATEST</font><font style ="color:#0099CC"> VACANCIES</font></h2>
        <ul class="list">
            @foreach($jobs as $job)
                <li><a href="{{ route('job.detail', $job->jobkey) }}">{{ $job->jobtitle }}</a></li>
            @endforeach
        </ul>
      </div>
    </div>

    <div class="grid_8 emp_box"><br><br>
      <h2><font color="black"></font>SEARCH YOUR <font style ="color:#0099CC"> PLACEMENTS BY</font></h2>
      <div class="grid_4 alpha ">
         <div class="box"><div class="maxheight1">
          <img src="images/page1_img1.jpg" alt="">
          <div class="extra_wrapper"><p><strong><U>LOCATION</U></strong> </p>
            <a href="#">Facilitating sales, simultaneously building and maintaining customer.</a>
          </div></div>
        </div>
      </div>
      <div class="grid_4 omega">
         <div class="box"><div class="maxheight1">
          <img src="images/page1_img3.jpg" alt="">
          <div class="extra_wrapper"><p><strong><U>JOB TITLE</U></strong></p>
             <a href="#">The opportunity to be developing, and implementing external projects and events.</a>
          </div></div>
        </div>
      </div>
      <div class="clear cl1"></div>
      <div class="grid_4 alpha">
         <div class="box"><div class="maxheight1">
          <img src="images/page1_img4.jpg" alt="">
          <div class="extra_wrapper"><p><strong><U>INDUSTRIES</U></strong></p> <a href="#">Offering website design, website development, for any kind of business.</a> </div>
        </div></div>
      </div>
      <div class="grid_4 omega">
         <div class="box"><div class="maxheight1">
          <img src="images/page1_img2.jpg" alt="">
          <div class="extra_wrapper"><p><strong><U>COMPANIES</U></strong></p> <a href="#">By using creative and innovative thinking to create pieces of work for commercial use. </a></div>
        </div></div>
      </div>
    </div>

	
@endsection