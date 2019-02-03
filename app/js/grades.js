function validateForm() {
    var grade_course = $.trim($("#user_gcourse").val());
	var grade_name = $.trim($("#user_gname").val());
	var grade_amt = $.trim($("#user_gamt").val());
	var grade_weight = $.trim($("#user_gweight").val());

	if (grade_course == "" ) {
        alert("Enter your course.");
		$("#user_gcourse").focus();
        return false;
    }  else if (grade_course.length < 3 ) {
		alert("Enter at least 2 letters. \nIt'll help you stay organized!");
        $("#user_gcourse").focus();
		return false;
    }

	if (grade_name == "" ) {
        alert("Enter the assignment name.");
		$("#user_gname").focus();
        return false;
    } else if (grade_name.length < 3 ) {
		alert("Enter at least 2 letters. \nIt'll help you stay organized!");
        $("#user_gname").focus();
		return false;
    }

	if (grade_amt == "" ) {
        alert("Enter grade received.");
		$("#user_gamt").focus();
        return false;
    } else if (grade_amt > 100) {
		alert("Enter the grade on a scale of 0-100. \nIt'll help you stay organized!");
        $("#user_gcourse").focus();
		 return false;
    }

	if (grade_weight == "" ) {
        alert("Enter the grade weight.");
		$("#user_gweight").focus();
        return false;
    } else if (grade_weight > 100) {
		alert("Enter the weight of your grade on a scale of 0-100. \nIt'll help you stay organized!");
        $("#user_gweight").focus();
		 return false;
    }

	return true;
}
