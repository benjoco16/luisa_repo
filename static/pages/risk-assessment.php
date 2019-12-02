<html lang="en">
    <head>
        <?php include('global/head.php'); ?>
        <link href="./assets/css/global/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
        <!-- <link href="./assets/csinclude/global/components.min.css" rel="stylesheet" type="text/css" /> -->
        <?php include('./global/head-global-styles.php') ?>
    </head>
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-aside--enabled kt-aside--fixed kt-page--loading">
        <!--begin::Header -->
        <?php include('./global/header.php'); ?>
        <!--end::Header -->
        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
            <div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                <!--begin::Aside -->
                <?php include('./global/sidebar.php'); ?>
                <!--end::Aside -->
                <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!--begin::Sub Header -->
                    <?php include('./include/assessment-wizard/aw.subheader.php'); ?>
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid pt-4 bg-light-blue">
                        <div class="row align-items-start">
                            <div class="col-md-10">
                                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                                    <div class="kt-portlet__body p-0">
                                        <?php include('include/risk-assessment/ra.form.php'); ?>
                                        <?php include('include/risk-assessment/ra.accordion.php'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid risk-assessment__actions">
                                    <div class="kt-portlet__body">
                                        <?php include('include/risk-assessment/ra.actions.php'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('./global/vendors.php'); ?>
        <script src="./assets/js/custom/bootstrap-tagsinput.min.js" type="text/javascript"></script>
        <script src="./assets/js/custom/risk-assessment.js" type="text/javascript"></script>
    </body>
</html>