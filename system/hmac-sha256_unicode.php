<?php

/* Set internal character encoding to UTF-8 */
mb_internal_encoding('UTF-8');

/* Convert raw string to byte string. */
function raw2byte($str){

    $str = mb_convert_encoding($str, 'UCS-2LE', 'UTF-8');
    $strlength = strlen($str) / 2;
    $ret = array($strlength);

    for($i = 0; $i < $strlength; $i++){
        $k1 = ord(substr($str, 2*$i, 1));
        $k2 = ord(substr($str, 2*$i+1, 1));
        $k = $k2 * 256 + $k1;
        $ret[$i] = dechex((($k >> 4) & 0x0F)) . dechex(($k & 0x0F));
    }

    return hex2bin(join('', $ret));
}

/* Compute hmac-sha256 */
function hmac_sha256($hex_key, $secret) {
    $byte_key = hex2bin($hex_key);
    $byte_msg = raw2byte($secret);
    return strtoupper(hash_hmac('sha256', $byte_msg, $byte_key));
}

function test($mess) {
    $KEY = "34CFDABD52E424FF2DB2CCFE8D98C75ADE3517E372B8B809C80C976637DD3113";
    $MSG = $mess;
    return(hmac_sha256($KEY, $MSG));
}



?>
