@extends('layouts.layout_dashboard')
@section('content_dashboard')

{{-- Start_Body --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 mt-3 text-center">
            <span class="fw-bold fs-5 text-center">สมัครสมาชิก</span>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="{{route('register_post')}}" class="mb-3" method="POST">
                @csrf
                <div class="mt-3">
                    <label class="form-label">รหัสนักศึกษา</label>
                    <input name="s_id" type="text" class="form-control" placeholder="รหัสนักศึกษา">
                </div>
                <div class="mt-3">
                    <label class="form-label">ชื่อ</label>
                    <input name="name" type="text" class="form-control" placeholder="ชื่อจริง">
                </div>

                <div class="mt-3">
                    <label class="form-label">รหัสผ่าน</label>
                    <input name="password" type="password" class="form-control" placeholder="รหัสผ่าน">
                </div>
                <div class="mt-3">
                    <label class="form-label">ยืนยันรหัสผ่าน</label>
                    <input name="confirm_password" type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน">
                </div>
                <div class="mb-3 mt-3">
                    <button type="submit" class="btn btn-success">สมัคร</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- End_Body --}}
@endsection