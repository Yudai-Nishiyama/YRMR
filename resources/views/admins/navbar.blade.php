<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>

    <!-- Link to Raleway font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <!-- Link to Bona Nova font -->
    <link href="https://fonts.googleapis.com/css2?family=Bona Nova:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .navbar {
          background-color: #2C462B;
          font-family: 'Bona Nova', sans-serif;
        }
    
        .navbar-brand img {
          height: 94px;
          width: auto; 
        }
    
        .admin-panel {
          color: #F6C464;
          font-weight: bold;
          font-size: 48px
        }
    
        .username {
          color: #fff;
          font-size: 27px;
          font-weight: bolder;
          font-family: 'Raleway', sans-serif;
        }

        .logout {
          color: #F4924B;
          font-size: 24px;
      }
      </style>
</head>
<body>
  <body>
    <nav class="navbar navbar-expand-md shadow-sm navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center me-5" href="{{ url('/') }}">
                <img src="/images/logo.jpeg" alt="Logo">
            </a>

              <span class="admin-panel me-auto h2 mb-0">Admin Panel</span>
        
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                          <span class="username d-block mt-2 me-5">Hi username!</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link logout ms-4 me-4" href="#">Log Out</a>
                      </li>
                  </ul>
              </div>
            </div>
        </div>
    </nav>
</body>
  
   <!-- Bootstrap JS and Popper.js (required for Bootstrap JavaScript plugins) -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>