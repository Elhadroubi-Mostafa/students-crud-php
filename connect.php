<?php
  $con = new mysqli('localhost', 'root', '', 'students');
  if($con){
    echo "connected successfully";
  }
  else{
    echo mysqli_error($con);
  }
?>