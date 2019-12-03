@extends('layout.master')

@section('subheader')
@include('include.actions.actions-sub-header')
@endsection

@section('content')

<div class="mt-4">
    @include('include.actions.actions-table')
</div>

@endsection