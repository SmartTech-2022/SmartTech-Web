<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css')}}"
     rel="stylesheet">
    <link href="{{ asset('css/style2.css')}}"
     rel="stylesheet">
    <link href="{{ asset('js/bootstrap.min.js')}}"
     rel="stylesheet">
    <link href="{{ asset('scripts.js')}}"
     rel="stylesheet">

     <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


</head>
<body>
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg bg-light navbar-light mx-4" id="navbar1">            
              <div id="brand-container" >
              <a class="navbar-brand" href="#"><img src="{{ asset('image/logo.png')}}" alt=""></a>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" nav-items>
                      <li class="nav-item">
                        <a class="nav-link custom-text-dark" aria-current="page" href="#" class="roboto">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link custom-text-dark" id="campaign" href="#" class="roboto">Campaign</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link custom-text-dark" href="#" class="roboto">About Us</a>
                      </li>
                      <li class="nav-item btn btn-sm btn-success mx-2">
                        <a class="nav-link custom-text-dark text-light" href="#" class="roboto">Login</a>
                      </li>
                      <li class="nav-item btn btn-sm btn-success mx-2">
                        <a class="nav-link custom-text-dark text-light" href="#" class="roboto">Register</a>
                      </li>
                    </ul>
                </div>
              </div>
            
        </nav>
        
        @yield('content')

        <!-- <footer class="py-3 mx-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">not yet created</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 evans, Inc</p>
          </footer> -->
    </div>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>

</body>
</html>