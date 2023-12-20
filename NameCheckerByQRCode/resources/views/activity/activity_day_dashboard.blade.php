@extends('layouts.layout_dashboardmodren')
@section('content_body')


<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">ชื่อวันที่</th>
        <th scope="col">วัน</th>
        <th scope="col">เวลาเริ่ม</th>
        <th scope="col">เวลาจบ</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($activity_data as $row )
            @foreach ($row as $data )
            <tr>
                <th scope="row">{{$data->id}}</td>
                <th scope="row">{{$data->form_name}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time_start}}</td>
                <td>{{$data->time_expried}}</td>
          </tr>
            @endforeach
        @endforeach
      
      
    </tbody>
  </table>



@endsection