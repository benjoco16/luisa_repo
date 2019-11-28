@extends('static.layout.master')

@section('page-styles')
<link href="{{ URL::to('vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::to('vendors/custom/jstree/jstree.bundle.rtl.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('subheader')
@include('static.dashboard.components.sub-header')
@endsection

@section('full-width-content')
@include('static.dashboard.components.hero')
@endsection

@section('content')
<div class="mt-4"> 
    <div class="row">
        @include('static.dashboard.components.gauges')
        @include('static.dashboard.components.progress-bars')
        @include('static.dashboard.components.performance-summary')
        @include('static.dashboard.components.monthly-rates')
        @include('static.dashboard.components.riddor-summary')
        @include('static.dashboard.components.daily-tasks')
        @include('static.dashboard.components.organisational-structure')
        @include('static.dashboard.components.incident-summary')
        @include('static.dashboard.components.accident-types')
        @include('static.dashboard.components.recent-assessments')
    </div>
</div>

@include('static.dashboard.components.modal-actions')

@endsection

@section('page-scripts')
<script src="{{ URL::to('vendors/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ URL::to('js/custom/canvasjs.min.js') }}"></script>
<script src="{{ URL::to('js/custom/fusioncharts.js') }}"></script>
<script src="{{ URL::to('js/custom/fusioncharts.theme.fint.js?cacheBust=56') }}"></script>
<script src="{{ URL::to('js/custom/jscharts.min.js') }}"></script>
<script src="{{ URL::to('js/custom/jstree.min.js') }}"></script>
<script src="{{ URL::to('js/custom/charts.bundle.min.js') }}"></script>
<script src="{{ URL::to('js/custom/dashboard.js') }}"></script>
<script src="{{ URL::to('js/custom/dashboard2.js') }}"></script>
@endsection