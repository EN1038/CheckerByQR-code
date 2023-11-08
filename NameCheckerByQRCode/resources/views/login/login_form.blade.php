@extends('layouts.layout_dashboard')
@section('content_dashboard')

{{-- Start_Body --}}
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-4">
            <span class="fw-bold fs-5">ล็อกอิน</span>
            <form action="$$$" method="POST">
                <div class="mb-3">
                    <input name="s_id" class="form-control">
                </div>
            </form>
        </div>
    </div>
</div>

{{-- End_Body --}}
@endsection