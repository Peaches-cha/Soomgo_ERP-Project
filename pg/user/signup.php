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
                             <img class="brand-img d-inline-block mr-5" src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/img/logo.png" alt="brand" />
                             <span class="text-dark font-23">MP ERP</span>
                           </a>
                           <form id="signForm" method="POST" action="/form/form_user/signup.php" enctype="multipart/form-data">
                              <h1 class="display-4 mb-10 text-center">????????????</h1>
          										<p class="text-center mb-30">Enterprise Resource Planning</p>
                              <h5>???????????????</h5>
                              <div class="form-row" style="margin:20px 0px 0px 0px;">
                                 <div class="col-md-12 form-group">
                                    <input class="form-control" placeholder="?????????" type="text" name="id" required minlength="4">
                                 </div>
                              </div>
                              <div class="form-row" >
          											<div class="col-md-12 form-group">
          												<input class="form-control" placeholder="???????????? (6?????????)" type="password" name="password" required minlength="6">
          											</div>
                              </div>

                              <h5 style="margin:30px 0px 0px 0px;">????????????</h5>
                              <div class="form-row" style="margin:10px 0px 0px 0px;">
                                 <div class="col-md-6 form-group">
                                    <input class="form-control" placeholder="??????" type="text" name="name" required minlength="2">
                                 </div>
                                 <div class="col-md-6 form-group">
                                    <input class="form-control" placeholder="???????????? (ex 901120)" type="text" name="birth" required maxlength="6" minlength="2">
                                 </div>
                              </div>
                              <div class="form-row">
                                <div class="col-md-12 form-group">
                                   <input class="form-control" placeholder="?????????" type="text" name="email" required email>
                                </div>
                              </div>
                              <button class="btn btn-warning btn-block" type="submit" style="margin:30px 0px 0px 0px;">????????????</button>
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
      <!-- ????????? ?????? ???????????????-->
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
   </body>

   <script>
     <?php
         if(!isset($_SESSION)) session_start();
         $id = isset($_SESSION['id']) ? $_SESSION['id'] : false;
         if($id)?>
          location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/home.php";
        <?php
      ?>

      $(document).ready(function() {
          $("#signForm").validate();
          $.extend($.validator.messages, {
            required: "?????? ???????????????.",
            remote: "????????? ???????????????.",
            email: "???????????? ?????? E-Mail???????????????.",
            url: "???????????? ?????? URL?????????.",
            date: "????????? ????????? ???????????????.",
            dateISO: "????????? ??????(ISO)??? ???????????????.",
            number: "????????? ????????? ????????????.",
            digits: "????????? ?????? ???????????????.",
            creditcard: "???????????? ????????? ????????? ????????????.",
            equalTo: "?????? ?????? ?????? ???????????????.",
            extension: "????????? ???????????? ????????????.",
            maxlength: $.validator.format( "{0}?????? ?????? ??? ????????????. " ),
            minlength: $.validator.format( "{0}??? ?????? ???????????????." ),
            rangelength: $.validator.format( "?????? ????????? {0} ?????? {1} ????????? ?????? ???????????????." ),
            range: $.validator.format( "{0} ?????? {1} ????????? ?????? ???????????????." ),
            max: $.validator.format( "{0} ????????? ?????? ???????????????." ),
            min: $.validator.format( "{0} ????????? ?????? ???????????????." )
        });
      });
   </script>
</html>
