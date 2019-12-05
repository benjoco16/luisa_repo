@extends('layout.master')

@section('subheader')
@include('include.substances.substances-subheader')
@include('include.substances.substances-header')
@endsection

@section('content')
<div class="kt-portlet">
    <div class="substances-container">
        @include('include.substances.substances-aside')
        @include('include.substances.substances-result')
    </div>
    @include('include.substances.substances-pagination')
</div>
@endsection
