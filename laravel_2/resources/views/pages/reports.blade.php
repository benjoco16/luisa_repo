@extends('layout.master')

@section('page-styles')
<link rel="stylesheet" href="{{ URL::to('vendors/custom/jstree/jstree.bundle.rtl.min.css') }}" />
@endsection

@section('subheader')
@include('include.reports.reports-subheader')
@endsection

@section('content')
<div class="row mt-4">
    @include('include.reports.reports-organisational-chart')
    @include('include.reports.reports-reports-list')
</div>
@endsection

@section('page-scripts')
    <script src="{{ URL::to('js/custom/jstree.min.js') }}"></script>
    <script src="{{ URL::to('js/custom/actions-page.js') }}"></script>
@endsection