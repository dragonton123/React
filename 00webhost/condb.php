<?php
  $host = "localhost"; // ชื่อ host หรือ ip ที่ใช้
	$userhost = "id2383248_root"; // ชื่อ user ที่ใช้ในการล็อกอิน
	$passhost = "123456"; // password ที่ใช้ในการล็อกอิน
	$database = "id2383248_smartfarm"; // ชื่อ Database
	$conn = mysqli_connect($host,$userhost,$passhost,$database);
	if(!$conn){
		echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
	}
  ?>
