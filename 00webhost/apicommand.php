<?php

require'condb.php';
mysqli_set_charset($conn,"utf8");
$sql = "UPDATE rl_command SET command = '".$_GET['command']."'WHERE name = '".$_GET['name']."'";

mysqli_query($conn,$sql);


      header("Access-Control-Allow-Credentials: true");
      header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
      header('Access-Control-Max-Age: 1000');
      header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

      header('Content-Type: application/x-www-form-urlencoded');
      header('Content-Type: application/json');
      header('Access-Control-Allow-Origin: *');
      header("Content-Type: application/json;charset=utf-8");


echo "Command is :".$_GET['command'];

?>