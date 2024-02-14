@extends('layouts.layout_dashboardmodren')
@section('content_body')
  <link rel="stylesheet" href="{{ asset('css/style_day_dashboard.css') }}">
    
  

    <div class="d-flex flex-column">
        <p class="fs-4 fs-sm-3 fw-bold mx-0 mb-4 mt-5 text-center text-success"><i class="fa-solid fa-bars-staggered"></i> กิจกรรม {{$activity_data->activity_name}}</p>
    <div class="col d-flex px-5 detailSetting">
    </div>
    <div class="col">
    
    </div>
    <div class="col detailActivity">
        <h5>รายละเอียดกิจกรรม : </h5>
        <p id="detailText">{{$activity_data->activity_description}}</p>
    </div>
    <div class="col d-flex justify-content-end mb-3">
        <a class="btn btn-info me-3 text-light btn-delete" href="{{route('show_dashboard_stat',request()->route()->id)}}"><i class="fa-solid fa-chart-simple py-2 px-1 py-sm-0 px-sm-0"></i> <span class="d-none d-sm-inline">สถิติ</span></a>
        <button data-bs-toggle="modal" type="button"  data-bs-target="#showQRcode" class="btn btn-primary btn-delete me-3"><i class="fa-solid fa-qrcode py-2 px-1 py-sm-0 px-sm-0"></i> <span class="d-none d-sm-inline">QR-Code</span></button>
        <a onclick="deleteSelected()" class="btn btn-danger btn-delete me-3"><i class="fa-solid fa-trash-can py-2 px-1 py-sm-0 px-sm-0"></i> <span class="d-none d-sm-inline">ลบกิจกรรม</span></a>
        <a href="{{route('show_edit_activity_dashboard',request()->route()->id)}}" class="btn btn-success me-3 me-sm-5 rounded-3 btn-setting " id="btnSetting"><i class="fa-solid fa-list-check py-2 px-1 py-sm-0 px-sm-0"></i> <span class="d-none d-sm-inline">ตั้งค่ากิจกรรม</span></a>
      </div>
    
    </div>
  
    {{-- <div>บุคคล{{$activity_setting->PeopleSideMode->people_side_name}}</div> --}}

    <div class="px-3 px-lg-5 pb-4 pt-3">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col" style="width: 30px;"><i class="fa-solid fa-list-check"></i></th>
                    <th scope="col" style="width: 30px;">ID</th>
                    {{-- <th scope="col">ชื่อวันที่</th> --}}
                    <th scope="col">วันที่</th>
                    <th scope="col">เวลาเริ่ม</th>
                    <th scope="col">เวลาจบ</th>
                    <th scope="col">รอบเช็คชื่อ</th>
                    <th scope="col">แก้ไข</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($activity_day_array as $row)
                    
                        <tr class="get_IdTr" id="idTr{{ $row->id }}" onclick="clickTr('{{ $row->id }}')">
                            <td >วันที่ {{ $row->date }}</td>
                            <td scope='row' data-label="CheckBox"><input type="checkbox" class="select-row form-check-input" id="idInput{{ $row->id }}"></td>
                            <td scope="row" data-label="ID Date">{{ $row->id }}</td>
                            {{-- <td scope="row">{{ $row->form_name }}</td> --}}
                            <td data-label="วันที่">{{ $row->date }}</td>
                            <td data-label="เวลาเริ่ม">{{ $row->time_start }}</td>
                            <td data-label="เวลาจบ">{{ $row->time_expried }}</td>
                            <td data-label="ดูรอบเช็คชื่อ"><a href="{{route('show_round_check',['activity_id'=>request()->route()->id, 'date_id'=>$row->id])}}" class="btn btn-success btn-viewlistround" ><i class="fa-solid fa-play fa-rotate-270"></i> รอบเช็คชื่อ</a></td>
                            <td data-label="แก้ไข">
                              <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="{{'#edit_btn_'.$row->id}}">
                                แก้ไข
                              </button>
                              <button class="btn btn-danger" onclick="confirmDelete(`{{route('date_delete',$row->id)}}`)" >ลบ</button>
                            </td>
                        </tr>
                   
                @endforeach


            </tbody>
        </table>
       
          
    </div>




<script src="{{ asset('js/activity/activity_day_dashboard.js') }}"></script>
 @endsection 


@foreach ($activity_day_array as $row )
<div class="modal fade" id="{{'edit_btn_'.$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold text-success" id="{{'edit_btn_'.$row->id}}">แก้ไขกิจกรรม</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('activity_edit_day_post',$row->id)}}" method="POST">
          @csrf
          
          <div class="mb-3">
            <label class="form-label text-success fw-bold">วันที่</label>
            <input name="date" type="date" class="form-control border border-success" value="{{$row->date}}">
          </div>
          {{-- <div class="mb-3">
            <label class="form-label text-success fw-bold">เวลาเริ่ม</label>
          <input name="time_start" type="time" class="form-control border border-success" value="{{$row->time_start}}">
          </div>
          <div class="mb-3">
            <label class="form-label text-success fw-bold">เวลาจบกิจกรรม</label>
          <input name="time_expried" type="time" class="form-control border border-success" value="{{$row->time_expried}}">
          </div> --}}
          <button type="submit" class="btn btn-success">Save changes</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
@endforeach




<div class="modal fade" id="showQRcode" tabindex="-1" aria-labelledby="showQRcode" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-down">
      <div class="modal-content">
        <div class="modal-header p-0 border-0 ">
          <h5 class="modal-title title_modal m-4" id="showQRcode"><i class="fa-solid fa-qrcode fa-beat-fade"></i> QR-CODE</h5>
          <button type="button" class="btn-close fs-6 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center">
            @php
                $url = env('IPV4_HOST')."/activity/form-checker/".request()->route()->id
            @endphp
          
          <img class="edit-qr-code" src="{{url('https://api.qrserver.com/v1/create-qr-code/?size=450x450&data='.$url)}}" alt="" id="qr_code" target_black>
          
        </div>
        <div class="modal-footer border-0">
          <a type="button" class="btn btn-success" onclick="downloadQR()"><i class="fa-solid fa-expand fa-spin"></i> ขยายจอ</a>
        </div>
      </div>
    </div>
  </div>


  