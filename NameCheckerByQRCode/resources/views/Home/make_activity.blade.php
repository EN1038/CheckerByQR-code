@extends('layouts.layout_dashboardmodren')
@section('content_body')
{{-- <div class="d-flex justify-content-center align-items-center">
    <a class="btn btn-success rounded-5 my-3 w-100"><i class="fa-solid fa-calendar-plus"></i> สร้าง</a>
</div> --}}
<style>
    .my-div{
        width: 100;
        height: 650px;
    }

    .text-create{
        font-size: 70px;
    }

    @media (max-width: 650px) {
        .text-create{
            font-size: 55px
        }
    }
    @media (max-width: 520px) {
        .text-create{
            font-size: 45px
        }
    }
</style>
                <form action="{{route('make_activity_post')}}" method="POST" class="d-flex justify-content-center align-items-center my-4 mx-4 my-div">
                    @csrf
                    <div class="mb-3 w-100 custom-make-activity d-flex flex-column justify-content-center align-items-center">
                        <div class="col mb-4">
                            <h1 class="fw-bold text-greenlight text-create"><i class="fa-solid fa-folder-plus"></i> สร้างกิจกรรม</h1>
                        </div>
                        <div class="col w-100">
                            <label class="form-label fw-bold fs-4">ชื่อกิจกรรม</label>
                            <input type="text" name="activity_name" class="form-control rounded-4 text-center fs-5 py-2 py-sm-3 mb-4" placeholder="ชื่อกิจกรรม">
                            <button class="btn btn-success rounded-5 my-3 w-100 fs-5 py-2 py-sm-3"><i class="fa-solid fa-calendar-plus"></i> สร้าง</ิ>
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
