<?php require('content/content.php')
?>
<link rel="stylesheet" href="css/log.css" type="text/css">

<html>
    <head>
        <title>School Cool :: signup</title>
    </head>
    <body>
        <?php
			head();
		?>

        <div class="form">
          <h1>Signup</h1>
            <form class="register_form" action="content/signup_content.php" method="post">
              <input name="lastname" type="text" placeholder="Last Name"/>
                <input name="firstname" type="text" placeholder="First Name"/>
                <input name="password" type="password" placeholder="password"/>
                <input name="password_reapeat" type="password" placeholder="Repeat password"/>
              <button type="submit" name="signup_submit">Create</button>
            </form>

        </div>
    </body>
</html>
