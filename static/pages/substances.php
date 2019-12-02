<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <?php include('./global/head.php') ?>
        <link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
        <?php include('./global/head-global-styles.php') ?>
    </head>
    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-aside--enabled kt-aside--fixed"  >
        
        <!--begin::Header -->
        <?php include('./global/header.php') ?>
        <!--end::Header -->

        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch substances" id="kt_body">
			<div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                <?php include('./global/sidebar.php') ?>

                <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <?php include('include/substances/substances.sub-header.php') ?>
                    <?php include('include/substances/substances.header.php') ?>
                   
                    <div class="kt-container py-4 kt-container--fluid">
                        <div class="kt-portlet">
                            <div class="substances-container">
                                <?php include('include/substances/substances.aside.php') ?>
                                <?php include('include/substances/substances.result.php') ?>
                            </div>

                            <?php include('include/substances/substances.pagination.php') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('./global/vendors.php') ?>
    </body>
</html>