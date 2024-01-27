<nav class="navbar navbar-expand-md shadow-sm navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center me-5" href="{{ url('/') }}">
            <img src="/images/logo.jpeg" alt="Logo">
        </a>

            <span class="admin-panel me-auto h2 mb-0">Admin Panel</span>

            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <span class="hi-username d-block mt-2 me-5">Hi {{Auth::user()->username}}!</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-bar-logout ms-4 me-4" href="#">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>