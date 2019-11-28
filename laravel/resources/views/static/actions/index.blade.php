@extends('static.layout.master')

@section('subheader')
@include('static.actions.components.sub-header')
@endsection

@section('content')

<div class="mt-4">
    @include('static.actions.components.table')
</div>

@endsection