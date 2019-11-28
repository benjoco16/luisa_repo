@extends('static.layout.master')

@section('subheader')
@include('static.substances.components.sub-header')
@include('static.substances.components.header')
@endsection

@section('content')
<div class="kt-portlet">
    <div class="substances-container">
        @include('static.substances.components.aside')
        @include('static.substances.components.result')
    </div>
    @include('static.substances.components.pagination')
</div>
@endsection
