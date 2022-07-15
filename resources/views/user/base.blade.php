<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Suchitwa Mission">
    <meta name="keyword" content="Suchitwa Mission">
    <title>Suchitwa Mission</title>
    <link rel="icon" href="{{ public_path().'/back-end/images/logo-icon.png' }}" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css file  -->
    <link rel="stylesheet" href="{{ public_path().'/back-end/css/dataTables.min.css' }}">
    <link rel="stylesheet" href="{{ public_path().'/back-end/css/select2.min.css' }}">
    <link rel="stylesheet" href="{{ public_path().'/back-end/datepicker/pickadate.css' }}">
    <link rel="stylesheet" href="{{ public_path().'/back-end/datepicker/daterangepicker.css' }}">
    
    <!-- project css file  -->
    <link rel="stylesheet" href="{{ public_path().'/back-end/css/al.style.min.css' }}">

    <!-- project layout css file -->
    <link rel="stylesheet" href="{{ public_path().'/back-end/css/layout.a.min.css' }}">
    <link rel="stylesheet" href="{{ public_path().'/back-end/css/style.css' }}">
    <link rel="stylesheet" href="{{ public_path().'/back-end/css/jquerysteps.min.css' }}">
</head>

<body class="font-opensans">

<div id="layout-a" class="theme-cyan">

    <!-- Navigation -->
    <div class="navigation navbar navbar-light justify-content-center px-3 px-lg-2 py-2 py-md-3 border-end">

        <!-- Brand -->
        <a href="/user/dash/" class="mb-0 mb-lg-3 brand-icon">
            <img src="{{ public_path().'/back-end/images/logo-icon.png' }}" width="50%" class="img-fluid"/>
        </a>

        <!-- Menu: icon -->
        <ul class="nav navbar-nav flex-row flex-sm-column flex-grow-1 justify-content-start py-2 py-lg-0">

            <!-- Create group -->
            <li class="nav-item"><a class="nav-link p-2 p-lg-3 d-block d-xl-none menu-toggle me-2 me-lg-0" href="#"><i class="fa fa-bars"></i></a></li>
            <li class="nav-item"><a class="nav-link p-2 p-lg-3" href="#" title="notifications" data-bs-toggle="modal" data-bs-target="#notificationsModal"><i class="fa fa-bell-o"></i></a></li>

            <!-- Menu collapse -->
            <li class="nav-item"><a class="nav-link p-2 p-lg-3" href="#" title="Settings" data-bs-toggle="modal" data-bs-target="#SettingsModal"><i class="fa fa-gear"></i></a></li>
            <li class="nav-item d-none d-sm-block"><a class="nav-link p-2 p-lg-3" href="{{ route('logout') }}" title="Logout"><i class="fa fa-power-off"></i></a></li>

        </ul>

    </div>

    <!-- sidebar -->
    <div class="sidebar px-3 py-2 py-md-3">
        <div class="d-flex flex-column h-100">
            <h4 class="sidebar-title mb-4 mt-2">SUCHITWA<span>-MISSION</span></h4>
            <!--<form class="mb-2 mt-1">
                <div class="input-group">
                    <input type="text" class="form-control border-0" placeholder="Search...">
                </div>
            </form>-->

            <!-- Menu: main ul -->
            <ul class="menu-list flex-grow-1">
                <li><a class="m-link active" href="/user/dash/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            </ul>

            <!-- Menu: menu collepce btn -->
            <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                <span><i class="fa fa-arrow-left"></i></span>
            </button>
        </div>
    </div>

    <div class="main px-xl-5 px-lg-4 px-md-3">
        @yield("content")
        <div class="body-footer d-flex">
            <div class="container">
                <div class="col-12">
                    <div class="card mb-3 border-0">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center">
                                <div class="col">
                                    <p class="mb-0">© SUCHITWA MISSION. <span class="d-none d-sm-inline-block">{{ date('Y') }}</span></p>
                                </div>
                                <div class="col-auto">
                                    <div class="d-flex justify-content-end">
                                        <!-- List Dot -->
                                        <ul class="list-inline mb-0">
                                            <!--<li class="list-inline-item">Developed by <a href="https://cybernetics.me" target="_blank">Cybernetics</a></li>-->
                                        </ul>
                                        <!-- End List Dot -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                        <img class="avatar rounded-circle" src="{{ public_path().'/back-end/images/xs/avatar1.jpg' }}" alt="">
                                        <div class="flex-fill ms-3">
                                            <p class="d-flex justify-content-between mb-0 text-muted"><span class="fw-bold">Chris Morise</span> <small>2MIN</small></p>
                                            <span class="text-muted">changed an issue from "In Progress" to <span class="badge bg-success">Review</span></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-4 border-bottom">
                                    <a href="javascript:void(0);" class="d-flex">
                                        <div class="avatar rounded-circle no-thumbnail">RH</div>
                                        <div class="flex-fill ms-3">
                                            <p class="d-flex justify-content-between mb-0 text-muted"><span class="fw-bold">Robin Shams</span> <small>13MIN</small></p>
                                            <span class="text-muted">It is a long established fact that a reader will be distracted</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-4 border-bottom">
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar rounded-circle" src="{{ public_path().'/back-end/images/xs/avatar3.jpg' }}" alt="">
                                        <div class="flex-fill ms-3">
                                            <p class="d-flex justify-content-between mb-0 text-muted"><span class="fw-bold">Orlando Lentz</span> <small>1HR</small></p>
                                            <span class="text-muted">There are many variations of passages</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-4 border-bottom">
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar rounded-circle" src="{{ public_path().'/back-end/images/xs/avatar4.jpg' }}" alt="">
                                        <div class="flex-fill ms-3">
                                            <p class="d-flex justify-content-between mb-0 text-muted"><span class="fw-bold">Kelly</span> <small>1DAY</small></p>
                                            <span class="text-muted">Contrary to popular belief <span class="badge bg-danger">Code</span></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-4 border-bottom">
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar rounded-circle" src="{{ public_path().'/back-end/images/xs/avatar5.jpg' }}" alt="">
                                        <div class="flex-fill ms-3">
                                            <p class="d-flex justify-content-between mb-0 text-muted"><span class="fw-bold">Robin Shams</span> <small>13MIN</small></p>
                                            <span class="text-muted">making it over 2000 years old</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-4 border-bottom">
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar rounded-circle" src="{{ public_path().'/back-end/images/xs/avatar6.jpg' }}" alt="">
                                        <div class="flex-fill ms-3">
                                            <p class="d-flex justify-content-between mb-0 text-muted"><span class="fw-bold">Orlando Lentz</span> <small>1HR</small></p>
                                            <span class="text-muted">There are many variations of passages</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-4">
                                    <a href="javascript:void(0);" class="d-flex">
                                        <img class="avatar rounded-circle" src="{{ public_path().'/back-end/images/xs/avatar7.jpg' }}" alt="">
                                        <div class="flex-fill ms-3">
                                            <p class="d-flex justify-content-between mb-0 text-muted"><span class="fw-bold">savera</span> <small>1DAY</small></p>
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
                                        <div class="avatar rounded no-thumbnail"><i class="fa fa-info-circle fa-lg"></i></div>
                                        <div class="flex-fill ms-3">
                                            <p class="mb-0 text-muted">Campaign <strong class="text-primary">Holiday Sale</strong> is nearly reach budget limit.</p>
                                            <small class="text-muted">10:00 AM Today</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-4 border-bottom">
                                    <a href="javascript:void(0);" class="d-flex">
                                        <div class="avatar rounded no-thumbnail"><i class="fa fa-thumbs-up fa-lg"></i></div>
                                        <div class="flex-fill ms-3">
                                            <p class="mb-0 text-muted">Your New Campaign <strong class="text-primary">Holiday Sale</strong> is approved.</p>
                                            <small class="text-muted">11:30 AM Today</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-4 border-bottom">
                                    <a href="javascript:void(0);" class="d-flex">
                                        <div class="avatar rounded no-thumbnail"><i class="fa fa-pie-chart fa-lg"></i></div>
                                        <div class="flex-fill ms-3">
                                            <p class="mb-0 text-muted">Website visits from Twitter is <strong class="text-danger">27% higher</strong> than last week.</p>
                                            <small class="text-muted">04:00 PM Today</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-4 border-bottom">
                                    <a href="javascript:void(0);" class="d-flex">
                                        <div class="avatar rounded no-thumbnail"><i class="fa fa-warning fa-lg"></i></div>
                                        <div class="flex-fill ms-3">
                                            <p class="mb-0 text-muted"><strong class="text-warning">Error</strong> on website analytics configurations</p>
                                            <small class="text-muted">Yesterday</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-4">
                                    <a href="javascript:void(0);" class="d-flex">
                                        <div class="avatar rounded no-thumbnail"><i class="fa fa-thumbs-up fa-lg"></i></div>
                                        <div class="flex-fill ms-3">
                                            <p class="mb-0 text-muted">Your New Campaign <strong class="text-primary">Holiday Sale</strong> is approved.</p>
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
                                    <label class="form-check-label" for="font-opensans">
                                        Open Sans Google Font
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-quicksand" value="font-quicksand">
                                    <label class="form-check-label" for="font-quicksand">
                                        Quicksand Google Font
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-nunito" value="font-nunito">
                                    <label class="form-check-label" for="font-nunito">
                                        Nunito Google Font
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-Raleway" value="font-raleway">
                                    <label class="form-check-label" for="font-Raleway">
                                        Raleway Google Font
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Settings: Color -->
                    <div class="setting-theme">
                        <small class="card-title text-muted">Theme Color Settings</small>
                        <ul class="list-unstyled d-flex justify-content-between choose-skin mb-2 mt-1">
                            <li data-theme="indigo"><div class="indigo"></div></li>
                            <li data-theme="blue"><div class="blue"></div></li>
                            <li data-theme="cyan" class="active"><div class="cyan"></div></li>
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
                                <li class="sidebar-img-1 sidebar-img-active"><a class="rounded sidebar-img" id="img-1" href="#"><img src="{{ public_path().'/back-end/images/sidebar-bg/sidebar-1.jpg' }}" alt="" /></a></li>
                                <li class="sidebar-img-2"><a class="rounded sidebar-img" id="img-2" href="#"><img src="{{ public_path().'/back-end/images/sidebar-bg/sidebar-2.jpg' }}" alt="" /></a></li>
                                <li class="sidebar-img-3"><a class="rounded sidebar-img" id="img-3" href="#"><img src="{{ public_path().'/back-end/images/sidebar-bg/sidebar-3.jpg' }}" alt="" /></a></li>
                                <li class="sidebar-img-4"><a class="rounded sidebar-img" id="img-4" href="#"><img src="{{ public_path().'/back-end/images/sidebar-bg/sidebar-4.jpg' }}" alt="" /></a></li>
                                <li class="sidebar-img-5"><a class="rounded sidebar-img" id="img-5" href="#"><img src="{{ public_path().'/back-end/images/sidebar-bg/sidebar-5.jpg' }}" alt="" /></a></li>
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
<script src="{{ public_path().'/back-end/bundles/select2.bundle.js' }}"></script>
<script src="{{ public_path().'/back-end/bundles/dataTables.bundle.js' }}"></script>
<script src="{{ public_path().'/back-end/datepicker/picker.js' }}"></script>
<script src="{{ public_path().'/back-end/datepicker/picker.date.js' }}"></script>
<script src="{{ public_path().'/back-end/datepicker/picker.time.js' }}"></script>

<script src="{{ public_path().'/back-end/bundles/jquerysteps.bundle.js' }}"></script>

<!-- Jquery Page Js -->
<script src="{{ public_path().'/back-end/js/template.js' }}"></script>
<script src="{{ public_path().'/back-end/js/script.js' }}"></script>
</body>
</html>