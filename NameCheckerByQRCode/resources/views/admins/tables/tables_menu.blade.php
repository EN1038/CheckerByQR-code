@extends('layouts.layout_dashboard')
@section('content_dashboard')
    <div class="container text-center my-4">
        <h1>Admin</h1>
        <div class="row">
            <div class="col">
                   <a href="{{route('show_activity_table')}}" class=" text-decoration-none table-box text-start border  row align-items-center rounded-4">
                    <div class="col">
                       <span class="fs-3 fw-bold text-secondary ">ตารางกิจกรรม</span>
                    </div>
                   </a>
            </div>
        </div>
    </div>
@endsection

<style>
    .table-box{
        height: 100px;
        width: 250px;
        box-shadow: 5px 3px 15px grey;
    }
    
</style>