<?php

require'condb.php';
mysqli_set_charset($conn,"utf8");
$sql = "SELECT *FROM ".$_GET['name']." ORDER BY id DESC LIMIT 10";
$res = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($res);

    if($num_rows > 0){
      while($result = mysqli_fetch_array($res)){
        $rows[]=$result;
      }
      header("Access-Control-Allow-Credentials: true");
      header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
      header('Access-Control-Max-Age: 1000');
      header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

      header('Content-Type: application/x-www-form-urlencoded');
      header('Content-Type: application/json');
      header('Access-Control-Allow-Origin: *');
      header("Content-Type: application/json;charset=utf-8");

      $data = json_encode($rows,JSON_UNESCAPED_UNICODE);
      $totaldata = sizeof($rows);
      $results = '{"results":'.$data.'}';

      }else{
      $results = '{"results":""}';
      //$results = '{"results":""}'; แก้เป็นตัวนี้ถึงจะสามารถใช้ myDataArray.length == 0 ได้ ใน ionic ตอนไม่มีข้อมูล
      }

echo $data;
?>
