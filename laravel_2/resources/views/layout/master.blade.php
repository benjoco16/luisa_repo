<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        @include('include.global.global-styles')    
        
        @yield('page-styles')

        <link rel="stylesheet" href="{{ request()->root() }}{{ mix('css/app.css') }}">

    </head>

    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-aside--enabled kt-aside--fixed">
        @include('include.global.header')

        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                
                @include('include.global.sidebar')

                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    @yield('subheader')
                    @yield('full-width-content')
                    <div class="kt-container--fluid kt-container kt-grid__item kt-grid__item--fluid overflow-hidden">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        @include('include.global.global-scripts')

        @yield('page-scripts')
    </body>
</html>