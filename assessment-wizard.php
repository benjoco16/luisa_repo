<html lang="en" >
    <head>
        <?php include('global/head.php') ?>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    </head>

    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >
        
        <!--begin::Header -->
        <?php include('./global/header.php') ?>
        <!--end::Header -->
        
        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">
                <!--begin::Aside -->
                <?php include('./global/sidebar.php') ?>
                <!--end::Aside -->
                
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!--begin::Sub Header -->
                    <?php include('./template/assessment-wizard/aw-subheader.php') ?>
                    <!--end:: Sub Header -->

                    <!-- begin::Page Content -->
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid pl-4 pr-4">
                        <div class="row align-items-start">
                            <div class="col-md-10">
                                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                                    <div class="kt-portlet__body p-0">
                                        <div class="kt-portlet-spacer"> 
                                            <?php include('template/assessment-wizard/aw-content-header.php'); ?>
                                            <?php include('template/assessment-wizard/aw-form.php'); ?>
                                        </div>
                                        
                                        <div class="kt-portlet-spacer bg-light-gray">
                                            <?php include('template/assessment-wizard/accordions/task-one.php')?>
                                            <?php include('template/assessment-wizard/accordions/task-two.php')?>
                                            
                                            <div class="kt-portlet mb-3 mt-3 font-ash kt-portlet--height-fluid">
                                                <div class="kt-portlet__body p-0">
                                                    <div class="th-add-hazard border-purple  text-center p-4">
                                                        <span class="font-purple font-weight-500">Add another hazard</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php include('template/assessment-wizard/accordions/task-three.php'); ?>
                                            <?php include('template/assessment-wizard/accordions/task-four.php'); ?>
                                            <?php include('template/assessment-wizard/accordions/task-five.php'); ?>
                                            <?php include('template/assessment-wizard/accordions/task-six.php'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid rs-actions">
                                    <div class="kt-portlet__body">
                                        <?php include('template/risk/r_actions.php') ?>
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
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
        
        <script src="./assets/js/custom/risk-assessment.js" type="text/javascript"></script>

        <script>
            $(document).ready (function () {
                $('#task1Textarea, #task2Textarea').summernote({
                    height: 300
                });
            })
        </script>
        <!--end::Page Scripts -->
    </body>
</html>