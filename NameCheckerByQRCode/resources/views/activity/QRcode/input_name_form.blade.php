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
      <div class="d-flex flex-column justify-content-center align-items-center h-100 w-100 border border-danger">
        <div class="d-flex justify-content-center align-items-center border border-success w-75 ">
            <div class="glassmorphism-body p-5">
                <p class="fs-1 fw-bold text-center text-success"><i class="fa-solid fa-lock-open"></i> ฟอร์มกรอกชื่อ</p>
                <p class="fs-2 fw-semi text-center text-success">กิจกรรม : {{$activity_data}}</p>
                <form action="{{route('input_form_checker_post',request()->route()->activity_id)}}" method="post">
                    @csrf
                    <div class="custom-input my-5">
                        <label for="floatingInput">กรุณากรอกชื่อจริงและนามสกุล</label>
                        <input type="input" name="name" class="form-control" id="floatingInput" placeholder="กรุณากรอกชื่อจริงและนามสกุล">
                        
                      </div>
                 <button type="submit" class="btn btn-success custom-btn">บันทึก</button>
                 </form>
            </div>
        </div>
      </div>
    
</div>