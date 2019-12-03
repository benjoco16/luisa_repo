<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
    <div class="kt-header-mobile__logo">
        <a href="/sevron/pages">
            <img alt="Logo" src="/images/logos/logo-mobile.png" style="max-width: 40px"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
    </div>
</div>
    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed"  data-ktheader-minimize="on" >
                        <div class="kt-container  kt-container--fluid">
                            <!-- begin:: Brand -->
                            <div class="kt-header__brand " id="kt_header_brand">
                                <div class="kt-header__brand-logo">
                                    <a href="{{ URL::to('/') }}">
                                        <img alt="Logo" src="/images/logos/logo-dark.png" height="40"/>
                                    </a>		
                                </div> 
                            </div>
                            <!-- end:: Brand -->	
                            <!-- begin:: Header Topbar -->
                            <div class="kt-header__topbar">
                                <!--begin: Search -->
                                <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"  id="kt_quick_search_toggle">
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                        <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
                                            <form method="get" class="kt-quick-search__form">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                                                    <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                                                    <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                                                </div>
                                            </form>

                            </div>
                        </div>
                    </div>
    
                    <!--end: Search -->

    
                    <!--begin: Notifications -->
	<div class="kt-header__topbar-item dropdown">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
			<span class="kt-header__topbar-icon">
                <span class="header-icon bell"></span>
            </span>
			
		</div>
		<div class="dropdown-menu dropdown--dark-full dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-sm">
            <a class="dropdown-item d-flex align-items-center" href="/sevron/pages/maintenance.php">
                No notification at this time
            </a>
		</div>
	</div>
    <!--end: Notifications -->
    
	<!--begin: Cart -->
	<div class="kt-header__topbar-item dropdown">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
			<span class="kt-header__topbar-icon">
                <span class="header-icon map"></span>
            </span>
        </div>
        <div class="dropdown-menu dropdown--dark-full dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-sm">
            <a class="dropdown-item d-flex align-items-center" href="/sevron/pages/maintenance.php">
                No information to display
            </a>
		</div>
	</div>
    <!--end: Cart-->

    <div class="kt-header__topbar-item dropdown">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown">
			<span class="kt-header__topbar-icon">
                <span class="header-icon buoy"></span>
            </span>
        </div>
        <div class="dropdown-menu dropdown--dark-full dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-sm">
            <a class="dropdown-item d-flex align-items-center" href="/sevron/pages/maintenance.php">
                <i class="fa fa-user-circle font-neon-green font-size-md"></i>
                My Details
            </a>
            <a class="dropdown-item d-flex align-items-center" href="/sevron/pages/maintenance.php">
                <i class="fa fa-align-justify font-blue font-size-md" style=""></i>
                My Actions
            </a>

            <a href="/sevron/pages/maintenance.php" class="btn btn-logout">Log out</a>
        </div>
    </div>
        <!--begin: User bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,10px">
                <!-- <span class="kt-header__topbar-welcome ">Hi,</span> -->
                <span class="kt-header__topbar-username">
                    Nick <i class="fa fa-caret-down"></i>
                </span>
                <img alt="Pic" src="/images/users/300_21.jpg"/>
                <span class="kt-header__topbar-icon kt-bg-brand kt-font-lg kt-font-bold kt-font-light kt-hidden">S</span>
                <span class="kt-header__topbar-icon kt-hidden"><i class="flaticon2-user-outline-symbol"></i></span>
            </div>
            <div class="dropdown-menu dropdown--dark-full dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-sm">
                <a class="dropdown-item d-flex align-items-center" href="/sevron/pages/maintenance.php">
                    No information to display
                </a>
            </div>

        </div>
        
        <!--begin: Language bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--langs">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-header__topbar-icon">
                    <img class="" src="/images/flags/012-uk.svg" alt="" />
                </span>
            </div>
            <div class="dropdown-menu dropdown--dark-full dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
                
                <a href="/sevron/pages/maintenance.php" class="dropdown-menu-item d-flex align-items-center pb-2">
                    <span class="kt-nav__link-icon"><img src="/images/flags/020-flag.svg" alt="" /></span>
                    <span class="kt-nav__link-text font-white">English</span>
                </a>
                <a href="/sevron/pages/maintenance.php" class="dropdown-menu-item d-flex align-items-center pb-2">
                    <span class="kt-nav__link-icon"><img src="/images/flags/016-spain.svg" alt="" /></span>
                    <span class="kt-nav__link-text font-white">Spanish</span>
                </a>
                <a href="/sevron/pages/maintenance.php" class="dropdown-menu-item d-flex align-items-center">
                    <span class="kt-nav__link-icon"><img src="/images/flags/017-germany.svg" alt="" /></span>
                    <span class="kt-nav__link-text font-white">German</span>
                </a>
            </div>
        </div>
        <!--end: Language bar -->
    </div>
    <!--end: Quick actions -->
	</div>
</div>
<!-- end:: Header Topbar -->
<!-- end:: Header -->