<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $name = $_POST['name'];                // 회사명
  $code = $_POST['code'];                // 회사코드
  $tel = $_POST['tel'];                  // 전화번호
  $products = $_POST['products'];                  // 전화번호

  $model = new getForm();
  $model -> insert_account($name, $code, $tel, $products);
?>

</html>
