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
  <div>
    <h3>Student detail</h3>
    <a href="index1.php">Add student</a>
  </div>
  <div>
    <?php
      $sql = "SELECT * FROM student";
      $result = mysqli_query($con, $sql);
      if($result){
        $row = mysqli_num_rows($result);
        // echo $row;
        if($row > 0){
          
    ?>
    <table>
      <thead>
        <tr>
        <th>ID</th>
        <th>name</th>
        <th>email</th>
        <th>course</th>
        <th>phone</th>
        <th>Action</th>
        </tr>
      </thead>
    <tbody>
        <?php
      while($fetch = mysqli_fetch_assoc($result)){
            
         ?>
        <tr>
          <td><?php echo $fetch['id']?></td>
          <td><?php echo $fetch['name']?></td>
          <td><?php echo $fetch['email']?></td>
          <td><?php echo $fetch['course']?></td>
          <td><?php echo $fetch['phone']?></td>
          <td>
            <a href="update.php?updateId=<?php echo $fetch['id']?>">
            <button>Update</button>
            </a>
            <a href="delete.php?deleteId=<?php echo $fetch['id']?>">
            <button>Delete</button>
            </a>
          </td>
        </tr>
        <?php
      }
        }
      }
      ?>
      </tbody>
    </table>
  </div>
</body>
</html>