<?php

if(isset($_POST['title'])){
  require '../db_conn.php';

  $title = $_POST['title'];

  if(empty($title)){
    header("Location: ../main.php?mess=error");
  }
}
?>