<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body class="page-header-fixed page-quick-sidebar-over-content page-style-square">
	<div class="page-header navbar navbar-fixed-top">
		<div class="page-header-inner">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<div class="page-logo">
				<a href="index.html">
				<img src="http://nur_hidayat-pc/aplikasi-mangga/assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
				</a>
				<div class="menu-toggler sidebar-toggler hide">
					<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
				</div>
			</div>
			</div>
			<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
			</a>
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown dropdown-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">superuser</span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="http://nur_hidayat-pc/aplikasi-mangga/admin/user/change_profile">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="http://nur_hidayat-pc/aplikasi-mangga/admin/logout">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="page-container">
		<div class="page-sidebar-wrapper">
			<div class="page-sidebar navbar-collapse collapse">
				<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
					<li class="sidebar-toggler-wrapper">
						<div class="sidebar-toggler"></div>
					</li>
					<li class="sidebar-search-wrapper"></br></br></br></br>
					</li>
					<li class="start">
						<a href="http://nur_hidayat-pc/aplikasi-mangga/admin/admin"><i class="icon-home"></i>
						<span class="title">Dashboard</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="icon-rocket"></i>
							<span class="title">Data Master</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="<?php echo url_for('@barang') ?>">
									<span class="fa fa-sign-in"></span>
									Master Barang
								</a>
							</li>
							<li>
								<a href="<?php echo url_for('@kemasan') ?>">
									<span class="fa fa-sign-in"></span>
									Master Kemasan
								</a>
							</li>
							<li>
								<a href="<?php echo url_for('@kategori') ?>">
									<span class="fa fa-sign-in"></span>
									Master Kategori
								</a>
							</li>
							<li>
								<a href="<?php echo url_for('@produsen') ?>">
									<span class="fa fa-sign-in"></span>
									Master Produsen
								</a>
							</li>
							<li>
								<a href="<?php echo url_for('@harga') ?>">
									<span class="fa fa-sign-in"></span>
									Master Harga
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="page-content-wrapper">
			<div class="page-content">
				<h3 class="page-title">
				Dashboard <small>reports & statistics</small>
				</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="http://nur_hidayat-pc/aplikasi-mangga/admin/admin">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Dashboard</a>
						</li>
					</ul>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN DASHBOARD STATS -->
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php echo $sf_content ?>
					</div>
				</div>
				<!-- END DASHBOARD STATS -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="page-footer">
		<div class="page-footer-inner">
			 2014 &copy; Aplikasi Inventory by Nur Hidayatullah.
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<script>
		jQuery(document).ready(function() {    
		   Metronic.init();
		   Layout.init();
		   QuickSidebar.init();
		   Demo.init(); 
		   Index.init(); 
		   Tasks.initDashboardWidget();
		});
	</script>
  </body>
</html>
