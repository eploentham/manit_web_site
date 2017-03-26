<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ipaddress = '';
function get_client_ip() {
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    //echo $ipaddress;
    //$ipaddress = $_SERVER['REMOTE_ADDR'];
    return $ipaddress;
}
function setIPView(){
    $ipaddress = get_client_ip();
    //echo $ipaddress;
    $objConnect = mysqli_connect("localhost",'root','Ekartc2c5','manit');
    $obj = mysqli_query($objConnect, "Insert Into oc_customer_ip (ip, date_added) Value('".$ipaddress."',now());");
    mysqli_close($objConnect);
}
function carYear(){
    
}