<!-- Accordion -->
<!--begin::Portlet-->
<div class="kt-portlet--spacer bg-light-gray "> 

    <!-- begin::Task Details accordion -->
    <?php include('accordion-sections/acc.task-details.php') ?>
    <!-- end::Task details accordion -->

    <!-- begin::Substance Information accordion -->
    <?php include('accordion-sections/acc.substance-information.php') ?>
    <!-- end::Substance Information accordion -->

    <!--begin::Task Hazards & Controls-->
    <?php include('accordion-sections/acc.task-hazards.php') ?>
    <!--end::Task Hazards & Controls-->

    <?php include('accordion-sections/acc.general-controls.php') ?>

    <?php include('accordion-sections/acc.health-surveillance.php') ?>

    <?php include('accordion-sections/acc.action-management.php') ?>

    <?php include('accordion-sections/acc.linked-documents.php') ?>

    <?php include('accordion-sections/acc.publish.php') ?>
</div>

		<!--end::Portlet-->
<!-- End Accordion -->