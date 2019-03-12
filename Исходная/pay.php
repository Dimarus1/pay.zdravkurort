<?php
include "1.php";
function register($tk) {


$orderNumber = $_POST['orderNumber'];
$sum  = $_POST['amount'];
$email  = $_POST['email'];
$phone  = $_POST['phone']; 


$vars = array();
$vars{'token'} =$tk;
// ID заказа в магазине.
$vars{'orderNumber'} = $orderNumber;  
// Сумма заказа в копейках.
$vars{'amount'} = $sum * 100;
// URL куда клиент вернется в случае успешной оплаты.
$vars{'returnUrl'} = 'http://new.zdravkurort.ru/payOK'; 
// URL куда клиент вернется в случае ошибки.
$vars{'failUrl'} = 'http://new.zdravkurort.ru/payNOTOK';
// Описание заказа, не более 24 символов, запрещены % + \r \n
$vars{'description'} = 'www.zdravkurort.ru  ' . $orderNumber;
//$vars{'language'} = 'en';
$vars['taxSystem'] = 2;	  
// Формируем фискальную корзину
$items = array();
           

                $item['positionId'] = 1;
                $item['name'] = 'Putevka';
                $item['quantity'] = array(
                    'value' => 1,
                    'measure' => 'shtuka'
                );
                $item['itemAmount'] = $sum * 100;
                $item['itemCode'] = 1;
                $item['tax'] = array(
                    'taxType' => 0
                );
                $item['itemPrice'] = $sum * 100;
                $i++;

                $items[] = $item;
            


$order_bundle = array(
                'orderCreationDate' => time(),
                'customerDetails' => array(
                    'email' => $email,
                    'phone' => $phone,
                ),
                'cartItems' => array('items' => $items)
            );

$vars{'orderBundle'} = json_encode($order_bundle);

$ch = curl_init('https://ucs.rbsgate.com/payment/rest/registerPreAuth.do?' . http_build_query($vars));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);
$res = json_decode($res,1);
if (empty($res['orderId'])){
    // Возникла ошибка:
    echo $res['errorMessage']; 
	//echo $res;
                         
} else {
    // Успех:
    // Тут нужно сохранить ID платежа в своей БД - $res['orderId']

    // Перенаправление клиента на страницу оплаты.
    header('Location: ' . $res['formUrl'], true);
    
    
}

}


  
    
$srt=register($tk);



?>