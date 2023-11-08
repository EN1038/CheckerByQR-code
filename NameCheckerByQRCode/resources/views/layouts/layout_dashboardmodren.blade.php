<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Dashboard</title>

    {{-- Bootstarp --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- End_Bootstrap --}}
  {{-- font--}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100&display=swap" rel="stylesheet">
    {{-- Icon_Bootstraps --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    {{-- End_Icon_Bootstraps --}}

    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('css/styles_nav.css')}}">
    {{-- End_CSS --}}
</head>
<body>
  {{-- SideBar --}}
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">กา</a>
        <a href="#">รา</a>
        <a href="#">มัง</a>
        <a href="#">อ้าก</a>
      </div>
      
      <!-- Use any element to open the sidenav -->
      <span onclick="openNav()">open</span>
      {{-- End_SideBar --}}
      <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
      
        <div class="box border" id="main">
          <div class="row">
            <div class="col border">
              <div class="d-flex flex-column">
                <div class="fs-6 fw-medium text-muted mb-1">
                  Windows Microsoft 2023 eiei
                </div>
                <div class="fs-4 fw-semibold">
                  Your Dashboard is updated
                </div>
              </div>
            </div>
            <div class="col border">
              <div class="d-flex flex-row justify-content-end mb-3">
                <div class="search">
                  <form class="">
                    <div class="input-group" >
                      <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1" id="search-input">
                      <span class="input-group-text btn btn-success rounded-3" id="basic-addon1"><i class="bi bi-search"></i></span>
                    </div>
                  </form>
                </div>
                <div class="home">
                  <button type="button" class="btn btn-primary "><i class="bi bi-house"></i></button>
                </div>
                <div class="user">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-person"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
                
                              
            </div>
          </div>
        </div>
      
    @yield('content_body')

    {{-- Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{asset('js/side_nav.js')}}"></script>
    <script src="{{asset('js/search.js')}}"></script>
    {{-- End_Script --}}
</body>
</html>