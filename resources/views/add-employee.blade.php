<!DOCTYPE html>
<html lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Add Employee Page</title>

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
<link rel="stylesheet"
	href="assets/css/bootstrap-datetimepicker.min.css">

<!-- Tagsinput CSS -->
<link rel="stylesheet"
	href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

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
								<a href="index"> <img src="assets/img/RohanLogo.png"
									alt="logo image" class="img-fluid" width="100">
								</a>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 col-6 text-right">
							<div class="user-block d-none d-lg-block">
								<div class="row align-items-center">
									<div class="col-lg-12 col-md-12 col-sm-12">

										<!-- User notification-->
										<div
											class="user-notification-block align-right d-inline-block">
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
										<!-- /User notification-->

										<!-- User notification-->
										<div
											class="user-notification-block align-right d-inline-block">
											<ul class="list-inline m-0">
												<li class="list-inline-item item-animated"
													data-toggle="tooltip" data-placement="top" title=""
													data-original-title="Apply Leave"><a href="leave"
													class="font-23 menu-style text-white align-middle"> <span
														class="lnr lnr-briefcase position-relative"></span>
												</a></li>
											</ul>
										</div>
										<!-- /User notification-->

										<!-- user info-->
										<div
											class="user-info align-right dropdown d-inline-block header-dropdown">
											<a href="javascript:void(0)" data-toggle="dropdown"
												class=" menu-style dropdown-toggle">
												<div class="user-avatar d-inline-block">
													<img src="assets/img/profiles/img-6.jpg" alt="user avatar"
														class="rounded-circle img-fluid" width="55">
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
												<a class="dropdown-item p-2" href="login"> <span
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
								<a href="javascript:void(0)"> <span
									class="lnr lnr-user d-block display-5 text-white"
									id="open_navSidebar"></span>
								</a>

								<!-- Offcanvas menu -->
								<div class="offcanvas-menu" id="offcanvas_menu">
									<span
										class="lnr lnr-cross float-left display-6 position-absolute t-1 l-1 text-white"
										id="close_navSidebar"></span>
									<div class="user-info align-center bg-theme text-center">
										<a href="javascript:void(0)"
											class="d-block menu-style text-white">
											<div class="user-avatar d-inline-block mr-3">
												<img src="assets/img/profiles/img-6.jpg" alt="user avatar"
													class="rounded-circle" width="50">
											</div>
										</a>
									</div>
									<div class="user-notification-block align-center">
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
										</a> <a class="p-2" href="calendar"> <span
											class="media align-items-center"> <span
												class="lnr lnr-calendar-full mr-3"></span> <span
												class="media-body text-truncate text-left"> <span
													class="text-truncate text-left">Calendar</span>
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
			<div class="header-wrapper d-none d-sm-none d-md-none d-lg-block">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div
								class="header-menu-list d-flex bg-white rt_nav_header horizontal-layout nav-bottom">
								<div class="append mr-auto my-0 my-md-0 mr-auto">
									<ul class="list-group list-group-horizontal-md mr-auto">
										<li class="mr-1"><a href="index"
											class="text-dark btn-ctm-space"><span
												class="lnr lnr-home pr-0 pr-lg-2"></span><span
												class="d-none d-lg-inline">Dashboard</span></a></li>
										<li class="active mr-1"><a
											class="text-white btn-ctm-space" href="employees"><span
												class="lnr lnr-users pr-0 pr-lg-2"></span><span
												class="d-none d-lg-inline">Employees</span></a></li>
										<li class="mr-1"><a class="text-dark btn-ctm-space"
											href="department"><span
												class="lnr lnr-apartment pr-0 pr-lg-2"></span><span
												class="d-none d-lg-inline">Department</span></a></li>
										<li class="mr-1"><a class="text-dark btn-ctm-space"
											href="calendar"><span
												class="lnr lnr-calendar-full pr-0 pr-lg-2"></span><span
												class="d-none d-lg-inline">Calendar</span></a></li>
										<li class="mr-1"><a class="text-dark btn-ctm-space"
											href="leave-details"><span
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
													<ol
														class="breadcrumb no-bg-color d-inline-block p-0 m-0 mb-2">
														<li class="breadcrumb-item d-inline-block"><a
															href="index.html" class="text-dark">Home</a></li>
														<li class="breadcrumb-item d-inline-block active">Employees</li>
													</ol>
													<h4 class="text-dark">Add Person</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card ctm-border-radius shadow-sm">
								<div class="card-header">
									<h4 class="card-title mb-0">Details Content</h4>
								</div>
								<div class="card-body">
									<div id="list-example" class="list-group border-none">
										<a class="list-group-item list-group-item-action border-none"
											href="javascript:void(0)">Basic</a> <a
											class="list-group-item list-group-item-action border-none"
											href="javascript:void(0)">Employment</a> <a
											class="list-group-item list-group-item-action border-none"
											href="javascript:void(0)">Teams & Offices</a> <a
											class="list-group-item list-group-item-action border-none"
											href="javascript:void(0)">Salary</a>
									</div>
								</div>
							</div>
						</aside>
					</div>

					<div class="col-xl-9 col-lg-8  col-md-12">
						<div class="accordion add-employee" id="accordion-details">
							<div class="card shadow-sm ctm-border-radius">
								<div class="card-header" id="basic1">
									<h4 class="cursor-pointer mb-0">
										<a class=" coll-arrow d-block text-dark"
											href="javascript:void(0)" data-toggle="collapse"
											data-target="#basic-one" aria-expanded="true"> Basic
											Details <br> <span class="ctm-text-sm">Organized
												and secure.</span> <br> <span class="ctm-text-sm"
											th:text="${error}"></span>
										</a>
									</h4>
								</div>
								<form action="{{ url('/addEmployee') }}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="row">
										<div class="col form-group">
											<input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required>
											@if ($errors->has('first_name'))
												<span class="text-danger">{{ $errors->first('first_name') }}</span>
											@endif
										</div>
										<div class="col form-group">
											<input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required>
											@if ($errors->has('last_name'))
												<span class="text-danger">{{ $errors->first('last_name') }}</span>
											@endif
										</div>
										<div class="col form-group">
											<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
											@if ($errors->has('email'))
												<span class="text-danger">{{ $errors->first('email') }}</span>
											@endif
										</div>
										<div class="col form-group">
											<input type="text" class="form-control" placeholder="Father Name" name="father_name" required>
											@if ($errors->has('father_name'))
												<span class="text-danger">{{ $errors->first('father_name') }}</span>
											@endif
										</div>
										<div class="col-12 form-group">
											<input type="file" class="form-control"  name="image" accept="image/*">
											@if ($errors->has('image'))
												<span class="text-danger">{{ $errors->first('image') }}</span>
											@endif
										</div>
										<div class="col form-group">
											<input type="date" class="form-control" placeholder="Date of Birth" name="dob" required>
											@if ($errors->has('dob'))
												<span class="text-danger">{{ $errors->first('dob') }}</span>
											@endif
										</div>
										<div class="col form-group">
											<input type="text" class="form-control" placeholder="Mobile" name="mobile" value="{{ old('mobile') }}" required>
											@if ($errors->has('mobile'))
												<span class="text-danger">{{ $errors->first('mobile') }}</span>
											@endif
										</div>
										<div class="col form-group">
											<input type="password" class="form-control" placeholder="Password" name="password" required>
											@if ($errors->has('password'))
												<span class="text-danger">{{ $errors->first('password') }}</span>
											@endif
										</div>
										<div class="col-12 form-group">
											<input type="text" class="form-control" placeholder="Account Number" name="account_no" required>
											@if ($errors->has('account_no'))
												<span class="text-danger">{{ $errors->first('account_no') }}</span>
											@endif
										</div>
										<div class="col form-group">
											<input type="text" class="form-control" placeholder="IFSC Code" name="ifsc_detail" required>
											@if ($errors->has('adhar_no'))
												<span class="text-danger">{{ $errors->first('adhar_no') }}</span>
											@endif
										</div>
										<div class="col form-group">
											<input type="text" class="form-control" placeholder="Adhar Number" name="adhar_no" required>
											@if ($errors->has('adhar_no'))
												<span class="text-danger">{{ $errors->first('adhar_no') }}</span>
											@endif
										</div>
										<div class="col form-group">
											<input type="text" class="form-control" placeholder="PAN No" name="pan_no" required>
											@if ($errors->has('pan_no'))
												<span class="text-danger">{{ $errors->first('pan_no') }}</span>
											@endif
										</div>
										<div class="col-12 form-group">
											<textarea class="form-control" name="address" placeholder="Address" rows="5">{{ old('address') }}</textarea>
											@if ($errors->has('address'))
												<span class="text-danger">{{ $errors->first('address') }}</span>
											@endif
										</div>
									</div>
								
									<div class="card shadow-sm ctm-border-radius">
										<div class="card-header">
											<h4>Employee Details</h4>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-12 form-group">
													<input type="text" class="form-control" placeholder="Employee Code" name="employee_code" value="{{ old('employee_code') }}">
													@if ($errors->has('employee_code'))
														<span class="text-danger">{{ $errors->first('employee_code') }}</span>
													@endif
												</div>
												<div class="col-md-12 form-group">
													<input type="date" class="form-control datepicker" name="date_of_joining" placeholder="Date Of Joining" value="{{ old('date_of_joining') }}" onfocus="(this.type='date')" onblur="(this.type='text')">
													@if ($errors->has('date_of_joining'))
														<span class="text-danger">{{ $errors->first('date_of_joining') }}</span>
													@endif
												</div>                
												<div class="col-12 form-group">
													<input type="text" class="form-control" placeholder="Job Title" name="job_title" value="{{ old('job_title') }}">
													@if ($errors->has('job_title'))
														<span class="text-danger">{{ $errors->first('job_title') }}</span>
													@endif
												</div>
												<div class="col-12 form-group">
													<input type="text" class="form-control" placeholder="UAN" name="UAN" value="{{ old('UAN') }}">
													@if ($errors->has('UAN'))
														<span class="text-danger">{{ $errors->first('UAN') }}</span>
													@endif
												</div>
												<div class="col-12 form-group">
													<input type="text" class="form-control" placeholder="ESIC Detail" name="esic_detail" value="{{ old('esic_detail') }}">
													@if ($errors->has('esic_detail'))
														<span class="text-danger">{{ $errors->first('esic_detail') }}</span>
													@endif
												</div>
											</div>
										</div>
									</div>
								
									<div class="card shadow-sm ctm-border-radius">
										<div class="card-header">
											<h4>Team & Office</h4>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 form-group">
													<select name="department_id" class="form-control" id="department">
														<option value="" disabled selected> Select Department</option>
														@foreach($departments as $department)
															<option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>{{ $department->department_name }}</option>
														@endforeach
													</select>
													@if ($errors->has('department_id'))
														<span class="text-danger">{{ $errors->first('department_id') }}</span>
													@endif
												</div>
												<div class="col-md-12 form-group">
													<select class="form-control" name="line_manager">
														<option selected value="">Select Line Manager</option>
														<option value="RAVINDRA SHAH" {{ old('line_manager') == 'RAVINDRA SHAH' ? 'selected' : '' }}>RAVINDRA SHAH</option>
														<option value="SURAJ KUMAR" {{ old('line_manager') == 'SURAJ KUMAR' ? 'selected' : '' }}>SURAJ KUMAR</option>
														<option value="VANDANA BHARGAVA" {{ old('line_manager') == 'VANDANA BHARGAVA' ? 'selected' : '' }}>VANDANA BHARGAVA</option>
														<option value="AYAZ KHAN" {{ old('line_manager') == 'AYAZ KHAN' ? 'selected' : '' }}>AYAZ KHAN</option>
														<option value="AKASH" {{ old('line_manager') == 'AKASH' ? 'selected' : '' }}>AKASH</option>
														<option value="JYOTI GULERIA" {{ old('line_manager') == 'JYOTI GULERIA' ? 'selected' : '' }}>JYOTI GULERIA</option>
														<option value="GULZAR KHAN" {{ old('line_manager') == 'GULZAR KHAN' ? 'selected' : '' }}>GULZAR KHAN</option>
														<option value="NIMESH KUMAR MUDGAL" {{ old('line_manager') == 'NIMESH KUMAR MUDGAL' ? 'selected' : '' }}>NIMESH KUMAR MUDGAL</option>
														<option value="ASHISH SUNILRAO GALGATE" {{ old('line_manager') == 'ASHISH SUNILRAO GALGATE' ? 'selected' : '' }}>ASHISH SUNILRAO GALGATE</option>
														<option value="AJAY CHOWDHURY" {{ old('line_manager') == 'AJAY CHOWDHURY' ? 'selected' : '' }}>AJAY CHOWDHURY</option>
														<option value="ABHISHEK SINGH" {{ old('line_manager') == 'ABHISHEK SINGH' ? 'selected' : '' }}>ABHISHEK SINGH</option>
														<option value="MANISH GARCHA" {{ old('line_manager') == 'MANISH GARCHA' ? 'selected' : '' }}>MANISH GARCHA</option>
														<option value="GANESH DUTT SINHA" {{ old('line_manager') == 'GANESH DUTT SINHA' ? 'selected' : '' }}>GANESH DUTT SINHA</option>
														<option value="SANDEEP AGARWAL" {{ old('line_manager') == 'SANDEEP AGARWAL' ? 'selected' : '' }}>SANDEEP AGARWAL</option>
														<option value="DEEPAK KUMAR" {{ old('line_manager') == 'DEEPAK KUMAR' ? 'selected' : '' }}>DEEPAK KUMAR</option>
														<option value="ANOOP KUMAR SHUKLA" {{ old('line_manager') == 'ANOOP KUMAR SHUKLA' ? 'selected' : '' }}>ANOOP KUMAR SHUKLA</option>
														<option value="MILAN GUPTA" {{ old('line_manager') == 'MILAN GUPTA' ? 'selected' : '' }}>MILAN GUPTA</option>
														<option value="RAGHAV KRISHNA GUPTA" {{ old('line_manager') == 'RAGHAV KRISHNA GUPTA' ? 'selected' : '' }}>RAGHAV KRISHNA GUPTA</option>
														<option value="THIRUMURUGAN P." {{ old('line_manager') == 'THIRUMURUGAN P.' ? 'selected' : '' }}>THIRUMURUGAN P.</option>
														<option value="J.NARAYAN SWAMY" {{ old('line_manager') == 'J.NARAYAN SWAMY' ? 'selected' : '' }}>J.NARAYAN SWAMY</option>
														<option value="AKHIL V R" {{ old('line_manager') == 'AKHIL V R' ? 'selected' : '' }}>AKHIL V R</option>
														<option value="K. SUNIL KUMAR GOUD" {{ old('line_manager') == 'K. SUNIL KUMAR GOUD' ? 'selected' : '' }}>K. SUNIL KUMAR GOUD</option>
														<option value="ANTONY LOUIS" {{ old('line_manager') == 'ANTONY LOUIS' ? 'selected' : '' }}>ANTONY LOUIS</option>
													</select>
													
													@if ($errors->has('line_manager'))
														<span class="text-danger">{{ $errors->first('line_manager') }}</span>
													@endif
												</div>
												<div class="col-12 form-group">
													<select class="form-control" name="office_name">
														<option selected value="">Select Office</option>
														<option value="Rohan Book Company PVT L.T" {{ old('office_name') == 'Rohan Book Company PVT L.T' ? 'selected' : '' }}>Focus Technology</option>
													</select>
													@if ($errors->has('office_name'))
														<span class="text-danger">{{ $errors->first('office_name') }}</span>
													@endif
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<div class="submit-section text-center btn-add">
												<button type="submit" class="btn btn-theme text-white ctm-border-radius button-1">Add Team Member</button>
											</div>
										</div>
									</div>
								
								</form>
								

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
			<script src="assets/js/jquery-1.11.1.min.js"></script>

			<!-- Bootstrap Core JS -->
			<script src="assets/js/popper.min.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>

			<!-- Sticky sidebar JS -->
			<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
			<script
				src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

			<!-- Datetimepicker JS -->
			<script src="assets/plugins/select2/moment.min.js"></script>
			<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

			<!-- Select2 JS -->
			<script src="assets/plugins/select2/select2.min.js"></script>

			<!-- Tagsinput JS -->
			<script
				src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

			<!-- Custom Js -->
			<script src="assets/js/script.js"></script>
</body>
</html>