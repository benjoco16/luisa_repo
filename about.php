<!-- Setting global document root -->
<?php
    $global = $_SERVER["DOCUMENT_ROOT"] . '/sevron/template/global/';
?>

    <head>
        <?php include($global . 'head.php'); ?>
    </head>
    
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >
        <?php include($global . 'header.php'); ?>

        <?php include('template/assessment-process/a_sub-header.php'); ?>
        
        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">

                <?php include($global . 'sidebar.php'); ?>

                    <!-- begin::Page Content -->
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid p-0 m-0">
                        <div class="about-video-wrapper">
                            <video class='video-js' controls preload='auto' width='852' height='480'
                            poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>
                                <source src='https://www.w3schools.com/tags/movie.mp4' type='video/mp4'>
                                <source src='https://www.w3schools.com/tags/movie.webm' type='video/webm'>
                                <p class='vjs-no-js'>
                                To view this video please enable JavaScript, and consider upgrading to a web browser that
                                <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                                </p>
                            </video>
                        </div>

                        <div class="row pl-3 pr-3 pt-5 pb-5 bg-white">
                            <div class="col-md-3">
                                <img class="about-video-logo" src="assets/media/about/msds-icon.png">
                            </div>
                            <div class="col-md-7">
                                <h3 class="pl-4 font-weight-normal font-ash">
                                    Manage the substances used in your company, get notified of updates automatically and request ones you can't find.
                                </h3>
                            </div>
                        </div>
                    </div>	
                    <!-- end::Page Content -->
            </div>
        </div>

        <?php include($global . 'footer.php'); ?>
        
    </body>
</html>