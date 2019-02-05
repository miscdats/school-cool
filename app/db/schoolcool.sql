DROP DATABASE IF EXISTS SchoolCool;

CREATE DATABASE IF NOT EXISTS SchoolCool;

USE SchoolCool;

CREATE TABLE Schools
(
	school_id			INT						PRIMARY KEY AUTO_INCREMENT,
    school_name			VARCHAR(30)				NOT NULL UNIQUE,
	school_contact		INT						NOT NULL UNIQUE
);

CREATE TABLE Contacts
(
	contact_id			INT						PRIMARY KEY AUTO_INCREMENT,
    contact_type		ENUM('School', 'Student'),
    contact_country		INT						NOT NULL,
    contact_state		CHAR(2)				 	,
    contact_street		VARCHAR(45)				,
    contact_city		VARCHAR(30)				,
    contact_phone		BIGINT(10)
);

CREATE TABLE Fees
(
	fee_id				INT						PRIMARY KEY AUTO_INCREMENT,
    fee_due				INT						ZEROFILL,
    fee_name			VARCHAR(20)				NOT NULL
    -- more columns
);

CREATE TABLE Students
(
	student_id			INT						PRIMARY KEY AUTO_INCREMENT NOT NULL,
    student_contact		INT						, -- fk
    student_first		VARCHAR(20)				NOT NULL,		
    student_last		VARCHAR(30)				NOT NULL,
    student_password    VARCHAR(30)				NOT NULL,
    student_age			INT(3)					,
    student_fees		INT						,-- fk
    CONSTRAINT			students_fk_contact		
		FOREIGN KEY								(student_contact)
			REFERENCES	Contacts				(contact_id)
												ON DELETE CASCADE,
	CONSTRAINT			student_fk_fees		
		FOREIGN KEY								(student_fees)
			REFERENCES	Fees					(fee_id)
												ON DELETE RESTRICT                                            
);

CREATE TABLE Courses
(
	course_id			INT						PRIMARY KEY AUTO_INCREMENT,
    course_name			VARCHAR(20)				NOT NULL,
    course_subject		VARCHAR(20)				NOT NULL,
    course_school		INT						,-- fk
    course_student		INT						, -- fk
    CONSTRAINT			courses_fk_school		
		FOREIGN KEY								(course_school)
			REFERENCES	Schools					(school_id)
												ON DELETE RESTRICT,
	CONSTRAINT			courses_fk_student		
		FOREIGN KEY								(course_student)
			REFERENCES	Students				(student_id)
												ON DELETE RESTRICT
);

CREATE TABLE Grades
(
	grade_id			INT						PRIMARY KEY AUTO_INCREMENT,
    grade_course		INT						NOT NULL, -- fk
    grade_name			VARCHAR(30)				NOT NULL,
    grade_amt			FLOAT					NOT NULL,
    grade_weight		FLOAT					NOT NULL,
    CONSTRAINT			grades_fk_course		
		FOREIGN KEY								(grade_course)
			REFERENCES	Courses					(course_id)
												ON DELETE CASCADE
);

CREATE TABLE Resources
(
	resource_id			INT						PRIMARY KEY AUTO_INCREMENT,
    resource_name		VARCHAR(45)				NOT NULL,
    resource_type		ENUM('book', 'video', 'link', 'website', 'e-course', 
						'phone number', 'personal', 'other') NOT NULL,
	resource_course		INT						NOT NULL, -- fk
    CONSTRAINT			resources_fk_course		
		FOREIGN KEY								(resource_course)
			REFERENCES	Courses					(course_id)
												ON DELETE CASCADE
);

-- username
-- password
-- blogentries
