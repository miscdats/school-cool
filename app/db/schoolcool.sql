CREATE DATABASE IF NOT EXISTS SchoolCool;

USE SchoolCool;

CREATE TABLE School
(
	school_id			INT						PRIMARY KEY AUTO_INCREMENT,
    school_name			VARCHAR(30)				NOT NULL UNIQUE,
	school_contact		INT						NOT NULL UNIQUE,
);

CREATE TABLE Contact
(
	contact_id			INT						PRIMARY KEY AUTO_INCREMENT,
    contact_type		ENUM('School', 'Student'),
    contact_country		INT						NOT NULL,
    contact_state		CHAR(2)				 	,
    contact_street		VARCHAR(45)				,
    contact_city		VARCHAR(30)				,
    contact_phone		BIGINT(10)
);

CREATE TABLE Student
(
	student_id			INT						PRIMARY KEY AUTO_INCREMENT NOT NULL,
    student_contact		INT						, -- fk
    student_first		VARCHAR(20)				,		
    student_last		VARCHAR(30)				,
    student_age			INT(3)					,
    student_fees		INT						,-- fk
);

CREATE TABLE Courses
(
	courses_id
    courses_name
    courses_subject
    courses_school
    student_id
);

CREATE TABLE Grades
GRADE ID PK
COURSEid FK
GRADE_NAME : QUIZ PRJECT 
GRADE 
WEIGHT


CREATE TABLE Resources
	-- FK to link to classes
	rseource name
    resource type video or link or whatever book
    resource id
    course id