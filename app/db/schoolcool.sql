DROP DATABASE IF EXISTS SchoolCool;

CREATE DATABASE IF NOT EXISTS SchoolCool;

USE SchoolCool;

CREATE TABLE Contacts
(
	contact_id			INT						PRIMARY KEY AUTO_INCREMENT,
    contact_type		ENUM('School', 'Student')	NOT NULL,
    contact_state		CHAR(15)				,
    contact_city		VARCHAR(30)				,
    contact_street		VARCHAR(45)				,
    contact_phone		BIGINT(10)
);

CREATE TABLE Schools
(
	school_id			INT						PRIMARY KEY AUTO_INCREMENT,
    school_name			VARCHAR(30)				NOT NULL UNIQUE,
    school_contact		INT						, -- fk
    CONSTRAINT			schools_fk_contact
		FOREIGN KEY								(school_contact)
			REFERENCES	Contacts				(contact_id)
);

CREATE TABLE Fees
(
	fee_id				INT						PRIMARY KEY AUTO_INCREMENT,
    fee_due				INT						ZEROFILL,
    fee_name			VARCHAR(20)				NOT NULL
    -- more columns ?
);

CREATE TABLE Students
(
	student_id			INT						PRIMARY KEY AUTO_INCREMENT NOT NULL,
    student_first		CHAR(15)				NOT NULL,
    student_last		CHAR(20)				NOT NULL,
    student_contact		INT						, -- fk
    student_enrolled	BOOLEAN					,		
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
    course_name			VARCHAR(30)				NOT NULL,
    course_subject		VARCHAR(30)				NOT NULL,
    course_school		INT						,-- fk
    course_student		INT						, -- fk
    CONSTRAINT			courses_fk_school		
		FOREIGN KEY								(course_school)
			REFERENCES	Schools					(school_id)
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

CREATE TABLE Users
(
	user_id				INT						PRIMARY KEY AUTO_INCREMENT,
    user_login			VARCHAR(30)				NOT NULL,
    user_pass			VARCHAR(30)				NOT NULL,
    user_student		INT						NOT NULL, -- fk
    CONSTRAINT			users_fk_student		
		FOREIGN KEY								(user_student)
			REFERENCES	Students				(student_id)
												ON DELETE RESTRICT
);

CREATE TABLE BlogEntries
(
	blog_id				INT						PRIMARY KEY AUTO_INCREMENT,
    blog_title			VARCHAR(60)				NOT NULL,
    blog_entry			VARCHAR(1000)			,
    blog_date			DATETIME				NOT NULL,
    blog_user			INT						NOT NULL, -- fk
    blog_course			INT						, -- fk
    CONSTRAINT			blogs_fk_user			
		FOREIGN KEY								(blog_user)
			REFERENCES	Users					(user_id),
	CONSTRAINT			blogs_fk_course			
		FOREIGN KEY								(blog_course)
			REFERENCES	Courses					(course_id)
);


--  ++++++++++++++++ MOCK DATA +++++++++++++++++++++++++++++++++++++++++++
INSERT INTO Contacts		(contact_type, contact_state, contact_city, contact_street, contact_phone)
VALUES						('School', 'New York', 'New York City', '123 Fake Street', '2125558888'),
							('Student', 'Connecticut', 'Poop', '321 Real Avenue', '6660008888');
                                
INSERT INTO Schools			(school_name, school_contact)
VALUES						('Best University', 1);

INSERT INTO Fees			(fee_due, fee_name)
VALUES						(103.81, 'Parking ticket');

INSERT INTO	Students		(student_first, student_last, student_contact, student_fees, student_enrolled)
VALUES						('Arthur', 'Aardvarkman', 2, 1, True);

INSERT INTO Courses			(course_name, course_subject, course_school, course_student)
VALUES						('Web Development', 'Application Development', 1, 1);

INSERT INTO Grades			(grade_course, grade_name, grade_amt, grade_weight)
VALUES						(1, 'Exam 1', 86.9, 30.0);

INSERT INTO Resources		(resource_name, resource_type, resource_course)
VALUES						('Web for Dummies for Buddies', 'book', 1);

INSERT INTO Users			(user_login, user_pass, user_student)
VALUES						('coolguy@cool.co', 'b4dpassword', 1);

INSERT INTO BlogEntries		(blog_title, blog_entry, blog_date, blog_user, blog_course)
VALUES						('A Bajillion Leagues Under the Sea?', 'WOW this was hard gosh I can\'t stop reading whoa! :(',
							'2010-06-11 15:44:05', 1, 1);
