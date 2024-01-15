<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link to Raleway font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <!-- Link to Bona Nova font -->
    <link href="https://fonts.googleapis.com/css2?family=Bona Nova:wght@400;700&display=swap" rel="stylesheet">

    <!-- Link to fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Login</title>
</head>
<body class="body">
    <main>
        <div class="registration">
            <div class="registrarion-form">
                <img class="logo" src="{{asset('images/My Room Your Room-logos 2.png')}}" alt="ホテルのロゴ">
                <h1 class="login_title">Login Form</h1>

                <form method="POST" action="{{route('login')}}">
                    @csrf

                    <div class="login-container">

                        <div class="inputs">

                            <div class="input-container">
                                <label for="email">Email</label>
                                <input class="input_content" type="text" id="email" name="email" placeholder="mail@mail.com">
                            </div>
                            <div class="input-container">
                                <label for="password">Password</label>
                                <input class="input_content" type="text" id="password" name="password" placeholder="Enter your password">
                            </div>

                        </div>

                        <div class="login-img">
                            <img src="images/AdobeStock_633635429_Preview.png" alt="">
                        </div>

                    </div>


                    <div class="login-button">

                        <div class="input-container">
                            <input class="lg_button input_content" type="submit" value="Login">
                        </div>

                    </div>

                    <a class="link" href="{{ url('/register') }}">If you haven't registered yet, click here</a>

                    <p class="api">or Login With:</p>

                    <div class="sns">
                        <a href="#"><img class="icon google" src="{{asset('images/flat-color-icons_google.svg')}}" alt="googleのロゴ"></a>
                        <a href="#"><img class="icon facebook" src="{{asset('images/devicon_facebook.svg')}}" alt="facebookのロゴ"></a>
                    </div>

                </form>

                <!-- Repeat the structure for other input fields -->

            </div>

            <div class="registration-image">
                <img src="{{asset('images/registration-image.png')}}" alt="">
            </div>
        </div>
    </main>
</body>
