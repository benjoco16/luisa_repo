@extends('layout.master')

@section('subheader')
@include('include.assessment-wizard.aw-subheader')
@endsection

@section('content')
<div class="kt-portlet mt-4">
    <div class="substances-container">
        @include('include.incidents.incidents-tab-links')
    </div>
</div>
@endsection