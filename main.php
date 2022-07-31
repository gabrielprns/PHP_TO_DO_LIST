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
    <form action="app/add.php" method= "POST" autocomplete = "off">
      <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){?>
        <input type="text"
             name= "title"
             style="border-color: #ff6666"
             placeholder = "É necessário preencher este campo" />
        <button type="submit">Add &nbsp; <span>&#43</span></button>
      <?php }else{ ?>
        <input type="text"
              name= "title"
              placeholder = "O que você fará hoje?" />
        <button type="submit">Add &nbsp; <span>&#43</span></button>
      <?php } ?>
    </form>
  </div>
  <?php
    $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
  ?>

  <div class="show-all-section">
    <?php if($todos->rowcount() <= 0){?>
        <div class = "empty">
            <img src="img/f.png" width="100%" />
            <img src="img/Ellipsis.gif" width="80px">
        </div>
    <?php } ?>

    <?php while($todo = $todos -> fetch(PDO::FETCH_ASSOC)) {?>
      <div class = "all-item">
        <span id="<?php echo $todo["id"]; ?>" 
          class="remove-to-do">x</span>
        <?php if($todo["checked"]){ ?>
            <input type="checkbox" 
                  class="check-box"
                  checked/>
            <h2 class = "checked"><?php echo $todo['title'] ?></h2>
        <?php }else{ ?>
            <input type="checkbox" 
                    class="check-box"/>
            <h2><?php echo $todo['title'] ?></h2>
        <?php } ?>
        <br>
        <small>criado em 28/07/2022</small>
      </div>
    <?php } ?>
  </div>

</div>
  
</body>
</html>