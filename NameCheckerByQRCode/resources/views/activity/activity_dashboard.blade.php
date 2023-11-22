@extends('layouts.layout_dashboardmodren')
@section('content_body')
    <form action="#">
        <div class="row ">
            <form action="#">
            <div class="text-center">
                <h1 class="text-greenlight"><i class="fa-solid fa-gear"></i>ตั้งค่ากิจกรรม</h1>
            </div>
            <div class="col-6 row">
                
                <div class="col-3 text-center pt-2">
                    <span >วันที่</span>
                </div>
                <div class="col-9">
                    <div class="input-group date mb-2 ">
                        <input type="text" class=" form-control datepicker border border-end-0 bg-input" placeholder="เลือกวันที่" aria-describedby="addInputButton">
                        <button class="btn-fs-date-fisrt border border-start-0 " id="addInputButton"><i class="fa-solid fa-circle-plus" id="icon-addinput"></i></button> 
                    </div> 
                    <div id="inputContainer1">

                    </div> 
                </div>
            </div>
            <div class="col-6 row">
                <div class="col-3 text-center pt-2">
                    <span>เวลาเริ่ม</span>
                </div>
                <div class="col-3" id="containerIpStart">
                    <div class="mb-2">
                        <input type="time" class="form-control input-time-start mb-2 bg-input" id="startTimeId">
                    </div>
                </div>
                <div class="col-3 text-center pt-2">
                    <span>เวลาจบ</span>
                </div>
                <div class="col-3" id="containerIpOut">
                    <div class="mb-2">
                        <input type="time" class="form-control input-time-out mb-2 bg-input" id="endTimeId">
                    </div>
                </div>
            </div>
            <div class="col">
                
            </div>
         </form>
        </div>
    </form>
    
@endsection