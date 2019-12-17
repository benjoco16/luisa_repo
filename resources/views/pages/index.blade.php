@extends('layout.master')

@section('page-styles')
<link href="{{ URL::to('vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::to('vendors/custom/jstree/jstree.bundle.rtl.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('subheader')
@include('include.dashboard.dashboard-subheader')
@endsection

@section('full-width-content')
@include('include.dashboard.hero')
@endsection

@section('content')
<div class="mt-4"> 
    <div class="row">
    <div id="heroChart2"></div>
        @include('include.dashboard.section-progress-bars')
        @include('include.dashboard.section-performance-summary')
        @include('include.dashboard.section-monthly-rates')
        @include('include.dashboard.section-riddor-summary')
        @include('include.dashboard.section-daily-tasks')
        @include('include.dashboard.section-organisational-structure')
        @include('include.dashboard.section-incident-summary')
        @include('include.dashboard.section-accident-types')
        @include('include.dashboard.section-recent-assessments')
    </div>
</div>

@include('include.dashboard.modal-actions')

@endsection

@section('page-scripts')
<script src="{{ URL::to('vendors/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ URL::to('js/custom/canvasjs.min.js') }}"></script>
<script src="{{ URL::to('js/custom/fusioncharts.js') }}"></script>
<script src="{{ URL::to('js/custom/fusioncharts.theme.fint.js?cacheBust=56') }}"></script>
<!-- <script src="{{ URL::to('js/custom/jscharts.min.js') }}"></script>
<script src="{{ URL::to('js/custom/jscharts.more.js') }}"></script>
<script src="{{ URL::to('js/custom/jscharts.solidgauge.js') }}"></script> -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

<script src="{{ URL::to('js/custom/jstree.min.js') }}"></script>
<script src="{{ URL::to('js/custom/charts.bundle.min.js') }}"></script>
<script src="{{ URL::to('js/custom/dashboard.js') }}"></script>
@endsection