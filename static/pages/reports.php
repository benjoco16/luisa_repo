<html lang="en" >
    <!-- begin::Head -->
    <head>
        <?php include('./global/head.php') ?>
        <link rel="stylesheet" href="./assets/vendors/custom/jstree/jstree.bundle.rtl.min.css" />
        <?php include('./global/head-global-styles.php') ?>
    </head>
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-aside--enabled kt-aside--fixed">
        <!--begin::Header -->
        <?php include ('./global/header.php') ?>
        <!--end::Header -->
        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                <!--begin::Aside -->
                <?php include ('./global/sidebar.php') ?>
                <!--end::Aside -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <?php include('include/reports/reports.sub-header.php'); ?>
                    <div class="kt-container--fluid kt-container kt-grid__item kt-grid__item--fluid overflow-hidden mt-4">    
                        <div class="row">
                            <?php include('include/reports/reports.organisational-chart.php'); ?>
                            <?php include('include/reports/reports.reports-list.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('./global/vendors.php') ?>
        <script src="./assets/js/custom/jstree.min.js"></script>
        <script src="./assets/js/custom/actions-page.js"></script>
    </body>
</html>