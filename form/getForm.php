<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/pdo.php';
class getForm{
	function __construct(){}

  function renderAlertWithView($msg, $url){
		echo '<script>
					alert("'.$msg.'");
					location.replace("'.$url.'");
					</script>';
	}
	function renderView($url){
		echo '<script>
					location.replace("'.$url.'");
					</script>';
	}

	// 모든 테이블의 행 수
	function select_all_table_rows(){
			try{
				$pdo = $GLOBALS["pdo"];
				$sql = "SELECT table_name, table_rows FROM information_schema. tables WHERE table_schema = 'mp_db' ORDER BY table_name;";
				$stmt = $pdo->prepare($sql);
				$stmt->execute();
				return $stmt;
			}catch(Exception $e){
				$e;
			}
	}

	// 회원가입
  function insert_user($id, $password, $name, $birth, $email){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "INSERT INTO users(`userid`,`password`,`name`,`birth`,`email`,`date`) VALUES(\"$id\", \"$password\",\"$name\", \"$birth\", \"$email\", NOW())";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("추가되었습니다.", "/");
		}catch(Exception $e){
			if(strpos($e, "userid_UNIQUE") !== false) {
				$this->renderAlertWithView("이미 중복된 아이디가 존재합니다.", "/pg/user/signup.php");
			}
		}
  }

	// 특정 유저검색
  function select_user($userid){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM `users` WHERE `userid`=\"$userid\"";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
  }

	function update_user($id, $name, $email, $birth){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "UPDATE users SET
							`name` = \"$name\",
							`birth` = \"$birth\",
							`email` = \"$email\"
							WHERE `userid` = \"$id\"";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("변경되었습니다.", "/pg/user/updateUser.php");
		}catch(Exception $e){
			echo $e;
		}
	}

	// 로그인
	function signin($id, $password){
		try{
			echo "id : $id";
			echo "password : $password";
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM users WHERE `userid`=\"$id\" AND `password`=\"$password\"";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();

			$result = $stmt->rowCount();
			if($result == true){
				session_start();
				$_SESSION['id'] = $id;
				echo $_SESSION['id'];
				$this->renderView("/pg/home.php");
			}
		}catch(Exception $e){
			echo $e;
		}
	}

	// 발주 등록
	function insert_order($user_name, $companyName, $position, $productName, $count, $unit, $is_admin){
			try{
				$pdo = $GLOBALS["pdo"];
				$sql = "INSERT INTO `order`(`user_name`,`companyName`,`position`,`productName`,`count`,`unit`,`is_admin`,`date`)
								VALUES(\"$user_name\", \"$companyName\",\"$position\", \"$productName\", $count, \"$unit\", \"$is_admin\", NOW())";
				$stmt = $pdo->prepare($sql);
				$stmt->execute();
				$this->renderAlertWithView("추가되었습니다.", "/pg/order/addOrder.php");
			}catch(Exception $e){
				echo $e;
			}
	}

	// 발주 전체 조회
	function select_orders(){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM `order`;";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 특정 발주 조회
	function select_order($id){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM `order` WHERE `id`=$id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 발주삭제
	function delete_order($id){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "DELETE FROM `order` WHERE `id`=$id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("삭제되었습니다.", "/pg/order/listOrder.php");
		}catch(Exception $e){
			echo $e;
		}
	}

	// 발주변경
	function update_order($id, $user_name, $companyName, $position, $productName, $count, $unit, $is_admin){
			try{
				$pdo = $GLOBALS["pdo"];
				$sql = "UPDATE `order` SET
								`user_name` = \"$user_name\",
								`companyName` = \"$companyName\",
								`position` = \"$position\",
								`productName` = \"$productName\",
								`count` = $count,
								`unit` = \"$unit\",
								`is_admin` = \"$is_admin\",
								`date` = NOW()
								WHERE `id`=$id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute();
				$this->renderAlertWithView("변경되었습니다.", "/pg/order/updateOrder.php?id=$id");
			}catch(Exception $e){
				echo $e;
			}
	}

	// 재고 등록
	function insert_product($productName, $productCode, $warehouse, $manufacture, $stock, $count, $price, $totalprice){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "INSERT INTO `product`(`productName`,`productCode`,`uploadDate`,`editDate`,`warehouse`,`manufacture`,`stock`,`count`,`price`,`totalPrice`)
							VALUES(\"$productName\",\"$productCode\",NOW(), NOW(), \"$warehouse\", \"$manufacture\", $stock, $count, $price, \"$totalprice\")";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("추가되었습니다.", "/pg/product/addProduct.php");
		}catch(Exception $e){
				if(strpos($e, "productCode_UNIQUE") !== false) {
					$this->renderAlertWithView("이미 중복된 상품코드가 존재합니다.", "/pg/product/addProduct.php");
				}
				echo $e;
		}
	}

	// 재고 조회
	function select_products(){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM `product`";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 특정 재고 조회
	function select_product($id){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM `product` WHERE `id`=$id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 재고삭제
	function delete_product($id){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "DELETE FROM `product` WHERE `id`=$id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("삭제되었습니다.", "/pg/product/listProduct.php");
		}catch(Exception $e){
			echo $e;
		}
	}

	// 재고 변경
	function update_product($id, $productName, $productCode, $warehouse, $manufacture, $stock, $count, $price, $totalprice){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "UPDATE `product` SET
							`productName` = \"$productName\",
							`productCode` = \"$productCode\",
							`editDate` = NOW(),
							`warehouse` = \"$warehouse\",
							`manufacture` = \"$manufacture\",
							`stock` = \"$stock\",
							`count` = $count,
							`price` = \"$price\",
							`totalPrice` = \"$totalprice\"
							WHERE `id`=$id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("변경되었습니다.", "/pg/product/updateProduct.php?id=$id");
		}catch(Exception $e){
			echo $e;
		}
	}

	// 거래처 등록
	function insert_account($name, $code, $tel, $products){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "INSERT INTO `accounts`(`name`, `code`, `tel`, `products`, `date`) VALUES(\"$name\",\"$code\",\"$tel\",\"$products\",NOW())";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("추가되었습니다.", "/pg/account/addAccount.php");
		}catch(Exception $e){
			if(strpos($e, "code_UNIQUE") !== false) {
				$this->renderAlertWithView("이미 중복된 회사코드가 존재합니다.", "/pg/account/addAccount.php");
			}
			echo $e;
		}
	}

	// 거래처들 조회
	function select_accounts(){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM accounts";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 특정 거래처 조회
	function select_account($id){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM accounts WHERE `id`=$id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 거래처 삭제
	function delete_account($id){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "DELETE FROM accounts WHERE `id`=$id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("삭제되었습니다.", "/pg/account/listAccount.php");
		}catch(Exception $e){
			echo $e;
		}
	}

	// 거래처 변경
	function update_account($id, $name, $code, $tel, $products){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "UPDATE accounts SET
								`name` = \"$name\",
								`code` = \"$code\",
								`tel` = \"$tel\",
								`products` = \"$products\"
								WHERE `id`=$id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("변경되었습니다.", "/pg/account/updateAccount.php?id=$id");
		}catch(Exception $e){
			if(strpos($e, "code_UNIQUE") !== false) {
				$this->renderAlertWithView("이미 중복된 회사코드가 존재합니다.", "/pg/account/addAccount.php");
			}
			echo $e;
		}
	}

	// 사원등록
	function insert_employee($employeeCode, $employeeName, $phone, $position, $accountID){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "INSERT INTO `employees`(`name`, `code`, `phone`, `position`, `account_id`,`date`)
							VALUES(\"$employeeName\",\"$employeeCode\",\"$phone\",\"$position\",$accountID,NOW())";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("추가되었습니다.", "/pg/employee/addEmployee.php");
		}catch(Exception $e){
			if(strpos($e, "code_UNIQUE") !== false) {
				$this->renderAlertWithView("이미 중복된 사원코드가 존재합니다.", "/pg/employee/addEmployee.php");
			}
			echo $e;
		}
	}

	// 사원들 조회
	function select_employees(){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT E.*, A.code AS account_code, A.name AS account_name
							FROM mp_db.employees AS E
							JOIN mp_db.accounts AS A
							ON E.account_id = A.id;";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 사원 삭제
	function delete_employee($id){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "DELETE FROM employees WHERE `id`=$id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("삭제되었습니다.", "/pg/employee/listEmployee.php");
		}catch(Exception $e){
			echo $e;
		}
	}

	// 특정 사원 조회
	function select_employee($id){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT E.*, A.code AS account_code, A.name AS account_name, A.id AS account_id
							FROM mp_db.employees AS E
							JOIN mp_db.accounts AS A
							ON E.account_id = A.id
							WHERE E.id=$id;";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 특정 사원 조회
	function update_employee($id, $employeeCode, $employeeName, $phone, $position, $accountID){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "UPDATE employees SET
							`name` = \"$employeeName\",
							`phone` = \"$phone\",
							`position` = \"$position\",
							`code` = \"$employeeCode\",
							`account_id` = $accountID,
							`date` = NOW()
							WHERE `id`=$id;";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("변경되었습니다.", "/pg/employee/addEmployee.php?id=$id");
		}catch(Exception $e){
			if(strpos($e, "code_UNIQUE") !== false) {
				$this->renderAlertWithView("이미 중복된 사원코드가 존재합니다.", "/pg/employee/addEmployee.php");
			}
			echo $e;
		}
	}

	// 최근 발주 5개 조회
	function select_orders_limit_5(){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM `order` ORDER BY date DESC LIMIT 5 ;";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 최근 재고 5개 조회
	function select_product_limit_5(){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM `product` ORDER BY uploadDate DESC LIMIT 5 ;";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 최근 거래처 5개 조회
	function select_accounts_limit_5(){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM `accounts` ORDER BY date DESC LIMIT 5 ;";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 최근 발주 5개 조회
	function select_employees_limit_5(){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT E.*, A.code AS account_code, A.name AS account_name
							FROM mp_db.employees AS E
							JOIN mp_db.accounts AS A
							ON E.account_id = A.id
              LIMIT 5;";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}
}

?>
