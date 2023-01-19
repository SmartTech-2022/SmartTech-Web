<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Smart Tech Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset("assets/fonts/fontawesome-all.min.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset("assets/fonts/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/fonts/fontawesome5-overrides.min.css") }}">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion p-1" style="background: #027314">
            <div class="container-fluid d-flex flex-column px-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand mx-0" href="#">
                    <div class="sidebar-brand-text mx-0 ">
                        <img src="{{asset('image/logo.jpg')}}" width="200px"  alternative="logo"/></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">

                    <li class="nav-item"><a class="nav-link" href="{{route('users.create')}}"><i class="fas fa-user"></i><span>Register User</span></a></li>

                    <li class="nav-item"><a class="nav-link active" href="{{route('home')}}"><i class="fas fa-user-circle"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="dropdown dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle"></i><span>Contestant</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item" href="{{route('contestant.create')}}">Add Contestant</a></li>
                      <li><a class="dropdown-item" href="{{route('contestant.show')}}">View Contestant</a></li>
                    </ul>
                    </li>



                    <li class="nav-item"><a class="dropdown dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle"></i><span>Elections</span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item" href="{{ route('election.store') }}">Create Elections</a></li>
                      <li><a class="dropdown-item" href="{{route('election.show')}}">View Elections</a></li>
                    </ul>
                    </li>




                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user-circle"></i><span>Votes</span></a></li>

                    <li class="nav-item"> <a class="nav-link active" href="/"> <i class="fa-solid fa-arrow-right-from-bracket"></i></i><span>Logout</span></a></li>




                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div class="div">
                <nav class="navbar navbar-expand-lg text-success">
                    <div class="container-fluid link-color">
                        <a class="navbar-brand" href="{{url('/')}}">Home</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav link-color me-auto mb-2 mb-lg-0">
                                <li class="nav-item px-3">
                                    <a class="nav-link  " aria-current="page" href="#">About</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">Contact us</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>


             @yield('content')
             @yield('users')
        <footer class="py-3 my-4">
            <p class="text-center text-muted">© 2023 eVotes powered by SmartTech, Inc</p>
        </footer>
    </div>



    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
