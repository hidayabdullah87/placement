@extends('layouts/master')

@section('content')
	

    <!--=======content================================-->

    <div class="grid_4">
      <div class="pad1"><br><br>
        <h2><font color="black">LATEST</font><font style ="color:#0099CC"> VACANCIES</font></h2>
        <ul class="list pad2">
            @foreach($jobs as $job)
                <li><a href="{{ route('job.detail', $job->jobkey) }}">{{ $job->jobtitle }}</a></li>
            @endforeach
        </ul>
      </div>
    </div>

    <div class="grid_8 emp_box"><br><br>
      <h2><font color="black"></font>PLACEMENTS <font style ="color:#0099CC"> CATEGORIES</font></h2>
      <div class="grid_4 alpha ">
          <a href="{{ route('placement', 'accounting') }}">
            <div class="box maxheight1">
                  <img src="images/page1_img1.jpg" alt="">
                  <div class="extra_wrapper"><p><strong><U><font color="black">ACCOUNTING</font></U></strong> </p>
                      Accountants are in charge of recording financial transactions, analysing, and auditing corporate financial matters.
                  </div>
            </div>
          </a>
      </div>

        <div class="grid_4 alpha ">
            <a href="{{ route('placement', 'engineering') }}">
                <div class="box maxheight1">
                    <img src="images/page1_img2.jpg" alt="">
                    <div class="extra_wrapper"><p><strong><U><font color="black">ENGINEERING</font></U></strong> </p>
                        Engineering includes aerospace, chemical, civil, electrical, mechanical, and manufacturing.
                    </div>
                </div>
            </a>
        </div>

        <div class="clear cl1"></div>
        <div class="grid_4 alpha ">
            <a href="{{ route('placement', 'medical') }}">
                <div class="box maxheight1">
                    <img src="images/page1_img3.jpg" alt="">
                    <div class="extra_wrapper"><p><strong><U><font color="black">MEDICAL</font></U></strong> </p>
                        Medical industries encompass occupations ranging from medical doctors to dental hygenists.
                    </div>
                </div>
            </a>
        </div>

        <div class="grid_4 alpha ">
            <a href="{{ route('placement', 'Administration') }}">
                <div class="box maxheight1">

                    <img src="images/page1_img4.jpg" alt="">
                    <div class="extra_wrapper"><p><strong><U><font color="black">ADMINISTRATOR</font></U></strong> </p>
                        Administrators responsible reception work, record keeping, document organisation and ordering.
                    </div>
                </div>
            </a>
        </div>

        <div class="clear cl1"></div>
        <div class="grid_4 alpha ">
            <a href="{{ route('placement', 'information technology') }}">
                <div class="box maxheight1">

                    <img src="images/page1_img5.jpg" alt="">
                    <div class="extra_wrapper"><p><strong><U><font color="black">INFORMATION TECHNOLOGY</font></U></strong> </p>
                        Offering website design, website development, for any kind of business.
                    </div>
                </div>
            </a>
        </div>

        <div class="grid_4 alpha ">
            <a href="{{ route('placement', 'nursing') }}">
                <div class="box maxheight1">

                    <img src="images/page1_img6.jpg" alt="">
                    <div class="extra_wrapper"><p><strong><U><font color="black">NURSING</font></U></strong> </p>
                        Nurses plan and provide medical and nursing care to patients in hospital, or at home.
                    </div>
                </div>
            </a>
        </div>

        <div class="clear cl1"></div>
        <div class="grid_4 alpha ">
            <a href="{{ route('placement', 'architecture') }}">
                <div class="box maxheight1">

                    <img src="images/page1_img7.jpg" alt="">
                    <div class="extra_wrapper"><p><strong><U><font color="black">ARCHITECTURE</font></U></strong> </p>
                        Architects involved with designing new buildings, extensions or alterations to existing buildings.
                    </div>
                </div>
            </a>
        </div>

        <div class="grid_4 alpha ">
            <a href="{{ route('placement', 'lawyer') }}">
                <div class="box maxheight1">

                    <img src="images/page1_img8.jpg" alt="">
                    <div class="extra_wrapper"><p><strong><U><font color="black">LAWYER</font></U></strong> </p>
                        Support functions are all essential personnel to ensure the effective running of the legal system.
                    </div>
                </div>
            </a>
        </div>

        <div class="clear cl1"></div>
        <div class="grid_4 alpha ">
            <a href="{{ route('placement', 'human resource') }}">
                <div class="box maxheight1">

                    <img src="images/page1_img9.jpg" alt="">
                    <div class="extra_wrapper"><p><strong><U><font color="black">HUMAN RESOURCES</font></U></strong> </p>
                        Human resources are responsible for developing employment standards and recruitment.
                    </div>
                </div>
            </a>
        </div>

        <div class="grid_4 alpha ">
            <a href="{{ route('placement', 'education') }}">
                <div class="box maxheight1">

                    <img src="images/page1_img10.jpg" alt="">
                    <div class="extra_wrapper"><p><strong><U><font color="black">EDUCATION</font></U></strong> </p>
                        Education ranging from nursery and primary school, right the way through to university.
                    </div>
                </div>
            </a>
        </div>

</div>
	
@endsection