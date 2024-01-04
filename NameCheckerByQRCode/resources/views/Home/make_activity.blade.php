@extends('layouts.layout_dashboardmodren')
@section('content_body')
    <div class="container my-4 mx-4">
        <h1>สร้างกิจกรรม</h1>
        <div class="row">
            <div class="col">
                <form action="{{route('make_activity_post')}}" method="POST">
                    @csrf
                    <div class="mb-3 col-6">
                        <label class="form-label">ชื่อกิจกรรม</label>
                    <input type="text" name="activity_name" class="form-control" placeholder="ชื่อกิจกรรม">
                    </div>
                    
                    <div class="mb-3 col-6">
                        <button class="btn btn-success rounded-5 "><i class="fa-solid fa-calendar-plus"></i> สร้าง</button>
                    </div>
                </form>
            </div>
            @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif
        </div>
        
    </div>
@endsection