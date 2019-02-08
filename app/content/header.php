<link rel="stylesheet" href="CSS/all.css" type="text/css">
<?php
	function head(){
		echo"<header>
				<h1>SCHOOL COOL TRACKER</h1>

				<form class="login-form" action="/content/logout.php" method="post">
				<button name="logout-submit" type="submit">logout</button>
		    </form>
			</header>"
		}
?>
