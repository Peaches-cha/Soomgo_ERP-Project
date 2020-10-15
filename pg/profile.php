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
      <title>ERP System | Dashboard</title>
      <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
      <!-- Favicon -->
      <link rel="shortcut icon" href="favicon.ico">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <!-- vector map CSS -->
      <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
      <!-- Toggles CSS -->
      <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
      <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
      <!-- Toastr CSS -->
      <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
      <!-- Custom CSS -->
      <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/css/style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <!-- HK Wrapper -->
      <div class="hk-wrapper hk-vertical-nav">
         <?php require_once $_SERVER['DOCUMENT_ROOT'].'/header.php'?>
         <?php require_once $_SERVER['DOCUMENT_ROOT'].'/left_nav.php'?>
         <!-- Main Content -->
         <div class="hk-pg-wrapper" style="min-height: 937px;">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
               <ol class="breadcrumb breadcrumb-light bg-transparent">
                  <li class="breadcrumb-item"><a href="#">MyPage</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
               </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container">
               <!-- Title -->
               <div class="hk-pg-header">
                  <h4 class="hk-pg-title">
                  </h4>
               </div>
               <!-- /Title -->
               <!-- Row -->
               <div class="row">
                  <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                           <h5 class="hk-sec-title">프로필 수정</h5>
                           <p class="mb-40">Edit Profile </p>
                           <div class="row">
                               <div class="col-sm">
                                   <form class="needs-validation" novalidate="">
                                       <div class="form-row">
                                           <div class="col-md-4 mb-10">
                                               <label>이름</label>
                                               <input type="text" class="form-control"  placeholder="ex) 홍길동" required="">
                                           </div>
                                           <div class="col-md-4 mb-10">
                                               <label>생년월일</label>
                                               <input type="number" class="form-control" placeholder="ex) 904123" required="">
                                           </div>
                                       </div>
                                       <div class="form-row">
                                           <div class="col-md-8 mb-10">
                                               <label>이메일</label>
                                               <input type="text" class="form-control" placeholder="hongildong@gmail.com" required="">
                                           </div>
                                       </div>
                                       <button class="btn btn-primary" type="submit" style="margin-top:20px;">저장하기</button>
                                   </form>
                               </div>
                           </div>
                       </section>
                  </div>
               </div>
               <!-- /Row -->
            </div>
            <!-- /Container -->
            <!-- Footer -->
            <div class="hk-footer-wrap container">
               <footer class="footer">
                  <div class="row">
                     <div class="col-md-6 col-sm-12">
                        <p>Pampered by<a href="#" class="text-dark">Hencework</a> © 2019</p>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <p class="d-inline-block">Follow us</p>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                     </div>
                  </div>
               </footer>
            </div>
            <!-- /Footer -->
         </div>
      </div>
      <!-- /HK Wrapper -->
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
      <!-- Toggles JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery-toggles/toggles.min.js"></script>
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/toggle-data.js"></script>
      <!-- Counter Animation JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/waypoints/lib/jquery.waypoints.min.js"></script>
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery.counterup/jquery.counterup.min.js"></script>
      <!-- Sparkline JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
      <!-- Vector Maps JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/vectormap-data.js"></script>
      <!-- Owl JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
      <!-- Toastr JS -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
      <!-- Apex JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/apexcharts/dist/apexcharts.min.js"></script>
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/irregular-data-series.js"></script>
      <!-- Init JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/init.js"></script>
      <script src=<?php $_SERVER['DOCUMENT_ROOT']?>/"dist/js/dashboard-data.js"></script>
   </body>
</html>