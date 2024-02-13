@extends('layouts.layout_dashboardmodren')
@section('content_body')


<div>
    
    <div class="d-flex flex-column mb-3">
        <div class="p-2">
            <h1 class="text-greenlight fw-bold text-center">สถิติกิจกรรม</h1>
        </div>
        <div class="d-flex flex-row mb-3">
            <div class="p-2">
                <div class="card " style="width:15rem; height:15rem;">
                    <h1 class="fw-bold text-center" style="margin: auto;">76<p class="fs-5">text</p></h1>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%"></div>
                      </div>
                </div>
            </div>
            <div class="p-2">
                Flex item 2
            </div>
            <div class="p-2">
                Flex item 3
            </div>
        </div>
      </div>
</div>

<script src="{{asset('js/activity_stat/activity_stat.js')}}"></script>

@endsection