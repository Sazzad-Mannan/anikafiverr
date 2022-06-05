<?php
session_start();

include "includes/db/config.php";

$sql2="SELECT * FROM contents";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);

?>
<html>
  <head>
    <link href="includes/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div id="nav">
      <ul>
        <a href="index.php"><li>Home</li></a>
        <a href="Order.php"><li class="active">Order</li></a>
        <a href="about_us.php"><li>About Us</li></a>
        <a href="rates.php"><li>Rates</li></a>
        <a href="editprofile.php"><li>Edit Profile</li></a>
      </ul>
    </div>
    <div id="blank"></div>
    <div id="desc">
      <div id="inner">
        <h2><?php echo $row2['order_heading'];  ?></h2>
        <p>
        <?php echo $row2['order_description'];  ?>
        </p>
      </div>
    </div>
    <div id="order_form">
      <div id="inner">
        <h2>Order an interpreter</h2>
        <br /><br /><br />

        <form id="form1" action="" method="post">
          <div style="float: left; width: 100%">
            <h4>Customer:</h4>
            <input class="fr_el_l" type="text" placeholder="First Name" />
            <input class="fr_el_r" type="number" placeholder="Phone" />
            <input class="fr_el_l" type="text" placeholder="Sur Name" />
            <input class="fr_el_r" type="email" placeholder="Email Address" />
            <input class="fr_el_l" type="text" placeholder="Company" />
          </div>
          <div style="float: left; width: 100%; margin-top: 65px">
            <h4>Mission:</h4>
            <input class="fr_el_l" type="text" placeholder="Date of use" />
            <input
              class="fr_el_r nodisplay"
              type="date"
              placeholder="Date of use"
            />
            <input class="fr_el_l" type="text" placeholder="Start time of assignment" />
            <input class="fr_el_r" type="text" placeholder="End time of assignment" />
            <input class="fr_el_l" type="text" placeholder="Operation area" />
            <input class="fr_el_r" type="text" placeholder="Use content/topic" />
            <input class="fr_el_l" type="text" placeholder="Location" />
            <input class="fr_el_r" type="text" placeholder="Meeting Point" />
            <input class="fr_el_l" type="text" placeholder="Contact person" />
            <input class="fr_el_r" type="text" placeholder="Email contact person" />

            <textarea placeholder="people present" class="fr_el_l"></textarea
            ><br />
          </div>
          <select class="fr_el_l">
            <option>Desired interpration</option>
            <option>Celina Thiemeyer</option>
            <option>fdgd</option>
            <option>dgd</option>
          </select>
          <div style="width: 100%; float: left">
            <input class="sub1" type="submit" />
          </div>
        </form>
      </div>
    </div>
    <div id="vision">
      <h3>Our Vision</h3>
      <?php echo $row2['vision_description'];  ?>
    </div>
    <div id="footer"></div>
  </body>
</html>
