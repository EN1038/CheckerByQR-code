
<div class="row">
    <div class="col">
        <form action="{{route('input_form_checker_post',request()->route()->activity_id)}}" method="post">
           @csrf
        <label class="form-label">ชื่อ-นามสกุล</label>
        <input type="text" name="name">
        <button type="submit">บันทึก</button>
        </form>
        
    </div>
</div>