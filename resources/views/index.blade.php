<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Page</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Linearicon Font -->
    <link rel="stylesheet" href="{{ asset('assets/css/lnr-icon.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->

</head>

<body>
    <!-- Inner wrapper -->
    <div class="inner-wrapper">

        <!-- Loader -->
        <div id="loader-wrapper">

            <div class="loader">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>


        <!-- Header -->
        <header class="header">

            <!-- Top Header Section -->
            <div class="top-header-section">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                            <div class="logo my-3 my-sm-0">
                                <a href="index">
                                    <img src="{{ asset('assets/img/RohanLogo.png') }}" alt="logo image"
                                        class="img-fluid" width="100">
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-6 text-right">
                            <div class="user-block d-none d-lg-block">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="user-notification-block align-right d-inline-block">
                                            <div class="top-nav-search item-animated">
                                                <form>
                                                    <input type="text" class="form-control"
                                                        placeholder="Search here">
                                                    <button class="btn" type="submit">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                        <!-- User notification-->
                                        <div class="user-notification-block align-right d-inline-block">
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item item-animated" data-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-original-title="Apply Leave"><a href="leave"
                                                        class="font-23 menu-style text-white align-middle"> <span
                                                            class="lnr lnr-briefcase position-relative"></span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!-- /User notification-->

                                        <!-- user info-->
                                        <div class="user-info align-right dropdown d-inline-block header-dropdown">
                                            <a href="javascript:void(0)" data-toggle="dropdown"
                                                class=" menu-style dropdown-toggle">
                                                <div class="user-avatar d-inline-block">
                                                    <img src="{{ asset('assets/img/profiles/' . session('image')) }}"
                                                    alt="user avatar" class="rounded-circle img-fluid" width="55">

                                                </div>
                                            </a>

                                            <!-- Notifications -->
                                            <div
                                                class="dropdown-menu notification-dropdown-menu shadow-lg border-0 p-3 m-0 dropdown-menu-right">
                                                <a class="dropdown-item p-2" href="employment"> <span
                                                        class="media align-items-center"> <span
                                                            class="lnr lnr-user mr-3"></span> <span
                                                            class="media-body text-truncate"> <span
                                                                class="text-truncate">Profile</span>
                                                        </span>
                                                    </span>
                                              
                                                </a> <a class="dropdown-item p-2" href="logout"> <span
                                                        class="media align-items-center"> <span
                                                            class="lnr lnr-power-switch mr-3"></span> <span
                                                            class="media-body text-truncate"> <span
                                                                class="text-truncate">Logout</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <!-- Notifications -->

                                        </div>
                                        <!-- /User info-->

                                    </div>
                                </div>
                            </div>
                            <div class="d-block d-lg-none">
                                <a href="javascript:void(0)"> <span class="lnr lnr-user d-block display-5 text-white"
                                        id="open_navSidebar"></span>
                                </a>

                                <!-- Offcanvas menu -->
                                <div class="offcanvas-menu" id="offcanvas_menu">
                                    <span
                                        class="lnr lnr-cross float-left display-6 position-absolute t-1 l-1 text-white"
                                        id="close_navSidebar"></span>
                                    <div class="user-info align-center bg-theme text-center">
                                        <a href="javascript:void(0)" class="d-block menu-style text-white">
                                            <div class="user-avatar d-inline-block mr-3">
                                                <img src="assets/img/profiles/img-6.jpg" alt="user avatar"
                                                    class="rounded-circle" width="50">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="user-notification-block align-center">
                                        <div class="top-nav-search item-animated">
                                            <form>
                                                <input type="text" class="form-control" placeholder="Search here">
                                                <button class="btn" type="submit">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="user-menu-items px-3 m-0">
                                        <a class="px-0 pb-2 pt-0" href="index"> <span
                                                class="media align-items-center"> <span
                                                    class="lnr lnr-home mr-3"></span> <span
                                                    class="media-body text-truncate text-left"> <span
                                                        class="text-truncate text-left">Dashboard</span>
                                                </span>
                                            </span>
                                        </a> <a class="p-2" href="employees"> <span
                                                class="media align-items-center"> <span
                                                    class="lnr lnr-users mr-3"></span> <span
                                                    class="media-body text-truncate text-left"> <span
                                                        class="text-truncate text-left">Employees</span>
                                                </span>
                                            </span>
                                        </a> <a class="p-2" href="department"> <span
                                                class="media align-items-center"> <span
                                                    class="lnr lnr-apartment mr-3"></span> <span
                                                    class="media-body text-truncate text-left"> <span
                                                        class="text-truncate text-left">Department</span>
                                                </span>
                                            </span>
                                        </a> <a class="p-2" href="Department"> <span
                                                class="media align-items-center"> <span
                                                    class="lnr lnr-calendar-full mr-3"></span> <span
                                                    class="media-body text-truncate text-left"> <span
                                                        class="text-truncate text-left">Department</span>
                                                </span>
                                            </span>
                                        </a> <a class="p-2" href="leave"> <span
                                                class="media align-items-center"> <span
                                                    class="lnr lnr-briefcase mr-3"></span> <span
                                                    class="media-body text-truncate text-left"> <span
                                                        class="text-truncate text-left">Leave</span>
                                                </span>
                                            </span>
                                        </a> <a class="p-2" href="reviews"> <span
                                                class="media align-items-center"> <span
                                                    class="lnr lnr-star mr-3"></span> <span
                                                    class="media-body text-truncate text-left"> <span
                                                        class="text-truncate text-left">Reviews</span>
                                                </span>
                                            </span>
                                        </a> <a class="p-2" href="reports"> <span
                                                class="media align-items-center"> <span
                                                    class="lnr lnr-rocket mr-3"></span> <span
                                                    class="media-body text-truncate text-left"> <span
                                                        class="text-truncate text-left">Reports</span>
                                                </span>
                                            </span>
                                        </a> <a class="p-2" href="manage"> <span
                                                class="media align-items-center"> <span
                                                    class="lnr lnr-sync mr-3"></span> <span
                                                    class="media-body text-truncate text-left"> <span
                                                        class="text-truncate text-left">Manage</span>
                                                </span>
                                            </span>
                                        </a> <a class="p-2" href="settings"> <span
                                                class="media align-items-center"> <span
                                                    class="lnr lnr-cog mr-3"></span> <span
                                                    class="media-body text-truncate text-left"> <span
                                                        class="text-truncate text-left">Settings</span>
                                                </span>
                                            </span>
                                        </a> <a class="p-2" href="employment"> <span
                                                class="media align-items-center"> <span
                                                    class="lnr lnr-user mr-3"></span> <span
                                                    class="media-body text-truncate text-left"> <span
                                                        class="text-truncate text-left">Profile</span>
                                                </span>
                                            </span>
                                        </a> <a class="p-2" href="login"> <span
                                                class="media align-items-center"> <span
                                                    class="lnr lnr-power-switch mr-3"></span> <span
                                                    class="media-body text-truncate text-left"> <span
                                                        class="text-truncate text-left">Logout</span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <!-- /Offcanvas menu -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Top Header Section -->

            <!-- Slide Nav -->

            <!-- Slide Nav -->
            <div class="header-wrapper d-none d-sm-none d-md-none d-lg-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-menu-list d-flex bg-white rt_nav_header horizontal-layout nav-bottom">
                                <div class="append mr-auto my-0 my-md-0 mr-auto">
                                    <ul class="list-group list-group-horizontal-md mr-auto">
                                        <li class="mr-1 active"><a href="index"
                                                class="btn-ctm-space text-white"><span
                                                    class="lnr lnr-home pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Dashboard</span></a></li>
                                        <li class="mr-1"><a class="text-dark btn-ctm-space "
                                                href="employees"><span
                                                    class="lnr lnr-users pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Employees</span></a></li>
                                        <li class="mr-1"><a class="text-dark btn-ctm-space "
                                                href="department"><span
                                                    class="lnr lnr-apartment pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Department</span></a></li>
                                        <li class="mr-1"><a class="btn-ctm-space text-dark"
                                                href="calendar"><span
                                                    class="lnr lnr-calendar-full pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Calendar</span></a></li>
                                        <li class="mr-1"><a class="btn-ctm-space text-dark"
                                                href="leave-details"><span
                                                    class="lnr lnr-briefcase pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Leave</span></a></li>
                                        <li class="mr-1"><a class="text-dark btn-ctm-space"
                                                href="reviews"><span
                                                    class="lnr lnr-star pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Reviews</span></a></li>
                                        <li class="mr-1"><a class="btn-ctm-space text-dark"
                                                href="reports"><span
                                                    class="lnr lnr-rocket pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Reports</span></a></li>
                                        <li class="mr-1"><a class="btn-ctm-space text-dark"
                                                href="manage"><span
                                                    class="lnr lnr-sync pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Manage</span></a></li>
                                        <li class="mr-1"><a class="btn-ctm-space text-dark"
                                                href="settings"><span
                                                    class="lnr lnr-cog pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Settings</span></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Slide Nav -->

        </header>
        <!-- /Header -->

        <!-- Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
                        <aside class="sidebar sidebar-user">
                            <div class="card ctm-border-radius shadow-sm">
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col-md-12 mr-auto text-left">
                                            <div class="custom-search input-group">
                                                <div class="custom-breadcrumb">
                                                    <ol class="breadcrumb no-bg-color d-inline-block p-0 m-0 mb-2">
                                                        <li class="breadcrumb-item d-inline-block"><a
                                                                href="index" class="text-dark">Home</a></li>
                                                        <li class="breadcrumb-item d-inline-block active">Dashboard
                                                        </li>
                                                    </ol>
                                                    <h4 class="text-dark">Admin Dashboard</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="user-card card shadow-sm bg-white text-center ctm-border-radius">
                                <div class="user-info card-body">
                                    <div class="user-avatar mb-4">
                                        
                                        <img src="{{ asset('assets/img/profiles/' . session('image')) }}"  alt="User Avatar" class="img-fluid rounded-circle" />
                                            
                                            </div>
                                        <div class="user-details">
                                            <h4>
                                                <b>{{ session('Guest') }} {{ session('user_name') }}</b>


                                            </h4>
                                            <p>{{ \Carbon\Carbon::now()->format('D, d M Y') }}</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item text-center active button-5"><a
                                                    href="index.html" class="text-white">Admin Dashboard</a></li>
                                            <li class="list-group-item text-center button-6"><a class="text-dark"
                                                    href="employees-dashboard">Employees
                                                    Dashboard</a></li>
                                        </ul>
                                    </div>
                                </div>
                        </aside>
                    </div>

                    <div class="col-xl-9 col-lg-8 col-md-12">

                        <!-- Widget -->
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card dash-widget ctm-border-radius shadow-sm">
                                    <div class="card-body">
                                        <div class="card-icon bg-primary">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                        </div>
                                        <div class="card-right">
                                            <h4 class="card-title">Employees</h4>
                                            <p class="card-text">{{ $stats['totalEmployees'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-12">
                                <div class="card dash-widget ctm-border-radius shadow-sm">
                                    <div class="card-body">
                                        <div class="card-icon bg-warning">
                                            <i class="fa fa-building-o"></i>
                                        </div>
                                        <div class="card-right">
                                            <h4 class="card-title">Department</h4>
                                            <p class="card-text"> {{ $stats['totalDepartments'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-12">
                                <div class="card dash-widget ctm-border-radius shadow-sm">
                                    <div class="card-body">
                                        <div class="card-icon bg-danger">
                                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                                        </div>
                                        <div class="card-right">
                                            <h4 class="card-title">Leaves</h4>
                                            <p class="card-text">{{ $stats['totalLeaves'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-12">
                                <div class="card dash-widget ctm-border-radius shadow-sm">
                                    <div class="card-body">
                                        <div class="card-icon bg-success">
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                        </div>
                                        <div class="card-right">
                                            <h4 class="card-title">Salary</h4>
                                            <p class="card-text">
                                                {{ number_format((float) ($stats['totalSalary'] ?? 0), 2) }}

                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Widget -->

                        <!-- Chart -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-6 d-flex">
                                <div class="card ctm-border-radius shadow-sm flex-fill">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Total Employees</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="pieChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6 d-flex">
                                <div class="card ctm-border-radius shadow-sm flex-fill">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Total Salary By Unit</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="lineChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Chart -->

                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <div class="card ctm-border-radius shadow-sm">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0 d-inline-block">Today</h4>
                                        <a href="javascript:void(0)"
                                            class="d-inline-block float-right text-primary"><i
                                                class="lnr lnr-sync"></i></a>
                                    </div>
                                    <div class="card-body recent-activ">
                                        <div class="recent-comment">
                                            <a href="javascript:void(0)" class="dash-card text-dark">
                                                <div class="dash-card-container">
                                                    <div class="dash-card-icon text-primary">
                                                        <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="dash-card-content">
                                                        <h6 class="mb-0">No Birthdays Today</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr>
                                            <a href="javascript:void(0)" class="dash-card text-dark">
                                                <div class="dash-card-container">
                                                    <div class="dash-card-icon text-warning">
                                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="dash-card-content">
                                                        <h6 class="mb-0">Ralph Baker is off sick today</h6>
                                                    </div>
                                                    <div class="dash-card-avatars">
                                                        <div class="e-avatar">
                                                            <img class="img-fluid" src="assets/img/profiles/img-9.jpg"
                                                                alt="Avatar">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr>
                                            <a href="javascript:void(0)" class="dash-card text-dark">
                                                <div class="dash-card-container">
                                                    <div class="dash-card-icon text-success">
                                                        <i class="fa fa-child" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="dash-card-content">
                                                        <h6 class="mb-0">Ralph Baker is parenting leave today</h6>
                                                    </div>
                                                    <div class="dash-card-avatars">
                                                        <div class="e-avatar">
                                                            <img class="img-fluid" src="assets/img/profiles/img-9.jpg"
                                                                alt="Avatar">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr>
                                            <a href="javascript:void(0)" class="dash-card text-dark">
                                                <div class="dash-card-container">
                                                    <div class="dash-card-icon text-danger">
                                                        <i class="fa fa-suitcase"></i>
                                                    </div>
                                                    <div class="dash-card-content">
                                                        <h6 class="mb-0">Danny ward is away today</h6>
                                                    </div>
                                                    <div class="dash-card-avatars">
                                                        <div class="e-avatar">
                                                            <img class="img-fluid" src="assets/img/profiles/img-5.jpg"
                                                                alt="Avatar">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr>
                                            <a href="javascript:void(0)" class="dash-card text-dark">
                                                <div class="dash-card-container">
                                                    <div class="dash-card-icon text-pink">
                                                        <i class="fa fa-home" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="dash-card-content">
                                                        <h6 class="mb-0">You are working from home today</h6>
                                                    </div>
                                                    <div class="dash-card-avatars">
                                                        <div class="e-avatar">
                                                            <img class="img-fluid" src="assets/img/profiles/img-6.jpg"
                                                                alt="Maria Cotton">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 d-flex">

                                <!-- Team Leads List -->
                                <div class="card flex-fill team-lead shadow-sm">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0 d-inline-block">Team Leads</h4>
                                        <a href="employees.html"
                                            class="dash-card float-right mb-0 text-primary">Manage
                                            Team </a>
                                    </div>
                                    @if(session()->has('all_employees'))
    @foreach(session('all_employees') as $employee)
        <div class="widget-profile">
            <div class="card-body">
                <div class="media mb-3">
                    <div class="e-avatar avatar-online mr-3">
                        <img src="{{ asset('assets/img/profiles/' . $employee->image_photo_url) }}" 
                            alt="User Image" class="img-fluid">
                    </div>
                    <div class="media-body">
                        <h6 class="m-0">{{ $employee->first_name }}</h6>
                        <p class="mb-0 ctm-text-sm">{{ $employee->team }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif


                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 d-flex">

                                <!-- Recent Activities -->
                                <div class="card recent-acti flex-fill shadow-sm">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0 d-inline-block">Recent
                                            Activities</h4>
                                        <a href="javascript:void(0)"
                                            class="d-inline-block float-right text-primary"><i
                                                class="lnr lnr-sync"></i></a>
                                    </div>
                                    <div class="card-body recent-activ admin-activ">
                                        <div class="recent-comment">
                                            <div class="notice-board">
                                                <div class="table-img">
                                                    <div class="e-avatar mr-3">
                                                        <img class="img-fluid" src="assets/img/profiles/img-5.jpg"
                                                            alt="Danny Ward">
                                                    </div>
                                                </div>
                                                <div class="notice-body">
                                                    <h6 class="mb-0">Lorem Ipsum dolor sit Amet.</h6>
                                                    <span class="ctm-text-sm">Danny Ward | 1 hour ago</span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="notice-board">
                                                <div class="table-img">
                                                    <div class="e-avatar mr-3">
                                                        <img class="img-fluid" src="assets/img/profiles/img-2.jpg"
                                                            alt="John Gibbs">
                                                    </div>
                                                </div>
                                                <div class="notice-body">
                                                    <h6 class="mb-0">Lorem Ipsum dolor sit Amet.</h6>
                                                    <span class="ctm-text-sm">John Gibbs | 2 hour ago</span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="notice-board">
                                                <div class="table-img">
                                                    <div class="e-avatar mr-3">
                                                        <img class="img-fluid" src="assets/img/profiles/img-6.jpg"
                                                            alt="Maria Cotton">
                                                    </div>
                                                </div>
                                                <div class="notice-body">
                                                    <h6 class="mb-0">Lorem Ipsum dolor sit Amet.</h6>
                                                    <span class="ctm-text-sm">Maria Cotton | 4 hour ago</span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="notice-board">
                                                <div class="table-img">
                                                    <div class="e-avatar mr-3">
                                                        <img class="img-fluid" src="assets/img/profiles/img-4.jpg"
                                                            alt="Linda Craver">
                                                    </div>
                                                </div>
                                                <div class="notice-body">
                                                    <h6 class="mb-0">Lorem Ipsum dolor sit Amet.</h6>
                                                    <span class="ctm-text-sm">Linda Craver | 5 hour ago</span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="notice-board">
                                                <div class="table-img">
                                                    <div class="e-avatar mr-3">
                                                        <img class="img-fluid" src="assets/img/profiles/img-3.jpg"
                                                            alt="Jenni Sims">
                                                    </div>
                                                </div>
                                                <div class="notice-body">
                                                    <h6 class="mb-0">Lorem Ipsum dolor sit Amet.</h6>
                                                    <span class="ctm-text-sm">Jenni Sims | 6 hour ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Recent Activities -->

                            <div class="col-lg-6 col-md-12 d-flex">

                                <!-- Today -->
                                <div class="card flex-fill today-list shadow-sm">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0 d-inline-block">Your Upcoming
                                            Leave</h4>
                                        <a href="leave" class="d-inline-block float-right text-primary"><i
                                                class="fa fa-suitcase"></i></a>
                                    </div>
                                    <div class="card-body recent-activ">
                                        <div class="recent-comment">
                                            <a href="javascript:void(0)" class="dash-card text-danger">
                                                <div class="dash-card-container">
                                                    <div class="dash-card-icon">
                                                        <i class="fa fa-suitcase"></i>
                                                    </div>
                                                    <div class="dash-card-content">
                                                        <h6 class="mb-0">Mon, 16 Dec 2019</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr>
                                            <a href="javascript:void(0)" class="dash-card text-primary">
                                                <div class="dash-card-container">
                                                    <div class="dash-card-icon">
                                                        <i class="fa fa-suitcase"></i>
                                                    </div>
                                                    <div class="dash-card-content">
                                                        <h6 class="mb-0">Fri, 20 Dec 2019</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr>
                                            <a href="javascript:void(0)" class="dash-card text-primary">
                                                <div class="dash-card-container">
                                                    <div class="dash-card-icon">
                                                        <i class="fa fa-suitcase"></i>
                                                    </div>
                                                    <div class="dash-card-content">
                                                        <h6 class="mb-0">Wed, 25 Dec 2019</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr>
                                            <a href="javascript:void(0)" class="dash-card text-primary">
                                                <div class="dash-card-container">
                                                    <div class="dash-card-icon">
                                                        <i class="fa fa-suitcase"></i>
                                                    </div>
                                                    <div class="dash-card-content">
                                                        <h6 class="mb-0">Fri, 27 Dec 2019</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr>
                                            <a href="javascript:void(0)" class="dash-card text-primary">
                                                <div class="dash-card-container">
                                                    <div class="dash-card-icon">
                                                        <i class="fa fa-suitcase"></i>
                                                    </div>
                                                    <div class="dash-card-content">
                                                        <h6 class="mb-0">Tue, 31 Dec 2019</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Content-->

    </div>
    <!-- Inner Wrapper -->

    <div class="sidebar-overlay" id="sidebar_overlay"></div>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Sticky sidebar JS -->
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
