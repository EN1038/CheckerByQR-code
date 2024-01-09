@extends('layouts.layout_dashboardmodren')
@section('content_body')


<div id="app">
    <edit-activity-page activity_id="{{request()->route()->activity_id}}"></edit-activity-page>
</div>

@endsection