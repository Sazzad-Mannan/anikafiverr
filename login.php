<?php 
session_start();


?>
<html>
  <head>
    <link href="includes/css/style.css" rel="stylesheet" />
  </head>

  <body>
 
    <div id="login">
      <div id="inner">
        <h2>Login</h2>
        <p id="message"><?php if(!empty($_SESSION['message'])){echo $_SESSION['message'];$_SESSION['message']="";}  ?></p>
        <br /><br /><br />
      

        <form id="form3" action="functions.php" method="post">
          <div style="float: left; width: 100%">
            <label>Email</label>
            <input
              class="fr3_el_l"
              type="email" name="email" required
              placeholder="Write email here"
            />
            <label>Passward</label>
            <input
              class="fr3_el_l" name="pass"
              type="password" required
              placeholder="Enter password here"
            />
          </div>
        
          <div style="width: 100%; float: left">
            <input class="sub2" type="submit" name="login" value="Login" />
          </div>
          <div style="width: 100%; float: left; padding: 10px">
            Not registered yet? <a href="registration.php">Register here</a> <br>| <a href="index.php">Go to home page</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
