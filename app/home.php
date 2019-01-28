<link rel="stylesheet" href="CSS/all.css" type="text/css">
<link rel="stylesheet" href="" type="text/css">

<html>
    <head>
        <title>School Cool</title>
    </head>
    <body>
        
		<?php
			function head(){
				echo"<header> <h1>SCOOL COOL TRACKER</h1>

        </header>";
			}
			head();
			
		?>
		

        <div id="wrapper">
			<?php
				function nav(){
				echo"<nav><ul><li><a href=\"home.php\">HOME</a></li><li><a href=\"classes.php\">CLASSES</a></li><li><a href=\"grades.php\">GRADES</a></li><li><a href=\"ressources.php\">RESSOURCES</a></li></ul></nav>";
				}
				nav();
			?>

            

            <main>

            </main>

            <aside>
			
			</aside>

			<?php
			function foot(){
				echo"<footer><h2>The footer is here</h2>

            </footer>";
			}
			foot();
			
		?>

            
        </div>
    </body>
</html>
