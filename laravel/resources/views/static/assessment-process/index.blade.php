@extends('static.layout.master')

@section('subheader')
@include('static.assessment-process.components.sub-header')
@endsection

@section('content')
    @include('static.assessment-process.components.table-filters')
    @include('static.assessment-process.components.table')

    @include('static.assessment-process.modal.modal')
@endsection

@section('page-scripts')
<script src="{{ URL::to('js/custom/assessment-process.js') }}" type="text/javascript"></script>
@endsection