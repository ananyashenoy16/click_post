<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Sign-Up</title>
    <?php include("../php/config.php"); ?>
  </head>

  <body>
    <div class="container">
      <form action="../php/login.php" method="post" class="form1">
        <h1>Login</h1>
        <div class="error-text"></div>
        <input type="text" name="email" placeholder="Enter Email" required/>
        <input type="password" name="password" placeholder="enter password" required/><br />
        <p><a href="#">Forgot Password?</a></p>
        <input type="submit" class="button" value="Log-in" /><br />
        <p>New User? <a href="register.php">Sign-Up here</a></p>
      </form>

      <div class="drops">
        <div class="drop drop1"></div>
        <div class="drop drop2"></div>
        <div class="drop drop3"></div>
        <div class="drop drop4"></div>
        <div class="drop drop5"></div>
        <div class="drop drop6"></div>
        <div class="drop drop7"></div>
        <div class="drop drop8"></div>
      </div>
    </div>
  </body>
  <script src="../js/login.js"></script>
</html>
