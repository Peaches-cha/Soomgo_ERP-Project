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
                  <li class="breadcrumb-item active" aria-current="page">Product List</li>
               </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Container -->
            <div class="container" style="max-width:1400px;">
               <!-- Title -->
               <div class="hk-pg-header">
                  <h4 class="hk-pg-title">
                  </h4>
               </div>
               <!-- /Title -->
               <!-- Row -->
               <div class="row" >
                  <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">재고 조회</h5>
                            <p class="mb-40">Product List</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table table-lg mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>상품명</th>
                                                        <th>상품코드</th>
                                                        <th>등록일</th>
                                                        <th>최종수정일</th>
                                                        <th>입출창고</th>
                                                        <th>제조사</th>
                                                        <th>재고</th>
                                                        <th>수량</th>
                                                        <th>단가</th>
                                                        <th>총액</th>
                                                        <th>도구</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="product-list">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/dashboard-data.js"></script>
   </body>
   <script>
      function AddRow(id, productName, productCode, uploadDate, editDate, warehouse, manufacture, stock, count, price, totalPrice){
        $("#product-list").append(""+
          "<tr>"+
              "<td>"+productName+"</td>"+
              "<td>"+productCode+"</td>"+
              "<td>"+uploadDate+"</td>"+
              "<td>"+editDate+"</td>"+
              "<td>"+warehouse+"</td>"+
              "<td>"+manufacture+"</td>"+
              "<td>"+stock+"</td>"+
              "<td>"+count+"</td>"+
              "<td>"+price+"</td>"+
              "<td>"+totalPrice+"</td>"+
              "<td>"+
                  "<a href=<?php $_SERVER['DOCUMENT_ROOT']?>/pg/product/updateProduct.php?id=" + id +" class=\"mr-25\" data-toggle=\"tooltip\" data-original-title=\"Edit\"> <i class=\"icon-pencil\"></i> </a>"+
                  "<a href=<?php $_SERVER['DOCUMENT_ROOT']?>/form/form_product/deleteProduct.php?id=" + id +" data-toggle=\"tooltip\" data-original-title=\"remove\"> <i class=\"icon-trash txt-danger\"></i> </a>"+
              "</td>"+
          "</tr>"
        );
      }

     <?php
       require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
       $api = new getForm();
       $orders = $api -> select_products();
       while ($row = $orders->fetch(PDO::FETCH_BOTH)){?>
         AddRow(
           "<?php echo $row['id']?>",
           "<?php echo $row['productName']?>",
           "<?php echo $row['productCode']?>",
           "<?php echo $row['uploadDate']?>",
           "<?php echo $row['editDate']?>",
           "<?php echo $row['warehouse']?>",
           "<?php echo $row['manufacture']?>",
           "<?php echo $row['stock']?>",
           "<?php echo $row['count']?>",
           "<?php echo $row['price']?>",
           "<?php echo $row['totalPrice']?>"
         );
         <?php
       }
     ?>
   </script>
</html>
