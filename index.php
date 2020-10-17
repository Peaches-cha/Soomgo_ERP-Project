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
									<a class="d-flex auth-brand align-items-center justify-content-center  mb-20" href="/">
										<img class="brand-img d-inline-block mr-5" src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/img/logo.png" alt="brand"/><span class="text-dark font-23">MP ERP</span>
									</a>
									<form id="signForm" method="POST" action="<?php $_SERVER['DOCUMENT_ROOT']?>/form/form_user/signin.php">
										<p class="text-center mb-30">Enterprise Resource Planning</p>
										<div class="form-group">
											<input class="form-control" placeholder="ID" type="text" name="id" requierd minlength="4">
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Password" type="password" name="password" required minlength="6">
												<div class="input-group-append">
													<span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
												</div>
											</div>
										</div>
										<button class="btn btn-warning btn-block" type="submit">로그인</button>
										<div class="option-sep">or</div>
										<p class="text-center">아직 회원이 아니신가요? <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/user/signup.php">회원가입</a></p>
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
	</body>
	<script>
		<?php
				// 접속된 세션이 있는지 확인
				if(!isset($_SESSION)) session_start();
				$id = isset($_SESSION['id']) ? $_SESSION['id'] : false;

				// 있으면 바로 메인페이지로.
				if($id) echo "location.href=\"/pg/home.php\"";
		 ?>
	</script>
</html>
