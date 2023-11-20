@extends('layouts.layout_dashboardmodren')
@section('content_body')
    <form action="#">
        <div class="row">
            <div class="text-center">
                <h1 class="text-greenlight"><i class="fa-solid fa-gear"></i>ตั้งค่ากิจกรรม</h1>
            </div>
            <div class="col-6">
                <div id="dateInputs">
                    <input type="text" name="dateInput[]" class="date-input">
                  </div>
                  <button type="button" id="addDateInput">Add Date Input</button>
                  <button type="button" id="removeDateInput">Remove Date Input</button>
            </div>
            <div class="col-6">
                <div class="input-group date">
                    <input type="text" class="form-control" value="12-02-2012">
                    <div class="input-group-addon">
                        <span><button class="btn-fs-date"><i class="fa-solid fa-plus"></i></button></span>
                    </div>
                </div>
            </div>
            <div class="col">
                ffff
            </div>
        </div>
    </form>
    
@endsection