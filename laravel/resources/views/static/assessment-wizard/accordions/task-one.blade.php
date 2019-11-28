<div class="accordion accordion-light ra-accordion accordion-toggle-arrow mb-4" data-status="category" id="accordionExample2">
    <div class="card risk-assessment">
        <div class="card-header" id="headingOne2">
            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                <span class="accordion-draggable">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                </span>
                <span class="accordion-status">Task One</span> Prepare work for area cleaning
            </div>
        </div>
        <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample2">
            @include('static.assessment-wizard.accordions.task-one-sub-1')
            @include('static.assessment-wizard.accordions.task-one-sub-2')
        </div>
    </div>
</div>