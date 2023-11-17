@extends('layouts.layout_dashboardmodren')
@section('content_body')
<div id="Form1" class="containter">
    <div class="d-flex flex-column mt-5 mb-3">
        <div class="col text-center mb-3">
            <span class="fw-bold fs-4 m-">Create Form Name</span>
        </div>
        <div class="col paddin-form-qrcode">
            <form action="#">
                <div class="mb-3 ">
                    <label for="InputLinkShortURL" class="form-label fs-7 text-decoration-none"><span class="fw-bold fs-7">สร้างชื่อฟอร์ม</span> เช่น กิจกรรมมากมายไม่มีอะไรจะทำ</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control border-3" id="InputLinkURL" aria-describedby="button-addon2">
                    <button class="button-CreateForm" type="submit" id="button-addon2"><i class="fa-solid fa-arrow-up-from-bracket me-2 ms-1"></i>Create Form</button>
                </div>
                </div>
            </form>
        </div>
        {{-- P-Bomb --}}
        <div class="col text-center">
            <span class="fw-bold fs-4">A fast and simple URL shortener</span>
        </div>
        <div class="col paddin-form-qrcode">
            <form action="#">
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
          {{-- End-P-Bomb --}}
    </div>
</div>
@endsection