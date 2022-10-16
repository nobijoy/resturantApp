<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>General</span><i class=" feather icon-minus" data-toggle="tooltip"
                                                                  data-placement="right" data-original-title="General"></i>
            </li>
            <li class="nav-item">
                <a href="">
                    <i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Manage Site</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('managewebsite')}}" data-i18n="eCommerce">App Setting</a>
                    </li>
                    <li class="">
                        <a class="menu-item" href="{{route('mananagehomepage')}}" data-i18n="Analytics">Home page</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('mananagerestaurantpage')}}" data-i18n="Fitness">Restaurant page</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('mananageabout')}}" data-i18n="CRM">About page</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('mananagecontactpage')}}" data-i18n="CRM">Contact Page</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('managebookingpage')}}" data-i18n="CRM">Booking Page</a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" nav-item">
                <a href="">
                    <i class="feather icon-settings"></i><span class="menu-title" data-i18n="Dashboard">Setup</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('area.index')}}" data-i18n="eCommerce">Area</a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" nav-item">
                <a href="">
                    <i class="feather icon-anchor"></i><span class="menu-title" data-i18n="Dashboard">Restaurant</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('restaurant.index')}}" data-i18n="eCommerce">Show</a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</div>
