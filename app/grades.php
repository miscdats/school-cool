<?php
	// function require_multi($files) {
	//     $files = func_get_args();
	//     foreach($files as $file)
	//         require_once($file);
	// }
	//
	// require_multi('content/content.php', 'content/gradeinputform.php')
	require('libs/config.php');
	include('content/content.php');

	if (isset($_POST["sbtn"])) {
		$grade_course	= db_prepare_input($_POST["user_gcourse"]);
		$grade_name		= db_prepare_input($_POST["user_gname"]);
		$grade_amt		= db_prepare_input($_POST["user_gamt"]);
		$grade_weight	= db_prepare_input($_POST["user_gweight"]);

		$new_grade		=	$grade_course;
		$new_grade		.=	$grade_name;
		$new_grade		.=	$grade_amt;
		$new_grade		.=	$grade_weight;

		if ($new_grade) {
			simple_redirect("grades.php?msg=success");
		} else {
			simple_redirect("grades.php?msg=error");
		}

	}

?>

<html>
    <head>
        <title>School Cool :: GRADES</title>
		<style>
		.grades_rows{ width:100%; height:auto; overflow:hidden; margin-bottom:10px; }
		.label{ width:100px;color:#000; float:left;padding-top:5px;}
		.input-row{ width:280px; height:32px; background-color:#FFF; float:left; position:relative; }
		.input-textarea-row{ width:280px; height:65px; background-color:#FFF; float:left; position:relative; }
		.textbox{ width:100%; height:24px;  border:1px solid #007294;outline:none; background:transparent; color:#000; padding:0px;  }
		.textarea{ width:100%; height:57px;  border:1px solid #007294; outline:none; background:transparent; color:#000; padding:0px;  }
		.submit_button{background:#118eb1;padding:2px;border:none;cursor:pointer;}
		.success{padding-bottom:30px; color:#009900;}
		.error{padding-bottom:30px; color:#F00;}
		</style>
    </head>
    <body>

		<?php head(); ?>

        <div id="wrapper">
			<?php nav(); ?>

            <main>
				<h2>Keep track of your success!</h2>
		        <h4>Log Grades</h4>
				<div style="height:30px;clear:both"></div>
			      <?php if ($_GET["msg"] == "success") { ?>
			      <div class="success">Grade logged! One step to keeping an A.</div>
			      <?php } if ($_GET["msg"] == "error") {  ?>
			      <div class="error">There was problem...! Please try again or check again later.</div>
			      <?php } ?>
	            <form name="gradeInputForm" action="grades.php" method="POST"
	            enctype="multipart/form-data" onsubmit="return validateForm();">
	                <div class="grades_rows">
	                    <label>Course: </label>
	                    <!-- <select name="Course">
						?php
		                    $sql = mysqli_query($connection, "SELECT grade_course FROM grades;");
		                    while $row = $sql->fetch_assoc()) {
		                        echo "<option value=\"Course1\">" . $row['grade_course'] . "</option>";
		                    }
						?>
	                    </select> -->
	                    <input type ="text" name="user_gcourse" id="user_gcourse" value="" placeholder="Astronomy 101" required />
	                </div>
	                <div class="grades_rows">
	                    <label>Assignment: </label>
	                    <input type="text" name="user_gname" id="user_gname" value="" placeholder="Exam 1" required />
	                </div>
	                <div class="grades_rows">
	                    <label>Grade (0-100): </label>
	                    <input type="range" name="user_gamt" id="user_gamt" min="0" max="100" placeholder="89.68" required />
	                </div>
					<div class="grades_rows">
	                    <label>Weight (0-100): </label>
	                    <input type="range" name="user_gweight" id="user_gweight" min="0" max="100" placeholder="20.0" required />
	                </div>
					<div class="grades_rows">
						<input type="submit" value="send" name="sbtn" class="submit_button" />
					</div>
				</form>
            </main>

            <aside>
                <!-- ?php gradeTableView(); ?> -->
			</aside>

			<?php
				foot();
			?>


        </div>
		<script src="js/grades.js"></script>
    </body>
</html>
