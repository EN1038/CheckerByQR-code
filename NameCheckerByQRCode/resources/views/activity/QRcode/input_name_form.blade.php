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
        <div class="d-flex justify-content-center align-items-center w-75 ">
            <div class="glassmorphism-body p-5">
                <p class="costome-font-title fw-bold text-center text-success"><i class="fa-solid fa-lock-open" id="unlock"></i><i class="fa-solid fa-lock d-none" id="lock"></i> ฟอร์มกรอกชื่อ</p>
                <p class="costome-font-activity fw-semi text-center text-success">กิจกรรม : {{$activity_data}}</p>
                <form action="{{route('input_form_checker_post',request()->route()->activity_id)}}" method="post">
                    @csrf
                    <div class="custom-input my-5">
                        <label for="floatingInput">กรุณากรอกชื่อจริง</label>
                        <input type="input" name="name" class="form-control" id="inputFirstName" placeholder="กรุณากรอกชื่อจริง">
                        <p id="text-alert-firstname" class="text-alert"></p>
                        <label for="floatingInput">กรุณากรอกนามสกุล</label>
                        <input type="input" name="last_name" class="form-control" id="inputLastName" placeholder="กรุณากรอกนามสกุล">
                        <p id="text-alert-lastname" class="text-alert"></p>
                      </div>
                      <div class="d-flex justify-content-center align-items-center">
                        <div class="col-1"><i class="fa-solid fa-clock fa-shake costome-icon-clock"></i></div>
                        <div id="current-time" class="col current-time ps-4">00:00:00</div>
                        <div class="col d-flex justify-content-end">
                            <button type="submit" class="btn btn-success custom-btn" id="btn-submit" disabled>บันทึก</button>
                        </div>
                      </div>
                 </form>
            </div>
        </div>
      </div>
    
</div>
<script src='{{asset('js/inputFormQr/inputFormQr.js')}}'></script>