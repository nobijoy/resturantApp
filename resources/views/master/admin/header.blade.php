

<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="feather icon-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand"
                                        href="{{asset('/backend')}}/html/ltr/vertical-menu-template-semi-dark/index.html"><img class="brand-logo"
                                                                                                                               alt="stack admin logo" src="{{asset('/backend')}}/images/logo/stack-logo-light.png">
                        <h2 class="brand-text">Restaurant</h2>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">

                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item"><a
                            class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="avatar avatar-online"><img
                                    src="{{asset('/backend')}}/images/portrait/small/avatar-s-1.png"
                                    alt="avatar"><i></i></div><span class="user-name">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                                          href="user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a
                                class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My
                                Inbox</a><a class="dropdown-item" href="user-cards.html"><i
                                    class="feather icon-check-square"></i> Task</a><a class="dropdown-item"
                                                                                      href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class=""
                                                                   href="{{route('logout')}}"><i class="feather icon-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

