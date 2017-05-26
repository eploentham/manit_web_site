<?php
require_once("config.php");
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conn = mysqli_connect($hostDB,$userDB,$passDB,$databaseName);
mysqli_set_charset($conn, "UTF8");
$resultArray = array();
if($_GET['flagPage']=="amphur"){
    $sql="Select * From amphures Where prov_id = '".$_GET['prov_id']."'  Order By amphur_code";
    if ($result=mysqli_query($conn,$sql)){
        $ok="";
        $err="";
        if(!$result){
            $ok="0";
            $err= mysql_error();
            $tmp = array();
            $tmp["error"] = $err;
            $tmp["sql"] = $sql;
            array_push($resultArray,$tmp);
        }else{
            $ok="1";
            $tmp = array();
            $tmp["sql"] = $sql;
            array_push($resultArray,$tmp);
            while($row = mysqli_fetch_array($result)){        
                $tmp["amphur_id"] = $row["amphur_id"];
                $tmp["amphur_name"] = $row["amphur_name"];
                array_push($resultArray,$tmp);
            }
        }
        $result->free();
    }
}else if($_GET['flagPage']=="district"){
    $sql="Select d.*, z.zipcode From districts d Left Join zipcodes z On d.district_code = z.district_code Where d.amphur_id = '".$_GET['amphur_id']."' Order By d.district_code";
    if ($result=mysqli_query($conn,$sql)){
        $ok="";
        $err="";
        if(!$result){
            $ok="0";
            $err= mysqli_error();
            $tmp = array();
            $tmp["error"] = $err;
            $tmp["sql"] = $sql;
            array_push($resultArray,$tmp);
        }else{
            $ok="1";
            $tmp = array();
            $tmp["sql"] = $sql;
            array_push($resultArray,$tmp);
            while($row = mysqli_fetch_array($result)){        
                $tmp["district_id"] = $row["district_id"];
                $tmp["district_name"] = $row["district_name"];
                $tmp["zipcode"] = $row["zipcode"];
                array_push($resultArray,$tmp);
            }
        }
        $result->free();
    }
}else if($_GET['flagPage']=="zipcode"){
    $sql="Select z.zipcode From zipcodes z Left Join districts d On z.district_code = d.district_code Where district_id = '".$_GET['district_id']."' ";
    if ($result=mysqli_query($conn,$sql)){
        $ok="";
        $err="";
        if(!$result){
            $ok="0";
            $err= mysqli_error();
            $tmp = array();
            $tmp["error"] = $err;
            $tmp["sql"] = $sql;
            array_push($resultArray,$tmp);
        }else{
            $ok="1";
            $tmp = array();
            $tmp["sql"] = $sql;
            array_push($resultArray,$tmp);
            while($row = mysqli_fetch_array($result)){
                $tmp["zipcode"] = $row["zipcode"];
                array_push($resultArray,$tmp);
            }
        }
        $result->free();
    }
}else if($_GET['flagPage']=="model_car"){
    $sql="Select model_code, model_name From car_model  Where status_car = '1' and brand_code = '".$_GET['brand_code']."' ";
    if ($result=mysqli_query($conn,$sql) or die(mysqli_error($conn))){
        $ok="";
        $err="";
        if(!$result){
            $ok="0";
            $err= mysqli_error($conn);
            $tmp = array();
            $tmp["error"] = $err;
            $tmp["sql"] = $sql;
            array_push($resultArray,$tmp);
        }else{
            while($row = mysqli_fetch_array($result)){
                $tmp["model_code"] = $row["model_code"];
                $tmp["model_name"] = $row["model_name"];
                array_push($resultArray,$tmp);
            }
        }
        $result->free();
    }else{
        echo $query.' '.mysqli_error($conn);
    }
}else if($_GET['flagPage']=="model_moto"){
    $sql="Select model_code, model_name From car_model  Where status_moto = '1' and brand_code = '".$_GET['brand_code']."' ";
    if ($result=mysqli_query($conn,$sql) or die(mysqli_error($conn))){
        $ok="";
        $err="";
        if(!$result){
            $ok="0";
            $err= mysqli_error($conn);
            $tmp = array();
            $tmp["error"] = $err;
            $tmp["sql"] = $sql;
            array_push($resultArray,$tmp);
        }else{
            while($row = mysqli_fetch_array($result)){
                $tmp["model_code"] = $row["model_code"];
                $tmp["model_name"] = $row["model_name"];
                array_push($resultArray,$tmp);
            }
        }
        $result->free();
    }else{
        echo $query.' '.mysqli_error($conn);
    }
}
mysqli_close($conn);

header('Content-Type: application/json');
echo json_encode($resultArray);