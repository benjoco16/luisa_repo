@extends('static.layout.master')

@section('page-styles')
<link href="{{ URL::to('css/vendors/video.min.css') }}" rel="stylesheet">
<script src="{{ URL::to('js/custom/video.min.js') }}"></script>
@endsection

@section('subheader')
@include('static.about.components.sub-header')
@endsection

@section('content')
<div class="mt-4">
    <div class="about__video">
        <div class="about__video-handler">
            <video class='video-js' controls preload='auto' width='852' height='480'
            poster='MY_VIDEO_POSTER.jpg' data-setup='{"fluid": true}'>
                <source src='https://www.w3schools.com/tags/movie.mp4' type='video/mp4'>
                <source src='https://www.w3schools.com/tags/movie.webm' type='video/webm'>
                <p class='vjs-no-js'>
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                </p>
            </video>
        </div>
    </div>
    <div class="row pl-3 pr-3 pt-5 pb-5 bg-white">
        <div class="col-md-3">
            <img class="about__video-logo" src="/images/about/msds-icon.png">
        </div>
        <div class="col-md-7">
            <h3 class="pl-4 font-weight-normal">
                Manage the substances used in your company, get notified of updates automatically and request ones you can't find.
            </h3>
        </div>
    </div>
</div>
@endsection