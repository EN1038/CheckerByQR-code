<form action="{{route('input_form_checker_postV2',request()->route()->activity_id)}}" method="post">
    @csrf
    <label> User Key หรือรหัสนักศึกษา</label>
    <input type="text" name="student_id">
    <label>ชื่อ</label>
    <input type="text" name="first_name">
    <input type="text" name="last_name">
<button type="submit">SUBMIT</button>
</form>