@extends('static.layout.master')

@section('subheader')
@include('static.equipment.components.sub-header')
@endsection

@section('content')
@include('static.equipment.components.table-filters')
<div class="kt-portlet mt-4">
    @include('static.equipment.components.table')
</div>

@include('static.equipment.modal.modal')
@endsection

@section('page-scripts')
<script src="{{ URL::to('js/custom/assessment-process.js') }}" type="text/javascript"></script>
@endsection