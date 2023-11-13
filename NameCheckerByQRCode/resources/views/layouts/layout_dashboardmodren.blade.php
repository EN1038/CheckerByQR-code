<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Dashboard</title>

    {{-- Bootstarp --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- End_Bootstrap --}}
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    {{-- Icon_Bootstraps --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    {{-- End_Icon_Bootstraps --}}

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles_nav.css') }}">
    <link rel="stylesheet" href="{{asset('css/style_webslide.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_bg.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_glassbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_sidenav.css')}}">
    {{-- End_CSS --}}
</head>

<body>
  <ul class="circles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
    {{-- SideBar --}}
    <div id="mySidenav" class="sidenav content-segment">
      <div class="d-flex flex-column text-white p-3">
        <div class="d-flex flex-row mb-4">
          <div class="col-4 text-center">
            <i class="bi bi-qr-code-scan fs-1"></i>
          </div>
          <div class="col  fs-5 fw-bold d-flex align-items-center text-greenlight">
            <span>QR-CHECKER</span>
          </div>
        </div>
        <div class="d-flex flex-row border align-items-center mb-2">
          <div class="col-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Unknown_person.jpg/694px-Unknown_person.jpg" alt="" class="img-fluid user-img-scale rounded-3">
          </div>
          <div class="col">
            <div class="d-flex flex-column">
              <div class="col"><span>Fullname</span></div>
              <div class="col"><span>PasswordStudent</span></div>
            </div>
          </div>
        </div>
        <div class="text-start ps-1 mb-2">
          <span class="text-title">TITLE</span>
        </div>
        <div class="hover-btn d-flex flex-row mb-1 rounded-3  ">
          <div class="col-2 fs-4 text-center">
            <i class="bi bi-plus-circle-fill "></i>
          </div>
          <div class="col d-flex align-items-center justify-content-center fs-7">
            <span >สร้างกิจกรรมและรายวิชา</span>
          </div>
        </div>
        <div class="hover-btn d-flex flex-row mb-1 rounded-3  ">
          <div class="col-2 fs-4 text-center">
            <i class="bi bi-clipboard2-check-fill"></i>
          </div>
          <div class="col d-flex align-items-center justify-content-center fs-7">
            <span >เช็คกิจกรรมหรือรายวิชา</span>
          </div>
        </div>
        <div class="hover-btn d-flex flex-row mb-1 rounded-3  ">
          <div class="col-2 fs-4 text-center">
            <i class="bi bi-pie-chart-fill"></i>
          </div>
          <div class="col d-flex align-items-center justify-content-center fs-7">
            <span >ดูผลสถิติของการเข้าร่วม</span>
          </div>
        </div>
      </div>
    </div>
    {{-- End_SideBar --}}
    {{-- Start_main --}}
    <div class="box " id="main">
        {{-- Start_sidenav --}}
        <div class="row border-bottom content-segment">
          <div class="col-1 p-0 text-center" id="openNavButton" onclick="toggleNav()">
            <button class="border-0 btn btn-light scale-icon-nav" id="openNavIcon" onclick="openNav()"> 
              <i class="bi bi-caret-right-fill " ></i> 
            </button>
            <button class="border-0 btn btn-light scale-icon-nav" id="closeNavIcon" onclick="closeNav()"> 
              <i class="bi bi-caret-left-fill "></i>  
            </button>
          </div>
            <div class="col-4 p-0">
                <div class="d-flex flex-column">
                    <div class="fs-6 fw-medium text-muted mb-1">
                        Apple Banana 2023 eiei
                    </div>
                    <div class="fs-4 fw-semibold">
                        <p class="m-0 text-success">QR-Code Checker</p>
                    </div>
                </div>
            </div>
            <div class="col-7 ">
                <div class="d-flex flex-row justify-content-end ">

                    <div class="home me-3 py-3">
                        <button type="button" class="btn btn-light " onclick="openNav()"><i class="bi bi-house"></i></button>
                    </div>
                    <div class="search mx-3 py-3">
                        <form class="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Username"
                                    aria-describedby="basic-addon1" id="search-input">
                                <span class="input-group-text btn btn-light rounded-3" id="basic-addon1"><i
                                        class="bi bi-search"></i></span>
                            </div>
                        </form>
                    </div>
                    <div class="user ms-3 py-4">
                        
                            @if(Auth::check())
                            <a href="{{route('logout')}}"
                            class="link-body-emphasis link-offset-2 link-underline-opacity-0 mx-2">Logout</a>
                            @else
                            <a href="{{route('login_form')}}"
                            class="link-body-emphasis link-offset-2 link-underline-opacity-0 mx-3">Login</a>
                            <a href="{{route('register_form')}}"
                            class="link-body-emphasis link-offset-2 link-underline-opacity-0 mx-2">Register</a>
                            @endif
                        </div>
                </div>
            </div>
        </div>
        {{-- End_sidenav --}}
        {{-- body --}}
        <div class="body content-segment glassmorphism-body mt-4">
          @yield('content_body')
        </div>
        {{-- End_body --}}
        {{-- Footer --}}
        <footer class=" container-fluid py-3 border-top content-segment">
            <div class="d-flex align-items-center justify-content-center small">
                <div class="text-muted text-center">NSRU Nakhon Sawan Rajabhat University <br> Copyright &copy; 2023 CIT
                    NSRU All Rights Reserved</div>
            </div>
        </footer>
        {{-- End_Footer --}}
    </div>
    {{-- End_main --}}
    {{-- Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/side_nav.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
    <script src="{{ asset('js/script_slide.js') }}"></script>
    <script src="{{asset('js/script_sidenav.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
    integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
    crossorigin="anonymous"></script>
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    {{-- End_Script --}}
</body>

</html>
