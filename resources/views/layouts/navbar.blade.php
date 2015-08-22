<!--==============================header=================================-->
<header>

<div class="container_12">
    <div class="grid_12">
        <H5 align="right"><font style="color: white"> Welcome back, <a href="{{ route('student/profile') }}"><u>{{ Auth::user()->name }}</u></a> !</font></H5>
           <h1><a href="{{ route('home') }}"><img src="/images/logo.png" alt="Prospect best opportunity to succeed"></a> </h1>
        <div class="menu_block">
               <nav>
            <ul class="sf-menu">
                   <li class="{{ Request::is('/') ? 'current' : '' }}"><a href="{{ route('home') }}">HOME</a></li>
                   <li class="{{ Request::is('student') ? 'current' : '' }}"><a href="{{ route('student') }}">STUDENT</a> </li>
                   <li class="{{ Request::is('staff') ? 'current' : '' }}"><a href="{{ route('staff') }}">STAFF</a> </li>
                   <li class="{{ Request::is('placement') ? 'current' : '' }}"><a href="{{ route('placement') }}">PLACEMENTS</a></li>

                   <li><a href="newsEvents.jsp">NEWS & EVENTS</a> </li>
                   
                        @if(Auth::check())
				            <li><a href="{{ route('auth.logout') }}" class="btnlogout">LOGOUT</a></li>
                        @else
                            <li><a href="{{ route('auth.login') }}" class="btnlogin">LOGIN</a></li>
                        @endif
                 </ul>

          </nav>
               <div class="clear"></div>
             </div>

         </div>

  </div>
</header>