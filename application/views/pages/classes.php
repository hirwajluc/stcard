<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title><?=$title;?></title>
	<meta content="HH Links EDU" name="description" />
	<meta content="Hirwa" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<link rel="shortcut icon" href="<?=base_url();?>assets/images/favicon.ico">

	<!-- DataTables -->
	<link href="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<!-- Responsive datatable examples -->
	<link href="<?=base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

	<link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body>


<!-- Navigation Bar-->
<header id="topnav">
	<div class="topbar-main">
		<div class="container-fluid">

			<!-- Logo container-->
			<div class="logo">
				<!-- Image Logo -->
				<a href="<?=base_url();?>" class="logo">
					<img src="<?=base_url();?>assets/images/logo-sm.png" alt="" height="32" class="logo-small">
					<img src="<?=base_url();?>assets/images/logo.png" alt="" height="20" class="logo-large">
				</a>

			</div>
			<!-- End Logo container-->


			<div class="menu-extras topbar-custom">


				<ul class="list-inline float-right mb-0">
					<!-- Search -->
					<li class="list-inline-item dropdown notification-list d-none d-sm-inline-block">
						<form role="search" class="app-search">
							<div class="form-group mb-0">
								<input type="text" class="form-control" placeholder="Search..">
								<button type="submit"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					<!-- Messages-->
					<li class="list-inline-item dropdown notification-list">
						<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
						   aria-haspopup="false" aria-expanded="false">
							<i class="mdi mdi-email-outline noti-icon"></i>
							<span class="badge badge-danger badge-pill noti-icon-badge">5</span>
						</a>

						<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-animated dropdown-menu-lg">
							<!-- item-->
							<div class="dropdown-item noti-title">
								<span class="badge badge-danger float-right">367</span>
								<h5>Messages</h5>
							</div>

							<div class="slimscroll" style="max-height: 230px;">
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon"><img src="<?=base_url();?>assets/images/users/user-2.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
									<p class="notify-details"><b>Charles M. Jones</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
								</a>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon"><img src="<?=base_url();?>assets/images/users/user-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
									<p class="notify-details"><b>Thomas J. Mimms</b><span class="text-muted">You have 87 unread messages</span></p>
								</a>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon"><img src="<?=base_url();?>assets/images/users/user-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
									<p class="notify-details">Luis M. Konrad<span class="text-muted">It is a long established fact that a reader will</span></p>
								</a>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon"><img src="<?=base_url();?>assets/images/users/user-5.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
									<p class="notify-details"><b>Kendall E. Walker</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
								</a>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon"><img src="<?=base_url();?>assets/images/users/user-6.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
									<p class="notify-details"><b>David M. Ryan</b><span class="text-muted">You have 87 unread messages</span></p>
								</a>
							</div>

							<!-- All-->
							<a href="javascript:void(0);" class="dropdown-item notify-all">
								View All
							</a>

						</div>
					</li>
					<!-- notification-->
					<li class="list-inline-item dropdown notification-list">
						<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
						   aria-haspopup="false" aria-expanded="false">
							<i class="mdi mdi-bell-outline noti-icon"></i>
							<span class="badge badge-success badge-pill noti-icon-badge">3</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
							<!-- item-->
							<div class="dropdown-item noti-title">
								<span class="badge badge-danger float-right">84</span>
								<h5>Notification</h5>
							</div>

							<div class="slimscroll" style="max-height: 230px;">

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
									<p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
								</a>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
									<p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
								</a>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
									<p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
								</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
									<p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
								</a>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
									<p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
								</a>
							</div>

							<!-- All-->
							<a href="javascript:void(0);" class="dropdown-item notify-all">
								View All
							</a>

						</div>

					</li>
					<!-- User-->
					<li class="list-inline-item dropdown notification-list">
						<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
						   aria-haspopup="false" aria-expanded="false">
							<img src="<?=base_url();?>assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
							<a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
							<a class="dropdown-item" href="#"><span class="badge badge-success mt-1 float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
							<a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
							<a class="dropdown-item" href="<?=base_url();?>logout"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
						</div>

					</li>
					<li class="menu-item list-inline-item">
						<!-- Mobile menu toggle-->
						<a class="navbar-toggle nav-link">
							<div class="lines">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</a>
						<!-- End mobile menu toggle-->
					</li>

				</ul>
			</div>
			<!-- end menu-extras -->

			<div class="clearfix"></div>

		</div> <!-- end container -->
	</div>
	<!-- end topbar-main -->

	<!-- MENU Start -->
	<div class="navbar-custom">
		<div class="container-fluid">
			<div id="navigation">
				<!-- Navigation Menu-->
				<ul class="navigation-menu">

					<li class="has-submenu">
						<a href="<?=base_url();?>"><i class="dripicons-meter"></i>Dashboard</a>
					</li>

					<li class="has-submenu">
						<a href="<?=base_url();?>card/students"><i class="dripicons-user-group"></i>Students</a>
					</li>

					<!--<li class="has-submenu">
						<a href="<?=base_url();?>card/departments"><i class="dripicons-home"></i>Departments</a>
					</li>

					<li class="has-submenu">
						<a href="<?=base_url();?>card/options"><i class="dripicons-folder-open"></i>Options</a>
					</li>-->

					<li class="has-submenu">
						<a href="<?=base_url();?>card/classes"><i class="dripicons-rocket"></i>Classes</a>
					</li>

				</ul>
				<!-- End navigation menu -->
			</div> <!-- end #navigation -->
		</div> <!-- end container -->
	</div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->


