<html lang="en" >
    <head>
        <?php include('global/head.php') ?>
        <link href="./assets/css/global/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/global/components.min.css" rel="stylesheet" type="text/css" />
        <?php include('./global/head-global-styles.php') ?>
    </head>

    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-aside--enabled kt-aside--fixed kt-page--loading">
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
                        <div class="row align-items-start">
                            <div class="col-md-10">
                                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                                    <div class="kt-portlet__body p-0">
                                        <div class="kt-portlet--spacer"> 
                                            <?php include('include/assessment-wizard/aw.content-header.php'); ?>
                                            <?php include('include/assessment-wizard/aw.form.php'); ?>
                                        </div>
                                        
                                        <div class="kt-portlet--spacer bg-light-gray">
                                            <?php include('include/assessment-wizard/accordions/task-one.php')?>
                                            <?php include('include/assessment-wizard/accordions/task-two.php')?>
                                            
                                            <div class="kt-portlet mb-3 mt-3 font-ash kt-portlet--height-fluid">
                                                <div class="kt-portlet__body p-0">
                                                    <div class="risk-assessment__add-section border-purple  text-center p-4">
                                                        <span class="font-purple font-weight-500">Add another hazard</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php include('include/assessment-wizard/accordions/task-three.php'); ?>
                                            <?php include('include/assessment-wizard/accordions/task-four.php'); ?>
                                            <?php include('include/assessment-wizard/accordions/task-five.php'); ?>
                                            <?php include('include/assessment-wizard/accordions/task-six.php'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid risk-assessment__actions">
                                    <div class="kt-portlet__body">
                                        <?php include('include/risk-assessment/ra.actions.php') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                    <!-- end::Page Content -->
                </div>
            </div>
        </div>
        
        <!--begin::Page Scripts -->
        <?php include('./global/vendors.php') ?>
        <script src="./assets/js/custom/bootstrap-tagsinput.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/custom/bootstrap-tagsinput.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/summernote/dist/summernote.js"></script>
        <script src="./assets/js/custom/risk-assessment.js" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                $('#task1Textarea, #task2Textarea').summernote({
                    height: 300
                });
            });
        </script>
        <!--end::Page Scripts -->
    </body>
</html>