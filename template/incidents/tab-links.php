<div class="kt-portlet kt-portlet--tabs">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-blue nav-tabs-line-2x nav-tabs-line-right nav-tabs-bold" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#incidentTab1" role="tab">
                        Incident Details
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#incidentTab2" role="tab">
                        Actions
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#incidentTab3" role="tab">
                        Attachments
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#incidentTab4" role="tab">
                        Submit Records
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="kt-portlet__body p-0">                   
        <div class="tab-content">
            <?php include('./template/incidents/tab-incident-details.php') ?>
            <?php include('./template/incidents/tab-actions.php') ?>
            <!-- <div class="tab-pane" id="incidentTab2" role="tabpanel">
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div class="tab-pane" id="incidentTab3" role="tabpanel">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
            </div> -->
        </div>      
    </div>
</div>