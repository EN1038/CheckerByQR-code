@extends('layouts.layout_dashboardmodren')
@section('content_body')
{{-- <div class="d-flex justify-content-center align-items-center">
    <a class="btn btn-success rounded-5 my-3 w-100"><i class="fa-solid fa-calendar-plus"></i> สร้าง</a>
</div> --}}
                <form action="{{route('make_activity_post')}}" method="POST" class="d-flex justify-content-center align-items-center my-4 mx-4 ">
                    @csrf
                    <div class="mb-3 w-75 custom-make-activity d-flex flex-column justify-content-center align-items-center">
                        <div class="col">
                            <h1 class="fw-bold">สร้างกิจกรรม</h1>
                        </div>
                        <div class="col w-100">
                            <label class="form-label fw-bold fs-4">ชื่อกิจกรรม</label>
                            <input type="text" name="activity_name" class="form-control rounded-4 text-center fs-5" placeholder="ชื่อกิจกรรม">
                            <a class="btn btn-success rounded-5 my-3 w-100 fs-5"><i class="fa-solid fa-calendar-plus"></i> สร้าง</a>
                        </div>
                    </div>
                </form>
            @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif
        
@endsection