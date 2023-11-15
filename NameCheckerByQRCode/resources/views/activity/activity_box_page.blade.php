@extends('layouts.layout_dashboardmodren')
@section('content_body')
<div class="text-center py-4">
    <h1 class="text-greenlight fw-bold"><i class="bi bi-clipboard me-3"></i>List Activity</h1>
    <div class="row">
        {{-- Card-Activity --}}
        <div class="row">
          <div class="col">
            <span class="fs-3">โปรไฟล์กิจกรรมของคุณ</span>
          </div>
        </div>

      @foreach ($activity_profile_data as $row )
      <div class="col-3">
        <div class="card activity-box mt-3 mb-2">
            <div class="card-body d-flex flex-row justify-content-center align-items-center">
                
              <div class="col-9 text-start content-activity-box">
                    <span>Activity</span>
                    <h5>{{$row->activity_name}}</h5>
                </div>
                <div class="col-4 col-md-5 content-activity-box z-2">
                    <button class="button-edit-action-activity" onclick="navigateToURLEdit()"><i class="fa-solid fa-wrench"></i></button>
                    <button class="button-trash-action-activity" onclick="navigateToURLTrash()"><i class="bi bi-trash-fill"></i></button>
                </div>


            </div>
          </div>
      </div>
      @endforeach
      

      {{-- End-Card-Activity --}}
    </div>
</div>
@endsection