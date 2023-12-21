@extends('layouts.layout_dashboardmodren')
@section('content_body')
<link rel="stylesheet" href="{{asset('css/style_dayCheck.css')}}">
<div class="container px-5 pb-4 pt-3">
  <div class="row row-cols-1">
    <div class="col border border-danger my-4">
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Action</th>
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
                <td><a href="" class="btn btn-success">ดูข้อมูล</a></td>
                
            </tr>
            @endforeach
       
        @endforeach
        </tbody>
    </table>
    </div>
    <div class="col border border-primary my-3">
      
  </div>
    
  
</div>
<script src="{{asset('js/dayCheck/dayCheck.js')}}"></script>
@endsection