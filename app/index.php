<?php require('content.php')
?>
<link rel="stylesheet" href="css/login.css" type="text/css">

<html>
    <head>
        <title>School Cool Login</title>
    </head>
    <body>
        <?php
			head();
		?>

        <div id="wrapper">

            <main>
                <form action="home.php" method="post">
                    <div id="credentials">
                        <label>Username: </label>
                        <input type="text" name="username">
                        <label>Password: </label>
                        <input type="password" name="password">
                    </div>
                <div id="buttons">
                    <button id="signin">Sign in </button>
                    <button id="signup">Sign up</button>
                </div>

                </form>
            </main>

			<?php
				foot();
			?>

        </div>
    </body>
</html>
