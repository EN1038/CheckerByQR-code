<div class="row">
    <div class="col">
        <form action="{{route('input_form_checker_post',request()->route()->activity_id)}}" method="POST">
           @csrf
        <label class="form-label">ชื่อ-นามสกุล</label>
        <input type="text" name="name">
        <input type="hidden" name="date" value="{{ now()->format('Y-m-d') }}">
        <input type="hidden" name="timestamp" value="{{now()->format('H:i:s')}}">
        <button type="submit">บันทึก</button>
        </form>
        
    </div>
</div>