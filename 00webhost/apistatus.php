<?php

require'condb.php';
mysqli_set_charset($conn,"utf8");
$sql = "SELECT *FROM status ";
$res = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($res);

    if($num_rows > 0){
      while($result = mysqli_fetch_array($res)){
        //$rows[]=$result;


        switch ($result['name']) {
            case "sensor_1":
                $st1 = array("name1" => $result['name'],"status1" => $result['status'],"status_data1" => $result['status_data']);

                break;
            case "sensor_2":
                $st2 = array("name2" => $result['name'],"status2" => $result['status'],"status_data2" => $result['status_data']);
                break;
            case "sensor_3":
                $st3 = array("name3" => $result['name'],"status3" => $result['status'],"status_data3" => $result['status_data']);
                break;
            case "sensor_4":
                $st4 = array("name4" => $result['name'],"status4" => $result['status'],"status_data4" => $result['status_data']);
                break;
            default:
                break;
        }
      }
      header("Access-Control-Allow-Credentials: true");
      header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
      header('Access-Control-Max-Age: 1000');
      header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

      header('Content-Type: application/x-www-form-urlencoded');
      header('Content-Type: application/json');
      header('Access-Control-Allow-Origin: *');
      header("Content-Type: application/json;charset=utf-8");
      $datarecive = array_merge($st1,$st2,$st3,$st4);

      $data = json_encode($datarecive,JSON_UNESCAPED_UNICODE);
      //$totaldata = sizeof($rows);
      $results = '{"results":'.$data.'}';

      }else{
      $results = '{"results":""}';
      //$results = '{"results":""}'; แก้เป็นตัวนี้ถึงจะสามารถใช้ myDataArray.length == 0 ได้ ใน ionic ตอนไม่มีข้อมูล
      }

echo $data;
?>
