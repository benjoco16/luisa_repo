<!-- Accordion -->
<!--begin::Portlet-->
<div class="kt-portlet--spacer bg-light-gray "> 

    <!-- begin::Task Details accordion -->
    @include('include.risk-assessment.accordion-sections.acc-task-details')
    <!-- end::Task details accordion -->

    <!-- begin::Substance Information accordion -->
    @include('include.risk-assessment.accordion-sections.acc-substance-information')
    <!-- end::Substance Information accordion -->

    <!--begin::Task Hazards & Controls-->
    @include('include.risk-assessment.accordion-sections.acc-task-hazards')
    <!--end::Task Hazards & Controls-->

    @include('include.risk-assessment.accordion-sections.acc-general-controls')

    @include('include.risk-assessment.accordion-sections.acc-health-surveillance')

    @include('include.risk-assessment.accordion-sections.acc-action-management')

    @include('include.risk-assessment.accordion-sections.acc-linked-documents')

    @include('include.risk-assessment.accordion-sections.acc-publish')
</div>

		<!--end::Portlet-->
<!-- End Accordion -->