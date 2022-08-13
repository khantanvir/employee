<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dompet : Payment Admin Template">
	<meta property="og:title" content="Dompet : Payment Admin Template">
	<meta property="og:description" content="Dompet : Payment Admin Template">
	<meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	
	<!-- PAGE TITLE HERE -->
	<title>{{ (!empty($page_title))?$page_title:'' }}</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ URL::to('public/backend/images/favicon.png') }}">
	
	<link href="{{ URL::to('public/backend/vendor/jquery-nice-select/css/nice-select.css ') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::to('public/backend/vendor/nouislider/nouislider.min.css ') }}">
	<!-- Style css -->
    <link href="{{ URL::to('public/backend/css/style.css ') }}" rel="stylesheet">
	
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="waviy">
		   <span style="--i:1">L</span>
		   <span style="--i:2">o</span>
		   <span style="--i:3">a</span>
		   <span style="--i:4">d</span>
		   <span style="--i:5">i</span>
		   <span style="--i:6">n</span>
		   <span style="--i:7">g</span>
		   <span style="--i:8">.</span>
		   <span style="--i:9">.</span>
		   <span style="--i:10">.</span>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="#" class="brand-logo">
				<img src="{{ URL::to('public/main/logo/logo.png') }}" width="auto" height="auto">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Dashboard 
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="Search here...">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
									<svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3.88552 6.2921C1.95571 6.54135 0.439911 8.19656 0.439911 10.1896V10.7253C0.439911 12.8874 2.21812 14.6725 4.38019 14.6725H12.7058V24.9768H7.01104C5.77451 24.9768 4.82009 24.0223 4.82009 22.7858V18.4039C4.84523 16.6262 2.16581 16.6262 2.19096 18.4039V22.7858C2.19096 25.4334 4.36345 27.6059 7.01104 27.6059H21.0331C23.6807 27.6059 25.8532 25.4334 25.8532 22.7858V13.9981C26.9064 13.286 27.6042 12.0802 27.6042 10.7253V10.1896C27.6042 8.17115 26.0501 6.50077 24.085 6.28526C24.0053 0.424609 17.6008 -1.28785 13.9827 2.48534C10.3936 -1.60185 3.7545 1.06979 3.88552 6.2921ZM12.7058 5.68103C12.7058 5.86287 12.7033 6.0541 12.7058 6.24246H6.50609C6.55988 2.31413 11.988 1.90765 12.7058 5.68103ZM21.4559 6.24246H15.3383C15.3405 6.05824 15.3538 5.87664 15.3383 5.69473C15.9325 2.04532 21.3535 2.18829 21.4559 6.24246ZM4.38019 8.87502H12.7058V12.0382H4.38019C3.62918 12.0382 3.06562 11.4764 3.06562 10.7253V10.1896C3.06562 9.43859 3.6292 8.87502 4.38019 8.87502ZM15.3383 8.87502H23.6656C24.4166 8.87502 24.9785 9.43859 24.9785 10.1896V10.7253C24.9785 11.4764 24.4167 12.0382 23.6656 12.0382H15.3383V8.87502ZM15.3383 14.6725H23.224V22.7858C23.224 24.0223 22.2696 24.9768 21.0331 24.9768H15.3383V14.6725Z" fill="#4f7086"></path> 
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">2</span>
                                </a>
								<div class="dropdown-menu dropdown-menu-end">
									<div id="dlab_W_TimeLine02" class="widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>10 minutes ago</span>
                                                <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
												<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>30 minutes ago</span>
                                                <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>15 minutes ago</span>
                                                <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
								</div>
							</li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                   <svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M12.638 4.9936V2.3C12.638 1.5824 13.2484 1 14.0006 1C14.7513 1 15.3631 1.5824 15.3631 2.3V4.9936C17.3879 5.2718 19.2805 6.1688 20.7438 7.565C22.5329 9.2719 23.5384 11.5872 23.5384 14V18.8932L24.6408 20.9966C25.1681 22.0041 25.1122 23.2001 24.4909 24.1582C23.8709 25.1163 22.774 25.7 21.5941 25.7H15.3631C15.3631 26.4176 14.7513 27 14.0006 27C13.2484 27 12.638 26.4176 12.638 25.7H6.40705C5.22571 25.7 4.12888 25.1163 3.50892 24.1582C2.88759 23.2001 2.83172 22.0041 3.36039 20.9966L4.46268 18.8932V14C4.46268 11.5872 5.46691 9.2719 7.25594 7.565C8.72068 6.1688 10.6119 5.2718 12.638 4.9936ZM14.0006 7.5C12.1924 7.5 10.4607 8.1851 9.18259 9.4045C7.90452 10.6226 7.18779 12.2762 7.18779 14V19.2C7.18779 19.4015 7.13739 19.6004 7.04337 19.7811C7.04337 19.7811 6.43703 20.9381 5.79662 22.1588C5.69171 22.3603 5.70261 22.6008 5.82661 22.7919C5.9506 22.983 6.16996 23.1 6.40705 23.1H21.5941C21.8298 23.1 22.0492 22.983 22.1732 22.7919C22.2972 22.6008 22.3081 22.3603 22.2031 22.1588C21.5627 20.9381 20.9564 19.7811 20.9564 19.7811C20.8624 19.6004 20.8133 19.4015 20.8133 19.2V14C20.8133 12.2762 20.0953 10.6226 18.8172 9.4045C17.5391 8.1851 15.8073 7.5 14.0006 7.5Z" fill="#4f7086"></path>
									</svg>
                                    <span class="badge light text-white bg-primary rounded-circle">12</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="dlab_W_Notification1" class="widget-media dlab-scroll p-3" style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="{{ URL::to('public/backend/images/avatar/1.jpg') }}">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="{{ URL::to('public/backend/images/avatar/1.jpg') }}">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                                </div>
                            </li>
							
                            <li class="nav-item">
								<a href="javascript:void(0);" class="btn btn-primary d-sm-inline-block d-none">Generate Report<i class="las la-signal ms-3 scale5"></i></a>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					@if(Auth::check())
					<li class="dropdown header-profile">
						<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
							<img src="{{ URL::to('public/backend/images/profile/pic1.jpg') }}" width="20" alt="">
							<div class="header-info ms-3">
								<span class="font-w600 ">Hi,<b>{{ Auth::user()->name }}</b></span>
								<small class="text-end font-w400">{{ Auth::user()->email }}</small>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="#" class="dropdown-item ai-icon">
								<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
								<span class="ms-2">Profile </span>
							</a>
							<a href="{{ URL::to('sign-out') }}" class="dropdown-item ai-icon">
								<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
								<span class="ms-2">Logout </span>
							</a>
						</div>
					</li>
					@endif
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<!--<li><a href="index.html">Dashboard Light</a></li>
							<li><a href="index-2.html">Dashboard Dark</a></li>
							<li><a href="my-wallet.html">My Wallet</a></li>
							<li><a href="page-invoices.html">Invoices</a></li>
							<li><a href="cards-center.html">Cards Center</a></li>
							<li><a href="page-transaction.html">Transaction</a></li>
							<li><a href="transaction-details.html">Transaction Details</a></li>-->
						</ul>

                    </li>
                    
					<!-- strat users section -->
					<li class="{{ (!empty($users) && $users==true)?'mm-active':'' }}"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-025-users"></i>
							<span class="nav-text">Users</span>
						</a>
                        <ul aria-expanded="false" class="{{ (!empty($users) && $users==true)?'mm-collapse mm-show':'' }}">
                            <li class="{{ (!empty($all_role) && $all_role==true)?'mm-active':'' }}"><a class="{{ (!empty($all_role) && $all_role==true)?'mm-active':'' }}" href="{{ URL::to('all-role') }}">Roles</a></li>
							<li class="{{ (!empty($all_user) && $all_user==true)?'mm-active':'' }}"><a class="{{ (!empty($all_user) && $all_user==true)?'mm-active':'' }}" href="{{ URL::to('all-user') }}">Users</a></li>
                            <li class="{{ (!empty($all_admin_user) && $all_admin_user==true)?'mm-active':'' }}"><a class="{{ (!empty($all_admin_user) && $all_admin_user==true)?'mm-active':'' }}" href="{{ URL::to('all-admin-user') }}">Admin Users</a></li>
                        </ul>
                    </li>
					<!--company list-->
					<li class="{{ (!empty($companies) && $companies==true)?'mm-active':'' }}"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-025-users"></i>
							<span class="nav-text">Companies</span>
						</a>
                        <ul aria-expanded="false" class="{{ (!empty($companies) && $companies==true)?'mm-collapse mm-show':'' }}">
                            <li class="{{ (!empty($create_company) && $create_company==true)?'mm-active':'' }}"><a class="{{ (!empty($create_company) && $create_company==true)?'mm-active':'' }}" href="{{ URL::to('company-create') }}">Create Company</a></li>
							<li class="{{ (!empty($all_company) && $all_company==true)?'mm-active':'' }}"><a class="{{ (!empty($all_company) && $all_company==true)?'mm-active':'' }}" href="{{ URL::to('company-all') }}">All Company</a></li>
							<li class="{{ (!empty($company_deleted_items) && $company_deleted_items==true)?'mm-active':'' }}"><a class="{{ (!empty($company_deleted_items) && $company_deleted_items==true)?'mm-active':'' }}" href="{{ URL::to('company-deleted-list') }}">Company Deleted List</a></li>
                        </ul>
                    </li>
					<!--employee list-->
					<li class="{{ (!empty($employees) && $employees==true)?'mm-active':'' }}"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-025-users"></i>
							<span class="nav-text">Employees</span>
						</a>
                        <ul aria-expanded="false" class="{{ (!empty($employees) && $employees==true)?'mm-collapse mm-show':'' }}">
                            <li class="{{ (!empty($create_employee) && $create_employee==true)?'mm-active':'' }}"><a class="{{ (!empty($create_employee) && $create_employee==true)?'mm-active':'' }}" href="{{ URL::to('employee-create') }}">Create Employee</a></li>
							<li class="{{ (!empty($all_employee) && $all_employee==true)?'mm-active':'' }}"><a class="{{ (!empty($all_employee) && $all_employee==true)?'mm-active':'' }}" href="{{ URL::to('employee-all') }}">All Employee</a></li>
							<li class="{{ (!empty($employee_deleted_items) && $employee_deleted_items==true)?'mm-active':'' }}"><a class="{{ (!empty($employee_deleted_items) && $employee_deleted_items==true)?'mm-active':'' }}" href="{{ URL::to('employee-deleted-list') }}">Employee Deleted List</a></li>
                        </ul>
                    </li>
                </ul>
			</div>
        </div>
		@yield('admin')
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Redlep</a> 2022</p>
            </div>
        </div>
	</div>
    <script src="{{ URL::to('public/backend/vendor/global/global.min.js ') }}"></script>
	<script src="{{ URL::to('public/backend/vendor/chart.js/Chart.bundle.min.js ') }}"></script>
	<script src="{{ URL::to('public/backend/vendor/jquery-nice-select/js/jquery.nice-select.min.js ') }}"></script>
	
	<!-- Apex Chart -->
	<script src="{{ URL::to('public/backend/vendor/apexchart/apexchart.js ') }}"></script>
	<script src="{{ URL::to('public/backend/vendor/nouislider/nouislider.min.js ') }}"></script>
	<script src="{{ URL::to('public/backend/vendor/wnumb/wNumb.js ') }}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{ URL::to('public/backend/js/dashboard/dashboard-1.js ') }}"></script>

    <script src="{{ URL::to('public/backend/js/custom.min.js ') }}"></script>
	<script src="{{ URL::to('public/backend/js/dlabnav-init.js ') }}"></script>
	<script src="{{ URL::to('public/backend/js/demo.js ') }}"></script>
	<script src="{{ URL::to('public/backend/vendor/ckeditor/ckeditor.js ') }}"></script>
    <!--<script src="{{ URL::to('public/backend/js/styleSwitcher.js ') }}"></script>-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
	<script>
		@if(Session::has('success'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true,
			"timeOut": "10000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
		}
				toastr.success("{{ session('success') }}");
		@endif
	  
		@if(Session::has('error'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true,
			"timeOut": "10000",
			"positionClass": "toast-top-right",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
		}
				toastr.error("{{ session('error') }}");
		@endif
	  
		@if(Session::has('info'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true,
			"timeOut": "10000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
		}
				toastr.info("{{ session('info') }}");
		@endif
	  
		@if(Session::has('warning'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true,
			"timeOut": "10000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
		}
				toastr.warning("{{ session('warning') }}");
		@endif
	  </script>
	  <script type="text/javascript">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		</script>
		<script>
			$(function(){
				$('.change-status').change(function(){
					var status = $(this).prop('checked') == true ? 0 : 1;
					var category_id = $(this).data('id');
						$.post('{{ URL::to('category-status-change') }}',
						{
							category_id: category_id,
							status: status
						},
						function(data, status){
							//alert("Data: " + data + "\nStatus: " + status);
						});
					
				});
			});
			//change company status 
			$(function(){
				$('.change-company-status').change(function(){
					var status = $(this).prop('checked') == true ? 0 : 1;
					var company_id = $(this).data('id');
						$.post('{{ URL::to('company-status-change') }}',
						{
							company_id: company_id,
							status: status
						},
						function(data, status){
							console.log(data);
							//alert("Data: " + data + "\nStatus: " + status);
						});
					
				});
			});
			//employee change status function
			$(function(){
					$('.change-employee-status').change(function(){
						var status = $(this).prop('checked') == true ? 0 : 1;
						var employee_id = $(this).data('id');
						$.post('{{ URL::to('employee-status-change') }}',
						{
							employee_id: employee_id,
							status: status
						},
						function(data,status){

						});
					});
				});
			//roll back company data 
			$(function(){
				$('.roll-back-company-value').change(function(){
					var is_deleted = $(this).prop('checked') == false ? 1 : 0;
					var company_id = $(this).data('id');
					$.post('{{ URL::to('roll-back-company-value') }}',
					{
						company_id: company_id,
						is_deleted: is_deleted
					},
					function(data,status){
						console.log(data);
					});
				});
				
			});
			//roll back company data 
			$(function(){
				$('.roll-back-employee-value').change(function(){
					var is_deleted = $(this).prop('checked') == false ? 1 : 0;
					var employee_id = $(this).data('id');
					$.post('{{ URL::to('roll-back-employee-value') }}',
					{
						employee_id: employee_id,
						is_deleted: is_deleted
					},
					function(data,status){
						console.log(data);
					});
				});
				
			});
			//attribute change status function
			$(function(){
					$('.change-attribute-status').change(function(){
						var status = $(this).prop('checked') == true ? 0 : 1;
						var attribute_id = $(this).data('id');
						$.post('{{ URL::to('attribute-value-status-change') }}',
						{
							attribute_value_id: attribute_id,
							status: status
						},
						function(data,status){

						});
					});
				});
			$(function(){
				$('.roll-back-attribute-value').change(function(){
					var is_deleted = $(this).prop('checked') == false ? 1 : 0;
					var attribute_id = $(this).data('id');
					$.post('{{ URL::to('roll-back-attribute-value') }}',
					{
						attribute_id: attribute_id,
						is_deleted: is_deleted
					},
					function(data,status){
						console.log(data);
					});
				});
				
			});
			//roll back subcategory data
			$(function(){
				$('.roll-back-subcategory-status').change(function(){
					var is_deleted = $(this).prop('checked') == false ? 1 : 0;
					var subcategory_id = $(this).data('id');
					$.post('{{ URL::to('roll-back-subcategory-status') }}',
					{
						subcategory_id: subcategory_id,
						is_deleted: is_deleted
					},
					function(data,status){
						console.log(data);
					});
				});
				
			});
			//roll back category data
			$(function(){
				$('.roll-back-category-status').change(function(){
					var is_deleted = $(this).prop('checked') == false ? 1 : 0;
					var category_id = $(this).data('id');
					$.post('{{ URL::to('roll-back-category-status') }}',
					{
						category_id: category_id,
						is_deleted: is_deleted
					},
					function(data,status){
						console.log(data);
					});
				});
				
			});
			//subcategory status change 
			$(function(){
				$('.change-subcategory-status').change(function(){
					var status = $(this).prop('checked') == true ? 0 : 1;
					var subcategory_id = $(this).data('id');
						$.post('{{ URL::to('subcategory-status-change') }}',
						{
							subcategory_id: subcategory_id,
							status: status
						},
						function(data, status){
							//data = JSON.parse(data);
							
						});
					
				});
			});
			function getAttributeData(x){
				if(x===""){
					return false;
				}
				$.get("{{ URL::to('get-attribute-for-edit') }}/"+x,function(data,status){
					console.log(data);
					$("#attribute-body").html(data['result']['val']);
				});
			}
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				var max = 15;
				var cnt = 1;
				$(".add-textbox").on("click", function(e){
					e.preventDefault();
					if(cnt < max){
						cnt++;
						$(".textbox-wrapper").append('<div class="input-wrapper"><div class="input-group"><input type="text" name="attribute_arr[]" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-danger remove-textbox"><i class="glyphicon glyphicon-minus"></i>-</button></span></div><br></div>');
					}
				});
			   
				$(".textbox-wrapper").on("click",".remove-textbox", function(e){
					e.preventDefault();
					$(this).parents(".input-wrapper").remove();
					cnt--;
				});
			});
			
			</script>
</body>
</html>