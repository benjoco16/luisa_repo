<!-- begin:: Subheader -->
<div class="kt-subheader kt-grid__item" id="kt_subheader">
    <div class="kt-container kt-container--fluid">
        <div class="kt-subheader__main">
            <!-- Start Create New button -->
                <div class="dropdown">
                    <a href="/sevron/pages/maintenance.php" class="btn dropdown-toggle btn-lg btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Create New
                    </a>
                    <div class="dropdown-menu dropdown--dark dropdown-menu-fit dropdown-menu-sm">
                        <ul class="kt-nav kt-nav--bold kt-nav--md-space">
                            <li class="kt-nav__item sub-dropdown-link">
                                <a class="kt-nav__link active">
                                    <span class="kt-nav__link-icon"><i class="la la-file"></i></span>
                                    <span class="kt-nav__link-text">Assessment</span>
                                </a>

                                <div class="dropdown-menu sub-dropdown dropdown-menu-fit dropdown-menu-lg">
                                    <ul class="kt-nav kt-nav--bold kt-nav--md-space">
                                        <li class="kt-nav__item">
                                            <a class="kt-nav__link active" data-toggle="modal" data-target="#modalRiskAssessment">
                                                <span class="kt-nav__link-icon kt-nav__link-icon-hover-green"><i class="fa fa-flask"></i></span>
                                                <span class="kt-nav__link-text">COSHH Risk Assessment</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a class="kt-nav__link active">
                                                <span class="kt-nav__link-icon"><i class="fa fa-tools"></i></span>
                                                <span class="kt-nav__link-text">Task Risk Assessment</span>
                                            </a>
                                        </li>

                                        <li class="kt-nav__item">
                                            <a class="kt-nav__link active">
                                                <span class="kt-nav__link-icon"><i class="fa fa-bolt"></i></span>
                                                <span class="kt-nav__link-text">Puwer Risk Assessment</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-nav__item">
                                <a class="kt-nav__link">
                                    <span class="kt-nav__link-icon"><i class="la la-info-circle"></i></span>
                                    <span class="kt-nav__link-text">Incident</span>
                                </a>                                                 
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="dropdown">
                    <button type="button" class="btn btn-default dropdown-toggle dopti" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Downloads
                    </button>
                </div>

                <div class="dropdown">
                    <button type="button" class="btn btn-default dropdown-toggle dopti" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Assessments
                    </button>
                </div>

                <a href="/sevron/pages/maintenance.php" class="btn btn-default dopti">
                    <span class="kt-nav__link-icon"><i class="font-md la la-file"></i></span>
                    Template Assessments
                </a>
                
                <a href="{{ URL::to('about') }}" class="btn btn-default dopti">
                    About
                </a>
                
            <!-- End Create New Button -->
        </div>
        @include('static.includes.user-guide')
    </div>
</div>
<!-- end:: Subheader -->