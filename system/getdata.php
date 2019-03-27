<?php
include DOCROOT."/system/hmac-sha256_unicode.php";

$mess='';
$orderNumber = $_POST['ORDER'];
$sum  = money_format('%.2n', $_POST['AMOUNT']);
$email  = $_POST['email'];
$phone  = $_POST['phone']; 


$vars = array();
$vars{'AMOUNT'} = $sum;
$vars{'CURRENCY'} = 'RUB';  
$vars{'ORDER'} = preg_replace('/[^0-9]/', '', $orderNumber);
//$vars{'DESC'} = 777;
$vars{'MERCH_NAME'} = "OB'EDINENNYE";
$vars{'MERCH_URL'} = 'www.ru';
$vars{'MERCHANT'} = 200;
$vars{'TERMINAL'} = 200;
$vars{'TRTYPE'} = 1;
$vars{'COUNTRY'} = "RU";
$vars{'MERCH_GMT'} = (-3);
$vars{'TIMESTAMP'} = (date('YmdHms'));
$vars{'NONCE'} = (substr(md5(rand(1,9999).microtime()), 0, 16));
$vars{'BACKREF'} = 'http://payOK';


    //$mess = iconv_strlen($vars{'AMOUNT'}).$vars{'AMOUNT'}.$vars{'CURRENCY'}.$vars{'ORDER'}.$vars{'MERCH_NAME'}.$vars{'MERCH URL'}.$vars{'MERCHANT'}.$vars{'TERMINAL'}.$vars{'TRTYPE'}.$vars{'COUNTRY'}.$vars{'MERCH_GMT'}.$vars{'TIMESTAMP'}.$vars{'NONCE'}.$vars{'BACKREF'}; 
foreach ($vars as $key => $value) {
	$mess .=(iconv_strlen($value)).$value;
}
 

$vars{'P_SIGN'} = test($mess);

?>
