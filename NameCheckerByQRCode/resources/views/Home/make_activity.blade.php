@extends('layouts.layout_dashboardmodren')
@section('content_body')
    <div class="container">
        <h1>สร้างกิจกรรม</h1>
        <div class="row">
            <div class="col">
                <form>
                    <div class="mb-3 col-6">
                        <label class="form-label">ชื่อกิจกรรม</label>
                    <input type="text" name="activity_name" class="form-control" placeholder="ชื่อกิจกรรม">
                    </div>
                    <div class="mb-3 col-6">
                        <label class="label-form">อัพโหลดรายชื่อผู้ที่ต้องเข้าร่วมกิจกรรม อัพโหลดด้วย EXCEL</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="mb-3 col-6">
                        <button class="btn btn-success">สร้าง</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
@endsection