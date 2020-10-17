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
                  <li class="breadcrumb-item active" aria-current="page">Upload Employee</li>
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
                           <h4 class="hk-sec-title">사원 등록</h4>
                           <p class="mb-40">Upload Employee</p>
                           <div class="row">
                               <div class="col-sm">
                                  <form method="POST" action="/form/form_employee/insertEmployee.php" enctype="multipart/form-data">
                                      <h5 class="hk-sec-title">회사 정보</h5>
                                       <div class="form-row">
                                           <div class="col-md-5 mb-10">
                                               <label>회사이름 / 코드</label>
                                               <input type="text" class="form-control" name="account_name" required readonly>
                                           </div>
                                           <div class="col-md-3 mb-10">
                                             <button class="btn btn-dark" type="button" style="position:absolute; left:0px; bottom:0px;"  data-toggle="modal" data-target="#exampleModalForms" >검색</button>
                                           </div>
                                       </div>


                                       <h5 class="hk-sec-title" style="margin-top:50px;">사원정보</h5>
                                       <div class="form-row">
                                         <div class="col-md-4 mb-10">
                                             <label>사원코드</label>
                                             <input type="text" class="form-control" name="employee_code" required readonly>
                                         </div>
                                       </div>

                                       <div class="form-row">
                                         <div class="col-md-4 mb-10">
                                             <label>이름</label>
                                             <input type="text" class="form-control" name="employee_name" required>
                                         </div>
                                         <div class="col-md-4 mb-10">
                                             <label>휴대폰 번호</label>
                                             <input type="number" class="form-control" name="phone" required>
                                         </div>
                                         <div class="col-md-2 mb-10">
                                             <label>직책</label>
                                             <input type="text" class="form-control" name="position" required>
                                         </div>
                                       </div>
                                       <input type="text" name="accountCode" style="display:none"/>
                                       <button class="btn btn-primary" type="submit" style="margin-top:50px;">등록하기</button>
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
      <!-- Modal forms-->
      <div class="modal fade" id="exampleModalForms" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">회사 정보</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form enctype="multipart/form-data">
                          <div class="form-group">
                              <label for="exampleDropdownFormEmail1" style="margin:0px;">회사이름</label>
                              <select id="company-list" class="form-control custom-select form-control custom-select-lg mt-15">
                                  <option value="default">선택</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label>회사코드</label>
                              <input type="text" class="form-control" id="companyCode" readonly>
                          </div>
                          <button type="button" class="btn btn-primary" onclick="closePopup()">확인</button>
                      </form>
                  </div>
              </div>
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

      var code, name;
      // 검색 Modal 닫기
      function closePopup(){
        $("#exampleModalForms").modal('hide');

        // 선택된 코드, 이름 가져옴
        name = $("#company-list option:checked").text();

        // 회사를 선택했다면
        if(code != "default"){
          $("input[name=account_name]").val(name + "  / " + code);          // 회사 이름 입력
          $("input[name=employee_code]").val(code + "_" + randomString());  // 사원 코드 입력
          $("input[name=accountCode]").val($("#company-list").val());       // 회사 고유 id 입력
        }
      }

      // 랜덤 코드 생성
      function randomString() {
         var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZ";
         var string_length = 6;
         var randomstring = '';
         for (var i=0; i<string_length; i++) {
         var rnum = Math.floor(Math.random() * chars.length);
         randomstring += chars.substring(rnum,rnum+1);
         }
         //document.randform.randomfield.value = randomstring;
         return randomstring;
      }

      // 회사를 선택할때 발생
      $("#company-list").change(function(){
        code = $(this).find("option:selected").data("code"); // 선택한 회사코드를 가져옴
        $("#companyCode").val(code);
      })

      <?php
        require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
        $api = new getForm();
        $orders = $api -> select_accounts();
        while ($row = $orders->fetch(PDO::FETCH_BOTH)){?>
          $("#company-list").append("<option value=\"<?php echo $row['id']?>\" data-code=\"<?php echo $row['code']?>\"><?php echo $row['name']?></option>")
          <?php
        }
      ?>
   </script>
</html>
