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


    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <title>Register</title>
</head>
<body class="register">
    <main>
        <div class="registration">
            <div class="registrarion-form">
                <img class="logo" src="{{asset('images/My Room Your Room-logos 2.png')}}" alt="ホテルのロゴ">
                <h1 class="register_title">Registration Form</h1>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="inputs">
                        <div class="input-container">
                            <label for="firstName">First Name</label>
                            <input class="input_content" type="text" id="firstName" name="first_name" placeholder="Enter your first name">
                        </div>

                        <div class="input-container">
                            <label for="lastName">Last Name</label>
                            <input class="input_content" type="text" id="lastName"name="last_name" placeholder="Enter your last name">
                        </div>
                    </div>

                    <div class="inputs">
                        <div class="input-container">
                            <label for="username">User Name</label>
                            <input class="input_content" type="text" id="userName" name="username" placeholder="Enter your user name">
                        </div>

                        <div class="input-container">
                            <label for="adress">Address</label>
                            <input class="input_content" type="text" id="address" name="address" placeholder="123 Street, Apt567, State 12345, USA">
                        </div>
                    </div>

                    <div class="inputs">
                        <div class="input-container">
                            <label for="email">Email</label>
                            <input class="input_content" type="text" id="email" name="email" placeholder="mail@mail.com">
                        </div>

                        <div class="input-container">
                            <label for="phone_number">Phone Number</label>
                            <input class="input_content" type="text" id="phone_number" name="phone_number" placeholder="(+63)0123456789">
                        </div>
                    </div>

                    <div class="inputs">
                        <div class="input-container">
                            <label for="firstName">Password</label>
                            <input class="input_content" type="text" id="password" name="password" placeholder="Enter your password">
                        </div>

                        <div class="input-container">
                            <label for="lastName">Password Confirmation</label>
                            <input class="input_content" type="text" id="password_confirmation" name="" placeholder="Confirm your password">
                        </div>
                    </div>

                    <div class="inputs">

                        <div class="input-container">
                            <a href="#"><input class="rg_button input_content" type="submit" value="Registration"></a>
                        </div>

                    </div>

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
</html>
</html>


