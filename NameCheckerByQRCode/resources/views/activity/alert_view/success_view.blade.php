
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
        <div class="d-flex justify-content-center align-items-center w-75 ">
            <div class="glassmorphism-body-circle p-5">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <i class="fa-solid fa-clipboard-check fa-flip edit-icon text-primary"></i>
                    <p class="edit-text text-primary fw-bold">เช็คชื่อสำเร็จ !</p>
                    <div class="d-flex justify-content-center align-items-center my-2">
                        <i class="fa-solid fa-clock fa-shake text-primary fs-1"></i>
                        <div id="current-time" class="col text-primary ps-4 fs-1">00:00:00</div> 
                    </div>
                    
                </div>
                
            </div>
        </div>
      </div>
    
</div>
<script src='{{asset('js/inputFormQr/inputFormQr.js')}}'></script>