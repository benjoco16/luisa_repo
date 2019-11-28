@extends('static.layout.master')

@section('subheader')
@include('static.assessment-wizard.components.sub-header')
@endsection

@section('content')
<div class="kt-portlet mt-4">
    <div class="substances-container">
        @include('static.incidents.components.tab-links')
    </div>
</div>
@endsection