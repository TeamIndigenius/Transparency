<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="img/transparency_logo.png">
        <title>LOGIN | TRANSPARENCY</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>

    <body>
        <header>
            <div class="nav-bar">
                <div>
                    <a id="left-nav-title" href="{{ url('/') }}">HOME</a>
                </div>
                <!-- <div id="page-title">
                    <a href="login.html">&lt;LOGIN&gt;</a>
                </div> -->
            </div>
        </header>

        <div class="logo">
            <p>transparency</p>
            <center><img src="img/transparency_logo.png" alt="transparency logo"></center>
       
            <div class="input-container center">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-field">
                        <input id="password" type="text" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="username" required autofocus>

                        <input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="password" required>      
                    </div>
                    
                    <div class="submit-btn">
                        <input type="submit" name="login" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>

        <div id="error-msg-div">
             @if ($errors->has('username'))
                <span class="error-msg">
                    <strong>Invalid username or password.<br/>Contact helpdesk.transparency@indigenius.com.</strong>
                </span>
            @endif

             @if ($errors->has('password'))
                <span class="error-msg">
                    <strong>Invalid username or password.<br/>Contact helpdesk.transparency@indigenius.com.</strong>
                </span>
            @endif
        </div>
        
    </body>
</html>