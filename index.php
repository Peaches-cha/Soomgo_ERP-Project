<!DOCTYPE html>
<!--
Template Name: Deepor - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>ERP System</title>
		<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/favicon.ico">
		<link rel="icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/favicon.ico" type="image/x-icon">

		<!-- Toggles CSS -->
		<link href="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
		<link href="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

		<!-- Custom CSS -->
		<link href="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>


		<!-- HK Wrapper -->
		<div class="hk-wrapper">

			<!-- Main Content -->
			<div class="hk-pg-wrapper hk-auth-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12 pa-0">
							<div class="auth-form-wrap pt-xl-0 pt-70">
								<div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
									<a class="d-flex auth-brand align-items-center justify-content-center  mb-20" href="#">
										<img class="brand-img d-inline-block mr-5" src="dist/img/logo.png" alt="brand"/><span class="text-dark font-23">Deepor</span>
									</a>
									<form method="POST" action="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/dashboard.php">
										<h1 class="display-4 text-center mb-10">방문해주셔서 감사합니다.</h1>
										<p class="text-center mb-30">Thank you for Comming</p>
										<div class="form-group">
											<input class="form-control" placeholder="ID" type="email">
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Password" type="password">
												<div class="input-group-append">
													<span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
												</div>
											</div>
										</div>
										<button class="btn btn-warning btn-block" type="submit">로그인</button>
										<p class="font-14 text-center mt-15">비밀번호 찾기</p>
										<div class="option-sep">or</div>
										<p class="text-center">아직 회원이 아니신가요? <a href="#">회원가입</a></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Main Content -->

		</div>
		<!-- /HK Wrapper -->

		<!-- JavaScript -->

		<!-- jQuery -->
		<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery/dist/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/popper.js/dist/umd/popper.min.js"></script>
		<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

		<!-- Slimscroll JavaScript -->
		<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/jquery.slimscroll.js"></script>

		<!-- Fancy Dropdown JS -->
		<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/dropdown-bootstrap-extended.js"></script>

		<!-- FeatherIcons JavaScript -->
		<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/feather.min.js"></script>

		<!-- Init JavaScript -->
		<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/init.js"></script>

    <script>
      $("#navbarCollapseAlt .nav-item .nav-link").show();
      $('#navbarCollapseAlt.collapse').collapse('show');
    </script>
	</body>
</html>
