<html lang="en" >
    <?php include('template/risk/r_head.php') ?>
            <!-- end::Head -->

            <!-- begin::Body -->
    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading bg-light-blue"  >
            
    <?php include('template/risk/r_header.php') ?>

    <!-- begin:: Content -->
        <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid pl-4 pr-4">
            <div class="row align-items-start">
                <div class="col-md-10">
                    <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                        <div class="kt-portlet__body p-0">
                            <?php include('template/risk/r_first_section.php')?>
                            <?php include('template/risk/r_accordion_section.php')?>
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
    <!-- end of update dev -->
                                        
    <?php include('template/risk/r_vendors.php') ?>
</html>