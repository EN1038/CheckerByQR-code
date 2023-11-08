@extends('layouts.layout_dashboard')
@section('content_dashboard')

{{-- Start_Body --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 mt-3 text-center">
            <span class="fw-bold fs-5 text-center">login</span>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="$$$" class="mb-3" method="POST">
                <div class="mt-3">
                    <label class="form-label">รหัสนักศึกษา</label>
                    <input name="s_id" type="text" class="form-control" placeholder="รหัสนักศึกษา">
                </div>
                <div class="mt-3">
                    <label class="form-label">รหัสผ่าน</label>
                    <input name="password" type="password" class="form-control" placeholder="รหัสนักศึกษา">
                </div>
                <div class="mb-3 mt-3">
                    <button class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- End_Body --}}
@endsection