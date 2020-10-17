<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $birth = $_POST['birth'];

  $model = new getForm();
  $model -> update_user($id, $name, $email, $birth);
?>

</html>
