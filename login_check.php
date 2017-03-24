<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'config.php';
if($_GET['flagPage']=="login"){
    $objConnect = mysqli_connect("localhost",'root','Ekartc2c5','manit');
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $sql = "Select * From customer Where email = '".$_GET['loEmail']."' and password = '".$_GET['loPassword']."'";
    $result = mysqli_query($objConnect, $sql);
    if ($result=mysqli_query($con,$sql)){
        $obj = mysqli_fetch_array($result);
        $row = mysqli_num_rows($result);
        if($row>=1){
            echo $row["user_login"];
        }else{
            echo "no";
        }
    }
    
    mysqli_free_result($result);
    mysqli_close($objConnect);
}else if($_GET['flagPage']=="login_check_email"){
    $objConnect = mysqli_connect("localhost",'root','Ekartc2c5','manit');
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $sql = "Select * From customer Where email = '".$_GET['loEmail']."' and password = '".$_GET['loPassword']."'";
    $result = mysqli_query($objConnect, $sql);
    if ($result=mysqli_query($con,$sql)){
        $obj = mysqli_fetch_array($result);
        $row = mysqli_num_rows($result);
        if($row>=1){
            echo $row["user_login"];
        }else{
            echo "no";
        }
    }
}
