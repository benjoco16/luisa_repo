<html lang="en" >
    <head>
        <?php include('global/head.php') ?>
        <?php include('./global/head-global-styles.php') ?>
    </head>

    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-aside--enabled kt-aside--fixed kt-page--loading"  >
        
        <!--begin::Header -->
        <?php include('./global/header.php') ?>
        <!--end::Header -->
        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                <!--begin::Aside -->
                <?php include('./global/sidebar.php') ?>
                <!--end::Aside -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!--begin::Sub Header -->
                    <?php include('./include/assessment-wizard/aw.subheader.php') ?>
                    <!--end:: Sub Header -->
                    <!-- begin::Page Content -->
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid pt-4 bg-light-blue">
                        <div class="align-items-start">
                            <?php include('include/incidents/incidents.tab-links.php') ?>
                        </div>
                    </div>	
                    <!-- end::Page Content -->
                </div>
            </div>
        </div>
        <!--begin::Page Scripts -->
        <?php include('./global/vendors.php') ?>
        <!--end::Page Scripts -->
    </body>
</html>