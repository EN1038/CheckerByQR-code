@vite('resources/js/app.js')
<div id="app">
    <edit-day id="{{Auth::user()->id}}" value="aa" aa="bb"></edit-day>
</div>
{{Auth::user()->id}}
{{-- @vite('resources/css/app.css')
{{-- <input type="text" name="firstname">

          
<input type="text" name="lastname">
<input type="text" name="email">

<input type="text" name="address"> --}}


   


<form id="form1" action="{{route('post_test_form_array_request',1)}}" method="POST" enctype="multipart/form-data" >
    @csrf
{{-- <input type="date" name="date_input[]">
<input type="time" name="date_input[start_time]"> --}}

{{-- <input type="text" name="tree[tree2][fruit]">
<input type="text" name="tree[tree2][height]">

<input type="text" name="tree[tree3][fruit]">
<input type="text" name="tree[tree3][height]"> --}}
<input  type="file" name="excel">
<button type="submit">OK</button>
</form>

{{-- <script src="{{asset('js/LabTest/form_array.js')}}"></script> --}}
