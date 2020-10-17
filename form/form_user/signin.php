<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $userid = $_POST['id'];
  $password = $_POST['password'];

  $model = new getForm();
  $model -> signin($userid, $password);
?>

</html>
