@extends('static.layout.master')

@section('page-styles')
<link href="{{ URL::to('css/vendors/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::to('vendors/general/summernote/dist/summernote.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::to('css/vendors/components.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('subheader')
@include('static.assessment-wizard.components.sub-header')
@endsection

@section('content')
<div class="row align-items-start">
    <div class="col-md-10">
        <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
            <div class="kt-portlet__body p-0">
                <div class="kt-portlet--spacer"> 
                    @include('static.assessment-wizard.components.content-header')
                    @include('static.assessment-wizard.components.form')
                </div>
                
                <div class="kt-portlet--spacer bg-light-gray">
                    @include('static.assessment-wizard.accordions.task-one')
                    @include('static.assessment-wizard.accordions.task-two')
                    
                    <div class="kt-portlet mb-3 mt-3 font-ash kt-portlet--height-fluid">
                        <div class="kt-portlet__body p-0">
                            <div class="risk-assessment__add-section border-purple  text-center p-4">
                                <span class="font-purple font-weight-500">Add another hazard</span>
                            </div>
                        </div>
                    </div>

                    @include('static.assessment-wizard.accordions.task-three')
                    @include('static.assessment-wizard.accordions.task-four')
                    @include('static.assessment-wizard.accordions.task-five')
                    @include('static.assessment-wizard.accordions.task-six')
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid risk-assessment__actions">
            <div class="kt-portlet__body">
                @include('static.risk-assessment.components.actions')
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-scripts')
<script src="{{ URL::to('js/custom/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('vendors/general/custom/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('vendors/general/summernote/dist/summernote.js') }}"></script>
<script src="{{ URL::to('js/custom/risk-assessment.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        $('#task1Textarea, #task2Textarea').summernote({
            height: 300
        });
    });
</script>
@endsection
