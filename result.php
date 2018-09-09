<!DOCTYPE html>
<html lang="th">
<head>
<title>ตุ๊ดตู่</title>


<meta charset="UTF-8">
<style>
* {
    box-sizing: border-box;
}
body {
    font-family: Arial, Helvetica, sans-serif;
}
header {
  background: url(img/head.jpg);
  background-position: 100% 100%;
    background-color: #666;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}
section {
    display: -webkit-flex;
    display: flex;
}
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #5e8db2;
  padding: 20px;
}
nav ul {
    list-style-type: none;
    padding: 0;
}
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #7ebbea;
  padding: 20px;
}

footer {
    background-color: #3b6382;
    padding: 10px;
    text-align: center;
    color: white;
}
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}

</style>
</head>
<body style="background-image:url('img/bg.jpg')">
<header>
<h1>Run for ตุ๊ดตู่</h1>
</header>

<section>
<nav>
	<ul>
      <li><a href="index.php">หน้าหลัก</a></li><br>
  		<li><a href="register.php">สมัครวิ่ง</a></li><br>
  		<li><a href="report.php" target="_blank">ตรวจสอบรายชื่อ</a></li><br>
	</ul>
</nav>
<article>
  <?php
    include("conn/mysqlconn.php");
  // define variables and set to empty values
  $fname = $lname = $email = $gender = $comment = $website = $day = $month = $year ="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $age = test_input($_POST["age"]);
    $address = test_input($_POST["address"]);
    $gender = test_input($_POST["gender"]);
    $day = test_input($_POST["day"]);
    $month = test_input($_POST["month"]);
    $year = test_input($_POST["year"]);
    $citizen = test_input($_POST["citizen"]);
    $blood_type = test_input($_POST["blood_type"]);
    $blood_type_name = test_input($_POST["blood_type_name"]);
    $city = test_input($_POST["city"]);
    $zipcode = test_input($_POST["zipcode"]);
    $tel = test_input($_POST["tel"]);
    $shirt_size = test_input($_POST["shirt_size"]);
    $con_dis = test_input($_POST["con_dis"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $bd = $year."-".$month."-".$day;

  echo "<h3>ได้เวลาวิ่งแล้ว</h3>";
  echo $fname,"<br>";
  echo $lname,"<br>";
  echo $gender,"<br>";
  echo $day." ".$month." ".$year,"<br>";
  echo $age,"<br>";
  echo $citizen,"<br>";
  echo $blood_type,$blood_type_name,"<br>";
  echo $address,"<br>";
  echo $city." ".$zipcode,"<br>";
  echo $tel,"<br>";
  echo $email,"<br>";
  echo $shirt_size,"<br>";
  echo $con_dis,"<br>";

  $sql = "INSERT INTO userprofile2 (fname, lname, gender, birthdate, age, citizen, blood_type, blood_type_name, address, city, zipcode, tel, email, shirt_size, con_dis)
  VALUES ('$fname', '$lname', '$gender', '$bd', '$age', '$citizen', '$blood_type', '$blood_type_name', '$address', '$city', '$zipcode', '$tel', '$email', '$shirt_size', '$con_dis')";

  //echo $sql."<br>";

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?><br>
 <a href="report.php">ตรวจสอบรายชื่อ</a></li><br>
  </article>
</section>
<footer>
  <p>Footer</p>
</footer>


</body>
</html>
