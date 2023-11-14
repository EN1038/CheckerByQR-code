@extends('layouts.layout_dashboardmodren')
@section('content_body')
<div class="text-center border">
    <div class="row">
        {{-- Card-Activity --}}
      <div class="col-3">
        <a href="#" class="text-decoration-none">
        <div class="card activity-box mt-3 mb-2">
            <div class="card-body d-flex flex-row justify-content-center align-items-center">
                <div class="col-9 text-start content-activity-box">
                    <span>Activity</span>
                    <h5>ชื่อกิจกรรม</h5>
                </div>
                <div class="col-3 content-activity-box">
                    <i class="bi bi-file-earmark-text-fill"></i>
                </div>
            </div>
          </div>
        </a>
      </div>
      {{-- End-Card-Activity --}}
    </div>
</div>
@endsection