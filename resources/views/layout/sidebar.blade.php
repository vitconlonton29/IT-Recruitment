<div class="left-side-menu mm-show">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img   alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img   alt="" height="16">
                    </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img   alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img   alt="" height="16">
                    </span>
    </a>

    <div class="h-100 mm-active" id="left-side-menu-container" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">

                            <!--- Sidemenu -->
                            <ul class="metismenu side-nav mm-show">

                                <li class="side-nav-title side-nav-item">Manage</li>

                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" class="side-nav-link">
                                        <i class="uil-home-alt"></i>
                                        <span class="badge badge-success float-right">4</span>
                                        <span> Manage </span>
                                    </a>
                                    <ul class="side-nav-second-level mm-collapse" aria-expanded="false">
                                        <li>
                                            <a href="{{route('admin.users.index')}}">Users</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.posts.index')}}">Posts</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.applies.index')}}">Apply</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 452px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar"
                 style="width: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                 style="height: 299px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
    </div>
    <!-- Sidebar -left -->

</div>
