<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header">
                <span>General</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
            </li>
            <li class="nav-item">
                <a href="">
                    <i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Manage Site</span>
                </a>
                <ul class="menu-content">
                    <li @if($url == 'managewebsite') class="active" @endif>
                        <a href="{{route('managewebsite')}}" data-i18n="eCommerce">App Setting</a>
                    </li>
                    <li @if($url == 'mananagehomepage') class="active" @endif class="">
                        <a href="{{route('mananagehomepage')}}" data-i18n="Analytics">Home page</a>
                    </li>
                    <li @if($url == 'mananagerestaurantpage') class="active" @endif>
                        <a href="{{route('mananagerestaurantpage')}}" data-i18n="Fitness">Restaurant page</a>
                    </li>
                    <li @if($url == 'mananageabout') class="active" @endif>
                        <a href="{{route('mananageabout')}}" data-i18n="CRM">About page</a>
                    </li>
                    <li @if($url == 'mananagecontactpage') class="active" @endif>
                        <a href="{{route('mananagecontactpage')}}" data-i18n="CRM">Contact Page</a>
                    </li>
                    <li @if($url == 'managebookingpage') class="active" @endif>
                        <a href="{{route('managebookingpage')}}" data-i18n="CRM">Booking Page</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="">
                    <i class="feather icon-settings"></i><span class="menu-title" data-i18n="Dashboard">Setup</span>
                </a>
                <ul class="menu-content">
                    <li @if($url == 'area.index') class="active" @endif>
                        <a href="{{route('area.index')}}" data-i18n="eCommerce">Area</a>
                    </li>
                </ul>
            </li>

            <li  @if($url == 'restaurant.index') class="active" @else  class=" nav-item" @endif>
                <a  href="{{route('restaurant.index')}}">
                    <i class="feather icon-anchor"></i><span class="menu-title" data-i18n="Dashboard">Restaurant</span>
                </a>
            </li>
        </ul>

    </div>
</div>
