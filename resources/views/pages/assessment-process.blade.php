@extends('layout.master')

@section('subheader')
@include('include.assessment-process.ap-sub-header')
@endsection

@section('content')
    @include('include.assessment-process.ap-table-filters')
    @include('include.assessment-process.ap-table')

    @include('include.assessment-process.modal.ap-modal')
@endsection

@section('page-scripts')
<script src="{{ URL::to('js/custom/assessment-process.js') }}" type="text/javascript"></script>
@endsection