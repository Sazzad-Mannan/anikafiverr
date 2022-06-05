<?php
session_start();

include "includes/db/config.php";

$sql="SELECT * FROM user";
$result=mysqli_query($conn,$sql);

$sql2="SELECT * FROM contents";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);


$sql3="SELECT * FROM services";
$result3=mysqli_query($conn,$sql3);
?>

<html>
  <head>
    <link href="includes/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div id="nav">
      <ul>
        <a href="index.php"><li class="active">Home</li></a>
        <a href="Order.php"><li>Order</li></a>
        <a href="about_us.php"><li>About Us</li></a>
        <a href="rates.php"><li>Rates</li></a>
        <a href="editprofile.php"><li>Edit Profile</li></a>
      </ul>
    </div>
    <div id="blank"></div>
    <div id="desc">
      <div id="inner">
        <h2><?php echo $row2['heading1'];  ?></h2>
        <p>
        <?php echo $row2['description1'];  ?>
        </p>
      </div>
    </div>
    <div id="services">
      <div id="inner">
        <div style="width: 100%; height: 100px">
          <h2 style="float: left">What do we offer?</h2>
          <button style="float: right; padding: 10px 30px; border-radius: 20px">
            Services</button
          ><br />
        </div>
        <?php if($result3->num_rows>0){
  while($row3 = mysqli_fetch_array($result3)){
?>
        <div id="cont1">
          <h4><?php echo $row3['heading'];  ?></h4>
          <p>
          <?php echo $row3['description'];  ?>
          </p>
        </div>
        <?php }} ?>
      
      </div>
    </div>
    <div id="aboutus">
      <div id="inner">
        <div style="width: 100%; height: 100px">
          <h2 style="float: left">Get to know us</h2>
          <button style="float: right; padding: 10px 30px; border-radius: 20px">
            About Us</button
          ><br />
        </div>
        <?php if($result->num_rows>0){
  while($row = mysqli_fetch_array($result)){
?>
        <div id="cont2">
          <img src="data:image;base64,<?php echo base64_encode($row['image']); ?>" /><br />
          <?php echo $row['name']; ?>
        </div>
      <?php }} ?>
      </div>
    </div>
    <div id="vision">
      <h3>Our Vision</h3>
      <?php echo $row2['vision_description'];  ?>
    </div>
    <div id="footer"></div>
  </body>
</html>
