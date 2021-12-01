<?php
if(!empty($_POST)) {
	$cart = [];
	if(isset($_COOKIE['cart'])) {
		$json = $_COOKIE['cart'];
		$cart = json_decode($json, true);
	}
	if($cart ==null || count($cart) == 0) {
		header('Location: home.php');
		die();
	}

	$fullname = getPost('fullname');
	$email = getPost('email');
	$phone_number = getPost('phone_number');
	$address = getPost('address');
    $size =getPost('size');
	$orderDate = date('Y-m-d H:i:s');

	//add thông tin khách hang
	$sql = "insert into orders(fullname, email, phone_number, address,size, order_date) values ('$fullname', '$email', '$phone_number', '$address','$size' ,'$orderDate')";
	execute($sql);

	// lây thông tin từ order_date để lấy thông tin đơn hang
	$sql = "select * from orders where order_date = '$orderDate'";
	$order = executeResult($sql, true);

	$orderId = $order['id'];

	$idList = [];
	foreach ($cart as $item) {
		$idList[] = $item['id'];
	}
	if(count($idList) > 0) {
		$idList = implode(',', $idList);
		//[2, 5, 6] => 2,5,6

		$sql = "select * from product where id in ($idList)";
		$cartList = executeResult($sql);
	} else {
		$cartList = [];
	}

	foreach ($cartList as $item) {
		$num = 0;
		foreach ($cart as $value) {
			if($value['id'] == $item['id']) {
				$num = $value['num'];
				break;
			}
		}
		// add thông tin đơn hàng vào db
		$sql = "insert into order_details(order_id, product_id, num, price) values ($orderId, ".$item['id'].", $num, ".$item['price'].")";
		execute($sql);
	}
	header('Location: home.php');
	setcookie('cart', '[]', time()-1000, '/'); //xóa sản phẩm sau khi đã đặt hàng
}