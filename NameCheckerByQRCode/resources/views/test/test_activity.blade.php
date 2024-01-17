@extends('layouts.layout_dashboardmodren')

@section('content_body')
<div id="app">
    <test-activity activity_id="{{request()->route()->activity_id}}"></test-activity>
</div>


@endsection