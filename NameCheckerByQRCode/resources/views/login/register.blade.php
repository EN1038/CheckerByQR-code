
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

{{-- font --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet"><link rel="stylesheet" href="{{asset('css/style_glassbox.css')}}">
<script src="https://kit.fontawesome.com/4af39d0791.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style_bg_success.css')}}">
<link rel="stylesheet" href="{{asset('css/style_form.css')}}">
<style>
    .edit-icon{
        font-size: 400px;
        margin: 70px 10px 100px 10px;
        
    }

    .edit-text{
        font-size: 60px
    }
</style>
<div class="contrainer">
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
      <div class="d-flex flex-column justify-content-center align-items-center h-100 w-100">
        <div class="d-flex justify-content-center align-items-center w-75 w-xs-50">
            <div class="glassmorphism-body p-5">
                <p class="fs-1 fw-bold text-primary text-center">สมัครเข้าใช้งานระบบ Qr-Code Checker</p>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <form action="{{route('register_post')}}" class="mb-3 w-100 w-xs-75" method="POST">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label fs-4 text-primary">กรอกรหัสนักศึกษา</label>
                            <input name="s_id" type="text" class="form-control text-center" placeholder="รหัสนักศึกษา">
                        </div>
                        <div class="mt-3">
                            <label class="form-label fs-4 text-primary">กรุณาใส่ชื่อจริง</label>
                            <input name="name" type="text" class="form-control text-center" placeholder="ชื่อจริง">
                        </div>

                        <div class="mt-3">
                            <label class="form-label fs-4 text-primary">รหัสผ่าน</label>
                            <input name="password" type="password" class="form-control text-center" placeholder="รหัสผ่าน">
                        </div>
                        <div class="mt-3">
                            <label class="form-label fs-4 text-primary">ยืนยันรหัสผ่าน</label>
                            <input name="confirm_password" type="password" class="form-control text-center" placeholder="ยืนยันรหัสผ่าน">
                        </div>
                        <div class="d-flex flex-column flex-xl-row justify-content-between">
                            <div class=" mb-3 mt-4">
                                <button type="submit" class="btn  btn-primary  w-100 fs-5 px-4 rounded-5"><i class="fa-solid fa-registered"></i> ลงทะเบียนเข้าใช้งาน</button>
                            </div>
                            <div class=" mb-3 mt-0 mt-xl-4">
                                <a href="{{route('login_form')}}" class="btn btn-dark w-100 fs-5 px-4 rounded-5"><i class="fa-solid fa-right-to-bracket"></i> กลับไปหน้าเข้าสู่ระบบ</a>
                            </div>
                        </div>

                    </form>
                    
                </div>
                
            </div>
        </div>
         {{-- Footer --}}
    <footer class=" container-fluid py-3 content-segment">
        <div class="d-flex align-items-center justify-content-center small">
            <div class="text-muted text-center">NSRU Nakhon Sawan Rajabhat University <br> CIT
                NSRU All Rights Reserved</div>
        </div>
    </footer>
    {{-- End_Footer --}}
      </div>
    
</div>




