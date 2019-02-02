<link rel="stylesheet" href="CSS/all.css" type="text/css">
<?php
	function nav(){
		echo "<nav>
				<ul>
					<li><a href=\"home.php\">HOME</a></li>
					<li><a href=\"grades.php\">GRADES</a></li>
					<li><a href=\"resources.php\">RESOURCES</a></li>
                    
						<li><div class=\"dropdown\">
							<button class=\"dropbtn\">
								<li><a href=\"classes.php\">CLASSES</a>
								<i class=\"fa fa-caret-down\"></i></li>
							</button>
							<div class=\"dropdown-content\">
								  <a href=\"classes.php\">My Classes</a>
								  <a href=\"assignments.php\">Assignments</a>
								  <a href=\"goals.php\">My Goals</a>
							</div>
						</div></li>
                        
                        <li><a href=\"contact.php\">CONTACT US</a></li>
				</ul>
			</nav>";
		}

	function head(){
		echo "<header>
				<h1>SCHOOL COOL TRACKER</h1>
			</header>";
		}

	function foot(){
		echo"<footer>
				<h3>Stay cool.</h3>
			</footer>";
		}
?>
