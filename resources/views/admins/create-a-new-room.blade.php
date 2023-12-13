<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a New Room</title>

    <!-- Link to Raleway font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <!-- Link to Bona Nova font -->
    <link href="https://fonts.googleapis.com/css2?family=Bona Nova:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- CSS --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        /* Navbar */
        .navbar {
        background-color: #2C462B;
        font-family: 'Bona Nova', sans-serif;
        }
  
        .navbar-brand img {
            height: 80px;
            width: auto; 
        }
    
        .admin-panel {
            color: #F4BB4B;
            font-weight: bold;
            font-size: 48px
        }
    
        .hi-username {
            color: #fff;
            font-size: 27px;
            font-weight: bolder;
            font-family: 'Raleway', sans-serif;
        }

        .logout {
            color: #F4924B;
            font-size: 24px;
            font-weight: bold;
        }

        .logout:hover {
            color: #F4BB4B;
            font-size: 24px;
            font-weight: bold;
        }

        /* Admin Controls */
        .admin-control.row {
            display: flex;
            flex-wrap: wrap; /* 画面が狭い場合に要素を折り返す */
        }
        .list-group {
            font-family: 'Bona Nova', sans-serif;
            font-weight: bolder;
            font-size: 32px;
            border-radius: 0;
            background-color: #F4924B;
            margin-bottom: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: none;
            border: 0;
        }

        .list-group-item {
            background-color: #F4924B;
            color: #2C462B;
            border: none;
            border-bottom: 1px solid #2C462B;
        }

        .list-group-item:hover { /* カーソルが重なったとき */
            background-color: #f4914b58;
            color: #2C462B; 
        }

        .list-group-item.active { 
            background-color: #F4BB4B;
            color: #2C462B; 
            border: none;
            border-bottom: 1px solid #2C462B;   
        }

        /* Content */
        .content.col {
            background-image: url('../images/create_room_background.png');
            background-size: cover;
        }

        .create-room.card {
            text-align: center;
            padding: 50px;
            padding-bottom: 40px;
            margin-top: 50px;
            border-radius: 25px;
            font-family: 'Raleway', sans-serif;
            font-weight: bold;
            background-color: rgba(255, 255, 255, 0.51);
        }

        .create-room img{
            height: 133px;
            width: 133px;
        }

        .title {
            font-family: 'Bona Nova', sans-serif;
            font-weight: bold;
            font-size: 32px;
        }

        .input-group-text.btn{
            background-color: #448A47;
            color: #fff;
            font-weight: bold;
        } 

        .create-btn {
            background-color: #2C462B;
            color: #fff;
            font-weight: bold;
        }

        .create-btn:hover {
            color:  #F4924B;
            background-color: #2C462B;
            }

        .cancel-btn {
            background-color: #F4BB4B;
            color: #981E1E;
            font-weight: bold;
        }

        .cancel-btn:hover {
            background-color: #F4924B;
            color: #981E1E;
            font-weight: bold;
        }

    </style>
</head>
<body>
    {{-- Navbar for Admin --}}
    <nav class="navbar navbar-expand-md shadow-sm navbar-dark" style="height: 94px;">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center me-5" href="{{ url('/') }}">
                <img src="/images/logo.jpeg" alt="Logo">
            </a>

              <span class="admin-panel me-auto h2 mb-0">Admin Panel</span>
        
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                          <span class="hi-username d-block mt-2 me-5">Hi username!</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link logout ms-4 me-4" href="#">Log Out</a>
                      </li>
                  </ul>
              </div>
            </div>
        </div>
    </nav>

    {{-- Admin Controls --}}
    <div class="admin-control row g-0">
        <div class="col-1" style="width: 264px;">
            <div class="list-group" style="width: 100%;">
                <a href="#" class="list-group-item p-3 text-center shadow-none active" aria-current="true">Rooms</a>          
                <a href="#" class="list-group-item p-3 text-center">Cleaners</a>
                <a href="#" class="list-group-item p-3 text-center">Guests</a>
            </div>
        </div>

        {{-- Content --}}
        <div class="content col">
            <div class="container d-flex justify-content-center">
                <div class="create-room card" style="width: 875px; margin-bottom: 100px;">
                    <div class="mt-2">
                        <img src="/images/MRYR-logo.png" class="float-center" alt="Logo">
                    </div>
                    <div class="title mt-5">
                        Create a New Room
                    </div>
                    <div  style="border-top: 3px solid #448A47; width: 55%; margin: 5px auto;"></div>
                    <form>
                        <div class="row text-start mt-4" style="padding:1em;">
                            <div class="col d-flex flex-column" style="padding-right:1em;">
                                <div class="mb-3 flex-grow-1">
                                    <label for="roomName" class="form-label">Room Name</label>
                                    <input type="text" class="form-control" id="roomName" placeholder="Room 101" style="border: 1px solid #448A47;">
                                </div>
                                <div class="mb-3 flex-grow-1">
                                    <label for="roomType" class="form-label">Room Type</label>
                                    <select class="form-select" id="roomType" aria-label="Select a Room Type" style="border: 1px solid #448A47;">
                                        <option selected>Select a Room Type</option>
                                        <option value="single">Single Bed</option>
                                        <option value="double">Double Beds</option>
                                        <option value="triple">Triple Beds</option>
                                    </select>
                                </div>
                                <div class="mb-3 flex-grow-1">
                                    <label for="price" class="form-label">Price</label>
                                    <div class="input-group" style="border: 1px solid #448A47; border-radius: 5px 0px 0px 5px;">
                                        <span class="input-group-text"style="border: none; border-radius: 5px 0px 0px 5px;">$</span>
                                        <input type="text" class="form-control" id="price" placeholder="Enter Price" style="border: none; border-radius: 0px 5px 5px 0px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col ps-5">
                                <div class="mb-4">
                                    <label for="image" class="form-label">Image</label>
                                    <div class="row input-group">
                                        <div class="col">
                                            <img id="image-preview" src="/images/default-image.png" alt="Image Preview" class="img-thumbnail d-none" style="max-width: 100%; border: 2px solid #448A47; border-radius: 10px;">
                                            <i class="fa-solid fa-image text-muted bg-white" style="font-size: 45px; border: 1px solid #448A47; border-radius: 10px; padding: 40px 60px;"></i>
                                        </div>
                                        <div class="col text-end">
                                            <input type="file" class="form-control" id="image" style="display: none">
                                            <label for="image" class="input-group-text btn mt-5 text-end">
                                                Select a file
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" rows="4" placeholder="Enter Description" style="border: 1px solid #448A47;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col text-end">
                                    <a href="#" class="cancel-btn btn px-5">Cancel</a>
                                </div>
                                <div class="col text-start ms-5" style="padding-left: 5em;">
                                    <button type="submit" class="create-btn btn px-5">Create</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>  

   <!-- Bootstrap JS and Popper.js (required for Bootstrap JavaScript plugins) -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>