@extends('layouts.layout_dashboardmodren')
@section('content_body')
<div class="text-center py-4">
    <h1 class="text-greenlight fw-bold">List Activity</h1>
    <div class="row">
        {{-- Card-Activity --}}
      <div class="col-3">
        <div class="card activity-box mt-3 mb-2">
            <div class="card-body d-flex flex-row justify-content-center align-items-center ">
                <div class="col-8 text-start content-activity-box">
                    <a href="#" class="text-decoration-none"><span>Activity</span><br>ชื่อกิจกรรม</a>
                </div>
                <div class="col-4 content-activity-box z-2">
                    <button class="button-edit-action-activity"><i class="bi bi-file-earmark-plus-fill"></i></button>
                    <button class="button-trash-action-activity" onclick="navigateToURLTrash()"><i class="bi bi-trash-fill"></i></button>
                </div>
            </div>
          </div>
      </div>
      {{-- End-Card-Activity --}}
    </div>
</div>
@endsection