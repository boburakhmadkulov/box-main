<?php
  include 'config.php';

  $sql = "SELECT * FROM `blocks`";
  $result = mysqli_query($mysql, $sql);

?>

<head>
  <title>View page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
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
      background-color: #7c409b;
      margin: 0 auto;
      padding: 20px;
      margin-bottom: 50px;
      border-radius: 20px;
      box-shadow: 0px 20px 60px #000;
    }
    th{
      color: #5cb85c;
    }
  </style>
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
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>title</th>
              <th>content</th>
              <th>img</th>
              <th>author</th>
              <th>time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = "SELECT * FROM `blocks`";
              $result = mysqli_query($mysql, $sql);
              if($result){
                echo 'Back to page';
              }
              while ($row = mysqli_fetch_array($result)){
            ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['content']; ?></td>
                <td><?php echo $row['img']; ?></td>
                <td><?php echo $row['author']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td>
                  <a class="btn btn-warning" href="update.php?edit=<?php echo $row['id'] ?>"><i class="far fa-edit"></i> Edit</a>
                  <a class="btn btn-danger" href="delete.php?delete=<?php echo $row['id'] ?>"><i class="far fa-trash-alt"></i> Delete</a>
                </td>
                </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</body>