<div class="wrapper">
	<div class="container-fluid">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="btn-group float-right">
						<ol class="breadcrumb hide-phone p-0 m-0">
							<li class="breadcrumb-item"><a href="#">STCard</a></li>
							<li class="breadcrumb-item active">Classes</li>
						</ol>
					</div>
					<h4 class="page-title">All Classes</h4>
				</div>
			</div>
		</div>
		<!-- end page title end breadcrumb -->

		<div class="row">
			<div class="col-12">
				<div class="card m-b-30">
					<div class="card-body">

						<h4 class="mt-0 header-title">All Classes</h4>


						<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
							<thead>
							<tr>
								<th>Department</th>
								<th>Option</th>
								<th>Class</th>
								<th>Action</th>
							</tr>
							</thead>


							<tbody>
							<?php
							$CI =& get_instance();
							foreach ($options as $opt) {
								?>
								<tr>
									<td><?=$opt['department'];?></td>
									<td><?=$opt['options'];?></td>
									<td><?=$opt['year'];?></td>
									<td><a href="<?=base_url();?>card/gen_card/<?=$opt['options'];?>/<?=$opt['year'];?>" target="_blank" class="btn btn-primary waves-effect waves-light">Front</a> <a href="<?=base_url();?>card/gen_card_back/<?=$opt['options'];?>/<?=$opt['year'];?>" target="_blank" class="btn btn-success waves-effect waves-light">Back</a></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>

					</div>
				</div>
			</div> <!-- end col -->
		</div> <!-- end row -->

	</div> <!-- end container -->
</div>
<!-- end wrapper -->


<!-- Footer -->
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				© 2022 <b>IPRC Tumba</b><span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Hirwa.</span>
			</div>
		</div>
	</div>
</footer>
<!-- End Footer -->


<!-- jQuery  -->
<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
<script src="<?=base_url();?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url();?>assets/js/modernizr.min.js"></script>
<script src="<?=base_url();?>assets/js/detect.js"></script>
<script src="<?=base_url();?>assets/js/fastclick.js"></script>
<script src="<?=base_url();?>assets/js/jquery.slimscroll.js"></script>
<script src="<?=base_url();?>assets/js/jquery.blockUI.js"></script>
<script src="<?=base_url();?>assets/js/waves.js"></script>

<!-- Required datatable js -->
<script src="<?=base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/jszip.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?=base_url();?>assets/pages/datatables.init.js"></script>

<!-- App js -->
<script src="<?=base_url();?>assets/js/app.js"></script>

</body>
</html>
