@extends('layouts.layout_dashboardmodren')
@section('content_body')

<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Handle</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($round_check_data as $array)
            @foreach ( $array as $row )
            <tr>
                <th scope="row">{{$row->id}}</th>
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

@endsection