<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1 "> 
    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label d-flex w-100">
                <p class="font-ash bold d-flex align-items-center w-100 font-weight-500 mb-0 pr-3">
                    <img src="{{URL::asset('assets/media/dashboard/chart-bar.svg')}}" class="mr-2" width="13" alt="">
                    12 Month Rolling Rates
                </p>

                <span class="kt-switch kt-switch--sm d-flex align-items-center ml-auto">
                    <span class="ml-auto mr-3">Direct</span> 
                    <label class="d-flex align-items-center m-0">
                        <input type="checkbox" checked name="">
                        <span></span>
                    </label>
                    <span class="ml-2">All</span> 
                </span>
            </div>
        </div>

        <div class="kt-portlet__body pb-0">
            <div id="rlc-container"></div>
        </div>
    </div>
</div>