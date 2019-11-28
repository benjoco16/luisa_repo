@extends('static.layout.master')

@section('page-styles')
<link rel="stylesheet" href="{{ URL::to('vendors/custom/jstree/jstree.bundle.rtl.min.css') }}" />
@endsection

@section('subheader')
@include('static.reports.components.sub-header')
@endsection

@section('content')
<div class="row mt-4">
    @include('static.reports.components.organisational-chart')
    @include('static.reports.components.reports-list')
</div>
@endsection

@section('page-scripts')
    <script src="{{ URL::to('js/custom/jstree.min.js') }}"></script>
    <script src="{{ URL::to('js/custom/actions-page.js') }}"></script>
@endsection