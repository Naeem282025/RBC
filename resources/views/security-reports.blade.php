<!DOCTYPE html>
<html lang="en">
	<head>
	
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Reports Page</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Linearicon Font -->
		<link rel="stylesheet" href="assets/css/lnr-icon.css">
				
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
				
		<!-- Tagsinput CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
					
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
															<li class="breadcrumb-item d-inline-block active">Reports</li>
														</ol>
														<h4 class="text-dark">Reports</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card ctm-border-radius shadow-sm">
									<div class="card-body">
										<a href="javascript:void(0)" class="btn btn-theme button-1 ctm-border-radius text-white btn-block" data-toggle="modal" data-target="#add_report"><span><i class="fe fe-plus"></i></span> Create Reports</a>
									</div>
								</div>
								<div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card">
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item text-center"><a href="reports.html" class="text-dark">Team Reports</a></li>
											<li class="list-group-item text-center"><a class="text-dark" href="leave-reports.html">Leave Reports</a></li>
											<li class="list-group-item text-center"><a class="text-dark" href="payroll-reports.html">Payroll Reports</a></li>
											<li class="list-group-item text-center"><a class="text-dark" href="contact-reports.html">Contact Reports</a></li>
											<li class="list-group-item text-center"><a class="text-dark" href="email-reports.html">Email Reports</a></li>
											<li class="list-group-item text-center active"><a class="text-white" href="security-reports.html">Security Reports</a></li>
											<li class="list-group-item text-center"><a class="text-dark" href="work-from-home-reports.html">Working From Home Reports</a></li>
										</ul>
									</div>
								</div>
							</aside>
						</div>
				
						<div class="col-xl-9 col-lg-8  col-md-12">
							<div class="card shadow-sm ctm-border-radius">
								<div class="card-body align-center">
									<div class="row filter-row">
										<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3"> 
											<div class="form-group mb-xl-0 mb-md-2 mb-sm-2">
												<select class="form-control select">
													<option selected>Start Date</option>
													<option>Date Of Birth</option>
													<option>Created At</option>
													<option>Leaving Date</option>
													<option>Visa Expiry Date</option>
												</select>
												
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">  
											<div class="form-group mb-lg-0 mb-md-2 mb-sm-2">
												<input type="text" class="form-control datetimepicker" placeholder="From">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">  
											<div class="form-group mb-lg-0 mb-md-0 mb-sm-0">
												<input type="text" class="form-control datetimepicker" placeholder="To">
											</div>
										</div>
										
										<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">  
											<a href="#" class="btn btn-theme button-1 text-white btn-block p-2 mb-md-0 mb-sm-0 mb-lg-0 mb-0"> Apply Filter </a>  
										</div>
									</div>
								</div>
							</div>
							<div class="card shadow-sm ctm-border-radius">
								<div class="card-body align-center">
									<div class="employee-office-table">
										<div class="table-responsive">
											<table class="table custom-table table-hover">
												<thead>
													<tr>
														<th>Team Member</th>
														<th>Email</th>
														<th>Job Title</th>
														<th>Team Name</th>
														<th>Office</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img alt="avatar image" src="assets/img/profiles/img-5.jpg" class="img-fluid"></a>
															<h2><a href="employment.html">Danny Ward</a></h2>
														</td>
														<td>danyward@example.com</td>
														<td>Design Team Lead</td>
														<td><span class="btn btn-outline-warning text-dark btn-sm">Design</span></td>
														<td>Focus Technology</td>
													</tr>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img class="img-fluid" alt="avatar image" src="assets/img/profiles/img-4.jpg"></a>
															<h2><a href="employment.html"> Linda Craver</a></h2>
														</td>
														<td>lindacraver@example.com</td>
														<td>IOS Team Lead</td>
														<td><span class="btn btn-outline-warning text-dark btn-sm">IOS </span></td>
														<td>Focus Technology</td>
													</tr>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img class="img-fluid" alt="avatar image" src="assets/img/profiles/img-3.jpg"></a>
															<h2><a href="employment.html">Jenni Sims</a></h2>
														</td>
														
														<td>jennisims@example.com</td>
														<td>Android Team Lead</td>
														<td><span class="btn btn-outline-warning text-dark btn-sm">Android </span></td>
														<td>Focus Technology</td>
													</tr>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img alt="avatar image" src="assets/img/profiles/img-6.jpg" class="img-fluid"></a>
															<h2><a href="employment.html"> Maria Cotton</a></h2>
														</td>
														
														<td>mariacotton@example.com</td>
														<td>PHP Team Lead</td>
														<td><span class="btn btn-outline-warning text-dark btn-sm">PHP </span></td>
														<td>Focus Technology</td>
													</tr>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img class="img-fluid" alt="avatar image" src="assets/img/profiles/img-2.jpg"></a>
															<h2><a href="employment.html"> John Gibbs</a></h2>
														</td>
														
														<td>johndrysdale@example.com</td>
														<td>Business Team Lead </td>
														<td><span class="btn btn-outline-warning text-dark btn-sm">Business </span></td>
														<td>Focus Technology</td>
													</tr>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img class="img-fluid" alt="avatar image" src="assets/img/profiles/img-10.jpg"></a>
															<h2><a href="employment.html"> Richard Wilson</a></h2>
														</td>
														
														<td>richardwilson@example.com</td>
														<td>Operation Manager</td>
														<td><span class="btn btn-outline-warning text-dark btn-sm">Operation Manager</span></td>
														<td>Focus Technology</td>
													</tr>
													<tr>
														<td>
															<a href="employment.html" class="avatar"><img class="img-fluid" alt="avatar image" src="assets/img/profiles/img-8.jpg"></a>
															<h2><a href="employment.html">Stacey Linville</a></h2>
														</td>
														
														<td>staceylinville@example.com</td>
														<td>Testing Team Lead</td>
														<td><span class="btn btn-outline-warning text-dark btn-sm">Testing </span></td>
														<td>Focus Technology</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="text-center mt-3">
										<a href="javascript:void(0)" class="btn btn-theme button-1 ctm-border-radius text-white">Download Report</a>
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

	
		<!-- Create Reports The Modal -->
		<div class="modal fade" id="add_report">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<!-- Modal body -->
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title mb-3">Create Report</h4>
						<form>
							<p class="mb-2">Select Report Type</p>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
								<label class="custom-control-label" for="customRadio">Team Member</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
								<label class="custom-control-label" for="customRadio2">Time Off</label>
							</div>
							
							<div class="form-group">
								<label class="mt-3">What data would you like to include?</label>
								<!-- Multiselect dropdown -->
								<select multiple class="select w-100 form-control">
									<option>Full Name</option>
									<option>Working Days Off</option>
									<option>Booked By</option>
									<option>Start Date</option>
									<option>End Date</option>
									<option>Team Name</option>
									<option>First Name</option>
									<option>Last Name</option>
									<option>Email</option>
									<option>Date Of Birth</option>
									<option>Phone Number</option>
								</select><!-- End -->
							</div>
						</form>
						<button type="button" class="btn btn-danger text-white ctm-border-radius float-right ml-3" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-theme button-1 text-white ctm-border-radius float-right">Add</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="sidebar-overlay" id="sidebar_overlay"></div>
				
		<!-- jQuery -->
		<script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>		
		
		<!-- Sticky sidebar JS -->
		<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>		
		<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>		
				
		<!-- Datetimepicker JS -->
		<script src="assets/plugins/select2/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
				
		<!-- Select2 JS -->
		<script src="assets/plugins/select2/select2.min.js"></script>
		
		<!-- Tagsinput JS -->
		<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
			
		<!-- Custom Js -->
		<script src="assets/js/script.js"></script>

	</body>
</html>