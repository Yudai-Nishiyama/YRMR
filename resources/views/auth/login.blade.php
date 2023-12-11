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
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .logo {
            width: 100px;
            height: 100px;
            padding-bottom: 30px;
        }

        .registration {
            display: flex;
            justify-content: space-between;
        }

        .registration-image img {
            width: 50vw;
            height: 100vh;
        }

        .registrarion-form {
            margin: 80px auto;
            text-align: center;
            font-family: Bona Nova;
        }

        h1 {
            font-family: Bona Nova;
            margin: 0 auto;
            border-bottom: 2px solid #448a47;
            padding-bottom: 20px;
            width: 80%;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .login-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
        }

        .inputs {
            margin-right: 30px; /* Adjust the right margin for spacing */
        }

        .input-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }

        input {
            font-family: Raleway;
            font-weight: bold;
            padding: 8px;
            margin-top: 5px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #448a47;
            cursor: pointer;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            transition: box-shadow 0.4s ease;
        }

        input:hover {
            box-shadow: none; /* Set box-shadow to none on hover */
        }

        .input-container label {
            font-family: Raleway;
            text-align: left;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .input-container:first-child {
            margin-left: 0;
        }

        .login-img {
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .login-button {
            margin-top: 40px;
        }

        .button {
            background-color: #448a47;
            color: #fff;
            margin: 0 auto;
        }

        p {
            padding-top: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        a {
            color:#2C462B;
        }

        a:hover {
            color: #448a47;
        }

        .sns {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .google {
            margin-right: 30px;
        }

        .icon {
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            transition: box-shadow 0.4s ease; /* Transition effect for box-shadow over 2 seconds */
        }

        .icon:hover {
            box-shadow: none;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Login</title>
</head>
<body>
    <main>
        <div class="registration">
            <div class="registrarion-form">
                <img class="logo" src="{{asset('images/My Room Your Room-logos 2.png')}}" alt="ホテルのロゴ">
                <h1>Login Form</h1>

                <form action="#">

                    <div class="login-container">

                        <div class="inputs">

                            <div class="input-container">
                                <label for="email">Email</label>
                                <input type="text" id="email" placeholder="mail@mail.com">
                            </div>
                            <div class="input-container">
                                <label for="password">Password</label>
                                <input type="text" id="password" placeholder="Enter your password">
                            </div>

                        </div>

                        <div class="login-img">
                            <img src="images/AdobeStock_633635429_Preview.png" alt="">
                        </div>

                    </div>


                    <div class="login-button">

                        <div class="input-container">
                            <input class="button" type="submit" value="Login">
                        </div>

                    </div>

                    <a href="{{ url('/register') }}">If you haven't registered yet, click here</a>

                    <p>or Login With:</p>

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
</html>
</html>
