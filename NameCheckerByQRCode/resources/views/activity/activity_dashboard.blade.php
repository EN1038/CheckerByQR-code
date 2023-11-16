@extends('layouts.layout_dashboardmodren')
@section('content_body')
 <div class="containter">
    <div class="header text-center mt-2 mb-5">
        <h1 class="text-greenlight fw-bold">Choose Mode Scanes QR-Code</h1>
    </div>
    <div class="buttom my-3 d-flex flex-row align-items-center text-center">
        <div class="col "><h2>Form One</h2></div>
        <div class="col">
            <button class="enchagne-botton" id="toggleButton" onclick="toggleDivs()"> 
                <i class="fa-solid fa-arrow-left"></i> 
            </button>
            <p class="mt-2 fs-8 fw-light text-muted">Hold this button for Chagne Modes</p>
         </div>
        <div class="col "><h2>Form Two</h2></div>
    </div>

<div id="Form1" >
    <div class="d-flex flex-column">
        <div class="col text-center mt-5 mb-3">
            <span class="fw-bold fs-4">A fast and simple URL shortener</span>
        </div>
        <div class="col paddin-form">
            <form>
                <div class="mb-3 ">
                  <label for="InputLinkShortURL" class="form-label fs-7"><span class="fw-bold fs-7">ระบุโค้ดย่อได้</span><span class="text-success fs-7 fw-lighter"> ด้วยตัวอักษรตั้งแต่ 5 ตัวขึ้นไป</span> เช่น shorturl, artic</label>
                  <input type="text" class="form-control text-center p-2 border-3" id="InputLinkShortURL" placeholder="ถ้าไม่ระบุโค้ดย่อ ระบบจะสุ่มอัตโนมัติ">
                </div>
                <label for="InputLinkShortURL" class="form-label fs-7 text-decoration-none"><span class="fw-bold fs-7">ระบุลิ้งเต็ม</span> เช่น https://aritc.nsru.ac.th/test</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control border-3" id="InputLinkURL" aria-describedby="button-addon2">
                    <button class="button-shortenURL" type="submit" id="button-addon2"><i class="fa-solid fa-link me-2"></i>Shorten URL</button>
                </div>
              </form>
        </div>
        <div class="col ps-5 my-4">
            <span class="fs-8">Long URL : <a href="#" class="backgroud-colour-Longcode">https://s.nsru.ac.th/</a></span><br>
            <span class="fs-8">Short Code : <span class="backgroud-colour-Shortcode" >Apple</span> </span>
        </div>
        <div class="row text-center px-5">
            {{-- Strat-CardQR-Code --}}
            <div class="col-4 mb-4 px-3">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_mobile_English_Wikipedia.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <span class="card-text">https://s.nsru.ac.th/name</span>
                    </div>
                    <div class="card-footer">
                        <span><a href="" class="icon-linkcopy-card"><i class="fa-solid fa-copy me-2"></i></a></span>
                        <span><a href="" class="icon-linknewpage-card"><i class="fa-solid fa-arrow-rotate-right"></i></a></span>
                    </div>
                  </div>
            </div>
            {{-- End-CardQR-Code --}}
            {{-- Strat-CardQR-Code --}}
            <div class="col-4 mb-4 px-3">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_mobile_English_Wikipedia.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <span class="card-text">https://url.nsru.ac.th/name</span>
                    </div>
                    <div class="card-footer">
                        <span><a href="" class="icon-linkcopy-card"><i class="fa-solid fa-copy me-2"></i></a></span>
                        <span><a href="" class="icon-linknewpage-card"><i class="fa-solid fa-arrow-rotate-right"></i></a></span>
                    </div>
                  </div>
            </div>
            {{-- End-CardQR-Code --}}
            {{-- Strat-CardQR-Code --}}
            <div class="col-4 mb-4 px-3">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_mobile_English_Wikipedia.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <span class="card-text">https://go.nsru.ac.th/name</span>
                    </div>
                    <div class="card-footer">
                        <span><a href="" class="icon-linkcopy-card"><i class="fa-solid fa-copy me-2"></i></a></span>
                        <span><a href="" class="icon-linknewpage-card"><i class="fa-solid fa-arrow-rotate-right"></i></a></span>
                    </div>
                  </div>
            </div>
            {{-- End-CardQR-Code --}}
          </div>
    </div>
    
   
</div>

<div id="Form2">
    <h2>Content for Div 2</h2>
    <p>This is some text inside Div 2.</p>
</div>
 </div>


@endsection