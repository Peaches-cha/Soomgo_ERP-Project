<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $userid = $_POST['id'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $birth = $_POST['birth'];
  $email = $_POST['email'];

  $model = new getForm();
  $model -> insert_user($userid, $password, $name, $birth, $email);
?>

</html>
