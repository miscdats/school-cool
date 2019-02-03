<!-- <link rel="stylesheet" href="./CSS/all.css" type="text/css"> -->
<!-- <link rel="stylesheet" href="./CSS/grades.css" type="text/css"> -->
<?php
    // require('libs/config.php');
    

    function recordGrade() {
        $sql = "INSERT INTO Grades (grade_course, grade_name, grade_amt, grade_weight)
                VALUES ();";
        $sql .= "INSERT INTO Grades (grade_course, grade_name, grade_amt, grade_weight)
                VALUES ();";

        if ($conn->multi_query($sql) === TRUE) {
            echo "<p>Grades recorded successfully.</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

	function gradeInputForm(){
		echo"<h2>Keep track of your success!</h2>
            <h4>Log Grades</h4>
            <br>
            <form name=\"gradeInputForm\" action="recordGrade()" method=\"POST\"
            enctype=\"multipart/form-data\">
                <div class=\"grades_form\">
                    <label>Course: </label>
                    <select name=\"Course\">"
                    $sql = mysqli_query($connection, "SELECT grade_course FROM grades;");
                    while $row = $sql->fetch_assoc()) {
                        echo "<option value=\"Course1\">" . $row['grade_course'] . "</option>";
                    }
                    "</select>"
                    // <input type =\"text\" name=\"grade_course\" value=\"\" required />
                "</div>
                <div class=\"grades_form\">
                    <label>Assignment: </label>
                    <input type=\"text\" name=\"grade_name\" value=\"\" required />
                </div>
                <div class=\"grades_form\">
                    <label>Grade (0-100): </label>
                    <input type=\"range\" name=\"grade_amt\" min=\"0\" max=\"100\" required />
                </div>

        ";
		}



?>
