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


//header('Content-Type: application/json');
echo json_encode($txt);