<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

<div class="kt-aside kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
	<!-- begin:: Aside Menu -->
	<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
		<div 
			id="kt_aside_menu"
			class="kt-aside-menu "
			data-ktmenu-vertical="1"
			 data-ktmenu-scroll="1">		
			<ul class="kt-menu__nav ">
                <li class="kt-menu__item kt-menu__item--active" aria-haspopup="true">
                    <a href="{{ URL::to('/') }}" class="kt-menu__link ">
                        <span class="kt-menu__link-icon">
                            <i class="aside-icon dashboard"></i>
                        </span>
                        <span class="kt-menu__link-text">Dashboard</span>
                    </a>
                </li>
                <li class="kt-menu__item" aria-haspopup="true">
                    <a href="{{ URL::to('assessment-process') }}" class="kt-menu__link ">
                        <span class="kt-menu__link-icon">
                            <i class="aside-icon file"></i>
                        </span>
                        <span class="kt-menu__link-text">Assesments</span>
                    </a>
                </li>
                <li class="kt-menu__item" aria-haspopup="true">
                    <a href="{{ URL::to('substances') }}" class="kt-menu__link ">
                        <span class="kt-menu__link-icon">
                            <i class="aside-icon flask"></i>
                        </span>
                        <span class="kt-menu__link-text">Substances</span>
                    </a>
                </li>
                <li class="kt-menu__item" aria-haspopup="true">
                    <a href="{{ URL::to('incidents') }}" class="kt-menu__link ">
                        <span class="kt-menu__link-icon">
                            <i class="aside-icon info"></i>
                        </span>
                        <span class="kt-menu__link-text">Incident</span>
                    </a>
                </li>
                <li class="kt-menu__item" aria-haspopup="true">
                    <a href="{{ URL::to('equipment') }}" class="kt-menu__link ">
                    
                        <span class="kt-menu__link-icon">
                            <i class="aside-icon thunder"></i>
                        </span>   
                        <span class="kt-menu__link-text">Equipment</span>
                    </a>
                </li>
                <li class="kt-menu__item" aria-haspopup="true">
                    <a href="{{ URL::to('actions') }}" class="kt-menu__link ">
                        <span class="kt-menu__link-icon">
                            <i class="aside-icon message"></i>
                        </span>
                        <span class="kt-menu__link-text">Actions</span>
                    </a>
                </li>
                <li class="kt-menu__item" aria-haspopup="true">
                    <a href="{{ URL::to('reports') }}" class="kt-menu__link">
                        <span class="kt-menu__link-icon">
                            <i class="aside-icon pie"></i>
                        </span>
                        <span class="kt-menu__link-text">Reports</span>
                    </a>
                </li>
        	</ul>
		</div>
	</div>
	<!-- end:: Aside Menu -->
</div>