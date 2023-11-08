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
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
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
        <div class="fs-4 fw-semibold">
          <a href="#" class="ms-3 text-success fs-3">QR-Checker</a>
        </div>
        <div class="d-flex flex-row align-items-center my-3">
          <div class="col-3 ms-4 ps-2"><i class="bi bi-person-circle text-white scale"></i></div>
          <div class="col text-white text-start scale-fontname p-0">Name : Unknow <br> 63113532000 </div>
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>
        <a href="#">สร้างกิจกรรมหรือรายวิชา</a>
        <a href="#">เช็คกิจกรรมหรือรายวิขา</a>
        <a href="#">ดูผลสถิติของการเข้าร่วม</a>
        <a href="#">คิดไม่ออกอ้าก</a>
      </div>
      
      <!-- Use any element to open the sidenav -->
      <span onclick="openNav()">open</span>
      {{-- End_SideBar --}}
      <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
      
        <div class="box" id="main">
          <div class="row border-bottom">
            <div class="col-4 ">
              <div class="d-flex flex-column">
                <div class="fs-6 fw-medium text-muted mb-1">
                  Windows Microsoft 2023 eiei
                </div>
                <div class="fs-4 fw-semibold">
                  <p class="m-0 text-success">Your Dashboard is updated</p>
                </div>
              </div>
            </div>
            <div class="col ">
              <div class="d-flex flex-row justify-content-end ">
                
                <div class="home me-3 py-3">
                  <button type="button" class="btn btn-light "><i class="bi bi-house"></i></button>
                </div>
                <div class="search mx-3 py-3">
                  <form class="">
                    <div class="input-group" >
                      <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1" id="search-input">
                      <span class="input-group-text btn btn-light rounded-3" id="basic-addon1"><i class="bi bi-search"></i></span>
                    </div>
                  </form>
                </div>
                <div class="user ms-3 py-4">
                  <a href="" class="link-body-emphasis link-offset-2 link-underline-opacity-0 mx-3">Login</a>
                  <a href="" class="link-body-emphasis link-offset-2 link-underline-opacity-0 mx-2">Register</a>
                </div>
                
              </div>                
            </div>
          </div>
          @yield('content_body')
          <footer class="py-4 tall">
                <div class="d-flex align-items-center justify-content-center small">
                    <div class="text-muted ">NSRU Nakhon Sawan Rajabhat University <br> Copyright &copy; 2023 CIT NSRU All Rights Reserved</div>
                </div>
        </footer>
        </div>

    {{-- Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{asset('js/side_nav.js')}}"></script>
    <script src="{{asset('js/search.js')}}"></script>
    {{-- End_Script --}}
</body>
</html>