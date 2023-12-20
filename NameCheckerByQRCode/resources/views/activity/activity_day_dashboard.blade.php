@extends('layouts.layout_dashboardmodren')
@section('content_body')
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- JavaScript -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/style_day_dashboard.css') }}">
    <a href="{{route('show_activity_dashboard',request()->route()->id)}}" class="btn btn-success">ตั้งค่ากิจกรรม</a> 
    
    @if($activity_setting->PeopleSideMode->id == 2)
    <div>บุคคลภายนอก</div>
    @elseif ($activity_setting->PeopleSideMode->id == 1)
    <div>บุคคลภายใน</div>
    @endif
    @if ($activity_setting->ListOfNameMode->id == 2)
        <div>ไม่มีรายชื่อ</div>
    @elseif ($activity_setting->ListOfNameMode->id == 1)
        <div>มีรายชื่อ</div>
    @endif

    <p>{{$activity_description}}</p>
    
    {{-- <div>บุคคล{{$activity_setting->PeopleSideMode->people_side_name}}</div> --}}
    
    <div class="container p-5">
        <table class="table" id="myDataTable">
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
                @foreach ($activity_day_array as $row)
                    @foreach ($row as $data)
                        <tr>
                            <td scope="row">{{ $data->id }}</td>
                            <td scope="row">{{ $data->form_name }}</td>
                            <td>{{ $data->date }}</td>
                            <td>{{ $data->time_start }}</td>
                            <td>{{ $data->time_expried }}</td>
                        </tr>
                    @endforeach
                @endforeach


            </tbody>
        </table>
    </div>




<script src="{{ asset('js/activity/activity_day_dashboard.js') }}"></script>
@endsection
