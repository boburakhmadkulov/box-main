<?php
  include '../box-main/files/config.php';
  if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $img = $_POST['img'];
    $author_name = $_POST['author_name'];
    $time = $_POST['time'];

    $sql = "INSERT INTO `blocks`(`title`, `content`, `img`, `author`, `time`) VALUES ('$title', '$content', '$img', '$author_name', '$time')";

    $result = mysqli_query($mysql, $sql);

    if($result){
      echo 'New blog added successfully!';
    }
    else{
      echo 'Error' . $sql . '<br>' . $mysql -> error ;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <title>Main page</title>
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
      margin-bottom: 80px;
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
      width: 80%;
      background-color: #7c409b;
      margin: 0 auto;
      padding: 150px 20px;
      margin-bottom: 50px;
      border-radius: 20px;
      box-shadow: 0px 20px 60px #000;
    }
    a.start{
      width: 70%;
      height: 100px;
      align-items: center;
      font-size: 60px;
    }
  </style>
</head>
<body>
  <section>
    <div class="container">
      <header>
        <a href="main.php" class="logo"> Blog </a>
        <div>
          <a href="#!" class="btn btn-info"><i class="fas fa-border-all"></i> &nbsp; All blogs</a> &nbsp;
          <a href="#!" class="btn btn-success"><i class="fas fa-plus"></i> &nbsp; Add blogs</a>
        </div>
      </header>
      <div class="form-div" align='center'> 
        <h1>For adding blog or review all blogs, please click on "START" button!</h1><br><br>
        <a href="files/main.php" class="btn btn-danger start"><i class="far fa-play-circle"></i>&nbsp; START</a>
      </div>
    </div>
  </section>
</body>
</html>