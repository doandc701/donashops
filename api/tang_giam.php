<?php

require_once('../utils/utility.php');

if(!empty($_POST)) {
	$action = getPost('action');
	$id = getPost('id');
	$num = getPost('num');

	$cart = [];
	if(isset($_COOKIE['cart'])) {
		$json = $_COOKIE['cart'];
		$cart = json_decode($json, true);
	}
    switch ($action) {
        case 'cong':
            for($i=0; $i<count($cart); $i++) {
                if($cart[$i]['id']== $id){
					$cart[$i]['num'] +=($num);
                }
            }
			setcookie('cart', json_encode($cart), time() + 30*24*60*60, '/');
            break;
            case 'tru':
            for($i=0; $i<count($cart); $i++) {
                if($cart[$i]['id']== $id){
                    if(($cart[$i]['num'])>1)
                    {
                        $cart[$i]['num'] -= $num;
                    }
                }
            }
            setcookie('cart', json_encode($cart), time() + 30*24*60*60, '/');//thời gian sống cho một đơn hàng
            break;
    }
}