<?php

  include 'config.php';

  if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $content = $_POST['content'];
    $img = $_POST['img'];
    $author = $_POST['author_name'];
    $time = $_POST['time'];

    $sql = "UPDATE `blocks` SET `title`='$title',`content`='$content',`img`='$img',`author`='$author',`time`='$time' WHERE id='$id'";
    $result = mysqli_query($mysql, $sql);

    if($result){
      echo 'Blog edited successfuly!';
      header('location: all-blogs.php');
    }
    else{
      echo "Error:" . $sql . "<br>" . $mysql->error;
    }
  }

  if (isset($_GET['edit'])){
    $id = $_GET['edit'];

    $sql = "SELECT * FROM `blocks` WHERE id='$id'";
    $result = mysqli_query($mysql, $sql);

    if($result){
      while($row = mysqli_fetch_array($result)){
        $title = $row['title'];
        $content = $row['content'];
        $img = $row['img'];
        $author = $row['author'];
        $time = $row['time'];
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
        <title>Edit page</title>
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
            width: 80%;
            background-color: #7c409b;
            margin: 0 auto;
            padding: 20px;
            margin-bottom: 50px;
            border-radius: 20px;
            box-shadow: 0px 20px 60px #000;
          }
          form{
            width: 80%;
            font-size: 30px;
          }
          input{
            width: 80%;
            height: 40px;
            background-color: transparent;
            border-radius: 20px;
            border: 2px solid #fff;
            padding-left: 20px;
            padding-right: 10px;
            font-size: 20px;
            color: #fff;
          }
          input:focus{
            outline: none;
          }
          textarea{
            background-color: transparent;
            border-radius: 20px;
            border: 2px solid #fff;
            padding: 20px;
            font-size: 20px;
            color: #fff;
          }
          textarea:focus{
            outline: none;
          }
          label{
            cursor: pointer;
            background-color: transparent;
            border-radius: 20px;
            border: 2px solid #fff;
            padding: 20px;
            font-size: 20px;
            color: #fff;
            opacity: 0.6;
            transition: all 0.3s ease;
            width: 60%;
          }
          label:hover{
            opacity: 1;
          }
          label:focus{
            outline: none;
          }
          #file-upload{
            display: none;
          }
          .send{
            width: 50%;
            height: 60px;
          }
        </style>
      </head>
      <body>
        <section>
          <div class="container">
            <header>
              <a href="../index.php" class="logo"> Blog </a>
              <div>
                <a href="#!" class="btn btn-info"><i class="fas fa-border-all"></i> &nbsp; All blogs</a> &nbsp;
                <a href="main.php" class="btn btn-success"><i class="fas fa-plus"></i> &nbsp; Add blogs</a>
              </div>
            </header>
            <div class="form-div" align='center'> 
              <form action="" method="post">
                <fieldset>
                  <legend style="color: #fff;">Blog information edit form:</legend>
                  Title:<br>
                  <input type="text" name="title" value="<?php echo $title; ?>">
                  <input type="hidden" name="id" value="<?php echo $id; ?>"><br><br>
                  Content:<br>
                  <textarea name="content" cols="50" rows="8" value="<?php echo $content; ?>"></textarea><br><br>
                  Image of your blog:<br>
                  <label for="file-upload">
                    Browse your files
                    <input type="file" name="img" id="file-upload" value="<?php echo $img; ?>">
                  </label><br><br>
                  Author name:<br>
                  <input type="text" name="author_name" value="<?php echo $author; ?>"><br><br>
                  Date:<br>
                  <input type="date" name="time" value="<?php echo $time; ?>"><br><br>
                  <button name="submit" type="submit" class="btn btn-danger send"><i class="far fa-edit"></i> &nbsp;Edit</button>
                </fieldset>
              </form>
            </div>
          </div>
        </section>
      </body>
      </html>

<?php
    }
  }
?>