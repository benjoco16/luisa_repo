<div data-step="4" class="modal-body--has-bg pt-4 assessment-regulation">
    <div class="row align-items-center">
        <div class="col-md-6 col-sm-6 mb-3">
            <span class="font-weight-500 font-ash">
                If hazard information is found on the SDS it will be shown below <span class="font-blue">You must check the SDS.</span>
            </span>
        </div>

        <div class="col-md-6 col-sm-6 mb-3">
            <div class="d-flex m-0 align-items-center alert alert-outline-primary alert-semi-filled-primary">
                <span class="font-weight-500 pr-3 ">Autopopulate Task Hazards and Controls</span>

                <div class="form-group mb-0">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-lg btn-default active">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> No
                        </label>

                        <label class="btn btn-lg btn-default">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Yes
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6 col-sm-6 assessment-regulation__hazard">
            <input type="radio" checked name="regulationHazard">
            <div class="kt-portlet active kt-portlet--mobile kt-portlet--danger mb-0">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label d-flex w-100">
                        <h4>GHS SDS Data</h4>
                        <div class="d-flex assessment-regulation__title-img ml-auto">
                            <img class="ml-auto mr-2" src="assets/media/risk/p1.png">
                            <img class="ml-auto mr-2" src="assets/media/risk/hazard4.png">
                            <img class="ml-auto" src="assets/media/risk/danger.png">
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
                    <button class="btn w-100">Use this data</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 assessment-regulation__hazard">
            <input type="radio" name="regulationHazard">
            <div class="kt-portlet kt-portlet--mobile kt-portlet--warning h-100 mb-0">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label d-flex w-100">
                        <h4>CHIP SDS Data</h4>
                    </div>
                </div>
                <div class="kt-portlet__body font-ash">
                    <div class="mb-3">
                        <p class="mb-2"><span class="font-weight-500">Risk Phrases</span></p>
                        <p class="mb-2"><span class="font-weight-500">Safety Phrases</span></p>
                        
                    </div>
                </div>
                <div class="kt-portlet__foot p-0 mt-auto">   
                    <button class="btn w-100">Use this data</button>
                </div>
            </div>
        </div>
    </div>
    <div class="actions assessment-tabs__actions d-flex mt-3">
        <button data-to-step="3" type="button" class="btn btn-outline-primary bordered btn-wider">
            Previous
        </button>
        <a href="/sevron/pages/assessment-wizard.php" data-to-step="4" class="btn btn-primary btn-wider ml-auto">
            Add Substance Only
        </a>
    </div>
</div>