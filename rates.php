<?php
session_start();

include "includes/db/config.php";

$sql2="SELECT * FROM contents";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);

$sql3="SELECT * FROM rates";
$result3=mysqli_query($conn,$sql3);
?>
<html>
  <head>
    <link href="includes/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div id="nav">
      <ul>
        <a href="index.php"><li>Home</li></a>
        <a href="Order.php"><li>Order</li></a>
        <a href="about_us.php"><li>About Us</li></a>
        <a href="rates.php"><li class="active">Rates</li></a>
        <a href="editprofile.php"><li>Edit Profile</li></a>
      </ul>
    </div>
    <div id="blank"></div>
    <div id="desc">
      <div id="inner">
        <h2><?php echo $row2['rates_heading'];  ?></h2>
        <p>
        <?php echo $row2['rates_description'];  ?>
        </p>
      </div>
    </div>
    <div id="services">
      <div id="inner">

      <?php if($result3->num_rows>0){
  while($row3 = mysqli_fetch_array($result3)){
?>

        <div id="cont4">
          <div id="cont4_inner">
            <b><?php echo $row3['heading'];  ?></b>
            <p>
            <?php echo $row3['description'];  ?>
            </p>
          </div>
          <button>CHF<?php echo $row3['price'];  ?>/h</button>
        </div>
      <?php  }} ?>
      </div>
    </div>
    <div id="cancel_cost">
      <div
        id="inner"
        style="border: 2px solid darkslategrey; border-radius: 23px"
      >
        <p>
          <b>Cancellation Costs</b><br /><br />
          <?php echo $row2['cancelation_cost_text'];  ?>
        </p>
      </div>
    </div>
    <div id="vision">
      <h3>Our Vision</h3>
      <?php echo $row2['vision_description'];  ?>
    </div>
    <div id="footer"></div>
  </body>
</html>
