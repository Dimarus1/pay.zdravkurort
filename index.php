<?php

define ("DOCROOT",$_SERVER["DOCUMENT_ROOT"]."/");
define ("URLROOT","/");
function URL($url){
    return URLROOT.$url;
}
require DOCROOT."system/Router.php";
$routes = include DOCROOT."system/route.php";


if (isset($_GET["page"])){

    $page = $_GET["page"];

    if(isset($routes[$page])){
        call_user_func($routes[$page]);
    }else{
        page404();
    }
}else{
    main_page();
}

?>