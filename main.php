<?php
require "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To do List</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class = "main-section">
  <div class = "add-section">
    <form action="">
      <input type="text"
             name= "title"
             placeholder = "É necessário preencher este campo" />
      <button type="submit">Add &nbsp; <span>&#43</span></button>
    </form>
  </div>

  <div class="show-all-section">
    <div class = "all-item">
      <input type="checkbox">
      <h2>pppppp</h2>
      <br>
      <small>criado em 28/07/2022</small>
    </div>
  </div>

</div>
  
</body>
</html>