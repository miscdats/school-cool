<?php
    function recordGrade() {
        // $sql = $conn->prepare("INSERT INTO Grades (grade_course, grade_name, grade_amt, grade_weight)
                // VALUES (?, ?, ?)");
        $sql .= "INSERT INTO Grades (grade_course, grade_name, grade_amt, grade_weight)
                VALUES ();";
        $sql->bind_param("ssdd", $grade_course, $grade_name, $grade_amt, $grade_weight);


        if ($conn->multi_query($sql) === TRUE) {
            echo "<p>Grades recorded successfully.</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    function simple_redirect($url) {
        echo "<script language=\"JavaScript\">\n";
        echo "<!-- hide from old browser\n\n";
        echo "window.location = \"" . $url . "\";\n";
        echo "-->\n";
        echo "</script>\n";
        return true;
    }

    // Return a value
    function db_prepare_input($string) {
        return trim(addslashes($string));
    }

	// On form submit
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

    function viewGrade() {
        $sql = "SELECT grade_course, grade_name, grade_amt, grade_weight)
                FROM GRADES;";

        if ($conn->multi_query($sql) === TRUE) {
            echo "<p>You got this.</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>
