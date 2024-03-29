<!DOCTYPE html>
<html>
  <head>
    <title>DesignMyCoffee</title>
    <!-- <link rel="stylesheet/less" type="text/css" href="DMCIT.less" /> -->
    <!-- <script src="less.js" type="text/javascript"></script> -->
    <link rel="stylesheet" type="text/css" href="DMCIT.css">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="PicBill.png">
  </head>
  <body>
    <header>
      <div id='navbar'>
        <div id='logoBill'><img src="PicBill.png" alt="LogoBill" width="40%" height="70%"></div>
        <div class='navitem'><a href="index.html">Home</a></div>
        <div class='navitem'><a href="About.html">About Us</a></div>
        <div class='navitem'><a href="Locations.html">Locations</a></div>
        <div class='navitem'><a href="LogIn.php">Log In</a></div>
      </div>
    </header>
    <?php

    ?>
    <main>
      <div id='ContentMain'>
        <form action="LogIn.php" method="post">
          <div class="LogInBill">
            <div>
              <img class='BillWelcome' src="PicBill.png" alt="LogoBill">
            </div>
            <div>
              <h6><i>piccolo Bill Says:</i></h6>
              <p>Log In to see your pending orders!</p>
            </div>
          </div>
        <div class='LogInForm'>
          <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
          <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit" class"submitButt">Login</button>
            <label> <input type="checkbox" checked="checked" name="remember"> Remember me </label>
        </div>
        </form>
      </div>
    </main>
    <footer>
      <div id='footerNav'>
        <h4 class="footItem">2019 All Rights Reserved, <i>DesignMyCoffee</i></h4>
        <h4 class="footItem"></h4>
      </div>
    </footer>
  </body>
</html>
