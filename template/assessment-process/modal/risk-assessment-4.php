<div data-step="4" class="as-modal-tabs-bg pt-4 as-regulation">
    <div class="row align-items-center">
        <div class="col-md-6">
            <span class="font-weight-500 font-ash">
                If hazard information is found on the SDS it will be shown below <span class="font-blue">You must check the SDS.</span>
            </span>
        </div>

        <div class="col-md-6">
            <div class="alert alert-outline-blue alert-semi-filled-blue pl-3 pr-3 d-flex align-items-center mb-0">
                <span class="font-weight-500">Autopopulate Task Hazards and Controls</span>

                <div class="btn-group btn-group btn-group-lg">
                    <button type="button" class="btn btn-secondary bg-white">No</button>
                    <button type="button" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="kt-portlet as-regulation-hazard active kt-portlet--mobile danger mb-0">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label d-flex w-100">
                        GHS SDS DATA
                        <div class="d-flex as-regulation-title-img ml-auto">
                            <img class="ml-auto mr-2" src="./sevron/assets/media/logos/sevron-logo.svg" height="50"/>
                            <img class="ml-auto mr-2" src="./sevron/assets/media/risk-assessment/caution.png">
                            <img class="ml-auto mr-2" src="./sevron/assets/media/risk-assessment/gas-under-pressure.png">
                            <img class="ml-auto" src="./sevron/assets/media/risk-assessment/toxic.png">
                        </div>
                    </div>
                </div>

                <div class="kt-portlet__body font-ash">
                    <div class="mb-3">
                        <p class="mb-2"><span class="font-weight-500">Hazard Statements</span></p>
                        <p class="mb-0">
                            <small>H280: Contains gas under pressure; may explode if heated</small>
                        </p>
                        <p class="mb-0">
                            <small>H300: Fatal if swallowed</small>
                        </p>
                        <p class="mb-0">
                            <small>H304: May be fatal if swallowed and entered airways</small>
                        </p>
                        <p class="mb-0">
                            <small>H336: May be fatal if swallowed and entered airways</small>
                        </p>
                    </div>

                    <div>
                        <p class="mb-2"><span class="font-weight-500">Precautionary Statements</span></p>
                        <p class="mb-0">
                            <small>P211: Do not spray on an open flame or other ignition source</small>
                        </p>
                        <p class="mb-0">
                            <small>P271: Use only outdoors or in a well-ventilated area</small>
                        </p>
                        <p class="mb-0">
                            <small>P301: IF SWALLOWED: ??please see SDS??</small>
                        </p>
                        <p class="mb-0">
                            <small>P304: IF INHALED: ??please see SDS??</small>
                        </p>
                    </div>
                </div>
                
                <div class="kt-portlet__foot p-0 mt-auto">
                    <button class="btn btn-primary w-100">Use this data</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="kt-portlet as-regulation-hazard kt-portlet--mobile warning h-100 mb-0">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label d-flex w-100">
                        GHS SDS DATA
                    </div>
                </div>

                <div class="kt-portlet__body font-ash">
                    <div class="mb-3">
                        <p class="mb-2"><span class="font-weight-500">Risk Phrases</span></p>
                        <p class="mb-2"><span class="font-weight-500">Safety Phrases</span></p>
                        
                    </div>
                </div>
                <div class="kt-portlet__foot p-0 mt-auto">
                    <button class="btn btn-secondary w-100 font-blue">Use this data</button>
                </div>
            </div>
        </div>
    </div>
    <div class="actions d-flex mt-3">
        <button data-to-step="3" type="button" class="btn btn-custom-blue bordered btn-wider">
            Previous
        </button>
        <a href="/sevron/sevron_theme/assessment-wizard.php" data-to-step="4" class="btn btn-custom-blue btn-wider ml-auto">
            Add Substance Only
        </a>
    </div>
</div>