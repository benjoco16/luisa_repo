<html lang="en" >
    <!-- begin::Head -->
    <head>
        @include('global.head')
        @include('global.head-global-styles')
    </head>
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-aside--enabled kt-aside--fixed">
        <!--begin::Header -->
        @include('global.header')
        <!--end::Header -->
        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                <!--begin::Aside -->
                @include('global.sidebar')
                <!--end::Aside -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor py-5" id="kt_content">
                    <div class="kt-container--fluid kt-container kt-grid__item kt-grid__item--fluid overflow-hidden maintenance">    
                        <h1 class="maintenance__emoji">Oooops... :(</h1>
                        <h5 class="maintenance__caption">The page you are trying to access is currently under maintenance.</h5>
                    </div>
                </div>
            </div>
        </div>
        @include('global.vendors')
    </body>
</html>