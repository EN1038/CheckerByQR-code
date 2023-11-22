@extends('layouts.layout_dashboard')
@section('content_dashboard')
    <div class="container my-4">
        <div class="row my-5">
           
            <a href="{{route('show_admin_table_menu')}}" class="btn btn-success col-2 fs-5">
                <i class="bi bi-arrow-left-circle fs-5"></i>
                ย้อนกลับ
            </a>
           
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Activity Name</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Create at</th>
                        <th scope="col" width="20%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($activity_data as $row )
                      <tr>
                        
                        <th scope="row">1</th>
                        <td>{{$row->activity_name}}</td>
                        <td>{{$row->User->name}}</td>
                        <td>{{$row->created_at}}</td>
                        <td>
                            <button href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="{{"#activity_".$row->id}}">
                                แก้ไข
                            </button>
                            <button href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="{{"#activity_delete_".$row->id}}">
                                ลบ
                            </button>
                           
                        </td>
                        
                        
                        
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection

@foreach ( $activity_data as $row )
<div class="modal fade" id="{{"activity_".$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="{{"activity_".$row->id}}">แก้ไข</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @php
                $activity_id_encrypt = Crypt::encrypt($row->id);
            @endphp
            <form action="{{route('edit_activity',$activity_id_encrypt)}}" method="POST">
            @csrf
            <div class="mb-3">
                <input name="activity_name" type="text" value="{{$row->activity_name}}" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">
                    บันทึก
                </button>
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

{{-- delete btn  --}}
@foreach ( $activity_data as $row )
<div class="modal fade " id="{{"activity_delete_".$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title fw-bold text-center" id="{{"activity_delete_".$row->id}}">ยืนยันการลบกิจกรรม</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @php
                $activity_id_encrypt = Crypt::encrypt($row->id);
            @endphp
            <form action="{{route('delete_activity',$activity_id_encrypt)}}" method="POST">
            @csrf
            <div class="mb-4 row align-items-center ">
                <div class="col-12 justify-content-center d-flex">
                    <H4 class="my-3">{{$row->activity_name}}</H4>
                </div>
                <div class="col justify-content-center d-flex">
                    <button type="submit" class="btn btn-danger">
                        ลบ
                    </button>
                </div>
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