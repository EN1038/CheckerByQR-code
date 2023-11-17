@extends('layouts.layout_dashboardmodren')
@section('content_body')
 <div class="containter">
    <div class="header text-center mt-2 mb-5">
        <h1 class="text-greenlight fw-bold">Choose Mode Scanes QR-Code</h1>
    </div>
    <div class="buttom my-3 d-flex flex-row align-items-center text-center">
        <div class="col "><h2>Form One</h2></div>
        <div class="col">
            <button class="enchagne-botton" id="toggleButton" onclick="toggleDivs()"> 
                <i class="fa-solid fa-arrow-left"></i> 
            </button>
            <p class="mt-2 fs-8 fw-light text-muted">Hold click this button for Chagne Modes</p>
         </div>
        <div class="col "><h2>Form Two</h2></div>
    </div>

<div id="Form1" >
    <div class="d-flex flex-column mt-5">
        <div class="col paddin-form d-flex justify-content-end mb-1">
                <button class="button-CreateForm" type="submit" id="button-addon2"><i class="fa-solid fa-arrow-up-from-bracket me-2 ms-1"></i>Create Form</button>
        </div>
        <div class="col paddin-form">
            <table class="modify-table">
                <thead >
                  <tr>
                    <th scope="col " width='5%'></th>
                    <th scope="col">ID</th>
                    <th scope="col">Form Name</th>
                    <th scope="col" width='40%'>Url</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row"><i class="fa-solid fa-grip-vertical"></i><input class="form-check-input" type="checkbox"></td>
                    <td>1</td>
                    <td>Activity 1</td>
                    <td><a href="#">path to form id 1</a></td>
                    <td>15 พ.ย.</td>
                  </tr>
                  <tr>
                    <td scope="row"><i class="fa-solid fa-grip-vertical"></i><input class="form-check-input" type="checkbox"></td>
                    <td>2</td>
                    <td>Activity 2</td>
                    <td><a href="#">path to form id 2</a></td>
                    <td>16 พ.ย.</td>
                  </tr>
                  <tr>
                    <td scope="row"><i class="fa-solid fa-grip-vertical"></i><input class="form-check-input" type="checkbox"></td>
                    <td>3</td>
                    <td>Activity 3</td>
                    <td><a href="#">path to form id 3</a></td>
                    <td>17 พ.ย.</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>

<div id="Form2">
    <h2>Content for Div 2</h2>
</div>
 </div>


@endsection