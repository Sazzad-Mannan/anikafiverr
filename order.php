<?php
session_start();
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
        <h2>order form</h2>
        <p>
          You can send us your request here. We will reply as soon as possible.
          Alternatively, you can send us an email to thiemeyer@netzwerk-gsd.ch
          or wuethrich@netzwerk-gsd.ch.
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
            <input class="fr_el_r" type="text" placeholder="Last Name" />
            <input class="fr_el_l" type="text" placeholder="First Name" />
            <input class="fr_el_r" type="text" placeholder="Last Name" />
            <input class="fr_el_l" type="text" placeholder="First Name" />
          </div>
          <div style="float: left; width: 100%; margin-top: 65px">
            <h4>Mission:</h4>
            <input class="fr_el_l" type="text" placeholder="First Name" />
            <input
              class="fr_el_r nodisplay"
              type="text"
              placeholder="Last Name"
            />
            <input class="fr_el_l" type="text" placeholder="First Name" />
            <input class="fr_el_r" type="text" placeholder="Last Name" />
            <input class="fr_el_l" type="text" placeholder="First Name" />
            <input class="fr_el_r" type="text" placeholder="Last Name" />
            <input class="fr_el_l" type="text" placeholder="First Name" />
            <input class="fr_el_r" type="text" placeholder="Last Name" />
            <input class="fr_el_l" type="text" placeholder="First Name" />
            <input class="fr_el_r" type="text" placeholder="Last Name" />

            <textarea placeholder="people present" class="fr_el_l"></textarea
            ><br />
          </div>
          <select class="fr_el_l">
            <option>fgsdfg</option>
            <option>sff</option>
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
      We give deaf people access to communication, information and networks,
      thereby contributing to their empowerment and inclusion in society.
    </div>
    <div id="footer"></div>
  </body>
</html>