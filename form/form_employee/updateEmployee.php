<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $employeeID = $_GET['id'];
  $employeeCode = $_POST['employee_code'];  // 사원 코드
  $employeeName = $_POST['employee_name'];  // 사원 이름
  $phone = $_POST['phone'];                 // 사원 휴대폰번호
  $position = $_POST['position'];           // 사원 직책
  $accountID = $_POST['accountCode'];       // 회사 고유 id

  $model = new getForm();
  $model -> update_employee($employeeID, $employeeCode, $employeeName, $phone, $position, $accountID);
?>

</html>
