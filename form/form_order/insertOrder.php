<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $user_name = $_POST['name'];                // 발주요청인
  $companyName = $_POST['companyName'];       // 가게이름
  $position = $_POST['position'];             // 직책
  $productName = $_POST['product'];           // 항목
  $count = $_POST['count'];                   // 개수
  $unit = $_POST['unit'];                     // 단위
  $is_admin = isset($_POST['adminCheck']) ? "true" : "false";   // 관리자 체크여부

  $model = new getForm();
  $model -> insert_order($user_name, $companyName, $position, $productName, $count, $unit, $is_admin);
?>

</html>
