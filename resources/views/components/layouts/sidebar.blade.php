<div class="sidebar-wrapper sidebar-theme">

    <nav id="compactSidebar">

        <div class="theme-logo">
            <a href="index-2.html">
                <img src="{{ asset('assets/img/logo.svg') }}" class="navbar-logo" alt="logo">

            </a>
        </div>

        <ul class="menu-categories">
            <li class="menu menu-single">
                <a href="index-2.html" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Menu 1</span></div>
            </li>

            <li class="menu">
                <a href="#app" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-airplay">
                                <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Menu 2</span></div>
            </li>

            <li class="menu">
                <a href="#tables" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-file">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Menu 3</span></div>
            </li>

            <li class="menu active">
                <a href="#more" data-active="true" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-terminal">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" y1="19" x2="20" y2="19"></line>
                            </svg>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Starter Kit</span></div>
            </li>
        </ul>

        <div class="sidebar-bottom-actions">

            <div class="external-links">
                <a target="_blank" href="https://designreset.com/cork/documentation/index.html" target="_blank"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-help-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    <div class="tooltip"><span>Help</span></div>
                </a>
            </div>

            <div class="dropdown user-profile-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/img/profile-7.jpg') }}" class="img-fluid" alt="avatar">

                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="dropdown-inner">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="{{ asset('assets/img/profile-7.jpg') }}" class="img-fluid mr-2"
                                    alt="avatar">
                                <div class="media-body">
                                    <h5>Alan Green</h5>
                                    <p>Project Leader</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="user_profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span> Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="apps_mailbox.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path
                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                    </path>
                                </svg> <span> Inbox</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                    <rect x="3" y="11" width="18" height="11"
                                        rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg> <span>Lock Screen</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_login.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </nav>

    <div id="compact_submenuSidebar" class="submenu-sidebar">

        <div class="submenu" id="dashboard">
            <ul class="submenu-list" data-parent-element="#dashboard">
                <li class="active">
                    <a href="index-2.html"> Analytics </a>
                </li>
                <li>
                    <a href="index2.html"> Sales </a>
                </li>
            </ul>
        </div>

        <div class="submenu" id="app">
            <div class="menu-title">
                <h3>Menu 2</h3>
            </div>
            <ul class="submenu-list" data-parent-element="#app">
                <li>
                    <a href="javascript:void(0)"> Submenu 1 </a>
                </li>
                <li>
                    <a href="javascript:void(0)"> Submenu 2 </a>
                </li>
            </ul>
        </div>

        <div class="submenu" id="tables">
            <div class="menu-title">
                <h3>Tables</h3>
            </div>
            <ul class="submenu-list" data-parent-element="#tables">
                <li>
                    <a href="javascript:void(0);">Submenu 1 </a>
                </li>
                <li>
                    <a href="javascript:void(0);">Submenu 2 </a>
                </li>
                <li class="sub-submenu">
                    <a role="menu" class="collapsed" data-toggle="collapse" data-target="#datatables"
                        aria-expanded="true">
                        <div>Submenu 3</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                    <ul id="datatables" class="collapse show" data-parent="#compact_submenuSidebar">
                        <li>
                            <a href="javascript:void(0);"> Sub Submenu 1 </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> Sub Submenu 2 </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> Sub Submenu 2 </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="submenu" id="more">
            <div class="menu-title">
                <h3>Starter Kit</h3>
            </div>
            <ul class="submenu-list" data-parent-element="#more">
                <li class="active">
                    <a href="starter_kit_blank_page.html">Blank Page</a>
                </li>
                <li>
                    <a href="starter_kit_breadcrumb.html">Breadcrumb</a>
                </li>
                <li>
                    <a href="starter_kit_boxed.html">Boxed</a>
                </li>
                <li>
                    <a href="starter_kit_single_click_menu.html">Single Click Menu</a>
                </li>
            </ul>
        </div>

    </div>

</div>
