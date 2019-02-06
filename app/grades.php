<link rel="stylesheet" href="css/grades.css" type="text/css">

<?php
	require('libs/config.php');
	include('content/content.php');
	include('content/gradesFunctions.php');
?>

<html>
    <head>
        <title>School Cool :: GRADES</title>
    </head>
    <body>
		<?php head(); ?>

        <div id="wrapper">
			<?php nav(); ?>
            <main>
				<script src="js/grades.js"></script>

				<h2>Keep track of your success!</h2>
		        <h4>Log Grades</h4>
				<div style="height:30px;clear:both"></div>
			      <?php if (isset($_GET["msg"]) && $_GET["msg"] == "success") { ?>
			      <div class="success">Grade logged! Another step in being an A student.</div>
			  	  <?php } if (isset($_GET["msg"]) && $_GET["msg"] == "error") {  ?>
			      <div class="error">There was problem...! Please try again or check again later.</div>
			      <?php } ?>
	            <form name="gradeInputForm" action="grades.php" method="POST"
	            enctype="multipart/form-data" onsubmit="return validateForm();">
	                <div class="grades_rows">
	                    <label>Course: </label>
	                    <select name="course">
						<?php
		                   	$selectQuery = 'SELECT course_name	FROM COURSES';
							$result = $conn->query($selectQuery);
							if ($result->num_rows > 0) {
						        while($row = $result->fetch_assoc()) {
						            echo "<option>" . $row['course_name'] . "</option>";
						        }
						    }
						?>
	                    </select>
	                    <!-- <input type ="text" name="user_gcourse" id="user_gcourse"
						 value="" placeholder="Astronomy 101" required /> -->
	                </div>
	                <div class="grades_rows">
	                    <label>Assignment: </label>
	                    <input type="text" name="user_gname" id="user_gname"
						 value="" placeholder="Exam 1" required />
	                </div>
	                <div class="grades_rows">
	                    <label>Grade (0-100): </label>
	                    <input type="range" name="user_gamt" id="user_gamt" step=".1"
						 min="0" max="100" value="89.69" onchange="updateGradeSliderText(this.value)" />
						 <span><input type="text" id="sliderText1" value="86.9" readonly></span>
	                </div>
					<div class="grades_rows">
	                    <label>Weight (0-100): </label>
	                    <input type="range" name="user_gweight" id="user_gweight" step=".1"
						 min="0" max="100" value="20.0" onchange="updateWeightSliderText(this.value)" />
						 <span><input type="text" id="sliderText2" value="20.0" readonly></span>
	                </div>
					<div class="grades_rows">
						<input type="submit" value="Post it on our fridge door." name="sbtn" class="submit_button" />
					</div>
				</form>
            </main>

            <aside>
                <!-- ?php gradeTableView(); ?> -->
			</aside>

			<?php foot(); ?>


        </div>
    </body>
</html>
