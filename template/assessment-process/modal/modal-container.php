<div class="modal fade" id="modalRiskAssessment" tabindex="-1" role="dialog" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Find the substance for your COSHH Assessment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <ul class="as-wizard row">
                    <li data-wizard-step="1" class="active col-md-3">
                        <span>1</span>
                        <p>Find Substance</p>
                    </li>

                    <li data-wizard-step="2" class="col-md-3">
                        <span>2</span>
                        <p>Internal Info</p>
                    </li>

                    <li data-wizard-step="3" class="col-md-3">
                        <span>3</span>
                        <p>Usage</p>
                    </li>

                    <li data-wizard-step="4" class="col-md-3">
                        <span>4</span>
                        <p>Regulation</p>
                    </li>
                </ul>
                <?php include('template/assessment-process/modal/risk-assessment-1.php'); ?>
                <?php include('template/assessment-process/modal/risk-assessment-2.php'); ?>
                <?php include('template/assessment-process/modal/risk-assessment-3.php'); ?>
                <?php include('template/assessment-process/modal/risk-assessment-4.php'); ?>
            </div>
        </div>
    </div>
</div>