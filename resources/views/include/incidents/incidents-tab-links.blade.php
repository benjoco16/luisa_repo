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
            @include('include.incidents.tab-incident-details')
            @include('include.incidents.tab-actions')
            @include('include.incidents.tab-attachments')
        </div>      
    </div>
</div>