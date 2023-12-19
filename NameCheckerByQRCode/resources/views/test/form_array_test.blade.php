{{-- <input type="text" name="firstname">
<input type="text" name="lastname">
<input type="text" name="email">
<input type="text" name="address"> --}}
<form id="form1" action="{{route('post_test_form_array_request')}}" method="POST">
    @csrf
{{-- <input type="date" name="date_input[]">
<input type="time" name="date_input[start_time]"> --}}

{{-- <input type="text" name="tree[tree2][fruit]">
<input type="text" name="tree[tree2][height]">

<input type="text" name="tree[tree3][fruit]">
<input type="text" name="tree[tree3][height]"> --}}
<button type="submit">OK</button>
</form>

<script src="{{asset('js/LabTest/form_array.js')}}"></script>
