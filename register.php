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
    section {
      -webkit-flex-direction: column;
      flex-direction: column;
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
      <h2>Running Forms</h2>

      <form method="post" action="result.php">
      First name*:<br><!--ชื่อจริง-->
          <input type="text" name="fname" >
      <br>
      Last name*:<br><!--นามสกุล-->
          <input type="text" name="lname" >
      <br><br>
      <B>Gender*</B><br><!--เพศ-->

          <input type="radio" name="gender" value="male"> Male<br>
          <input type="radio" name="gender" value="female"> Female<br>

      <br>
      <B>Brith Date(DD/MM/YY)*</B><input type="text" name="day" size="2"> / <input type="text" name="month" size="2"> / <input type="text" name="year" size="2">
      <B>Age*</B> <input type="text" name="age" size="2">
      <br><br>
      <B>Citizenship*</B><input type="text" name="citizen">
      <br><br>
      <B>Blood type*</B><br>
          <input type="radio" name="blood_type" value="A"> A
          <br>
          <input type="radio" name="blood_type" value="B"> B
          <br>
          <input type="radio" name="blood_type" value="O"> O
          <br>
          <input type="radio" name="blood_type" value="AB"> AB
          <br>
          <input type="radio" name="blood_type" value=""> Etc <input type="text" name="blood_type_name" value="">
          <br><br>

      <B>Address*</B>
      <br>
      <textarea name="address" rows="10" cols="30"></textarea>
      <br>
      <br>
      <B>City*</B><input type="text" name="city"><B>  Zip code*</B><input type="text" name="zipcode">
      <br><br>
      <B>Phone*</B><input type="text" name="tel">
      <br><br>
      <B>E-mail*</B><input type="text" name="email">
      <br><br>
      <B>Preferred Shirt Size*</B><select name = "shirt_size">
          <option value="">--โปรดระบุ--</option>
          <option value="XS">XS 36"</option>
          <option value="S">S 38"</option>
          <option value="M">M 40"</option>
          <option value="L">L 42"</option>
          <option value="XL">XL 44"</option>
          <option value="XXL">XXL 46"</option>
      </select>
      <br><br>
      <B>Congenital disease*(ไม่มีไม่ต้องใส่)</B><input type="text" name="con_dis">
      <br><br>
      <input type="submit" value="Submit">
      </form>



  </article>
</section>
<footer>
  <p>Footer</p>
</footer>


</body>
</html>
