@extends('layouts.layout_dashboardmodren')
@section('content_body')
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<!-- JavaScript -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="{{asset('css/style_day_dashboard.css')}}">

<div class="container p-5">
    <table id="myDataTable" class="">
        <thead>
          <tr >
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </thead>
        <tbody>
          <!-- Your data rows go here -->
        </tbody>
      </table>
</div>



  
  <script src="{{asset('js/activity/activity_day_dashboard.js')}}"></script>
@endsection