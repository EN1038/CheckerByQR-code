@extends('layouts.layout_dashboard')
@section('content_dashboard')

{{-- Start_Body --}}
<div class="alert alert-primary" role="alert">
    Body Naja
  </div>

  @if(auth::check()){
      <span>Loigin Success</span>
  }
  @else{
    <span>ยังไม่ได้เข้าสู่ระบบ
    </span>
  }

{{-- End_Body --}}
@endsection