<!-- Edited by : aa , April 3 -->

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/transparency_logo.png">
        <title>TRANSPARENCY</title>        

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/home.css">
    </head>
    <body>
        <header>
            <div class="nav-bar">
                <div>
                    <h1><a id="left-nav-title" href="{{ route('about') }}">About</a></h1>
               </div>
                <!-- <div id="page-title">
                    <a href="">&lt;HOME&gt;</a>
                </div> -->
            </div>
        </header>

        <div class="arrow">
            <div class="org" id="skimmers">  
                <h2>Skimmers</h2>
            </div>
            <div class="org" id="clovers"> 
                <h2>Clovers</h2>
            </div>
            <div class="org" id="elektrons">  
                <h2>Elektrons</h2>
            </div>
            <div class="org" id="redbolts"> 
                <h2>Redbolts</h2>
            </div>
            <div id="triangle-down"></div>
        </div>

        <div class="welcome center">
            <p>
                <span id="welcome-gray">welcome to</span>
                <br> 
                transparency
            </p>
        </div>
        
        <div class="login-btn center">
            @auth
                <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    </body>
    <!-- LOGOUT SCRIPT -->
        <script src="{{ asset('js/app.js') }}"></script>
</html>
