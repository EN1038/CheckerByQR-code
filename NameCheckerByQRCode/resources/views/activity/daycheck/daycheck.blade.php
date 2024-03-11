@extends('layouts.layout_dashboardmodren')
@section('content_body')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/th.js"></script>

<link rel="stylesheet" href="{{asset('css/style_dayCheck.css')}}">
<div class="px-2 px-lg-5 pb-4 pt-3">
  <div class="row row-cols-1">
    <div class="row">




    </div>

    <div class="col my-4">
      <div class="col-12 d-flex justify-content-center my-3">
        <span class="fw-bold fs-2 text-success" id="dateNaja">{{$date->date}}</span>
       </div>

      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">รูปแบบการเช็ค</th>
            <th scope="col">เวลาเริ่มการเช็ค</th>
            <th scope="col">เวลาจบการเช็ค</th>
            <th scope="col">จำนวนคนที่เช็คชื่อ</th>
            <th scope="col">รายละเอียด</th>
            <th scope="col">อื่นๆ</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($round as $row)

            <tr>
                <td>
                  <?php
                    if ($row->rounde_name === 'เช็คทั้งวัน') {
                      echo 'รูปแบบการเช็คชื่อทั้งวัน';
                    } else {
                      echo 'รูปแบบการเช็คชื่อเป็นรอบ';
                    }
                  ?>
                  {{-- {{$row->rounde_name}} --}}
                </td>
                <td data-label="ID">{{$row->id}}</td>
                <td data-label="รูปแบบการเช็ค">
                  <?php
                    if ($row->rounde_name === 'เช็คทั้งวัน') {
                      echo 'เช็คชื่อทั้งวัน';
                    } else {
                      echo 'เช็คชื่อเป็นรอบ';
                    }
                  ?>
                  {{-- {{$row->rounde_name}} --}}
                </td>
                <td data-label="เวลาเริ่มการเช็ค">{{$row->rounde_checker_time_start}}</td>
                <td data-label="เวลาจบการเช็ค">{{$row->rounde_checker_time_expried}}</td>
                <td data-label="จำนวนคนที่เช็คชื่อ">{{$row->CountPeopleRegister()}}</td>

                {{-- รอไอดีกิจกรรมใส่ใน data-set --}}

                <td data-label="รายละเอียด"><a href='#' class="btn btn-primary text-light getid" id="btn_detail{{$row->id}}" data-id="{{$row->id}}" data-iddate="{{$row->date_id}}" data-idactivity="{{$row->activity_id}}" >ดูข้อมูล</a></td>
           <td data-label="อื่นๆ">
            <a href="{{route('register_export',$row->id)}}" class="btn btn-success">Excel</a>
            <button class="btn btn-warning text-light"  data-bs-toggle="modal" data-bs-target="#round-edit{{$row->id}}">แก้ไข</button>
            <button class="btn btn-danger" onclick="confirmDelete(`{{route('delete_round',$row->id)}}`)" >ลบ</button>

          </td>

              </tr>
            @endforeach


        </tbody>
    </table>
    </div>
    <div class="col my-3" id="divData">
      <div class="d-flex flex-row-reverse">
        <span class="icon-search ms-2">ค้นหา</span><input type="text" id="searchInput" class="searchInput" placeholder="ค้นหาชื่อ...">
      </div>
      <table id="dataTable" class="tableII text-center">
        <thead>
          <tr>

            <th style="width: 25%" class="">รหัสประจำตัว</th>
            <th style="width: 25%">ชื่อจริง</th>
            <th style="width: 25%">นามสกุล</th>
            <th style="width: 25%">เวลาที่เข้าเช็คชื่อ</th>
            <th style="width: 25%">สถานะ</th>
            <!-- Add other table headers -->
          </tr>
        </thead>
        <tbody id="bodyTable">

        </tbody>
      </table>
      <div class="text-center bg-showSolution" id="bg-showSolution">
        <p class="fs-1 fw-bold text-success p-5">กดปุ่มดูข้อมูลข้างบนเพื่อโชวรายละเอียด</p>
      </div>
      <div class="d-flex flex-row-reverse">
        <ul class="pagination" id="pagination"></ul>
      </div>
  </div>


</div>

<script src="{{asset('js/dayCheck/dayCheck.js')}}"></script>
@endsection

@foreach ($round as $row )
<div class="modal fade" id="round-edit{{$row->id}}"   tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success fw-bold" id="round-edit{{$row->id}}">แก้ไขข้อมูลรอบเช็คชื่อ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('round_edit',$row->id)}}"  method="post">
          @csrf
          <div class="mb-3">
            <label for="" class="form-label">ชื่อรอบเช็คชื่อ</label>
            <input type="text" name="round_name" value="{{$row->rounde_name}}" class="form-control">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">เวลาเริ่มการเช็ค</label>
            <input type="time" id="round_start_time{{$row->id}}" onchange="checkTimeEdit(`{{$row->id}}`,`{{request()->route()->date_id}}`)" name="round_time_start" value="{{$row->rounde_checker_time_start}}" class="form-control border">
            <label id="start_time_alert_text{{$row->id}}" style="font-size: 14px;"></label>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">เวลาจบการเช็คชื่อ</label>
            <input type="time" name="round_time_end" id="round_end_time{{$row->id}}" onchange="checkTimeEdit(`{{$row->id}}`,`{{request()->route()->date_id}}`)" name="round_time_start"  value="{{$row->rounde_checker_time_expried}}" class="form-control border">
            <label id="end_time_alert_text{{$row->id}}" ></label>
          </div>
          <button type="submit" class="btn btn-success " id="button{{$row->id}}">Save changes</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@endforeach





{{-- @foreach ($round_check_data as $array )
  @foreach ($array as $row )
  <div class="modal fade" id="round-edit{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-success fw-bold" id="round-edit{{$row->id}}">แก้ไขข้อมูลรอบเช็คชื่อ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('round_edit',$row->id)}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">ชื่อรอบเช็คชื่อ</label>
              <input type="text" name="round_name" value="{{$row->rounde_name}}" class="form-control">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">เวลาเริ่มการเช็ค</label>
              <input type="time" name="round_time_start" value="{{$row->rounde_checker_time_start}}" class="form-control">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">เวลาจบการเช็คชื่อ</label>
              <input type="time" name="round_time_end" value="{{$row->rounde_checker_time_expried}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-success ">Save changes</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
  @endforeach
@endforeach --}}
