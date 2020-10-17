<!DOCTYPE html>
<!--
   Template Name: Deepor - Responsive Bootstrap 4 Admin Dashboard Template
   Author: Hencework

   License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
   -->
<?php
	 // 접속된 세션이 있는지 확인
   if(!isset($_SESSION)) session_start();
   $id = isset($_SESSION['id']) ? $_SESSION['id'] : false;

   // 있으면 바로 메인페이지로.
   if(!$id) echo "<script>alert(\"로그인정보가 없습니다. 로그인페이지로 이동합니다\");location.href=\"/\";</script>";
?>
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
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Order</li>
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
                           <h5 class="hk-sec-title">발주 정보변경</h5>
                           <p class="mb-40">Update Order</p>
                           <div class="row">
                               <div class="col-sm">
                                  <form method="POST" action="/form/form_order/updateOrder.php?id=<?php echo $_GET['id']?>" enctype="multipart/form-data">
                                       <div class="form-row">
                                           <div class="col-md-4 mb-10">
                                               <label>발주요청인</label>
                                               <input type="text" class="form-control"  placeholder="ex) 홍길동" name="name" required>
                                           </div>
                                       </div>
                                       <div class="form-row">
                                         <div class="col-md-4 mb-10">
                                             <label>가게이름</label>
                                             <input type="text" class="form-control" placeholder="ex) 홍길동 가게" name="companyName" required>
                                         </div>
                                         <div class="col-md-4 mb-10">
                                             <label>직책</label>
                                             <input type="text" class="form-control" placeholder="ex) 대표" name="position" required>
                                         </div>
                                       </div>
                                       <div class="form-row" style="margin-top:50px;">
                                         <div class="col-md-4 mb-10">
                                             <label>항목</label>
                                             <input type="text" class="form-control" placeholder="ex) 허리" name="product" required>
                                         </div>
                                         <div class="col-md-4 mb-10">
                                             <label>개수</label>
                                             <input type="number" class="form-control" placeholder="0" name="count" required>
                                         </div>
                                           <div class="col-md-4 mb-10">
                                               <label>단위</label>
                                               <input type="text" class="form-control" placeholder="" name="unit" required>
                                           </div>
                                       </div>

                                       <div class="form-row">
                                         <div class="col-md-4 mt-15">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="adminCheck">
                                                <label class="custom-control-label" for="customCheck1">관리자 처리여부</label>
                                            </div>
                                        </div>

                                       </div>
                                       <button class="btn btn-primary" type="submit" style="margin-top:50px;">변경하기</button>
                                   </form>
                               </div>
                           </div>
                       </section>
                  </div>
               </div>
               <!-- /Row -->
            </div>
            <!-- /Container -->
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
   </body>
   <script>
     <?php
       require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
       $api = new getForm();
       $orders = $api -> select_order($_GET['id']);
       while ($row = $orders->fetch(PDO::FETCH_BOTH)){?>
         $("input[name=name]").val("<?php echo $row['user_name']?>");
         $("input[name=companyName]").val("<?php echo $row['companyName']?>");
         $("input[name=position]").val("<?php echo $row['position']?>");
         $("input[name=product]").val("<?php echo $row['productName']?>");
         $("input[name=count]").val("<?php echo $row['count']?>");
         $("input[name=unit]").val("<?php echo $row['unit']?>");
         $('#customCheck1').prop('checked')
         if("<?php echo $row['is_admin']?>" == "true"){
           $("input[name=adminCheck]").prop('checked',true);
         }
         <?php
       }
     ?>
   </script>
</html>
