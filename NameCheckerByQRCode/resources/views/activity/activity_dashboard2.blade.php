@extends('layouts.layout_dashboardmodren')

@section('content_body')


<div class="text-center mt-5">
    <h1 class="text-greenlight fw-bold"><i class="fa-solid fa-gear fa-spin"></i> ตั้งค่ากิจกรรม</h1>
    <span class="fw-light fs-2">ชื่อกิจกรรม : {{$activity_data->activity_name}}</span>
</div>

<div class="container">
    
    <div class="row">
        <div class="col">
            {{-- activity detail   --}}
            <form action="{{route('make-checker-form',request()->route()->id)}}" class="row" method="post"  id="formNaJa" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mt-4">
                    <label class="label-form fs-5">รายละเอียดกิจกรรม <i class="fa-regular fa-message"></i></label>
                    <textarea class="form-control rounded-4" name="activity[detail]" id="" cols="30" rows="5"></textarea>
                </div>
                {{-- <div class="buttom my-5 d-flex flex-row align-items-center text-center">
                    <div class="col fw-bold text-success" id="text1"><h2>บุคคลภายใน</h2></div>
                    <div class="col ">
                      
                            <i class="enchagne_button btn btn-success fa-solid fa-arrow-left" id="changeSystem" value="0"></i> 
                
                        <p class="mt-2 fs-8 fw-light text-muted">Click this button for Chagne Modes</p> --}}
                        <input type="hidden" name="activity[setting][side]" id="getValueMode_sys" value="2" class="">
                     {{-- </div>
                    <div class="col fw-bold"  id="text2"><h2>บุคคลภายนอก</h2></div>
                </div> --}}

                {{-- <div class="d-flex flex-column mx-5" id="prInSide">
                    <a class="fw-bold fs-3 text-decoration-none">บุคคลภายใน</a>  
                <div class="col d-flex flex-row align-items-center justify-content-center">
                    <div class="form-check col ps-5">
                        <input class="form-check-input fs-5 chooseModeTypeDatasIS" type="radio" name="activity[setting][have_list_of_name]" id="radiosISHaveData" value="1">
                        <label class="form-check-label fs-5" for="radiosISHaveData">
                          มีรายชื่อ
                        </label>
                      </div>
                      <div class="form-check col">
                        <input class="form-check-input fs-5 chooseModeTypeDatasIS" type="radio" name="activity[setting][have_list_of_name]" id="radiosISnoHaveData" value="2">
                        <label class="form-check-label fs-5" for="radiosISnoHaveData">
                          ไม่มีรายชื่อ
                        </label>
                      </div>
                </div>
                <div class="col my-4 d-none" id="div_HavedataIS">
                    <span class="fw-bold">ข้อมูลมีรายชื่อ</span>
                    <i class="fa-solid fa-question fa-beat-fade fs-5 fw-bold show-imageHelper" id="imgHelpIS"></i>
                    <div class="my-2 text-center d-none" id="img-helperIS">
                        <img src="{{asset('img/image-login.gif')}}" class="border border-danger">
                    </div>
                      
                    <div class="my-3">
                        <label for="formFileIS" class="form-label">โปรดเลือกไฟล์ Excel จากในเครื่อง</label>
                        <input class="form-control w-75 mb-2 ms-4 formFileList" type="file" name="activity[excel]"  id="" accept=".xlsx,xls">
                        <div id="divFileIS" class="ms-4"> </div>
                        <p>ตัวอย่างรูปแบบไฟล์Excel : <a href="#"> กดเพื่อดาวโหลดไฟล์ตัวอย่าง </a></p>
                    </div>
                </div>
                <div class="col d-none my-4 d-none" id="noDiv_HavedataIS">
                    <span class="fs-5">สังกัด : </span>
                    <select class="select-upgrade select-agency" id="mySelect">
                        <option value="เลือกสังกัดหรือเลือกทั้งหมด">เลือกสังกัด หรือ เลือกทั้งหมด</option>
                    </select>
                    <div id="div_Select" class="div_select_support">

                    </div>
                      <div id="myInput" class="box-inputOp border w-75"></div>
                </div>
            </div> --}}

                <div class="d-flex flex-column mx-5" id="prOutSide">
                    {{-- <a class="fw-bold fs-3 text-decoration-none">บุคคลภายนอก</a>   --}}
                    <a class="fw-bold fs-3 text-decoration-none mt-5 mb-3">มีข้อมูลรายชื่อหรือไม่ <i class="fa-solid fa-circle-question"></i></a>  
                <div class="col d-flex flex-row align-items-center justify-content-start pt-3">
                    <div class="form-check col-3 ps-5">
                        <input class="form-check-input fs-5 chooseModeTypeDatasOS" type="radio" name="activity[setting][have_list_of_name]" id="radiosOSHaveData" value="1">
                        <label class="form-check-label fs-5" for="radiosOS">
                          มีรายชื่อ
                        </label>
                      </div>
                      <div class="form-check col-3">
                        <input class="form-check-input fs-5 chooseModeTypeDatasOS" type="radio" name="activity[setting][have_list_of_name]" id="radiosOSnoHaveData" value="2">
                        <label class="form-check-label fs-5" for="radiosOS">
                          ไม่มีรายชื่อ
                        </label>
                      </div>
                </div>
                <div class="col my-4 d-none" id="div_HavedataOS">
                    <span class="fw-bold fs-5">ข้อมูลมีรายชื่อ</span>
                    <i class="fa-solid fa-question fa-beat-fade fs-5 fw-bold show-imageHelper" id="imgHelpOS"></i>
                    <div class="my-2 text-center d-none" id="img-helperOS">
                        <img src="{{asset('img/cat-ชานมไข่มุก.gif')}}" class="border border-danger">
                    </div>
                      
                    <div class="my-3" >
                        <label for="formFileOS" class="form-label">โปรดเลือกไฟล์ Excel จากในเครื่อง</label>
                        <input class="form-control w-75 mb-2 ms-4 formFileList" type="file" id="" name="excel" value="" accept=".xlsx,xls">
                        <div id="divFileOS" class="ms-4"></div>
                        <p>ตัวอย่างรูปแบบไฟล์Excel : <a href="#"> กดเพื่อดาวโหลดไฟล์ตัวอย่าง </a></p>
                    </div>
                </div>
                <div class="col my-4 d-none" id="noDiv_HavedataOS">
                    <span class="fw-bold fs-5">ไม่มีข้อมูลมีรายชื่อ</span>
                    <div class="form-check ms-3 mt-2">
                        {{-- <input class="form-check-input showImg_Login" type="checkbox" value="1" id="checkForm">
                        <label class="form-check-label" for="checkForm">
                          เก็บแบบฟอร์ม
                        </label>
                        <div class="my-2 d-none" id="showImgLogin">
                            <img src="{{asset('img/image-login.gif')}}" alt="">
                        </div> --}}
                        <p class="fs-4">กรอกชื่อและนามสกุล</p>
                      </div>
                      {{-- <div class="form-check ms-3 mt-2">
                        <input class="form-check-input mt-3" type="checkbox" value="2" id="checkThaID">
                        <label class="form-check-label thaID" for="checkThaID">
                          <span class="">Tha<span class="yellow-text"><i class="fa-solid fa-person"></i>D</span></span>
                        </label>
                      </div> --}}
                </div>
                <div class="col mt-3 mb-4">
                    <span class="fw-bold fs-4 text-green">วันจัดกิจกรรม <i class="fa-regular fa-calendar-days"></i></span>
                </div>
                
            </div>
            <div id="inputContainer">
                        {{-- java create --}}
            </div>
            <div class="d-flex justify-content-start aling-items-center mb-5">
                <div class="col d-flex">
                    <a class="scrollButton btnNewInput_GetId" id="scrollButton"><i class="fa-solid fa-calendar-plus"></i> สร้างวันเช็คชื่อ</a>
                </div>
                <div class="col d-flex flex-row-reverse">
                    <button type="submit" class="btn-submit-setting " id="submit"><i class="fa-solid fa-cloud-arrow-up"></i> บันทึกการตั้งค่า</button>
                </div>
            </div>      
            </form>
        </div>
    </div>
</div>


<script src="{{asset('js/activity/activity_setting.js')}}"></script>
@endsection
