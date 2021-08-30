<?php

  include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <title>All blogs</title>
  <style>
    *{
      margin: 0;
      padding:0;
      box-sizing: border-box;
      list-style-type: none;
      text-decoration: none;
      font-family: 'Exo 2', sans-serif;
      color: #fff;
    }
    body{
      background: #aa00ff;
    }
    .container{
      width: 80%;
      margin: 0 auto;
      align-items: center;
    }
    section{
      background-color: #aa00ff;
      height: 100vh;
      width: 100wh;
    }
    header{
      padding-top: 20px;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }
    .logo{
      font-size: 40px;
      color: #fff;
      border-bottom: 1px solid transparent;
      transition: all 0.3s ease;
      opacity: 0.6;
    }
    .logo:hover{
      opacity: 1;
      border-bottom: 1px solid #fff;
      text-decoration: none;
      color: #fff;
    }
    .form-div{
      width: 100%;
      background-color: #7c409b;
      margin: 0 auto;
      padding: 20px;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-around;
      margin-bottom: 50px;
      border-radius: 20px;
      box-shadow: 0px 10px 40px #000;
    }
    div.box{
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background: #aa00ff;
      width: 40%;
      margin: 10px;
      border-radius: 20px;
      padding: 10px;
    }
    h1.all{
      width: 100%;
      text-align: center;
      margin-bottom: 50px;
    }
  </style>
</head>
<body>
  <section>
    <div class="container">
      <header>
        <a href="../index.php" class="logo"> Blog </a>
        <div>
          <a href="all-blogs.php" class="btn btn-info"><i class="fas fa-border-all"></i> &nbsp; All blogs</a> &nbsp;
          <a href="main.php" class="btn btn-success"><i class="fas fa-plus"></i> &nbsp; Add blogs</a>
        </div>
      </header>
      <div class="form-div"> 
        <h1 class="all">All blogs:</h1>
        <?php
          $sql = "SELECT * FROM `blocks`";
          $result = mysqli_query($mysql, $sql);
          if($result){
            // echo 'Back to page';
          }
          while ($row = mysqli_fetch_array($result)){
        ?>
            <div class="box">
              <h1><?php echo $row['title']; ?></h1>
              <p><?php echo $row['content']; ?></p>
              <img src="<?php echo $row['img']; ?>" alt="">
              <h4><?php echo $row['author']; ?></h4>
              <p><?php echo $row['time']; ?></p>
              <div>
                <a class="btn btn-warning" href="update.php?edit=<?php echo $row['id'] ?>"><i class="far fa-edit"></i> Edit</a>
                <a class="btn btn-danger" href="delete.php?delete=<?php echo $row['id'] ?>"><i class="far fa-trash-alt"></i> Delete</a>
              </div>
            </div>
            
        <?php
          }
        ?>
      </div>
    </div>
  </section>
</body>
</html>