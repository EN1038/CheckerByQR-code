@extends('layouts.layout_dashboardmodren')
@section('content_body')
<div class="text-center py-1">
    <h1 class="text-greenlight fw-bold"><i class="bi bi-clipboard me-3"></i>List Activity</h1>
    <div class="row">
        {{-- Card-Activity --}}
        <div class="row">
          <div class="col">
            <span class="fs-3">โปรไฟล์กิจกรรมของคุณ</span>
          </div>
        </div>

      @foreach ($activity_profile_data as $row )
      <div class="col-12 col-lg-4 col-sm-6">
        <div class="card activity-box mt-3 mb-2 ">
            <div class="card-body d-flex flex-row justify-content-center align-items-center">
              <div class="col-8 col-md-7 text-start content-activity-box">

                <a href="{{route('show_activity_dashboard',$row->id)}}" class="text-decoration-none" >
                  <span>Activity</span><br>{{$row->activity_name}}</a>
            </div>
                <div class="col-4 col-md-5 content-activity-box z-2">
                    <button class="button-edit-action-activity" data-bs-toggle="modal" data-bs-target="#{{"activity_".$row->id}}" ><i class="fa-solid fa-wrench"></i></button>
                  
                      <button type="submit" class="button-trash-action-activity" onclick="confirmDelete('/activity-delete/'+{{$row->id}})" ><i class="bi bi-trash-fill"></i></button>    
                </div>
            </div>
          </div>
      </div>
      @endforeach
     
      {{-- End-Card-Activity --}}
    </div>
</div>

@endsection

{{-- ลูป ID modal --}}
@foreach ($activity_profile_data as $row )
<div class="modal fade" id="{{"activity_".$row->id}}" tabindex="-1" aria-labelledby="{{"activity_".$row->id}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="{{"activity_".$row->id}}">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('update_activity_name',$row->id)}}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">ชื่อกิจกรรม</label>
            <input type="text" name="activity_name" value="{{$row->activity_name}}" class="form-control">
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-success">บันทึก</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
@endforeach


