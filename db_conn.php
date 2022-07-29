<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "to_do_list";

try{
  $conn = new PDO("mysql:host=$sName;db_name=$db_name",
                  $uName, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOExpetion $e){
  echo "Connection failed: ". $e->getMessage();
}
?>