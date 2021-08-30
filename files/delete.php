<?php

  include 'config.php';

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM `blocks` WHERE id='$id'";

    $result = mysqli_query($mysql, $sql);
    if($result){
      echo 'Blog deleted successfuly!';
      header('location: all-blogs.php');
    }
    else{
      echo "Error:" . $sql . "<br>" . $conn->error;
    }
  }

?>