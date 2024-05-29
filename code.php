<?php
  include('connect.php');
  if(isset($_POST['saveStudent'])){
    $studentName = $_POST['name'];
    $studentEmail = $_POST['email'];
    $studentPhone = $_POST['phone'];
    $studentCourse = $_POST['course'];

    $sql = "SELECT * FROM student WHERE name = '$studentName'";
    $result = mysqli_query($con, $sql);
    if($result){
      $row = mysqli_num_rows($result);
      echo $row;
      if($row > 0){
        echo "Already exist";
      }
      else{
        $sql = "INSERT INTO student(name, email, phone, course)
        VALUES('$studentName', '$studentEmail', '$studentPhone', '$studentCourse')";
        $result = mysqli_query($con, $sql);
        if($result){
          header('location:display.php');
          // echo "Data inserted successfully";
        }
        else{
          echo "There is an error in inserting data!";
        }
      }
    }
  }
?>