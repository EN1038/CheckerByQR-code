
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

{{-- font --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet"><link rel="stylesheet" href="{{asset('css/style_glassbox.css')}}">
<script src="https://kit.fontawesome.com/4af39d0791.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style_bg.css')}}">
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
                <p class="fs-1 fw-bold text-success text-center">เข้าสู่ระบบ</p>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <form action="{{route('login_post')}}" class="mb-3 w-100 w-xs-75" method="POST">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label fs-4 text-success">รหัสนักศึกษา</label>
                            <input name="student_id" type="text" class="form-control text-center rounded-5" placeholder="รหัสนักศึกษา">
                        </div>
                        <div class="mt-3">
                            <label class="form-label fs-4 text-success">รหัสผ่าน</label>
                            <input name="password" type="password" class="form-control text-center rounded-5" placeholder="รหัสนักศึกษา">
                        </div>
                        <div class="d-flex flex-column flex-xl-row justify-content-between">
                            <div class=" mb-3 mt-4">
                                <button type="submit" class="btn btn-success w-100 fs-5 px-4 rounded-5"><i class="fa-solid fa-right-to-bracket"></i> เข้าสู่ระบบ</button>
                            </div>
                            <div class=" mb-3 mt-0 mt-xl-4">
                                <a href="{{route('register_form')}}" class="btn btn-dark w-100 fs-5 px-4 rounded-5"><i class="fa-solid fa-registered"></i> สมัครเข้าใช้งาน</a>
                            </div>
                        </div>
                        
                    </form>
                    
                </div>
                
            </div>
        </div>
      </div>
    
</div>


