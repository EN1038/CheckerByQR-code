@extends('layouts.layout_dashboardmodren')
@section('content_body')
<style>
.card-hover {
    background-color: #ffffff25; 
}
.card-hover:hover p{
    transform: scale(1.2);
}
.card-hover:hover i{
    transform: scale(1.2);

}

.card-hover p,
.card-hover i {
    transition: transform 0.3s ease;
}
</style>
<div>
    
    <div class="d-flex flex-column mb-3 p-4">
        <div class="py-5">
            <h1 class="text-greenlight fw-bold text-center"><i class="fa-solid fa-chart-pie"></i> สถิติกิจกรรม <p class="fs-3 text-success">{{$activity_data->activity_name}}</p></h1>
        </div>
        <div class="d-flex flex-row flex-wrap justify-content-center align-items-center mb-3 ">
            <div class="col-12 col-md-6 col-lg p-3 ">
                <div class="card d-flex flex-row justify-content-center align-items-center rounded-4 card-hover shadow text-warning" >
                    <div class="col py-4 ps-0 ps-xxl-4 ">
                        <p class="text-center fs-1 fw-bold m-2">{{ $activity_data->dateCount() !== null ? $activity_data->dateCount() : 0 }}</p>
                        <p class="text-center fw-bold fs-5">วันที่ทั้งหมด</p>
                    </div>
                    <div class="col d-flex justify-content-end pe-5 d-none d-xxl-flex">
                        <i class="fa-regular fa-calendar-days " style="font-size: 5.5em;"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg p-3">
                <div class="card d-flex flex-row justify-content-center align-items-center rounded-4 card-hover shadow text-info" >
                    <div class="col py-4 ps-0 ps-xxl-4">
                        <p class="text-center fs-1 fw-bold m-2">{{ $activity_data->dateRegisterdCount() !== null ? $activity_data->dateRegisterdCount() : 0 }}</p>
                        <p class="text-center fw-bold fs-5">วันที่ล็อคอินแล้ว</p>
                    </div>
                    <div class="col d-flex justify-content-end pe-5 d-none d-xxl-flex">
                        <i class="fa-solid fa-calendar-check" style="font-size: 5.5em;"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg p-3">
                <div class="card d-flex flex-row justify-content-center align-items-center rounded-4 card-hover shadow text-danger" >
                    <div class="col py-4 ps-0 ps-xxl-4">
                        <p class="text-center fs-1 fw-bold m-2">{{ $activity_data->dateNoRegisterCount() !== null ? $activity_data->dateNoRegisterCount() : 0 }}</p>
                        <p class="text-center fw-bold fs-5">วันที่ไม่ล็อคอิน</p>
                    </div>
                    <div class="col d-flex justify-content-end pe-5 d-none d-xxl-flex">
                        <i class="fa-solid fa-calendar-day" style="font-size: 5.5em;"></i>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>

<script src="{{asset('js/activity_stat/activity_stat.js')}}"></script>

@endsection