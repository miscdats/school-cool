<link rel="stylesheet" href="css/login.css" type="text/css">
<?php
    include('/content/login.php'); // Includes Login Script
    if(isset($_SESSION['login_user'])){
    header("location: profile.php"); // Redirecting To Profile Page
    }
    ?>

<script src="js/login.js"></script>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="content/login_content.php" method="post">
      <input type="text" placeholder="Last Name" name="lastname"/>
      <input type="password" placeholder="password" name="password"/>
      <button name="login_submit" type="submit">login</button>

    </form>
    <p class="message">Not registered? <a href="signup.php">Create an account</a></p>

    </form>
  </div>
</div>
