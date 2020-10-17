<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $id = $_GET['id'];
  $productName = $_POST['name'];                // 상품명
  $productCode = $_POST['code'];                // 상품코드
  $warehouse = $_POST['warehouse'];             // 입출창고
  $manufacture = $_POST['manufacture'];         // 제조사
  $stock = $_POST['stock'];                      // 재고
  $count = $_POST['count'];                      // 개수
  $price = $_POST['price'];                      // 가격
  $totalprice = $_POST['totalprice'];            // 총 가격

  $model = new getForm();
  $model -> update_product($id, $productName, $productCode, $warehouse, $manufacture, $stock, $count, $price, $totalprice);
?>

</html>
