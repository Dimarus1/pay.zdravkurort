<?php
include "1.php";
function register($tk) {


$orderNumber = $_POST['orderNumber'];
$sum  = $_POST['amount'];
$email  = $_POST['email'];
$phone  = $_POST['phone']; 


$vars = array();
$vars{'token'} =$tk;
// ID ������ � ��������.
$vars{'orderNumber'} = $orderNumber;  
// ����� ������ � ��������.
$vars{'amount'} = $sum * 100;
// URL ���� ������ �������� � ������ �������� ������.
$vars{'returnUrl'} = 'http://new.zdravkurort.ru/payOK'; 
// URL ���� ������ �������� � ������ ������.
$vars{'failUrl'} = 'http://new.zdravkurort.ru/payNOTOK';
// �������� ������, �� ����� 24 ��������, ��������� % + \r \n
$vars{'description'} = 'www.zdravkurort.ru  ' . $orderNumber;
//$vars{'language'} = 'en';
$vars['taxSystem'] = 2;	  
// ��������� ���������� �������
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
    // �������� ������:
    echo $res['errorMessage']; 
	//echo $res;
                         
} else {
    // �����:
    // ��� ����� ��������� ID ������� � ����� �� - $res['orderId']

    // ��������������� ������� �� �������� ������.
    header('Location: ' . $res['formUrl'], true);
    
    
}

}


  
    
$srt=register($tk);



?>