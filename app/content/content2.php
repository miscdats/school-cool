<link rel="stylesheet" href="./CSS/all.css" type="text/css">
<?php
	function nav(){
		echo "<nav>
				<ul>
					<li><a href=\"home.php\">HOME</a></li>
					<li><a href=\"contact.php\">CONTACT US</a></li>
					<li><a href=\"grades.php\">GRADES</a></li>
					<li><a href=\"resources.php\">RESOURCES</a></li>
						<div class=\"dropdown\">
							<button class=\"dropbtn\">
								<li><a href=\"classes.php\">CLASSES</a>
								<i class=\"fa fa-caret-down\"></i></li>
							</button>
							<div class=\"dropdown-content\">
								  <a href=\"classes.php\">My Classes</a>
								  <a href=\"assignments.php\">Assignments</a>
								  <a href=\"goals.php\">My Goals</a>
							</div>
						</div>
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

	function login(){
		echo"<div class=\"login-wrap\">
		    <div class=\"login-html\">
		        <input id=\"tab1\" type=\"radio\" name=\"tab\" class=\"signin\" checked>
		            <label for=\"tab1\" class=\"tab\">Sign in !</label>
		        <input id=\"tab2\" type=\"radio\" name=\"tab\" class=\"signup\">
		            <label for=tab2\" class=\"tab\">Sign up !!</label>
		        <div class=\"login-form\">
		            <form class=\"signin-htm\" action=\"user/login.php\" method=\"GET\">
		                <div class=\"group\">
		                    <label for=\"user\" class=\"label\">username : </label>
		                    <input id=\"username\" name=\"username\" type=\"text\" class=\"input\">
		                </div>
		                <div class=\"group\">
		                    <label for=\"pass\" class=\"label\">password : </label>
		                    <input id=\"password\" name=\"password\" type=\"password\"
		                            class=\"input\" data-type=\"password\">
		                </div>
		                <div class=\"group\">
		                    <input id=\"check\" type=\"checkbox\" class=\"check\" checked>
		                    <label for=\"check\"><span class=\"icon\"></span> Keep me signed
		                            in!!!</label>
		                </div>
		                <div class=\"group\">
		                    <input type=\"submit\" class=\"button\" value=\"Sign in!\">
		                </div>
		                <div class=\"hr\"></div>
		                <div class=\"footlnk\">
		                    <a href=\"#forgot\">Forgot password?!</a>
		                </div>
		                </form>
		                <form class=\"signup-htm\" action=\"user/signup.php\" method=\"POST\">
		                    <div class=\"group\">
		                        <label for=\"user\" class=\"label\">username: </label>
		                        <input id=\"username\" name=\"username\" type=\"text\" class=\"input\">
		                    </div>
		                    <div class=\"group\">
		                        <label for=\"pass\" class=\"label\">password: </label>
		                        <input id=\"password\" name=\"password\" type=\"password\" class=\"input\"
		                                data-type=\"password\">
		                    </div>
		                    <div class=\"group\">
		                        <label for =\"pass\" class=\"label\">confirm password: </label>
		                        <input id=\"pass\" type=\"password\" class=\"input\" data-type=\"password\">
		                    </div>
		                    <div class=\"group\">
		                        <input type=\"submit\" class=\"button\" value=\"sign up\">
		                    </div>
		                    <div class=\"hr\"></div>
		                    <div class=\"footlnk\">
		                        <label for=\"tab1\"><a href=\"#signin\">coming back?</a>
		                    </div>
		            </form>
		        </div>
		    </div>
		</div>";
	}
?>
