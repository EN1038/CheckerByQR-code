@extends('layouts.layout_dashboardmodren')
@section('content_body')
<link rel="stylesheet" href="{{asset('css/style_dayCheck.css')}}">
<div class="container px-5 pb-4 pt-3">
  <div class="row row-cols-1">
    <div class="col my-4">
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">รูปแบบการเช็ค</th>
            <th scope="col">เวลาเริ่มการเช็ค</th>
            <th scope="col">เวลาจบการเช็ค</th>
            <th scope="col">ระยะเวลาการเช็คชื่อ</th>
            <th scope="col"></th>
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
                <td>{{$row->rounde_checker_time_expried}}</td>
                <td><a href="{{route('show_round_check_page',['activity_id' => request()->route()->activity_id,'date_id' => request()->route()->date_id,'round_id' => $row->id])}}" class="btn btn-success">ดูข้อมูล</a></td>
            </tr>
            @endforeach
       
        @endforeach
        </tbody>
    </table>
    </div>
    <div class="col my-3">
      <div class="d-flex flex-row-reverse">
        <span class="icon-search ms-2">ค้นหา</span><input type="text" id="searchInput" class="searchInput" placeholder="ค้นหาชื่อ...">
      </div>
      <table id="dataTable" class="table">
        <thead>
          <tr>
            <th onclick="sortTable(0)">ชื่อ</th>
            <th onclick="sortTable(1)">สถานะ</th>
            <!-- Add other table headers -->
          </tr>
        </thead>
        <tbody>
          <!-- Add your data here -->
        </tbody>
      </table>
      <div class="d-flex flex-row-reverse">
        <ul class="pagination" id="pagination"></ul>
      </div>

  </div>
    
  
</div>
<script src="{{asset('js/dayCheck/dayCheck.js')}}"></script>
@endsection