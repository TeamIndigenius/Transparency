<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/transparency_logo.png">

        <title> Timeline | Transparency</title>

        <!-- FontsAwesome and  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Fonts -->
   
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebusneuebold" type="text/css"/>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/standalone.css">
        <link rel="stylesheet" type="text/css" href="css/change-password-modal.css">

    </head>

    <body>
<!--================= HEADER ====================-->
            <header>
                <label>TRANSPARENCY</label>
                <ul>
                    <li> <a  id="username">{{ Auth::user()->first_name }}</a>
                        <ul>
                            <a  id="change-pwd-btn"><li>change password</li></a>
                                <!-- The Modal -->
                                <div id="myModal" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <!-- <span class="close">&times;</span> -->
                                        <div class="change-pwd-heading">
                                            change password
                                        </div>

                                        <form method="post" action="">
                                            <input type="text" name="old-pwd" placeholder="old password">
                                            <br/>
                                            <input type="text" name="new-pwd" placeholder="new password">
                                            <br/>
                                            <input type="text" name="confirm-pwd" placeholder="confirm password">
                                            <br/>
                                            <input type="submit" name="confirm" value="CONFIRM">
                                        </form>
                                    </div>
                                </div>

                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                
                            </li>
                        </ul>
                    </li>
                </ul>       
            </header>
<!--================= NAVIGATION ====================-->
            <nav>
                <div id="nav-left">
                    <ul>
                        <li ><a href="{{ url('/orgs') }}" id="org-select">ORGS</a>
                            <ul>
                                <li><a href="">clovers</a></li>
                                <li><a href="">skimmers</a></li>
                                <li><a href="">redbolts</a></li>
                                <li><a href="">elektrons</a></li>
                            </ul>
                        </li>
                        <li id="li-home"><a href="{{ url('/timeline') }}">HOME</a></li>
                    </ul>
                </div>
                 <div id="nav-right">
                    <ul>
                        <!-- Archives a: redirect to the events list of the current SY -->
                        <li><a href="{{ url('eventlist') }}">ARCHIVE</a> 
                            <div class="menu-sub">
                                <div class="menu-col-1">
                                    <h3 class="menu-category"> Events for A.Y.</h3>
                                </div>
                                <div class="menu-col-2">
                                    
                                    <ul>
                                        <li><a href="{{ url('events') }}">2017-2018</a></li>
                                        <li><a href="">2016-2017</a></li>
                                        <li><a href="">2015-2016</a></li>
                                    </ul>
                                </div>

                                <div class="menu-col-3">
                                    <ul>
                                        <li><a href="">2014-2015</a></li>
                                        <li><a href="">2013-2014</a></li>
                                        <li><a href="">2012-2013</a></li>
                                    </ul>
                                </div>

                                <div class="menu-col-4">
                                    <ul>
                                        <li><a href="">2011-2012</a></li>
                                        <li><a href="">2010-2011</a></li>
                                        <li><a href="">2009-2010</a></li>
                                    </ul>
                                </div>

                                <div class="menu-col-5">
                                    <a>MORE</a>
                                </div>

                            </div>
                        </li>
                        <li><a href="{{ url('/igps') }}">IGP</a></li>
                    </ul>
                </div>
            </nav>

 <!--================================ MAIN ==============================-->
            <main>

                <content>
                    @yield('content')
                </content>
            </main>

<!--================= FOOTER ====================-->
<!-- NICOLE: Please include the Footer. Thanks -->
            <div id="footer">
                <p>University of the Philippines Visayas | BS Computer Science<br/>Copyright 2018 | Team Indigenius</p>
            </div>
<!-- SCRIPT -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>