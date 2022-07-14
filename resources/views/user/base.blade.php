<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 admin template and web Application ui kit.">
    <meta name="keyword" content="ALUI, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme">
    <title>:: ALUI ::</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    <link rel="stylesheet" href="{{ public_path().'/back-end/css/al.style.min.css' }}">

    <!-- plugin css file  -->

    <!-- project layout css file -->
    <link rel="stylesheet" href="{{ public_path().'/back-end/css/layout.a.min.css' }}">
    <link rel="stylesheet" href="{{ public_path().'/back-end/css/style.css' }}">
</head>

<body>

    <div id="layout-a" class="theme-blue">

        <!-- Navigation -->
        <div class="navigation navbar navbar-light justify-content-center px-3 px-lg-2 py-2 py-md-3 border-end">

            <!-- Brand -->
            <a href="index.html" class="mb-0 mb-lg-3 brand-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 64 80" fill="none">
                    <path
                        d="M58.8996 22.7L26.9996 2.2C23.4996 -0.0999999 18.9996 0 15.5996 2.5C12.1996 5 10.6996 9.2 11.7996 13.3L15.7996 26.8L3.49962 39.9C-3.30038 47.7 3.79962 54.5 3.89962 54.6L3.99962 54.7L36.3996 78.5C36.4996 78.6 36.5996 78.6 36.6996 78.7C37.8996 79.2 39.1996 79.4 40.3996 79.4C42.9996 79.4 45.4996 78.4 47.4996 76.4C50.2996 73.5 51.1996 69.4 49.6996 65.6L45.1996 51.8L58.9996 39.4C61.7996 37.5 63.3996 34.4 63.3996 31.1C63.4996 27.7 61.7996 24.5 58.8996 22.7ZM46.7996 66.7V66.8C48.0996 69.9 46.8996 72.7 45.2996 74.3C43.7996 75.9 41.0996 77.1 37.9996 76L5.89961 52.3C5.29961 51.7 1.09962 47.3 5.79962 42L16.8996 30.1L23.4996 52.1C24.3996 55.2 26.5996 57.7 29.5996 58.8C30.7996 59.2 31.9996 59.5 33.1996 59.5C35.0996 59.5 36.9996 58.9 38.6996 57.8C38.7996 57.8 38.7996 57.7 38.8996 57.7L42.7996 54.2L46.7996 66.7ZM57.2996 36.9C57.1996 36.9 57.1996 37 57.0996 37L44.0996 48.7L36.4996 25.5V25.4C35.1996 22.2 32.3996 20 28.9996 19.3C25.5996 18.7 22.1996 19.8 19.8996 22.3L18.2996 24L14.7996 12.3C13.8996 8.9 15.4996 6.2 17.3996 4.8C18.4996 4 19.8996 3.4 21.4996 3.4C22.6996 3.4 23.9996 3.7 25.2996 4.6L57.1996 25.1C59.1996 26.4 60.2996 28.6 60.2996 30.9C60.3996 33.4 59.2996 35.6 57.2996 36.9Z"
                        fill="black" />
                </svg>
            </a>

            <!-- Menu: icon -->
            <ul class="nav navbar-nav flex-row flex-sm-column flex-grow-1 justify-content-start py-2 py-lg-0">

                <!-- Create group -->
                <li class="nav-item"><a class="nav-link p-2 p-lg-3 d-block d-xl-none menu-toggle me-2 me-lg-0" href="#"><i class="fa fa-bars"></i></a></li>
                <li class="nav-item"><a class="nav-link p-2 p-lg-3" href="#" title="Search" data-bs-toggle="modal" data-bs-target="#SearchModal"><i class="fa fa-search"></i></a></li>
                <li class="nav-item"><a class="nav-link p-2 p-lg-3" href="#" title="notifications" data-bs-toggle="modal" data-bs-target="#notificationsModal"><i class="fa fa-bell-o"></i></a></li>
                <li class="nav-item"><a class="nav-link p-2 p-lg-3" href="#" data-bs-toggle="modal" data-bs-target="#LayoutModal"><i class="fa fa-sliders"></i></a></li>
                <li class="nav-item d-none d-sm-block"><a class="nav-link p-2 p-lg-3" href="chat.html"><i class="fa fa-comments-o"></i></a></li>
                <li class="nav-item d-none d-sm-block flex-grow-1"><a class="nav-link p-2 p-lg-3" href="calendar.html"><i class="fa fa-calendar"></i></a></li>

                <!-- Menu collapse -->
                <li class="nav-item"><a class="nav-link p-2 p-lg-3" href="#" title="Settings" data-bs-toggle="modal" data-bs-target="#SettingsModal"><i class="fa fa-gear"></i></a></li>
                <li class="nav-item d-none d-sm-block"><a class="nav-link p-2 p-lg-3" href="{{ route('logout') }}" title="Menu collapse"><i class="fa fa-user"></i></a></li>

            </ul>

        </div>

        <!-- sidebar -->
        <div class="sidebar px-3 py-2 py-md-3">
            <div class="d-flex flex-column h-100">
                <div class="d-flex align-items-center mb-4 mt-2">
                    <h4 class="sidebar-title mb-0 flex-grow-1">AL<span>-UI Admin</span></h4>
                    <div class="dropdown Language">
                        <a class="nav-link text-light dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fa fa-language"></i>
                        </a>
                        <div class="dropdown-menu rounded-lg shadow border-0 p-0 mt-2" data-bs-popper="none">
                            <div class="card border-0">
                                <div class="list-group list-group-custom" style="width: 200px;">
                                    <a href="#" class="list-group-item">
                                        <span class="flag-icon flag-icon-gb me-2"></span>UK English
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="flag-icon flag-icon-us me-2"></span>US English
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="flag-icon flag-icon-de me-2"></span>Germany
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="flag-icon flag-icon-in me-2"></span>Hindi
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="flag-icon flag-icon-sa me-2"></span>Saudi Arabia
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="mb-2 mt-1">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" placeholder="Search...">
                    </div>
                </form>

                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1">
                    <li><a class="m-link active" href="index.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                    <li><a class="m-link" href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
                    <li><a class="m-link" href="chat.html"><i class="fa fa-comments"></i> <span>Chat app</span></a></li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Pages" href="#"><i
                                class="fa fa-file"></i> <span>Pages</span> <span
                                class="arrow fa fa-dot-circle-o ms-auto text-end"></span></a>

                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Pages">
                            <li><a class="ms-link" href="profile.html">Profile</a></li>
                        <li><a class="ms-link" href="profile1.html">Profile v2</a></li>
                        <li><a class="ms-link" href="profile2.html">Profile v3</a></li>
                        <li><a class="ms-link" href="todo.html">Todo App</a></li>
                            <li><a class="ms-link" href="timeline.html">Timeline</a></li>
                            <li><a class="ms-link" href="imagegallery.html">Image Gallery</a></li>
                            <li><a class="ms-link" href="invoices.html">Invoices</a></li>
                            <li><a class="ms-link" href="pricing.html">Pricing</a></li>
                            <li><a class="ms-link" href="teamsboard.html">Teams Board</a></li>
                            <li><a class="ms-link" href="faqs.html">FAQs</a></li>
                        <li><a class="ms-link" href="file-manager.html">File Manager</a></li>
                        <li><a class="ms-link" href="support-ticket.html">Support Ticket</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Authentication" href="#"><i
                                class="fa fa-lock"></i> <span>Authentication</span> <span
                                class="arrow fa fa-dot-circle-o ms-auto text-end"></span></a>

                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Authentication">
                            <li><a class="ms-link" href="auth-signin.html">Sign in</a></li>
                            <li><a class="ms-link" href="auth-signup.html">Sign up</a></li>
                            <li><a class="ms-link" href="auth-password-reset.html">Password reset</a></li>
                            <li><a class="ms-link" href="auth-two-step.html">2-Step Authentication</a></li>
                            <li><a class="ms-link" href="auth-404.html">404</a></li>
                        </ul>
                    </li>
                    <li><a class="m-link" href="../../documentation/w-cards.html"><i class="fa fa-puzzle-piece"></i>
                            <span>Widget's</span></a></li>

                    <li class="divider mt-4 py-2 border-top"><small>DOCUMENTATION</small></li>
                    <li><a class="m-link" href="../../documentation/stater-page.html"><i class="fa fa-user"></i>
                            <span>Stater page</span></a></li>
                    <li><a class="m-link" href="../../documentation/charts.html"><i class="fa fa-pie-chart"></i>
                            <span>Chart's</span></a></li>
                    <li><a class="m-link" href="../../documentation/table.html"><i class="fa fa-table"></i>
                            <span>Table Example</span></a></li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Components" href="#"><i
                                class="fa fa-code"></i> <span>UI Components</span> <span
                                class="arrow fa fa-dot-circle-o ms-auto text-end"></span></a>

                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Components">
                            <li><a class="ms-link" href="ui-alerts.html">Alerts</a></li>
                            <li><a class="ms-link" href="ui-badge.html">Badge</a></li>
                            <li><a class="ms-link" href="ui-breadcrumb.html">Breadcrumb</a></li>
                            <li><a class="ms-link" href="ui-buttons.html">Buttons</a></li>
                            <li><a class="ms-link" href="ui-card.html">Card</a></li>
                            <li><a class="ms-link" href="ui-carousel.html">Carousel</a></li>
                            <li><a class="ms-link" href="ui-collapse.html">Collapse</a></li>
                            <li><a class="ms-link" href="ui-dropdowns.html">Dropdowns</a></li>
                            <li><a class="ms-link" href="ui-listgroup.html">List group</a></li>
                            <li><a class="ms-link" href="ui-modal.html">Modal</a></li>
                            <li><a class="ms-link" href="ui-navs.html">Navs</a></li>
                            <li><a class="ms-link" href="ui-navbar.html">Navbar</a></li>
                            <li><a class="ms-link" href="ui-pagination.html">Pagination</a></li>
                            <li><a class="ms-link" href="ui-popovers.html">Popovers</a></li>
                            <li><a class="ms-link" href="ui-progress.html">Progress</a></li>
                            <li><a class="ms-link" href="ui-scrollspy.html">Scrollspy</a></li>
                            <li><a class="ms-link" href="ui-spinners.html">Spinners</a></li>
                            <li><a class="ms-link" href="ui-toasts.html">Toasts</a></li>
                            <li><a class="ms-link" href="ui-tooltips.html">Tooltips</a></li>
                        </ul>
                    </li>
                    <li><a class="m-link" href="../../documentation/index.html"><i class="fa fa-file-text"></i>
                            <span>Documentation</span></a></li>
                    <li><a class="m-link" href="../../documentation/changelog.html"><i class="fa fa-pencil"></i> <span>Changelog</span>
                            <span id="ALUIversion"></span></a></li>
                </ul>

                <!-- Menu: menu collepce btn -->
                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span><i class="fa fa-arrow-left"></i></span>
                </button>
            </div>
        </div>

        <!-- main body area -->
        <div class="main px-xl-5 px-lg-4 px-md-3">

            @yield("content")

        </div>

        <!-- Modal: notifications -->
        <div class="modal fade" id="notificationsModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header px-md-5">
                        <h5 class="modal-title">Notifications <span class="badge bg-danger ms-2">14</span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="bg-light border-bottom px-2 px-md-5 py-3">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#Noti-tab-Message" role="tab"
                                aria-selected="true">Message</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Noti-tab-Events" role="tab"
                                aria-selected="false">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Noti-tab-Logs" role="tab">Logs</a>
                        </li>
                    </ul>
                </div>
                <div class="modal-body px-md-5 custom_scroll">
                        <div class="tab-content p-0">
                            <div class="tab-pane fade active show" id="Noti-tab-Message" role="tabpanel">
                                <ul class="list-unstyled list mb-0">
                                    <li class="py-4 border-bottom">
                                        <a href="javascript:void(0);" class="d-flex">
                                            <img class="avatar rounded-circle"
                                                src="../../assets/images/xs/avatar1.jpg" alt="">
                                            <div class="flex-fill ms-3">
                                                <p class="d-flex justify-content-between mb-0 text-muted"><span
                                                        class="fw-bold">Chris Fox</span> <small>2MIN</small></p>
                                                <span class="text-muted">changed an issue from "In Progress" to <span
                                                        class="badge bg-success">Review</span></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-4 border-bottom">
                                        <a href="javascript:void(0);" class="d-flex">
                                            <div class="avatar rounded-circle no-thumbnail">RH</div>
                                            <div class="flex-fill ms-3">
                                                <p class="d-flex justify-content-between mb-0 text-muted"><span
                                                        class="fw-bold">Robert Hammer</span> <small>13MIN</small></p>
                                                <span class="text-muted">It is a long established fact that a reader
                                                    will be distracted</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-4 border-bottom">
                                        <a href="javascript:void(0);" class="d-flex">
                                            <img class="avatar rounded-circle"
                                                src="../../assets/images/xs/avatar3.jpg" alt="">
                                            <div class="flex-fill ms-3">
                                                <p class="d-flex justify-content-between mb-0 text-muted"><span
                                                        class="fw-bold">Orlando Lentz</span> <small>1HR</small></p>
                                                <span class="text-muted">There are many variations of passages</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-4 border-bottom">
                                        <a href="javascript:void(0);" class="d-flex">
                                            <img class="avatar rounded-circle"
                                                src="../../assets/images/xs/avatar4.jpg" alt="">
                                            <div class="flex-fill ms-3">
                                                <p class="d-flex justify-content-between mb-0 text-muted"><span
                                                        class="fw-bold">Barbara Kelly</span> <small>1DAY</small></p>
                                                <span class="text-muted">Contrary to popular belief <span
                                                        class="badge bg-danger">Code</span></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-4 border-bottom">
                                        <a href="javascript:void(0);" class="d-flex">
                                            <img class="avatar rounded-circle"
                                                src="../../assets/images/xs/avatar5.jpg" alt="">
                                            <div class="flex-fill ms-3">
                                                <p class="d-flex justify-content-between mb-0 text-muted"><span
                                                        class="fw-bold">Robert Hammer</span> <small>13MIN</small></p>
                                                <span class="text-muted">making it over 2000 years old</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-4 border-bottom">
                                        <a href="javascript:void(0);" class="d-flex">
                                            <img class="avatar rounded-circle"
                                                src="../../assets/images/xs/avatar6.jpg" alt="">
                                            <div class="flex-fill ms-3">
                                                <p class="d-flex justify-content-between mb-0 text-muted"><span
                                                        class="fw-bold">Orlando Lentz</span> <small>1HR</small></p>
                                                <span class="text-muted">There are many variations of passages</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-4">
                                        <a href="javascript:void(0);" class="d-flex">
                                            <img class="avatar rounded-circle"
                                                src="../../assets/images/xs/avatar7.jpg" alt="">
                                            <div class="flex-fill ms-3">
                                                <p class="d-flex justify-content-between mb-0 text-muted"><span
                                                        class="fw-bold">Rose Rivera</span> <small class="">1DAY</small>
                                                </p>
                                                <span class="text-muted">The generated Lorem Ipsum</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="Noti-tab-Events" role="tabpanel">
                                <ul class="list-unstyled list mb-0">
                                    <li class="py-4 border-bottom">
                                        <a href="javascript:void(0);" class="d-flex">
                                            <div class="avatar rounded no-thumbnail"><i
                                                    class="fa fa-info-circle fa-lg"></i></div>
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0 text-muted">Campaign <strong class="text-primary">Holiday
                                                        Sale</strong> is nearly reach budget limit.</p>
                                                <small class="text-muted">10:00 AM Today</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-4 border-bottom">
                                        <a href="javascript:void(0);" class="d-flex">
                                            <div class="avatar rounded no-thumbnail"><i
                                                    class="fa fa-thumbs-up fa-lg"></i></div>
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0 text-muted">Your New Campaign <strong
                                                        class="text-primary">Holiday Sale</strong> is approved.</p>
                                                <small class="text-muted">11:30 AM Today</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-4 border-bottom">
                                        <a href="javascript:void(0);" class="d-flex">
                                            <div class="avatar rounded no-thumbnail"><i
                                                    class="fa fa-pie-chart fa-lg"></i></div>
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0 text-muted">Website visits from Twitter is <strong
                                                        class="text-danger">27% higher</strong> than last week.</p>
                                                <small class="text-muted">04:00 PM Today</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-4 border-bottom">
                                        <a href="javascript:void(0);" class="d-flex">
                                            <div class="avatar rounded no-thumbnail"><i class="fa fa-warning fa-lg"></i>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0 text-muted"><strong class="text-warning">Error</strong>
                                                    on website analytics configurations</p>
                                                <small class="text-muted">Yesterday</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-4">
                                        <a href="javascript:void(0);" class="d-flex">
                                            <div class="avatar rounded no-thumbnail"><i
                                                    class="fa fa-thumbs-up fa-lg"></i></div>
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0 text-muted">Your New Campaign <strong
                                                        class="text-primary">Holiday Sale</strong> is approved.</p>
                                                <small class="text-muted">11:30 AM Today</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="Noti-tab-Logs" role="tabpanel">
                                <h4>No Logs right now!</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Search -->
        <div class="modal fade" id="SearchModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-secondary border-bottom-0 px-3 px-md-5">
                        <h5 class="modal-title">Search</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body custom_scroll">
                        <div class="card-body-height py-4 px-2 px-md-4">
                            <form class="mb-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <button class="btn btn-outline-secondary" type="button"><span
                                            class="fa fa-search"></span> Search</button>
                                </div>
                            </form>

                            <small class="dropdown-header">Recent searches</small>
                            <div class="dropdown-item bg-transparent text-wrap my-2">
                                <span class="h4 me-1">
                                    <a class="btn btn-sm btn-dark" href="#">Github <i class="fa fa-search ms-1"></i></a>
                                </span>
                                <span class="h4">
                                    <a class="btn btn-sm btn-dark" href="#">Notification panel <i
                                            class="fa fa-search ms-1"></i></a>
                                </span>
                                <span class="h4">
                                    <a class="btn btn-sm btn-dark" href="#">New project <i
                                            class="fa fa-search ms-1"></i></a>
                                </span>
                            </div>

                            <div class="dropdown-divider my-3"></div>

                            <small class="dropdown-header">Tutorials</small>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex align-items-center">
                                    <span class="avatar sm no-thumbnail me-2"><i class="fa fa-github"></i></span>
                                    <div class="text-truncate">
                                        <span>How to set up Github?</span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex align-items-center">
                                    <span class="avatar sm no-thumbnail me-2"><i class="fa fa-paint-brush"></i></span>
                                    <div class="text-truncate">
                                        <span>How to change theme color?</span>
                                    </div>
                                </div>
                            </a>

                            <div class="dropdown-divider my-3"></div>

                            <small class="dropdown-header">Members</small>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex align-items-center">
                                    <img class="avatar sm rounded-circle" src="../../assets/images/xs/avatar1.jpg"
                                        alt="">
                                    <div class="text-truncate ms-2">
                                        <span>Robert Hammer <i class="fa fa-check-circle text-primary"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Top endorsed"></i></span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex align-items-center">
                                    <img class="avatar sm rounded-circle" src="../../assets/images/xs/avatar2.jpg"
                                        alt="">
                                    <div class="text-truncate ms-2">
                                        <span>Orlando Lentz</span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="avatar sm rounded-circle no-thumbnail">RH</div>
                                    <div class="text-truncate ms-2">
                                        <span>Brian Swader</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Layout -->
        <div class="modal fade" id="LayoutModal" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-vertical modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ready to build Layouts</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body custom_scroll">
                        <div class="mb-4">Customize your overview page layout. Choose the one that best fits your needs.</div>
                        <h5 class="mt-5 pb-2">Left sidebar with icon</h5>
                        <div class="row g-3">
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift border border-primary bg-primary text-light" href="index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-default.svg"
                                        alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="index-mini-sidebar.html">
                                    <img class="card-img-top"
                                        src="../../assets/images/layout/layout-mini-sidebar.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default + Menu Collapse</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-c/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-c.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Menu + Tab view</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-g/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-g.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Icon menu with Grid view</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-i/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-i.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Dual tone icon + menu list</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <h5 class="mt-5 pb-2">Header top menu</h5>
                        <div class="row g-3">
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-d/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-d.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header <span class="text-muted small">(Fluid)</span>
                                        </h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-d-container/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-d-container.svg"
                                        alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header <span
                                                class="text-muted small">(Container)</span></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-d-sub-header/index.html">
                                    <img class="card-img-top"
                                        src="../../assets/images/layout/layout-d-sub-header.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header + Sub menu <span
                                                class="text-muted small">(Fluid)</span></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-d-sub-header-container/index.html">
                                    <img class="card-img-top"
                                        src="../../assets/images/layout/layout-d-sub-header-container.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header + Submenu <span
                                                class="text-muted small">(Container)</span></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-f/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-f.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header + Submenu, Overlay <span
                                                class="text-muted small">(Fluid)</span></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-f-container/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-f-container.svg"
                                        alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header + Submenu, Overlay <span
                                                class="text-muted small">(Container)</span></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-l/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-l.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Megamenu + Animation Overlay</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-q/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-q.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header + Megamenu sticky</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <h5 class="mt-5 pb-2">Content Combinations</h5>
                        <div class="row g-3">
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-b/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-b.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-e/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-e.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-h/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-h.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-k/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-k.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-p/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-p.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Background BG</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="layout-n/index.html">
                                    <img class="card-img-top" src="../../assets/images/layout/layout-n.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Sidebar With Tab</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Setting -->
        <div class="modal fade" id="SettingsModal" tabindex="-1">
            <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">AL-UI Setting</h5>
                    </div>
                    <div class="modal-body custom_scroll">
                        <!-- Settings: Font -->
                        <div class="setting-font">
                            <small class="card-title text-muted">Google font Settings</small>
                            <ul class="list-group font_setting mb-3 mt-1">
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                        <label class="form-check-label" for="font-opensans">Open Sans Google Font</label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-quicksand" value="font-quicksand">
                                        <label class="form-check-label" for="font-quicksand">Quicksand Google Font</label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-nunito" value="font-nunito">
                                        <label class="form-check-label" for="font-nunito">Nunito Google Font</label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-Raleway" value="font-raleway">
                                        <label class="form-check-label" for="font-Raleway">Raleway Google Font</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Settings: Color -->
                        <div class="setting-theme">
                            <small class="card-title text-muted">Theme Color Settings</small>
                            <ul class="list-unstyled d-flex justify-content-between choose-skin mb-2 mt-1">
                                <li data-theme="indigo"><div class="indigo"></div></li>
                                <li data-theme="blue" class="active"><div class="blue"></div></li>
                                <li data-theme="cyan"><div class="cyan"></div></li>
                                <li data-theme="green"><div class="green"></div></li>
                                <li data-theme="orange"><div class="orange"></div></li>
                                <li data-theme="blush"><div class="blush"></div></li>
                                <li data-theme="red"><div class="red"></div></li>
                                <li data-theme="dynamic"><div class="dynamic"><i class="fa fa-paint-brush"></i></div></li>
                            </ul>
                            <div class="form-check form-switch gradient-switch mb-1">
                                <input class="form-check-input" type="checkbox" id="CheckGradient">
                                <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar )</label>
                            </div>
                        </div>
                        <!-- Settings: bg image -->
                        <div class="setting-img mb-3">
                            <div class="form-check form-switch imagebg-switch mb-1">
                                <input class="form-check-input" type="checkbox" id="CheckImage">
                                <label class="form-check-label" for="CheckImage">Set Background Image (Sidebar)</label>
                            </div>
                            <div class="bg-images">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li class="sidebar-img-1 sidebar-img-active"><a class="rounded sidebar-img" id="img-1" href="#"><img src="../../assets/images/sidebar-bg/sidebar-1.jpg" alt="" /></a></li>
                                    <li class="sidebar-img-2"><a class="rounded sidebar-img" id="img-2" href="#"><img src="../../assets/images/sidebar-bg/sidebar-2.jpg" alt="" /></a></li>
                                    <li class="sidebar-img-3"><a class="rounded sidebar-img" id="img-3" href="#"><img src="../../assets/images/sidebar-bg/sidebar-3.jpg" alt="" /></a></li>
                                    <li class="sidebar-img-4"><a class="rounded sidebar-img" id="img-4" href="#"><img src="../../assets/images/sidebar-bg/sidebar-4.jpg" alt="" /></a></li>
                                    <li class="sidebar-img-5"><a class="rounded sidebar-img" id="img-5" href="#"><img src="../../assets/images/sidebar-bg/sidebar-5.jpg" alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Settings: Theme dynamics -->
                        <div class="dt-setting">
                            <small class="card-title text-muted">Dynamic Color Settings</small>
                            <ul class="list-group list-unstyled mb-3 mt-1">
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label>Primary Color</label>
                                    <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label>Secondary Color</label>
                                    <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 1</label>
                                    <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 2</label>
                                    <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 3</label>
                                    <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 4</label>
                                    <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 5</label>
                                    <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                </li>
                            </ul>
                        </div>
                        <!-- Settings: Light/dark -->
                        <div class="setting-mode">
                            <small class="card-title text-muted">Light/Dark & Contrast Layout</small>
                            <ul class="list-group list-unstyled mb-0 mt-1">
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-switch mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-switch">
                                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-high-contrast mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                        <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-rtl mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-rtl">
                                        <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-start text-center">
                        <button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
                        <button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="{{ public_path().'/back-end/bundles/libscripts.bundle.js' }}"></script>

    <!-- Plugin Js -->
    <script src="{{ public_path().'/back-end/bundles/apexcharts.bundle.js' }}"></script>

    <!-- Jquery Page Js -->
    <script src="{{ public_path().'/back-end/js/template.js' }}"></script>
    <script src="{{ public_path().'/back-end/js/page/index.js' }}"></script>
    <script src="{{ public_path().'/back-end/js/script.js' }}"></script>
</body>

</html>