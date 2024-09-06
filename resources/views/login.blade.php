<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{asset ('/css/style.css')}}">
    <link rel="icon" href="img/logo-lujb.png" type="image/x-icon">
</head>
<body>

    <div class="LoginContainer">
        <div class="InnerContainer">
            <div class="InnerContent">
                {{-- <img src="img/logo-lujb.png" alt="#logo"> --}}
                <div class="LoginContent">
                    <div class="Login">
                        <p class="big bold center">LOGIN</p>
                                <form action="/dashboard" class="LoginForm">
                                    <label for="username" class="LoginLabel">Username</label>
                                    <input type="text" id="username" class="black LoginInput" placeholder="Username">
                                    <label for="password" class="LoginLabel">Password</label>
                                    <input type="password" id="password" class="black LoginInput" placeholder="Password">
                                    {{-- <input type="submit" value="Login" class="black"> --}}
                                    <button type="submit" class="big LoginButton">Login</button>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <div class="Container">
        <div class="InnerContainer">
            <div class="InnerContent">
                <div class="LoginContent">
                    <div>
    
                    </div>
                </div>
            </div>
        </div>
    
    </div> --}}
    
</body>
</html>