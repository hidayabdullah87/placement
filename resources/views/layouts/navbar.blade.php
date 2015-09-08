<!--==============================header=================================-->
<header>

<div class="container_12">
    <div class="grid_12">
        @if(Auth::check())
            <H5 align="right"><font style="color: white"> Welcome back, <a href="{{ route('student/profile') }}"><u>{{ Auth::user()->name }}</u></a> !</font></H5>
        @else

        @endif

           <h1><a href="{{ route('home') }}"><img src="/images/logo.png" alt="Prospect best opportunity to succeed"></a> </h1>
        <div class="menu_block">
               <nav>
            <ul class="sf-menu">
                   <li class="{{ Request::is('/') ? 'current' : '' }}"><a href="{{ route('home') }}">HOME</a></li>
                   <li class="{{ Request::is('student') ? 'current' : '' }}"><a href="{{ route('student') }}">STUDENT</a> </li>
                   <li class="{{ Request::is('placement') ? 'current' : '' }}"><a href="{{ route('placement', 'placement') }}">PLACEMENTS</a></li>
                   <li class="{{ Request::is('newsevent') ? 'current' : '' }}"><a href="{{ route('newsevent') }}">NEWS & EVENTS</a> </li>
                   @if( Auth::check() && Auth::user()->is('administrator') )
                       <li class="{{ Request::is('admin') ? 'current' : '' }}"><a href="{{ route('admin') }}">ADMINISTRATOR</a> </li>
                   @endif
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