@extends('layouts.layout_dashboardmodren')
@section('content_body')

<head>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
</head>
<style>
    .my-div{
        width: 100%;
        height: 650px;
    }

    .text-welcome{
        font-size: 90px;
        display: inline-block;
        overflow: hidden;
        animation: typing 3s steps(20, end);
    }

    @keyframes typing {
        from { width: 0 }
        to { width: 40% }
    }

    @media (max-width: 650px) {
        .text-welcome{
            font-size: 40px
        }
    }
    
</style>
<div class="row my-5 my-div">
    <div class="col m-auto">
        <div class="row ">
        <div class="col d-flex justify-content-center align-items-center">
            <h1 class="fw-bold text-greenlight text-welcome">WELCOME</h1>
        </div>
           
        </div>
        <div class="row ">
            <div class="col d-flex justify-content-center mt-4 mb-2 mb-md-3">
                <a href="{{route('show_make_activity_form_page')}}" class="btn btn-success p-3 p-md-4 rounded-5 shadow">
                    <span class="fs-4">
                        สร้างกิจกรรม
                    </span>
                    <i  class="bi bi-arrow-right-circle-fill fs-4 text-white"></i>
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col d-flex justify-content-center">
                <p class="fs-3 fw-lighter">สร้างกิจกรรมของคุณ</p>
            </div>
        </div>
        
    </div>
    
</div>


@endsection