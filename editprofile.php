<?php 
session_start();
include "includes/db/config.php";
if(!isset($_SESSION['logged_email']) || empty($_SESSION['logged_email'])){
  $_SESSION['message']="You have to login first.";
  header("Location: login.php");
  die();
}
$email=$_SESSION['logged_email'];
$sql="SELECT * FROM user WHERE email='".$email."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
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
        <a href="rates.php"><li>Rates</li></a>
        <a href="editprofile.php"><li class="active">Edit Profile</li></a>
        
      </ul>
    </div>
    <div id="blank"></div>
    <div id="desc">
      <div id="inner">
      <p style="color: brown;text-align: center;"><?php if(!empty($_SESSION['message'])){echo $_SESSION['message'];$_SESSION['message']="";}  ?></p>
      <a href="functions.php?type=logout"><button style="float: right;padding: 5px;">Logout</button> </a>
      
      <h2>Edit your profile</h2>
        <br /><br /><br />

        <form id="form2" action="functions.php" method="post" enctype="multipart/form-data">
          <div style="float: left; width: 45%">
            <label>Change Email</label>
            <input
              class="fr2_el_l"
              type="email" required name="email" value="<?php echo $row['email']; ?>"
              placeholder="Write email here"
            />
            <label>Change Description</label>
            <textarea
              class="fr2_el_l" required name="des" rows="7"
              placeholder="Write your description here"
            ><?php echo $row['description']; ?></textarea>

            <label>Change Profile Picture</label>
            <input class="fr2_el_l" name="profile_pic"  type="file" />
          Current picture:
          <img src="data:image;base64,<?php echo base64_encode($row['image']); ?>" width="100px" height="100px">
          </div>
 
          <div style="width: 100%; float: left">
            <input class="sub1" name="update" type="submit" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
