<?php
session_start();

include "includes/db/config.php";

$sql="SELECT * FROM user";
$result=mysqli_query($conn,$sql);

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
        <a href="about_us.php"><li class="active">About Us</li></a>
        <a href="rates.php"><li>Rates</li></a>
        <a href="editprofile.php"><li>Edit Profile</li></a>
      </ul>
    </div>
    <div id="blank"></div>
    <div id="desc2">
      <div id="inner">

<?php if($result->num_rows>0){
  while($row = mysqli_fetch_array($result)){
?>

        <div id="cont3">
          <h3>
            <?php  echo $row['name'];?>
            <span style="font-size: 11px; color: darkgrey; font-style: italic"
              ></span
            >
          </h3>

          <img id="cl_img" src="data:image;base64,<?php echo base64_encode($row['image']); ?>" />

          <p id="cl_desc">
           <?php echo $row['description'];  ?>
          </p>
          <div id="cl_add">
            <h3>Contact</h3>
            <!--b>Dario Heinrich</b> <br />
            State Examined, Nuremberg<br /><br />

            Mobile 0157.32 51 30 99<br />
            Mobile 0177.538 29 59<br />
            Tel. 0521.237 20 52<br />
            Fax 0521.237 20 53<br /-->
           Email: <?php echo $row['email']; ?><br />
          </div>
        </div>


        <?php  }} ?>
  
      </div>
    </div>

    <div id="footer2"></div>
  </body>
</html>
