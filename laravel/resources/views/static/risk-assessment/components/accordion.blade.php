<!-- Accordion -->
<!--begin::Portlet-->
<div class="kt-portlet--spacer bg-light-gray "> 

    <!-- begin::Task Details accordion -->
    @include('static.risk-assessment.accordion-sections.task-details')
    <!-- end::Task details accordion -->

    <!-- begin::Substance Information accordion -->
    @include('static.risk-assessment.accordion-sections.substance-information')
    <!-- end::Substance Information accordion -->

    <!--begin::Task Hazards & Controls-->
    @include('static.risk-assessment.accordion-sections.task-hazards')
    <!--end::Task Hazards & Controls-->

    @include('static.risk-assessment.accordion-sections.general-controls')
    @include('static.risk-assessment.accordion-sections.health-surveillance')
    @include('static.risk-assessment.accordion-sections.action-management')
    @include('static.risk-assessment.accordion-sections.linked-documents')
    @include('static.risk-assessment.accordion-sections.publish')
</div>

		<!--end::Portlet-->
<!-- End Accordion -->