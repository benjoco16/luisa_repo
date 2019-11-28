<div class="modal fade" id="modalAddEquipment" tabindex="-1" role="dialog" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Equipment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <ul class="assessment-wizard row">
                    <li data-wizard-step="1" class="active col-md-3">
                        <span>1</span>
                        <p>Equipment Overview</p>
                    </li>
                    <li data-wizard-step="2" class="col-md-3">
                        <span>2</span>
                        <p>Classification</p>
                    </li>
                    <li data-wizard-step="3" class="col-md-3">
                        <span>3</span>
                        <p>Inspection</p>
                    </li>
                    <li data-wizard-step="4" class="col-md-3">
                        <span>4</span>
                        <p>Finish</p>
                    </li>
                </ul>

                @include('static.equipment.modal.modal-step-1')
                @include('static.equipment.modal.modal-step-2')
                @include('static.equipment.modal.modal-step-3')
                @include('static.equipment.modal.modal-step-4')
                
            </div>
        </div>
    </div>
</div>