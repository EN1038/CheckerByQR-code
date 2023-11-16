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

      
      <div class="col-12 col-lg-4 col-sm-6">
        <div class="card activity-box mt-3 mb-2 ">
            <div class="card-body d-flex flex-row justify-content-center align-items-center">
              <div class="col-8 col-md-7 text-start content-activity-box">

                <a href="" class="text-decoration-none" >
                  <span>Activity</span><br>aaa</a>
            </div>
                <div class="col-4 col-md-5 content-activity-box z-2">
                    <button class="button-edit-action-activity" data-bs-toggle="modal" data-bs-target="" ><i class="fa-solid fa-wrench"></i></button>
                  
                      <button type="submit" class="button-trash-action-activity" ><i class="bi bi-trash-fill"></i></button>
                
                    
                   <script>

                    

                   </script>
                    
                </div>

                
            </div>
          </div>
      </div>

      
    

      <example-component>

      
      
      {{-- @foreach($activity_profile_data as $row) --}}

      
      {{-- @endforeach --}}
      {{-- End-Card-Activity --}}
    </div>
</div>

@endsection

{{-- ลูป ID modal --}}

