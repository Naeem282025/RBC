<!DOCTYPE html>
<html lang="en">
	<head>
	
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Manage Page</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Linearicon Font -->
		<link rel="stylesheet" href="assets/css/lnr-icon.css">
				
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
				
		<!-- Custom CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
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
										<img src="assets/img/RohanLogo.png" alt="logo image" class="img-fluid" width="100">
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
														<button class="btn" type="submit"><i
																class="fa fa-search"></i></button>
													</form>
												</div>
											</div>
	
											<!-- User notification-->
											<div class="user-notification-block align-right d-inline-block">
												<ul class="list-inline m-0">
													<li class="list-inline-item item-animated" data-toggle="tooltip"
														data-placement="top" title=""
														data-original-title="Apply Leave">
														<a href="leave"
															class="font-23 menu-style text-white align-middle">
															<span class="lnr lnr-briefcase position-relative"></span>
														</a>
													</li>
												</ul>
											</div>
											<!-- /User notification-->
	
											<!-- user info-->
											<div class="user-info align-right dropdown d-inline-block header-dropdown">
												<a href="javascript:void(0)" data-toggle="dropdown"
													class=" menu-style dropdown-toggle">
													<div class="user-avatar d-inline-block">
														<img src="{{ asset('assets/img/profiles/' . session('image')) }}"
															alt="user avatar" class="rounded-circle img-fluid"
															width="55">
													</div>
												</a>
	
												<!-- Notifications -->
												<div
													class="dropdown-menu notification-dropdown-menu shadow-lg border-0 p-3 m-0 dropdown-menu-right">
													<a class="dropdown-item p-2" href="employment">
														<span class="media align-items-center">
															<span class="lnr lnr-user mr-3"></span>
															<span class="media-body text-truncate">
																<span class="text-truncate">Profile</span>
															</span>
														</span>
													</a>
													<a class="dropdown-item p-2" href="login">
														<span class="media align-items-center">
															<span class="lnr lnr-power-switch mr-3"></span>
															<span class="media-body text-truncate">
																<span class="text-truncate">Logout</span>
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
									<a href="javascript:void(0)">
										<span class="lnr lnr-user d-block display-5 text-white" id="open_navSidebar"></span>
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
													<button class="btn" type="submit"><i
															class="fa fa-search"></i></button>
												</form>
											</div>
										</div>
										<hr>
										<div class="user-menu-items px-3 m-0">
											<a class="px-0 pb-2 pt-0" href="index">
												<span class="media align-items-center">
													<span class="lnr lnr-home mr-3"></span>
													<span class="media-body text-truncate text-left">
														<span class="text-truncate text-left">Dashboard</span>
													</span>
												</span>
											</a>
											<a class="p-2" href="employees">
												<span class="media align-items-center">
													<span class="lnr lnr-users mr-3"></span>
													<span class="media-body text-truncate text-left">
														<span class="text-truncate text-left">Employees</span>
													</span>
												</span>
											</a>
											<a class="p-2" href="department">
												<span class="media align-items-center">
													<span class="lnr lnr-apartment mr-3"></span>
													<span class="media-body text-truncate text-left">
														<span class="text-truncate text-left">Department</span>
													</span>
												</span>
											</a>
											<a class="p-2" href="calendar">
												<span class="media align-items-center">
													<span class="lnr lnr-calendar-full mr-3"></span>
													<span class="media-body text-truncate text-left">
														<span class="text-truncate text-left">Calendar</span>
													</span>
												</span>
											</a>
											<a class="p-2" href="leave">
												<span class="media align-items-center">
													<span class="lnr lnr-briefcase mr-3"></span>
													<span class="media-body text-truncate text-left">
														<span class="text-truncate text-left">Leave</span>
													</span>
												</span>
											</a>
											<a class="p-2" href="reviews">
												<span class="media align-items-center">
													<span class="lnr lnr-star mr-3"></span>
													<span class="media-body text-truncate text-left">
														<span class="text-truncate text-left">Reviews</span>
													</span>
												</span>
											</a>
											<a class="p-2" href="reports">
												<span class="media align-items-center">
													<span class="lnr lnr-rocket mr-3"></span>
													<span class="media-body text-truncate text-left">
														<span class="text-truncate text-left">Reports</span>
													</span>
												</span>
											</a>
											<a class="p-2" href="manage">
												<span class="media align-items-center">
													<span class="lnr lnr-sync mr-3"></span>
													<span class="media-body text-truncate text-left">
														<span class="text-truncate text-left">Manage</span>
													</span>
												</span>
											</a>
	
											<a class="p-2" href="settings">
												<span class="media align-items-center">
													<span class="lnr lnr-cog mr-3"></span>
													<span class="media-body text-truncate text-left">
														<span class="text-truncate text-left">Settings</span>
													</span>
												</span>
											</a>
											<a class="p-2" href="employment">
												<span class="media align-items-center">
													<span class="lnr lnr-user mr-3"></span>
													<span class="media-body text-truncate text-left">
														<span class="text-truncate text-left">Profile</span>
													</span>
												</span>
											</a>
											<a class="p-2" href="login">
												<span class="media align-items-center">
													<span class="lnr lnr-power-switch mr-3"></span>
													<span class="media-body text-truncate text-left">
														<span class="text-truncate text-left">Logout</span>
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
				<div class="header-wrapper d-none d-sm-none d-md-none d-lg-block">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="header-menu-list d-flex bg-white rt_nav_header horizontal-layout nav-bottom">
									<div class="append mr-auto my-0 my-md-0 mr-auto">
										<ul class="list-group list-group-horizontal-md mr-auto">
											<li class="active mr-1"><a href="index"
													class="text-white btn-ctm-space"><span
														class="lnr lnr-home pr-0 pr-lg-2"></span><span
														class="d-none d-lg-inline">Dashboard</span></a></li>
											<li class="mr-1"><a class="text-dark btn-ctm-space"
													href="employees"><span
														class="lnr lnr-users pr-0 pr-lg-2"></span><span
														class="d-none d-lg-inline">Employees</span></a></li>
											<li class="mr-1"><a class="text-dark btn-ctm-space"
													href="department"><span
														class="lnr lnr-apartment pr-0 pr-lg-2"></span><span
														class="d-none d-lg-inline">Company</span></a></li>
											<li class="mr-1"><a class="text-dark btn-ctm-space"
													href="calendar"><span
														class="lnr lnr-calendar-full pr-0 pr-lg-2"></span><span
														class="d-none d-lg-inline">Calendar</span></a></li>
											<li class="mr-1"><a class="text-dark btn-ctm-space" href="leave.html"><span
														class="lnr lnr-briefcase pr-0 pr-lg-2"></span><span
														class="d-none d-lg-inline">Leave</span></a></li>
											<li class="mr-1"><a class="text-dark btn-ctm-space"
													href="reviews"><span
														class="lnr lnr-star pr-0 pr-lg-2"></span><span
														class="d-none d-lg-inline">Reviews</span></a></li>
											<li class="mr-1"><a class="text-dark btn-ctm-space"
													href="reports"><span
														class="lnr lnr-rocket pr-0 pr-lg-2"></span><span
														class="d-none d-lg-inline">Reports</span></a></li>
											<li class="mr-1"><a class="text-dark btn-ctm-space"
													href="manage"><span
														class="lnr lnr-sync pr-0 pr-lg-2"></span><span
														class="d-none d-lg-inline">Manage</span></a></li>
											<li class="mr-1"><a class="text-dark btn-ctm-space"
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
														<li class="breadcrumb-item d-inline-block"><a href="index.html" class="text-dark">Home</a></li>
														<li class="breadcrumb-item d-inline-block active">Manage</li>
													</ol>
													<h4 class="text-dark">Admin</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card">
								<div class="card-body">
									<div class="flex-column list-group" id="v-pills-tab" role="tablist" aria-orientation="vertical">
										<a class=" active list-group-item" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Manage Details</a>
										<a class="list-group-item" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Manage Time Off</a>
										<a class="list-group-item" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Manage Salaries</a>
										<a class="list-group-item" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Manage All</a>
										<a class="list-group-item" id="v-pills-settings-tab1" data-toggle="pill" href="#v-pills-settings1" role="tab" aria-controls="v-pills-settings1" aria-selected="false">Manage Account Settings</a>
									</div>
								</div>
							</div>
						</aside>
					</div>
					
					<div class="col-xl-9 col-lg-8  col-md-12">
						<div class="card ctm-border-radius shadow-sm">
							<div class="card-header">
								<h4 class="card-title mb-0 d-inline-block">Your Admin</h4>
							</div>
							<div class="card-body">
								<a class="mb-0 cursor-pointer d-block">
								<span class="avatar" data-toggle="tooltip" data-placement="top" title="Richard Wilson"><img src="assets/img/profiles/img-10.jpg" alt="Richard Wilson" class="img-fluid"></span>
								<span class="ml-4">1 Admin</span>
								</a>
							</div>
						</div>
						<div class="card ctm-border-radius shadow-sm">
							<div class="card-body">
								<div class="tab-content" id="v-pills-tabContent">
								
									<!-- Tab1-->
									<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
										<div class="table-responsive">
											<table class="table admin-table table-hover">
												<thead>
													<tr>
														<th class="pt-0">Rule Description</th>
														<th class="pt-0">View</th>
														<th class="pt-0">Manage</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Basic Information</h6>
																<p class="ctm-text-sm">Preferred Name, and birthday </p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch1" checked>
																<label class="custom-control-label" for="switch1"></label>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch2" checked>
																<label class="custom-control-label" for="switch2"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Personal Information</h6>
																<p class="ctm-text-sm">Nationality, full date of birth, and home address </p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch3" checked>
																<label class="custom-control-label" for="switch3"></label>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch4" checked>
																<label class="custom-control-label" for="switch4"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Contact Information</h6>
																<p class="ctm-text-sm">Email And Phone Number </p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch5" checked>
																<label class="custom-control-label" for="switch5"></label>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch6" checked>
																<label class="custom-control-label" for="switch6"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Login Information</h6>
																<p class="ctm-text-sm">Login email </p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch7" checked>
																<label class="custom-control-label" for="switch7"></label>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch8" checked>
																<label class="custom-control-label" for="switch8"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Social Media</h6>
																<p class="ctm-text-sm">Web Site </p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch9" checked>
																<label class="custom-control-label" for="switch3"></label>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch10" checked>
																<label class="custom-control-label" for="switch10"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Company Information</h6>
																<p class="ctm-text-sm">Roll and Employment type </p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch11" checked>
																<label class="custom-control-label" for="switch11"></label>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch12" checked>
																<label class="custom-control-label" for="switch12"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Working Week</h6>
																<p class="ctm-text-sm">View or Manage the days worked </p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch13" checked>
																<label class="custom-control-label" for="switch13"></label>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch14" checked>
																<label class="custom-control-label" for="switch14"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Key Dates</h6>
																<p class="ctm-text-sm">
																	Keep track of important occasions for people in your team. Such as start date, probation date, or visa expiration
																</p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch15" checked>
																<label class="custom-control-label" for="switch15"></label>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch16" checked>
																<label class="custom-control-label" for="switch16"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="pb-0">
															<div>
																<h6 class="mb-0">Manage Key Date Types</h6>
																<p class="ctm-text-sm">
																	Create and manage all date types that can be applied to anyone in the company.
																</p>
															</div>
														</td>
														<td class="pb-0">
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch17" checked>
																<label class="custom-control-label" for="switch3"></label>
															</div>
														</td>
														<td class="pb-0">
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch38" checked>
																<label class="custom-control-label" for="switch38"></label>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- /Tab1-->
									
									<!-- Tab2-->
									<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
										<div class="table-responsive">
											<table class="table admin-table table-hover">
												<thead>
													<tr>
														<th class="pt-0">Rule Description</th>
														<th class="pt-0">Allow?</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Approve or Deny Time Off</h6>
																<p class="ctm-text-sm">Manage time off requests for anyone in their team. </p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch18" checked>
																<label class="custom-control-label" for="switch18"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Book Time Off Behalf</h6>
																<span>Book time off for anyone in their team </span>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch19" checked>
																<label class="custom-control-label" for="switch19"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Manage Allowances</h6>
																<span>Adjust the holiday allowance for people in their team </span>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch20" checked>
																<label class="custom-control-label" for="switch20"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Manage Time Off settings for The Company</h6>
																<span>
																Manage custom leave types, roll over, company holidays and restricted days, the company working week, and your company holiday allowance.
																</span>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch21" checked>
																<label class="custom-control-label" for="switch21"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="pb-0">
															<div>
																<h6 class="mb-0">Manage Working From Home</h6>
																<p class="ctm-text-sm">
																	Create, edit, or delete working from home requests for people in their team
																</p>
															</div>
														</td>
														<td class="pb-0">
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch22" checked>
																<label class="custom-control-label" for="switch22"></label>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- /Tab2 -->
									
									<!-- Tab3 -->
									<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
										<div class="table-responsive">
											<table class="table admin-table table-hover">
												<thead>
													<tr>
														<th class="pt-0">Rule Description</th>
														<th class="pt-0">View</th>
														<th class="pt-0">Manage</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="pb-0">
															<div>
																<h6 class="mb-0">Salary</h6>
																<p class="ctm-text-sm">View or manage salaries </p>
															</div>
														</td>
														<td class="pb-0">
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch23" checked>
																<label class="custom-control-label" for="switch23"></label>
															</div>
														</td>
														<td class="pb-0">
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch24" checked>
																<label class="custom-control-label" for="switch24"></label>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- /Tab3 -->
									
									<!-- Tab4 -->
									<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
										<div class="table-responsive">
											<table class="table admin-table table-hover">
												<thead>
													<tr>
														<th class="pt-0">Rule Description</th>
														<th class="pt-0">Allow?</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Invite People To Their Team</h6>
																<p class="ctm-text-sm">View or manage future starters at your company that will join their team </p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch25" checked>
																<label class="custom-control-label" for="switch25"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Off Board Everyone Else</h6>
																<p class="ctm-text-sm">Archive everyone else and revoke their access</p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch26" checked>
																<label class="custom-control-label" for="switch26"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Manage Roles</h6>
																<p class="ctm-text-sm">Edit and assign Roles to anyone in the company</p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch27" checked>
																<label class="custom-control-label" for="switch27"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Create Teams</h6>
																<p class="ctm-text-sm">Create new teams </p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch28" checked>
																<label class="custom-control-label" for="switch28"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Edit Team Names</h6>
																<p class="ctm-text-sm">Can edit team name </p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch29" checked>
																<label class="custom-control-label" for="switch29"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Edit Team Members</h6>
																<p class="ctm-text-sm">Can move people in or out of their team</p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch30" checked>
																<label class="custom-control-label" for="switch30"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="pb-0">
															<div>
																<h6 class="mb-0">Manage Offices</h6>
																<p class="ctm-text-sm">Create and edit all offices</p>
															</div>
														</td>
														<td class="pb-0">
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch31" checked>
																<label class="custom-control-label" for="switch31"></label>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- /Tab4 -->
									
									<!-- Tab5 -->
									<div class="tab-pane fade" id="v-pills-settings1" role="tabpanel" aria-labelledby="v-pills-settings-tab1">
										<div class="table-responsive">
											<table class="table admin-table table-hover">
												<thead>
													<tr>
														<th class="pt-0">Rule Description</th>
														<th class="pt-0">Allow?</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Customize The Company Branding</h6>
																<p class="ctm-text-sm">Set your company name, logo, mission, and cover photo</p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch32" checked>
																<label class="custom-control-label" for="switch32"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">On-boarding Slides</h6>
																<p class="ctm-text-sm">
																	Create, edit, and delete the slides shown to new starters when they first join .
																</p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch33" checked>
																<label class="custom-control-label" for="switch33"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Manage All Company Tools</h6>
																<p class="ctm-text-sm">
																	Add, update and remove tools from the company tools section
																</p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch34" checked>
																<label class="custom-control-label" for="switch34"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Slack Integration</h6>
																<p class="ctm-text-sm">
																	Manage the Slack integration, including automating slack accounts for new starters, and customizing notifications
																</p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch35" checked>
																<label class="custom-control-label" for="switch35"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div>
																<h6 class="mb-0">Time Off Calendar Integration</h6>
																<p class="ctm-text-sm">Ability to disable the calendar integration for everyone </p>
															</div>
														</td>
														<td>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch36" checked>
																<label class="custom-control-label" for="switch36"></label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="pb-0">
															<div>
																<h6 class="mb-0">Manage Account Subscription</h6>
																<p class="ctm-text-sm">
																	Can update card details and see all invoices
																</p>
															</div>
														</td>
														<td class="pb-0">
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" id="switch37" checked>
																<label class="custom-control-label" for="switch37"></label>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- /Tab5 -->
									
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
		<script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>		
		
		<!-- Sticky sidebar JS -->
		<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>		
		<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>		
		
		<!-- Custom Js -->
		<script src="assets/js/script.js"></script>
		
	</body>
</html>