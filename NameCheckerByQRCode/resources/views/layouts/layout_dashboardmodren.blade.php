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
    <script src="https://kit.fontawesome.com/4af39d0791.js" crossorigin="anonymous"></script>
    {{-- End_Icon_Bootstraps --}}
    <!-- ตัวอย่างการโหลด jQuery และ jQuery UI จาก CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/locales/bootstrap-datepicker.th.min.js" integrity="sha512-cp+S0Bkyv7xKBSbmjJR0K7va0cor7vHYhETzm2Jy//ZTQDUvugH/byC4eWuTii9o5HN9msulx2zqhEXWau20Dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- sweetalert --}}
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles_nav.css') }}">
    <link rel="stylesheet" href="{{asset('css/style_webslide.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_bg.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_glassbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_genQRcode.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_table.css')}}">
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
    <div id="mySidenav" class="sidenav">
      <div class="d-flex flex-column text-white p-3 costome-hight">
        <div class="d-flex flex-row mb-4 ">
          <div class="col-4 text-center">
            <i class="bi bi-qr-code-scan scale-logos"></i>
          </div>
          <div class="col fs-5 fw-bold d-flex align-items-center text-greenlight">
            <span class="divToHide ">QR-CHECKER</span>
          </div>
        </div>
        <div class="d-flex flex-row align-items-center mb-3">
          <div class="col-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Unknown_person.jpg/694px-Unknown_person.jpg" alt="" class="user-img-scale rounded-3" id="profiles">
          </div>
          <div class="col-8 " >
            <div class="d-flex flex-column divToHide" >
              @if(Auth::check())
              <div class="col"><span >{{Auth::user()->name}}</span></div>
              <div class="col"><span >{{Auth::user()->student_id}}</span></div>
              
              @else
              <div class="col"><span >USERNAME</span></div>
              <div class="col"><span >STUDENT_ID</span></div>
              @endif
            </div>
          </div>
        </div>
        <div class="text-start ps-1 mb-2">
          <span class="text-title ">TITLE</span>
        </div>
        <a href="" class="text-decoration-none">
          <div class="hover-btn d-flex flex-row mb-1 rounded-3  align-items-center">
            <div class="col-2 fs-4 text-center">
              <i class="bi bi-plus-circle-fill "></i>
            </div>
            <div class="col d-flex align-items-center justify-content-center fs-7 ">
              <span class="divToHide ">สร้างกิจกรรมและรายวิชา</span>
            </div>
          </div>
        </a>
        <a href="{{route('show_activity_profile')}}" class="text-decoration-none">
          <div class="hover-btn d-flex flex-row mb-1 rounded-3  align-items-center">
            <div class="col-2 fs-4 text-center">
              <i class="bi bi-clipboard2-check-fill"></i>
            </div>
            <div class="col d-flex align-items-center justify-content-center fs-7">
              <span class="divToHide ">เช็คกิจกรรมหรือรายวิชา</span>
            </div>
          </div>
        </a>
        <a href="#" class="text-decoration-none">
          <div class="hover-btn d-flex flex-row mb-1 rounded-3  align-items-center">
            <div class="col-2 fs-4 text-center">
              <i class="bi bi-pie-chart-fill"></i>
            </div>
            <div class="col d-flex align-items-center justify-content-center fs-7">
              <span class="divToHide ">ดูผลสถิติของการเข้าร่วม</span>
            </div>
          </div>
        </a>
      </div>
      <div class="d-flex flex-column text-white px-3 ">
        <div class="text-start ps-1 mb-2">
          <span class="text-title ">COSTOM</span>
        </div>
        <a href="#" class="text-decoration-none">
          <div class="hover-btn-logout d-flex flex-row rounded-3  align-items-center">
              <div class="col-2 fs-4 text-center">
                <i class="bi bi-box-arrow-left"></i>
              </div>
              <div class="col d-flex align-items-center justify-content-center fs-7">
                <span class="divToHide ">ออกจากระบบ</span>
              </div>
          </div>
        </a>
      </div>
    </div>
    {{-- End_SideBar --}}
    {{-- Start_main --}}
    <div class="box " id="main">
        {{-- Start_sidenav --}}
        <div class="row border-bottom content-segment">
            <div class="col-3 p-0">
              <div class="fs-4 fw-semibold">
                <span class="text-end" id="openNavButton" onclick="toggleNav()" style="cursor: pointer;">
                  <span class="scale-icon-nav " id="openNavIcon" onclick="openNav()"> 
                    <i class="bi bi-caret-right-fill" ></i> 
                  </span>
                  <span class="scale-icon-nav " id="closeNavIcon" onclick="closeNav()"> 
                    <i class="bi bi-caret-left-fill"></i>  
                  </span>
                </span>
                  <span class="m-0 text-success">QR-Code Checker</span>
              </div>
            </div>
            <div class="col-9 ">
                <div class="d-flex flex-row justify-content-end">
                    <div class="search mx-3 py-3">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control rounded-4" placeholder="Search" aria-label="Username"
                                    aria-describedby="basic-addon1" id="search-input">
                                <a href="#" class="input-group-text btn btn-link-dark rounded-3" id="basic-addon1"><i
                                        class="bi bi-search"></i></a>
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
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/activity/box_page.js')}}"></script>
    

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
    integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
    crossorigin="anonymous"></script> --}}
    <!-- ICONS -->
    
    {{-- End_Script --}}
</body>

</html>
