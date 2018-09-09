<!DOCTYPE html>
<html lang="th">
<head>
  <title>ตุ๊ดตู่</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="column">
<br>
  <h2>รายชื่อ</h2>
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>userid</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Gender</th>
        <th>BirthDate</th>
        <th>Age</th>
        <th>Citizenship</th>
        <th>Blood type</th>
        <th>Blood type other</th>
        <th>Address</th>
        <th>City</th>
        <th>Zip Code</th>
        <th>Tel</th>
        <th>Email</th>
        <th>Size</th>
        <th>Con_dis</th>
      </tr>
    </thead>

  <tbody>
     
<?php
include("conn/mysqlconn.php");
$sql = "select * from userprofile2";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
  <tr>
    <td><?php echo $row["userid"]; ?></td>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["lname"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["birthdate"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["citizen"]; ?></td>
    <td><?php echo $row["blood_type"]; ?></td>
    <td><?php echo $row["blood_type_name"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["zipcode"]; ?></td>
    <td><?php echo $row["tel"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["shirt_size"]; ?></td>
    <td><?php echo $row["con_dis"]; ?></td> 
  </tr>    
  <?php
      }
    }else {
    echo "0 result";
}

?>
</tbody>
</table>
</body>
</html>