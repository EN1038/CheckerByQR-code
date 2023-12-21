@extends('layouts.layout_dashboardmodren')
@section('content_body')
  <link rel="stylesheet" href="{{ asset('css/style_day_dashboard.css') }}">
    
  

    <div class="d-flex flex-column">
        <p class="fs-3 fw-bold mx-0 mb-4 mt-5 text-center text-success"><i class="fa-solid fa-bars-staggered"></i> รายชื่อวันที่เช็คกิจกรรม</p>
    <div class="col d-flex px-5 detailSetting">
        <div class="col text-start ">
        @if($activity_setting->PeopleSideMode->id == 2)
        <p>อณุญาติการเข้าใช้งานจาก : <span>บุคคลภายนอก</span></p>
        @elseif ($activity_setting->PeopleSideMode->id == 1)
        <p>อณุญาติการเข้าใช้งานจาก : <span>บุคคลภายใน</span></p>
        @endif
        </div>
        <div class="col text-start">
            @if ($activity_setting->ListOfNameMode->id == 2)
        <p>ระบบการเช็คชื่อแบบ : <span>ไม่มีรายชื่อ</span></p>
        @elseif ($activity_setting->ListOfNameMode->id == 1)
        <p>ระบบการเช็คชื่อแบบ : <span>มีรายชื่อ</span></p>
        @endif
        </div>
    </div>
    <div class="col">
       
    </div>
    <div class="col detailActivity">
        <h5>รายละเอียดกิจกรรม : </h5>
        <p id="detailText">{{$activity_description}}</p>
    </div>
    <div class="col d-flex justify-content-end">
        
        <button data-bs-toggle="modal" type="button"  data-bs-target="#showQRcode"   onclick="get_URL()" class="btn btn-primary btn-delete me-3"><i class="fa-solid fa-qrcode"></i> QR-Code</button>
        <a onclick="deleteSelected()" class="btn btn-danger btn-delete me-3"><i class="fa-solid fa-trash-can "></i> ลบกิจกรรม</a>
        <a href="{{route('show_activity_dashboard',request()->route()->id)}}" class="btn btn-success me-5 rounded-3 btn-setting" id="btnSetting"><i class="fa-solid fa-list-check"></i> ตั้งค่ากิจกรรม</a>
    </div>
    
    </div>
  
    {{-- <div>บุคคล{{$activity_setting->PeopleSideMode->people_side_name}}</div> --}}

    <div class="container px-5 pb-4 pt-3">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col" style="width: 30px;"><i class="fa-solid fa-list-check"></i></th>
                    <th scope="col" style="width: 30px;">ID</th>
                    <th scope="col">ชื่อวันที่</th>
                    <th scope="col">วัน</th>
                    <th scope="col">เวลาเริ่ม</th>
                    <th scope="col">เวลาจบ</th>
                    <th scope="col">ดูรอบเช็คชื่อ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activity_day_array as $row)
                    @foreach ($row as $data)
                        <tr class="get_IdTr" id="idTr{{ $data->id }}" onclick="clickTr('{{ $data->id }}')">
                            <td scope='row'><input type="checkbox" class="select-row form-check-input" id="idInput{{ $data->id }}"></td>
                            <td scope="row">{{ $data->id }}</td>
                            <td scope="row">{{ $data->form_name }}</td>
                            <td>{{ $data->date }}</td>
                            <td>{{ $data->time_start }}</td>
                            <td>{{ $data->time_expried }}</td>
                            <td><a href="{{route('show_round_check',['activity_id'=>request()->route()->id, 'date_id'=>$data->id])}}" class="btn btn-success btn-viewlistround"><i class="fa-solid fa-play fa-rotate-270"></i> ดูรอบเช็คชื่อ</a></td>
                            
                        </tr>
                    @endforeach
                @endforeach


            </tbody>
        </table>

          
    </div>




<script src="{{ asset('js/activity/activity_day_dashboard.js') }}"></script>
@endsection
<div class="modal fade" id="showQRcode" tabindex="-1" aria-labelledby="showQRcode" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header p-0 border-0 ">
          <h5 class="modal-title title_modal" id="showQRcode"><i class="fa-solid fa-qrcode fa-beat-fade"></i> QR-CODE</h5>
          <button type="button" class="btn-close fs-6 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center">
            @php
                $url = env('IPV4_HOST')."/activity/form-checker/".request()->route()->id
            @endphp
          
          <img src="{{url('https://api.qrserver.com/v1/create-qr-code/?size=400x400&data='.$url)}}" alt="">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>