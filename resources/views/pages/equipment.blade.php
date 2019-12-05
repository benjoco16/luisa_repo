@extends('layout.master')

@section('subheader')
@include('include.equipment.equipment-subheader')
@endsection

@section('content')
@include('include.equipment.equipment-table-filters')
<div class="kt-portlet mt-4">
    @include('include.equipment.equipment-table')
</div>

@include('include.equipment.modal.equipment-modal')
@endsection

@section('page-scripts')
<script src="{{ URL::to('js/custom/assessment-process.js') }}" type="text/javascript"></script>
@endsection