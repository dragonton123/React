<?php
require'condb.php';
mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM sensor_1 ORDER BY id DESC limit 2";
$result = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($result);
$sensor_1 = array("data1" => $res['data']);

$sql = "SELECT * FROM sensor_2 ORDER BY id DESC limit 2";
$result = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($result);
$sensor_2 = array("data2" => $res['data']);

$sql = "SELECT * FROM sensor_3 ORDER BY id DESC limit 2";
$result = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($result);
$sensor_3 = array("data3" => $res['data']);

$sql = "SELECT * FROM sensor_4 ORDER BY id DESC limit 2";
$result = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($result);
$sensor_4 = array("data4" => $res['data']);






$datarecive = array_merge($sensor_1,$sensor_2,$sensor_3,$sensor_4);
      header('Content-Type: application/json');
      header('Access-Control-Allow-Origin: *');
      header("Content-Type: application/json;charset=utf-8");

      $data = json_encode($datarecive,JSON_UNESCAPED_UNICODE);
      // $totaldata = sizeof($rows);
      // $results = '{"results":'.$data.'}';


echo $data;
?>
