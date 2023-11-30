@extends('layouts.layout_dashboardmodren')
@section('content_body')
<div class="text-center">
    <h1 class="text-greenlight"><i class="fa-solid fa-gear"></i>ตั้งค่ากิจกรรม</h1>
    <span class="fw-bold fs-2">{{$activity_data->activity_name}}</span>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            {{-- activity detail   --}}
            <form action="{{route('make-checker-form',request()->route()->id)}}" class="row" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="label-form">รายละเอียดกิจกรรม</label>
                    <textarea class="form-control" name="activity_detail" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3">
                    <span class="fw-bold fs-5">วันจัดกิจกรรม</span>
                </div>
                <div class="mb-3">
                    <span class="btn btn-success" onclick="addInput()">สร้างวันเช็คชื่อ</span>
                </div>
                    <div id="inputContainer">
                        
                
                    </div>
                <button class="btn btn-success">SUBMIT</button>
            
            </form>

            {{-- ------------------- --}}
        </div>
    </div>
</div>

@endsection

