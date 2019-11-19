<!-- Setting global document root -->
<?php
    $global = $_SERVER["DOCUMENT_ROOT"] . '/sevron/template/global/';
?>
<html lang="en">
    <head>
        <?php include($global . 'head.php'); ?>
    </head>
    
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >
        <?php include($global . 'header.php'); ?>

        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">

                <?php include($global . 'sidebar.php'); ?>

                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        
                    <section class="assessments">
                        <?php include('template/assessment-process/sub-header.php'); ?>
                        <?php include('template/assessment-process/table-filters.php'); ?>
                        <?php include('template/assessment-process/table.php'); ?>
                    </section>

                </div>

            </div>
        </div>

        <?php include('template/assessment-process/modal/modal-container.php'); ?>

        <?php include($global . 'footer.php'); ?>
            
    </body>

</html>