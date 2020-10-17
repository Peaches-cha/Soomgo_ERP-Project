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
         <!-- /Setting Panel -->
         <!-- Main Content -->
         <div class="hk-pg-wrapper">
            <!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
               <!-- Row -->
               <div class="row">
                  <div class="col-xl-12">
                     <div class="hk-row">
                        <div class="col-lg-3 col-md-6">
                           <div class="card card-sm">
                              <div class="card-body">
                                 <div class="d-flex justify-content-between mb-5">
                                    <div>
                                       <span class="d-block font-15 text-dark font-weight-500">총 발주 수</span>
                                    </div>
                                    <div>
                                       <span class="text-warning font-14 font-weight-500" onclick="location.href='<?php $_SERVER['DOCUMENT_ROOT']?>/pg/order/listOrder.php'" style="cursor:pointer;">more</span>
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <span class="d-block display-4 text-dark mb-5"><span id="orderCount" class="counter-anim">0</span></span>
                                    <small class="d-block">Total Orders</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <div class="card card-sm">
                              <div class="card-body">
                                 <div class="d-flex justify-content-between mb-5">
                                    <div>
                                       <span class="d-block font-15 text-dark font-weight-500">총 재고 수</span>
                                    </div>
                                    <div>
                                       <span class="text-warning font-14 font-weight-500" onclick="location.href='<?php $_SERVER['DOCUMENT_ROOT']?>/pg/product/listProduct.php'" style="cursor:pointer;">more</span>
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <span class="d-block display-4 text-dark mb-5"><span id="productCount" class="counter-anim">0</span></span>
                                    <small class="d-block">Total Product</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <div class="card card-sm">
                              <div class="card-body">
                                 <div class="d-flex justify-content-between mb-5">
                                    <div>
                                       <span class="d-block font-15 text-dark font-weight-500">총 거래처 수</span>
                                    </div>
                                    <div>
                                       <span class="text-warning font-14 font-weight-500" style="color:#ccc;" onclick="location.href='<?php $_SERVER['DOCUMENT_ROOT']?>/pg/account/listAccount.php'" style="cursor:pointer;">more</span>
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <span class="d-block display-4 text-dark mb-5"><span id="accountsCount" class="counter-anim">0</span></span>
                                    <small class="d-block">Total Account</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <div class="card card-sm">
                              <div class="card-body">
                                 <div class="d-flex justify-content-between mb-5">
                                    <div>
                                       <span class="d-block font-15 text-dark font-weight-500">총 사원 수</span>
                                    </div>
                                    <div>
                                       <span class="text-warning font-14 font-weight-500" style="color:#ccc;" onclick="location.href='<?php $_SERVER['DOCUMENT_ROOT']?>/pg/employee/listEmployee.php'" style="cursor:pointer;">more</span>
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <span class="d-block display-4 text-dark mb-5"><span id="employeesCount" class="counter-anim">0</span></span>
                                    <small class="d-block">Total Employees</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hk-row">
                        <div class="col-xl-12">
                           <section class="hk-sec-wrapper">
                              <h5 class="hk-sec-title">최근 발주현황</h5>
                              <div class="row">
                                 <div class="col-sm">
                                    <div class="table-wrap">
                                       <div id="datable_1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <table id="datable_1" class="table table-hover w-100 display pb-30 dataTable dtr-inline" role="grid" aria-describedby="datable_1_info">
                                                   <thead>
                                                      <tr role="row">
                                                          <th>발주요청인</th>
                                                          <th>가게이름</th>
                                                          <th>직책</th>
                                                          <th>항목</th>
                                                          <th>개수</th>
                                                          <th>단위</th>
                                                          <th>관리자 체크여부</th>
                                                          <th>등록/변경일</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody id="order-list"></tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                     </div>

                     <div class="hk-row">
                        <div class="col-xl-12">
                           <section class="hk-sec-wrapper">
                              <h5 class="hk-sec-title">최근 재고현황</h5>
                              <div class="row">
                                 <div class="col-sm">
                                    <div class="table-wrap">
                                       <div id="datable_1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <table id="datable_1" class="table table-hover w-100 display pb-30 dataTable dtr-inline" role="grid" aria-describedby="datable_1_info">
                                                   <thead>
                                                      <tr role="row">
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
                                                      </tr>
                                                   </thead>
                                                   <tbody id="product-list"></tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                     </div>

                     <div class="hk-row">
                        <div class="col-xl-12">
                           <section class="hk-sec-wrapper">
                              <h5 class="hk-sec-title"> 최근 거래처현황</h5>
                              <div class="row">
                                 <div class="col-sm">
                                    <div class="table-wrap">
                                       <div id="datable_1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <table id="datable_1" class="table table-hover w-100 display pb-30 dataTable dtr-inline" role="grid" aria-describedby="datable_1_info">
                                                   <thead>
                                                      <tr role="row">
                                                          <th>회사명</th>
                                                          <th>회사코드</th>
                                                          <th>대표번호</th>
                                                          <th>주요취급품목</th>
                                                          <th>등록일</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody id="account-list"></tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                     </div>

                     <div class="hk-row">
                        <div class="col-xl-12">
                           <section class="hk-sec-wrapper">
                              <h5 class="hk-sec-title"> 최근 사원현황</h5>
                              <div class="row">
                                 <div class="col-sm">
                                    <div class="table-wrap">
                                       <div id="datable_1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <table id="datable_1" class="table table-hover w-100 display pb-30 dataTable dtr-inline" role="grid" aria-describedby="datable_1_info">
                                                   <thead>
                                                      <tr role="row">
                                                          <th>이름</th>
                                                          <th>사원코드</th>
                                                          <th>직급</th>
                                                          <th>연락처</th>
                                                          <th>회사명</th>
                                                          <th>회사코드</th>
                                                          <th>등록일</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody id="employee-list"></tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /Row -->
            </div>
            <!-- /Container -->
         </div>
         <!-- /Main Content -->
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
   <script>
      var tables = {};
     <?php
       require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
       $api = new getForm();

       // 각 테이블의 rows 조회
       $tb_rows = $api -> select_all_table_rows();
       while ($row = $tb_rows->fetch(PDO::FETCH_BOTH)){?>
         $("#<?php echo $row['TABLE_NAME']?>Count").text("<?php echo $row['TABLE_ROWS']?>");
         <?php
       }

       //최근 5개 발주상태 조회
       $tb_rows = $api -> select_orders_limit_5();
       while ($row = $tb_rows->fetch(PDO::FETCH_BOTH)){?>
         var is_admin;
         if("<?php echo $row['is_admin']?>" == "false") is_admin = "X";
         else is_admin = "O";
         $("#order-list").append(""+
            "<tr role=\"row\" class=\"even\">"+
               "<td><?php echo $row['user_name']?></td>"+
               "<td><?php echo $row['companyName']?></td>"+
               "<td><?php echo $row['position']?></td>"+
               "<td><?php echo $row['productName']?></td>"+
               "<td><?php echo $row['count']?></td>"+
               "<td><?php echo $row['unit']?></td>"+
               "<td>"+is_admin+"</td>"+
               "<td><?php echo $row['date']?></td>"+
            "</tr>"
          );
         <?php
       }

       //최근 5개 재고 조회
       $tb_rows = $api -> select_product_limit_5();
       while ($row = $tb_rows->fetch(PDO::FETCH_BOTH)){?>
         $("#product-list").append(""+
            "<tr role=\"row\" class=\"even\">"+
               "<td><?php echo $row['productName']?></td>"+
               "<td><?php echo $row['productCode']?></td>"+
               "<td><?php echo $row['uploadDate']?></td>"+
               "<td><?php echo $row['editDate']?></td>"+
               "<td><?php echo $row['warehouse']?></td>"+
               "<td><?php echo $row['manufacture']?></td>"+
               "<td><?php echo $row['stock']?></td>"+
               "<td><?php echo $row['count']?></td>"+
               "<td><?php echo number_format($row['price'])?></td>"+
               "<td><?php echo number_format($row['totalPrice'])?></td>"+
            "</tr>"
          );
         <?php
       }

       //최근 5개 거래처 조회
       $tb_rows = $api -> select_accounts_limit_5();
       while ($row = $tb_rows->fetch(PDO::FETCH_BOTH)){?>
         $("#account-list").append(""+
            "<tr role=\"row\" class=\"even\">"+
               "<td><?php echo $row['name']?></td>"+
               "<td><?php echo $row['code']?></td>"+
               "<td><?php echo $row['tel']?></td>"+
               "<td><?php echo $row['products']?></td>"+
               "<td><?php echo $row['date']?></td>"+
            "</tr>"
          );
         <?php
       }

       //최근 5개 사원 조회
       $tb_rows = $api -> select_employees_limit_5();
       while ($row = $tb_rows->fetch(PDO::FETCH_BOTH)){?>
         $("#employee-list").append(""+
            "<tr role=\"row\" class=\"even\">"+
               "<td><?php echo $row['name']?></td>"+
               "<td><?php echo $row['phone']?></td>"+
               "<td><?php echo $row['position']?></td>"+
               "<td><?php echo $row['code']?></td>"+
               "<td><?php echo $row['account_name']?></td>"+
               "<td><?php echo $row['account_code']?></td>"+
               "<td><?php echo $row['date']?></td>"+
            "</tr>"
          );
         <?php
       }
     ?>
   </script>
</html>
