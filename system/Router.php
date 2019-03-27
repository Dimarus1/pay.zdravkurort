<?php

function generatePage($title,$css_arr,$page){
    include DOCROOT."pages/templates/template.php";
}

function main_page(){
    generatePage("Main",[],"main");
}

function page404(){
    echo "404 PAGE";
}

function api_page(){
    generatePage("ZDRAVKURORT",[],"api");
}

function form1_page(){
    generatePage("ZDRAVKURORT",[],"form1");
}

function form2_page(){
    generatePage("ZDRAVKURORT",[],"form2");
}

function info_page(){
    generatePage("ZDRAVKURORT",[],"info");
}

function form1112_page(){
    generatePage("ZDRAVKURORT",[],"form1112");
}

function form2222_page(){
    generatePage("ZDRAVKURORT",[],"form2222");
}

function form1113_page(){
    generatePage("ZDRAVKURORT",[],"form1113");
}

function form3333_page(){
    generatePage("ZDRAVKURORT",[],"form3333");
}