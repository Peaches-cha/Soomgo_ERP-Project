<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $id = $_GET['id'];                     // 거래처 고유아이디
  $name = $_POST['name'];                // 거래처 이름
  $code = $_POST['code'];         // 거래처 코드
  $tel = $_POST['tel'];             // 거래처 전화번호
  $products = $_POST['product'];         // 주요품목

  $model = new getForm();
  $model -> update_account($id, $name, $code, $tel, $products);
?>

</html>
