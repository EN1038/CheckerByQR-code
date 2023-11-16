@extends('layouts.layout_dashboardmodren')
@section('content_body')
 <div class="containter text-center">
    <div class="buttom my-3 d-flex flex-row justify-content-center align-items-center">
        <div class="col">Form One</div>
        <div class="col">
            <button class="enchagne-botton" id="toggleButton" onclick="toggleDivs()"> 
                <i class="fa-solid fa-arrow-left"></i> 
            </button>
         </div>
        <div class="col">Form Two</div>
    </div>

<div id="Form1">
    <div class="border"></div>
</div>

<div id="Form2">
    <h2>Content for Div 2</h2>
    <p>This is some text inside Div 2.</p>
</div>
 </div>


@endsection