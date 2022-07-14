@extends('user.base')

@section("content")
<!-- Body: Header -->
<div class="body-header border-bottom d-flex py-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <!-- Pretitle -->
                <small class="text-muted">Welcome to Analytics Dashboard.</small>
                <h1 class="h4 mt-1">Website Analytics</h1>
            </div>
            <div class="col-auto">
                <a href="https://themeforest.net/user/wrraptheme" title="Download" target="_blank"
                    class="btn btn-white border lift">Download</a>
                <button type="button" class="btn btn-dark lift">Generate Report</button>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>

<!-- Body: Body -->
<div class="body d-flex py-lg-4 py-3">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="row clearfix row-deck">
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                        <div class="card mb-4 border-0 lift">
                            <div class="card-body">
                                <span class="text-uppercase">New Sessions</span>
                                <h4 class="mb-0 mt-2">22,500</h4>
                                <small class="text-muted">Analytics for last week</small>
                            </div>
                            <div id="apexspark1"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                        <div class="card mb-4 border-0 lift">
                            <div class="card-body">
                                <span class="text-uppercase">TIME ON SITE</span>
                                <h4 class="mb-0 mt-2">1,070</h4>
                                <small class="text-muted">Analytics for last week</small>
                            </div>
                            <div id="apexspark2"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-4 col-sm-12">
                        <div class="card mb-4 border-0 lift">
                            <div class="card-body">
                                <span class="text-uppercase">BOUNCE RATE</span>
                                <h4 class="mb-0 mt-2">10K</h4>
                                <small class="text-muted">Analytics for last week</small>
                            </div>
                            <div id="apexspark3"></div>
                        </div>
                    </div>
                </div> <!-- .row end -->
                <div class="card mb-4 border-0 lift">
                    <div
                        class="card-header py-3 d-flex flex-wrap  justify-content-between align-items-center bg-transparent border-bottom-0">
                        <div>
                            <h6 class="card-title m-0">Audience Overview</h6>
                            <small class="text-muted">Or you can <a href="#">sync data to Dashboard</a> to
                                ensure your data is always up-to-date.</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-link text-muted d-none d-sm-inline-block" type="button"><i class="fa fa-download"></i></button>
                            <button class="btn btn-sm btn-link text-muted d-none d-sm-inline-block" type="button"><i class="fa fa-external-link"></i></button>
                            <button class="btn btn-sm btn-link text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                        <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                    </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-header border">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <h6 class="mb-0 fw-bold">$3,056</h6>
                                    <small class="text-muted font-11">Rate</small>
                                </div>
                                <div class="ms-lg-5 ms-md-4 ms-3">
                                    <h6 class="mb-0 fw-bold">$1,998</h6>
                                    <small class="text-muted font-11">Value</small>
                                </div>
                                <div class="d-none d-sm-block ms-auto">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="btnradio"
                                            id="btnradio1">
                                        <label class="btn btn-outline-secondary"
                                            for="btnradio1">Week</label>

                                        <input type="radio" class="btn-check" name="btnradio"
                                            id="btnradio2">
                                        <label class="btn btn-outline-secondary"
                                            for="btnradio2">Month</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3"
                                            checked="">
                                        <label class="btn btn-outline-secondary"
                                            for="btnradio3">Year</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="apex-AudienceOverview"></div>
                    </div>
                </div> <!-- .card end -->
                <div class="card mb-4 border-0 lift">
                    <div
                        class="card-header py-3 d-flex flex-wrap  justify-content-between align-items-center bg-transparent border-bottom-0">
                        <div>
                            <h6 class="card-title m-0">Social Media Traffic</h6>
                            <small class="text-muted">Or you can <a href="#">sync data to Dashboard</a> to
                                ensure your data is always up-to-date.</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-link text-muted d-none d-sm-inline-block" type="button"><i class="fa fa-download"></i></button>
                            <button class="btn btn-sm btn-link text-muted d-none d-sm-inline-block" type="button"><i class="fa fa-external-link"></i></button>
                            <button class="btn btn-sm btn-link text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                        <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                    </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="apex-SocialMediaTraffic"></div>
                    </div>
                </div> <!-- .card end -->
                <div class="card mb-4 border-0 lift">
                    <div
                        class="card-header py-3 d-flex flex-wrap  justify-content-between align-items-center bg-transparent border-bottom-0">
                        <div>
                            <h6 class="card-title m-0">Website Performance</h6>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-link text-muted d-none d-sm-inline-block" type="button"><i class="fa fa-download"></i></button>
                            <button class="btn btn-sm btn-link text-muted d-none d-sm-inline-block" type="button"><i class="fa fa-external-link"></i></button>
                            <button class="btn btn-sm btn-link text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                        <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                    </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Source</th>
                                        <th>Visits</th>
                                        <th>Avg. Time</th>
                                        <th>Bounce Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="https://themeforest.net/item/lucid-angular-7-admin-template/23294743"
                                                target="_blank">https://themeforest.net/item/lucid-angular-7-admin-template/23294743</a>
                                        </td>
                                        <td>980</td>
                                        <td>55s</td>
                                        <td>5.2%</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="https://themeforest.net/item/hexabit-bootstrap-4x-admin-template-ui-kit/22611789"
                                                target="_blank">https://themeforest.net/item/hexabit-bootstrap-4x-admin-template-ui-kit/22611789</a>
                                        </td>
                                        <td>851</td>
                                        <td>16s</td>
                                        <td>8.0%</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><a href="https://themeforest.net/item/lucid-hr-and-project-management-admin-template/22308861"
                                                target="_blank">https://themeforest.net/item/lucid-hr-and-project-management-admin-template/22308861</a>
                                        </td>
                                        <td>321</td>
                                        <td>10s</td>
                                        <td>5.7%</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><a href="https://themeforest.net/item/nexa-bootstrap4-material-design-premium-admin-dashboard/21122489"
                                                target="_blank">https://themeforest.net/item/nexa-bootstrap4-material-design-premium-admin-dashboard/21122489</a>
                                        </td>
                                        <td>205</td>
                                        <td>57s</td>
                                        <td>5.3%</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><a href="https://themeforest.net/user/wrraptheme/portfolio"
                                                target="_blank">https://themeforest.net/user/wrraptheme/portfolio</a>
                                        </td>
                                        <td>89</td>
                                        <td>45s</td>
                                        <td>6.1%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- .card end -->
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="row row-deck">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="card mb-4 border-0 lift">
                            <div class="card-body">
                                <span class="text-uppercase">GOAL COMPLETIONS</span>
                                <h4 class="mb-0 mt-2">$1,22,500</h4>
                                <small class="text-muted">Analytics for last week</small>
                            </div>
                            <div id="apexspark4"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="card mb-4 border-0 lift">
                            <div class="card-header py-3 bg-transparent border-0">
                                <h6 class="card-title mb-0">Active Users</h6>
                                <small class="text-muted">How do your users visited in the time.</small>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="p-2 flex-fill">
                                        <span class="text-muted">Daily (Avg)</span>
                                        <h5>1.08K</h5>
                                        <small class="text-success"><i class="fa fa-angle-up"></i>
                                            1.03%</small>
                                    </div>
                                    <div class="p-2 flex-fill">
                                        <span class="text-muted">Weekly</span>
                                        <h5>3.20K</h5>
                                        <small class="text-danger"><i class="fa fa-angle-down"></i>
                                            1.63%</small>
                                    </div>
                                    <div class="p-2 flex-fill">
                                        <span class="text-muted">Monthly</span>
                                        <h5>8.18K</h5>
                                        <small class="text-success"><i class="fa fa-angle-up"></i>
                                            4.33%</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="apexcharts-line-0" id="apexspark5"></div>
                            </div>
                        </div> <!-- .card end -->
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="card mb-4 border-0 lift">
                            <div
                                class="card-header py-3 d-flex flex-wrap  justify-content-between align-items-center bg-transparent border-bottom-0">
                                <div>
                                    <h6 class="card-title mb-0">Sessions by Device</h6>
                                    <small class="text-muted">How do your users visited in the time.</small>
                                </div>
                                <div class="btn-group" role="group"
                                    aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="Sessionsradio"
                                        id="Sessionsradio1" checked="">
                                    <label class="btn btn-sm btn-outline-secondary"
                                        for="Sessionsradio1">1W</label>

                                    <input type="radio" class="btn-check" name="Sessionsradio"
                                        id="Sessionsradio2">
                                    <label class="btn btn-sm btn-outline-secondary"
                                        for="Sessionsradio2">1M</label>

                                    <input type="radio" class="btn-check" name="Sessionsradio"
                                        id="Sessionsradio3">
                                    <label class="btn btn-sm btn-outline-secondary"
                                        for="Sessionsradio3">1Y</label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex text-center">
                                    <div class="p-2 flex-fill">
                                        <span class="text-muted">Desktop</span>
                                        <h5>1.08K</h5>
                                        <small class="text-success"><i class="fa fa-angle-up"></i>
                                            1.03%</small>
                                    </div>
                                    <div class="p-2 flex-fill">
                                        <span class="text-muted">Mobile</span>
                                        <h5>3.20K</h5>
                                        <small class="text-danger"><i class="fa fa-angle-down"></i>
                                            1.63%</small>
                                    </div>
                                    <div class="p-2 flex-fill">
                                        <span class="text-muted">Tablet</span>
                                        <h5>8.18K</h5>
                                        <small class="text-success"><i class="fa fa-angle-up"></i>
                                            4.33%</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apex-SessionsbyDevice"></div>
                            </div>
                        </div> <!-- .card end -->
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="card mb-4 border-0 lift">
                            <div
                                class="card-header py-3 d-flex flex-wrap  justify-content-between align-items-center bg-transparent border-bottom-0">
                                <div>
                                    <h6 class="m-0">Reports overview</h6>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-link text-muted" type="button"><i
                                            class="fa fa-download"></i></button>
                                    <button class="btn btn-sm btn-link text-muted" type="button"><i
                                            class="fa fa-external-link"></i></button>
                                    <button class="btn btn-sm btn-link text-muted dropdown-toggle"
                                        type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"></button>
                                    <ul class="dropdown-menu border-0 shadow dropdown-menu-end">
                                        <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                                        <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                action</a></li>
                                        <li><a class="dropdown-item py-2 rounded" href="#">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="h2 d-block mb-3">$7,431.14 USD</span>
                                <!-- Progress -->
                                <div class="progress rounded-pill mb-2" style="height: 4px;">
                                    <div class="progress-bar" role="progressbar" style="width: 15%"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex justify-content-between mb-4">
                                    <span>0%</span>
                                    <span>100%</span>
                                </div>
                                <!-- End Progress -->
                                <div class="table-responsive">
                                    <table class="table table-lg table-nowrap card-table mb-0">
                                        <tbody>
                                            <tr>
                                                <td>Gross value</td>
                                                <td>$3,500.71</td>
                                                <td><span class="badge bg-success">+12.1%</span></td>
                                            </tr>
                                            <tr>
                                                <td>Net volume from sales</td>
                                                <td>$2,980.45</td>
                                                <td><span class="badge bg-warning">+6.9%</span></td>
                                            </tr>
                                            <tr>
                                                <td>New volume from sales</td>
                                                <td>$950.00</td>
                                                <td><span class="badge bg-danger">-1.5%</span></td>
                                            </tr>
                                            <tr>
                                                <td>Other</td>
                                                <td>32</td>
                                                <td><span class="badge bg-success">1.9%</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- .card end -->
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="card mb-4 overflow-hidden border-0 lift">
                            <div class="card-body p-4">
                                <h6>Melbourne, FL 32904</h6>
                                <span class="text-muted">Saturday 16 January</span>
                            </div>
                            <div class="p-4 alert-danger d-flex justify-content-between align-items-center">
                                <div><span class="fs-1">43°</span></div>
                                <i class="wi wi-day-lightning fs-1"></i>
                            </div>
                        </div> <!-- .card end -->
                    </div>
                </div> <!-- .row end -->
            </div>
        </div> <!-- .row end -->

    </div>
</div>

<!-- Body: Footer -->
<div class="body-footer d-flex">

</div>
@endsection