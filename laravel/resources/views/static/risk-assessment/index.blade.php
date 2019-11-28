@extends('static.layout.master')


@section('page-styles')
<link href="{{ URL::to('css/vendors/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::to('css/vendors/components.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('subheader')
@include('static.assessment-wizard.components.sub-header')
@endsection

@section('content')
<div class="row align-items-start">
    <div class="col-md-10">
        <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
            <div class="kt-portlet__body p-0">
                @include('static.risk-assessment.components.form')
                @include('static.risk-assessment.components.accordion')
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid risk-assessment__actions">
            <div class="kt-portlet__body">
                @include('static.risk-assessment.components.actions')
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-scripts')
<script src="{{ URL::to('vendors/general/custom/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('js/custom/risk-assessment.js') }}"></script>
@endsection