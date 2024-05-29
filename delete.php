<?php
  include('connect.php');
  if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];
    $sql = "DELETE from student where id = $id";
    $result = mysqli_query($con, $sql);
    if($result){
      header('location:display.php');
    }
    else echo "there was an error!!!";
  }
?>