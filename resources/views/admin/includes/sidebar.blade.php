 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">{{trans('translation.menu')}} </li>

                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards"> {{trans('translation.Dashboard')}} </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('messages.index') }}" class="">
                        <i class="bx bx-envelope"></i>
                        <span key="t-dashboards">{{ trans('translation.messages')}}</span>
                    </a>

                </li>

                <li>
                    <a href="{{ route('settings.index') }}" class="">
                        <i class="bx bx-cog"></i>
                        <span key="t-dashboards">{{ trans('translation.settings')}}</span>
                    </a>

                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
