<!DOCTYPE html>
<html lang="en">
	<head>
	
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Employees Page</title>
		
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
															<li class="breadcrumb-item d-inline-block active">Employees</li>
														</ol>
														<h4 class="text-dark">Employees</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card">
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item text-center active button-5"><a href="employees.html" class="text-white">All</a></li>
											<li class="list-group-item text-center button-6"><a class="text-dark" href="employees-team.html">Teams</a></li>
											<li class="list-group-item text-center button-6"><a class="text-dark" href="employees-offices.html">Offices</a></li>
										</ul>
									</div>
								</div>
							</aside>
						</div>
					
						<div class="col-xl-9 col-lg-8  col-md-12">
							<div class="card shadow-sm ctm-border-radius">
								<div class="card-body align-center">
									<h4 class="card-title float-left mb-0 mt-2">7 People</h4>
									<ul class="nav nav-tabs float-right border-0 tab-list-emp">
										<li class="nav-item">
											<a class="nav-link border-0 font-23 grid-view" href="employees.html"><i class="fa fa-th-large" aria-hidden="true"></i></a>
										</li>
										<li class="nav-item">
											<a class="nav-link border-0 font-23 active list-view" href="employees-list.html"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
										</li>
										<li class="nav-item pl-3">
											<a href="add-employee.html" class="btn btn-theme button-1 text-white ctm-border-radius p-2 add-person ctm-btn-padding"><i class="fa fa-plus"></i> Add Person</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="ctm-border-radius shadow-sm card">
								<div class="card-body">
								
									<!--Content table-->
									<div class="table-back employee-office-table">
										<div class="table-responsive">
											<table class="table custom-table table-hover table-hover">
												<thead>
													<tr>
														<th>Name</th>
														<th>Line Manager</th>
														<th>Team</th>
														<th>Office</th>
														<th>Permissions</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img alt="avatar image" src="assets/img/profiles/img-5.jpg" class="img-fluid"></a>
															<h2><a href="employment.html">Danny Ward</a></h2>
														</td>
														<td><a class="btn btn-outline-success btn-sm"> Richard Wilson  </a></td>
														<td><a class="btn btn-outline-warning btn-sm"> Design </a></td>
														<td>Focus Technologies</td>
														<td>Team Lead</td>
														<td>
															<div class="dropdown action-label drop-active">
																<a href="javascript:void(0)" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"> Active <i class="caret"></i></a>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="javascript:void(0)"> Active</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Inactive</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Invited</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img src="assets/img/profiles/img-4.jpg" alt="Linda Craver" class="img-fluid"></a>
															<h2><a href="employment.html">Linda Craver</a></h2>
														</td>
														<td><a class="btn  btn-outline-success btn-sm"> Richard Wilson </a></td>
														<td><a class="btn btn-outline-warning btn-sm"> IOS </a></td>
														<td>Focus Technologies</td>
														<td>Team Lead</td>
														<td>
															<div class="dropdown action-label drop-active">
																<a  href="javascript:void(0)" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Invite <i class="caret"></i></a>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="javascript:void(0)"> Active</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Inactive</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Invited</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img src="assets/img/profiles/img-3.jpg" alt="Jenni Sims" class="img-fluid"></a>
															<h2><a href="employment.html">Jenni Sims</a></h2>
														</td>
														<td><a class="btn  btn-outline-success btn-sm"> Richard Wilson </a></td>
														<td><a class="btn btn-outline-warning btn-sm"> Android </a></td>
														<td>Focus Technologies</td>
														<td>Team Lead</td>
														<td>
															<div class="dropdown action-label drop-active">
																<a  href="javascript:void(0)" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Invite <i class="caret"></i></a>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="javascript:void(0)"> Active</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Inactive</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Invited</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img src="assets/img/profiles/img-8.jpg" alt="Jenni Sims" class="img-fluid"></a>
															<h2><a href="employment.html">Stacey Linville</a></h2>
														</td>
														<td><a class="btn  btn-outline-success btn-sm"> Richard Wilson </a></td>
														<td><a class="btn btn-outline-warning btn-sm"> Testing </a></td>
														<td>Focus Technologies</td>
														<td>Team Lead</td>
														<td>
															<div class="dropdown action-label drop-active">
																<a  href="javascript:void(0)" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Invite <i class="caret"></i></a>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="javascript:void(0)"> Active</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Inactive</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Invited</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img alt="avatar image" src="assets/img/profiles/img-6.jpg" class="img-fluid"></a>
															<h2><a href="employment.html">Maria Cotton</a></h2>
														</td>
														<td><a class="btn  btn-outline-success btn-sm"> Richard Wilson </a></td>
														<td><a class="btn btn-outline-warning btn-sm"> PHP</a></td>
														<td>Focus Technologies</td>
														<td>Team Lead</td>
														<td>
															<div class="dropdown action-label drop-active">
																<a  href="javascript:void(0)" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Active <i class="caret"></i></a>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="javascript:void(0)"> Active</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Inactive</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Invited</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img class="img-fluid" src="assets/img/profiles/img-2.jpg" alt="John Gibbs"></a>
															<h2><a href="employment.html">John Gibbs</a></h2>
														</td>
														<td><a class="btn  btn-outline-success btn-sm"> Richard Wilson </a></td>
														<td><a class="btn btn-outline-warning btn-sm"> Business </a></td>
														<td>Focus Technologies</td>
														<td>Team Lead</td>
														<td>
															<div class="dropdown action-label drop-active">
																<a  href="javascript:void(0)" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active <i class="caret"></i></a>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="javascript:void(0)"> Active</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Inactive</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Invited</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img src="assets/img/profiles/img-10.jpg" alt="Richard Wilson" class="img-fluid"></a>
															<h2><a href="employment.html">Richard Wilson</a></h2>
														</td>
														<td><a class="btn btn-outline-danger btn-sm"> No </a></td>
														<td><a class="btn btn-outline-warning btn-sm"> Operation Manager </a></td>
														<td>Focus Technologies</td>
														<td>Super Admin</td>
														<td>
															<div class="dropdown action-label drop-active">
																<a  href="javascript:void(0)" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active <i class="caret"></i></a>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="javascript:void(0)"> Active</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Inactive</a>
																	<a class="dropdown-item" href="javascript:void(0)"> Invited</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- /Content Table -->
									
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