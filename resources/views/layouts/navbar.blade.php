<!--==============================header=================================-->
<header>
<div class="container_12">
    <div class="grid_12">
           <h1><a href="{{ route('home') }}"><img src="/images/logo.png" alt="Prospect best opportunity to succeed"></a> </h1>
        <div class="menu_block">
               <nav>
            <ul class="sf-menu">
                   <li class="{{ Request::is('/') ? 'current' : '' }}"><a href="{{ route('home') }}">HOME</a></li>
                   <li class="{{ Request::is('student') ? 'current' : '' }}"><a href="{{ route('student') }}">STUDENT</a> </li>
                   <li><a href="staff.jsp">STAFF</a> </li>
                   <li><a href="placement.jsp">PLACEMENTS</a>
                   <ul>
               
                  <li><a href="addPlacement.jsp">New Placement</a></li>
                  <li><a href="#">Apply Placement</a></li>

                  </li>

                     </ul></li>
                   <li><a href="newsEvents.jsp">NEWS & EVENTS</a> </li>
                   
                        @if(Auth::check())
				            <li><a href="{{ route('auth.logout') }}" class="btnlogout">LOGOUT</a></li>
                        @else
                            <li><a href="{{ route('auth.login') }}" class="btnlogin">LOGIN</a></li>
                        @endif
<!-- 				        <li><a href="logout.jsp" class="btnlogout">LOGOUT</a></li> -->

  
                 </ul>
          </nav>
               <div class="clear"></div>
             </div>
        
         </div>
  </div>
</header>