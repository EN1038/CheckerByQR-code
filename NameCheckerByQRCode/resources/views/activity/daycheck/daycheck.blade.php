@extends('layouts.layout_dashboardmodren')
@section('content_body')
<link rel="stylesheet" href="{{asset('css/style_dayCheck.css')}}">
<div class="container px-5 pb-4 pt-3">
  <div class="row row-cols-1">
    <div class="col my-4">
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">รูปแบบการเช็ค</th>
            <th scope="col">เวลาเริ่มการเช็ค</th>
            <th scope="col">เวลาจบการเช็ค</th>
            <th scope="col">ระยะเวลาการเช็คชื่อ</th>
            <th scope="col">รายละเอียด</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($round_check_data as $array)
            @foreach ( $array as $row )
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->rounde_name}}</td>
                <td>{{$row->rounde_checker_time_start}}</td>
                <td>{{$row->rounde_checker_time_expried}}</td>
                <td>{{$row->activity_end_time}}</td>
                {{-- รอไอดีกิจกรรมใส่ใน data-set --}}
                <td><a href='#' class="btn btn-success getid" id="btn_detail{{$row->id}}" data-id="{{$row->id}}" data-iddate="{{$row->date_id}}" data-idactivity="{{$row->activity_id}}">ดูข้อมูล</a></td>
            </tr>
            @endforeach
       
        @endforeach
        </tbody>
    </table>
    </div>
    <div class="col my-3" id="divData">
      <div class="d-flex flex-row-reverse">
        <span class="icon-search ms-2">ค้นหา</span><input type="text" id="searchInput" class="searchInput" placeholder="ค้นหาชื่อ...">
      </div>
      <table id="dataTable" class="table text-center">
        <thead>
          <tr>
            <th style="width: 35%">ชื่อจริง</th>
            <th style="width: 35%">นามสกุล</th>
            <th style="width: auto">เวลาที่เข้าเช็คชื่อ</th>
            <!-- Add other table headers -->
          </tr>
        </thead>
        <tbody id="bodyTable">
          <!-- Add your data here -->
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