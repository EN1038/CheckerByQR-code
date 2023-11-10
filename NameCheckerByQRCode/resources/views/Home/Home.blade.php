@extends('layouts.layout_dashboardmodren')
@section('content_body')

<head>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
</head>
<div class="row ">
    <div class="col">
        <div class="row">
        <div class="col d-flex justify-content-center">
            <h1>WELCOME</h1>
        </div>
           
        </div>
        <div class="row ">
            <div class="col d-flex justify-content-center">
                <p class="fs-2">สร้างกิจกรรมของคุณ</p>
            </div>
        </div>
        <div class="row ">
            <div class="col d-flex justify-content-center">
                <a href="{{route('show_activity_page')}}" class="btn mb-4 btn-success">
                    <span class="fs-5">
                        สร้างกิจกรรม
                    </span>
                    <i  class="bi bi-arrow-right-circle-fill fs-5 text-white"></i>
                </a>
            </div>
        </div>
        
    </div>
    
</div>


@endsection