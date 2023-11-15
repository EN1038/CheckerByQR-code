@extends('layouts.layout_dashboardmodren')
@section('content_body')
<div class="text-center">
    <div class="row">
        {{-- Card-Activity --}}
        <div class="row">
          <div class="col">
            <span class="fs-3">โปรไฟล์กิจกรรมของคุณ</span>
          </div>
        </div>

      @foreach ($activity_profile_data as $row )
      <div class="col-3">
        <a href="#" class="text-decoration-none">
        <div class="card activity-box mt-3 mb-2">
            <div class="card-body d-flex flex-row justify-content-center align-items-center">
                
              <div class="col-9 text-start content-activity-box">
                    <span>Activity</span>
                    <h5>{{$row->activity_name}}</h5>
                </div>
                <div class="col-3 content-activity-box">
                    <i class="bi bi-file-earmark-text-fill"></i>
                </div>


            </div>
          </div>
        </a>
      </div>
      @endforeach
      

      {{-- End-Card-Activity --}}
    </div>
</div>
@endsection