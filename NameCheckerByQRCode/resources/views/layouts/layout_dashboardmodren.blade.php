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
    {{-- End_SideBar --}}
    {{-- Start_main --}}
    <div class="box" id="main">
        {{-- Start_sidenav --}}
        <div class="row border-bottom">
          <div class="col-1 p-0 text-center">
            <button class="border-0 btn btn-light scale-icon-nav" id="openNavButton" onclick="toggleNav()"> 
              <i class="bi bi-caret-left-fill" id="closeNavIcon" onclick="closeNav()"></i> 
              <i class="bi bi-caret-right-fill p-0 " id="openNavIcon" onclick="openNav()"></i> 
            </button>
          </div>
            <div class="col-4 p-0">
                <div class="d-flex flex-column">
                    <div class="fs-6 fw-medium text-muted mb-1">
                        Apple Banana 2023 eiei
                    </div>
                    <div class="fs-4 fw-semibold">
                        <p class="m-0 text-success">Your Dashboard is updated</p>
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
                        <a href=""
                            class="link-body-emphasis link-offset-2 link-underline-opacity-0 mx-3">Login</a>
                        <a href=""
                            class="link-body-emphasis link-offset-2 link-underline-opacity-0 mx-2">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- End_sidenav --}}
        {{-- body --}}
        @yield('content_body')
        {{-- End_body --}}
        {{-- Footer --}}
        <footer class=" container-fluid py-3 border-top">
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
    {{-- End_Script --}}
</body>

</html>
