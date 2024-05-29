<?php
  include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    if(isset($_GET['updateId'])){
      $id = $_GET['updateId'];
      $sql = "SELECT * FROM student where id = $id";
      $result = mysqli_query($con, $sql);
      if($result){
        $fetch = mysqli_fetch_assoc($result);
          $name = $fetch['name'];
          $email = $fetch['email'];
          $phone = $fetch['phone'];
          $course = $fetch['course'];
      }
    }
    if(isset($_POST['saveStudent'])){
      $studentName = $_POST['name'];
      $studentEmail = $_POST['email'];
      $studentPhone = $_POST['phone'];
      $studentCourse = $_POST['course'];
      $sql = "UPDATE  student set name = '$studentName', email = '$studentEmail',
      phone = '$studentPhone', course = '$studentCourse' where id = $id";
      $result = mysqli_query($con, $sql);
      if($result){
        header('location:display.php');
        // echo "updated successfully";
      }
      else{
        echo "there is an error!!!";
      }
    }
  ?>

<form action="" method="post">
    <div>
      <label for="">Student Name</label>
      <input type="text" value="<?php echo $name?>" name="name">
    </div>
    <div>
      <label for="">Student Email</label>
      <input type="text" value="<?php echo $email?>" name="email">
    </div>
    <div>
      <label for="">Student Phone</label>
      <input type="number" value="<?php echo $phone?>" name="phone">
    </div>
    <div>
      <label for="">Student Course</label>
      <input type="text" value="<?php echo $course?>" name="course">
    </div>
    <div>
      <button type="submit" name="saveStudent">Save Student</button>
    </div>
  </form>
</body>
</html>