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
            margin: 50px auto;
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

        .inputs {
            display: flex;
            justify-content: center;
            margin-top: 25px;
        }

        .input-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            margin-left: 100px;
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

        .button {
            background-color: #448a47;
            color: #fff;
        }

        p {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
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
                <h1>Registration Form</h1>

                <form action="#">
                    <div class="inputs">
                        <div class="input-container">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" placeholder="Enter your first name">
                        </div>

                        <div class="input-container">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" placeholder="Enter your last name">
                        </div>
                    </div>

                    <div class="inputs">
                        <div class="input-container">
                            <label for="username">User Name</label>
                            <input type="text" id="userName" placeholder="Enter your user name">
                        </div>

                        <div class="input-container">
                            <label for="adress">Address</label>
                            <input type="text" id="address" placeholder="123 Street, Apt567, State 12345, USA">
                        </div>
                    </div>

                    <div class="inputs">
                        <div class="input-container">
                            <label for="email">Email</label>
                            <input type="text" id="email" placeholder="mail@mail.com">
                        </div>

                        <div class="input-container">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" id="phone_number" placeholder="(+63)0123456789">
                        </div>
                    </div>

                    <div class="inputs">
                        <div class="input-container">
                            <label for="firstName">Password</label>
                            <input type="text" id="password" placeholder="Enter your password">
                        </div>

                        <div class="input-container">
                            <label for="lastName">Password Confirmation</label>
                            <input type="text" id="password_confirmation" placeholder="Confirm your password">
                        </div>
                    </div>

                    <div class="inputs">

                        <div class="input-container">
                            <a href="#"><input class="button" type="submit" value="Registration"></a>
                        </div>

                    </div>

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


