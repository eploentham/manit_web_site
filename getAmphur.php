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
}else if($_GET['flagPage']=="search_car"){
    $txt="<table class='table table-hover table-expandable table-striped'><thead><tr><th>Country</th><th>Population</th><th>Area</th><th>Official languages</th></tr></thead><tbody>
      <tr>
        <td>United States of America</td>
        <td>306,939,000</td>
        <td>9,826,630 km2</td>
        <td>English</td>
      </tr><tr><td colspan='5'><h4>Additional information</h4><ul><li><a href='http://en.wikipedia.org/wiki/Usa'>USA on Wikipedia</a></li><li><a href='http://nationalatlas.gov/'>National Atlas of the United States</a></li><li><a href='http://www.nationalcenter.org/HistoricalDocuments.html'>Historical Documents</a></li></ul></td>
      </tr><tr>
        <td>United Kingdom </td>
        <td>61,612,300</td>
        <td>244,820 km2</td>
        <td>English</td>
      </tr><tr>
        <td colspan='5><h4>Additional information</h4>
          <ul>
            <li><a href='http://en.wikipedia.org/wiki/United_kingdom'>UK on Wikipedia</a></li>
            <li><a href='http://www.visitbritain.com/'>Official tourist guide to Britain</a></li>
            <li><a href='http://www.statistics.gov.uk/StatBase/Product.asp?vlnk=5703'>Official Yearbook of the United Kingdom</a></li>
          </ul></td>
      </tr>
      <tr>
        <td>India</td>
        <td>1,147,995,904</td>
        <td>3,287,240 km2</td>
        <td>Hindi, English</td>
      </tr>
      <tr>
        <td colspan='5'><h4>Additional information</h4>
          <ul>
            <li><a href='http://en.wikipedia.org/wiki/India'>India on Wikipedia</a></li>
            <li><a href='http://india.gov.in/'>Government of India</a></li>
            <li><a href='http://wikitravel.org/en/India'>India travel guide</a></li>
          </ul></td>
      </tr>
      <tr>
        <td>Canada</td>
        <td>33,718,000</td>
        <td>9,984,670 km2</td>
        <td>English, French</td>
      </tr>
      <tr>
        <td colspan='5'><h4>Additional information</h4>
          <ul>
            <li><a href='http://en.wikipedia.org/wiki/Canada'>Canada on Wikipedia</a></li>
            <li><a href='http://atlas.gc.ca/site/index.html' >Official 
              Government of Canada online Atlas of Canada</a></li>
            <li><a href='http://wikitravel.org/en/Canada'>Canada travel guide</a></li>
          </ul></td>
      </tr></tbody></table>";
    $resultArray = $txt;
    
}
mysqli_close($conn);

header('Content-Type: application/json');
echo json_encode($resultArray);