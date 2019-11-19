<div class="tab-pane active bg-light-gray" id="incidentTab1" role="tabpanel">
    <div class="row pl-3 pr-3">
        <div class="col-md-9 p-0 font-ash">
            <div class="row p-4">
                <div class="col-md-5">
                    <p class="text-note font-gray">ADDRESS DETAILS</p>
                </div>

                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Business Unit</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label>Location</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-map-signs"></i></span></div>
                                    <select class="form-control ml-3">
                                        <option>Sevron Ltd.</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />

            <div class="row p-4">
                <div class="col-md-5">
                    <p class="text-note font-gray">CLIENT DETAILS</p>
                </div>

                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Client name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Client contact no</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />

            <div class="row p-4">
                <div class="col-md-5">
                    <p class="text-note font-gray">ITEM DETAILS</p>
                </div>

                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job number</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Supplier</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Item number</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Customer complaint number </label>
                                <div class="kt-input-icon kt-input-icon--right">
                                    <input type="text" class="form-control">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--right d-flex align-items-center">
                                        <span data-toggle="kt-tooltip" title="Tooltip here"
                                                class="kt-badge bg-blue font-white badge-circle">i</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Item description</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label>Defective item location</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-map-signs"></i></span></div>
                                    <select class="form-control ml-3">
                                        <option>Sevron Ltd.</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Describe the defect</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 form-group">
                            <label class="d-block">Site visit required</label>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-default active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> No
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Yes
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row p-4">
                <div class="col-md-5">
                    <p class="text-note font-gray">CONTACT DETAILS</p>
                </div>

                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact person at site</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact no</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr />

            <div class="actions d-flex align-items-center pr-3 pl-3 pt-5 pb-5">
                <a href="#" class="font-weight-500 font-ash mr-5 ml-auto">Cancel</a>
                <button class="btn btn-custom-blue btn-wider">Save and Next</button>
            </div>
            
        </div>

        <div class="col-md-3 bg-white">
            <?php include('template/incidents/quality-incident.php') ?>
        </div>
    </div>    
</div>