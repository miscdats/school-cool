<link rel="stylesheet" href="CSS/all.css" type="text/css">
<?php
	function nav(){
		echo "<nav>
				<ul>
					<li><a href=\"home.php\">HOME</a></li>
					<div class="dropdown">
						<button class="dropbtn">
							<li><a href=\"classes.php\">CLASSES</a></li>
  							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							  <a href="">My Classes</a>
							  <a href="">My Assignments</a>
							  <a href="">My Goals</a>
						</div>
					</div>
					<li><a href=\"grades.php\">GRADES</a></li>
					<li><a href=\"resources.php\">RESOURCES</a></li>
					<li><a href=\"contact.php\">CONTACT US</a></li>
				</ul>
			</nav>";
		}
?>
