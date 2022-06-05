<?php 
session_start();
include "includes/db/config.php";


?>
<html>
  <head>
    <link href="includes/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!--div id="nav">
      <ul>
        <a href="index.html"><li>Home</li></a>
        <a href="Order.html"><li>Order</li></a>
        <a href="about_us.html"><li>About Us</li></a>
        <a href="rates.html"><li>Rates</li></a>
        <a href="editprofile.html"><li class="active">Edit Profile</li></a>
      </ul>
    </div>
    <div id="blank"></div-->
    <div id="registration">
      <div id="inner">
        <h2>Registration</h2>
        <br />

        <form id="form3" action="functions.php" method="post" enctype="multipart/form-data">
          <div style="float: left; width: 100%">
            <label>Full Name</label>
            <input class="fr3_el_l" type="text" name="username" required placeholder="Your name" />

            <label>Email</label>
            <input
              class="fr3_el_l"
              type="text" name="email" required
              placeholder="Your email address"
            />
            <label>Passward</label>
            <input
              class="fr3_el_l"
              type="password" name="pass" required
              placeholder="Enter password here"
            />
            <label>Confirm Passward</label>
            <input
              class="fr3_el_l"
              type="password" name="cpass" required
              placeholder="Enter password again" 
            />
            <label>Description</label>
            <textarea
              class="fr3_el_l" name="des" required
              placeholder="Write your description here"
            ></textarea>

            <label>Profile Picture</label>
            <input class="fr3_el_l" name="profile_pic" required type="file" accept="image/*" />

            <!--select class="fr3_el_l">
              <option >Admin</option>
            </select-->
          </div>
       
          <div style="width: 100%; float: left">
            <input class="sub2" name="register" type="submit" />
          </div>
          <div style="width: 100%; float: left; padding: 10px">
            Already have account? <a href="login.php">Login</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
