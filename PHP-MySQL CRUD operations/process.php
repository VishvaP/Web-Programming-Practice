<?php include 'phpsql.php'; ?>

<?php

// create variables for department details
$dept_id=$_POST['dept_id'];
$dept_name=$_POST['dept_name'];
$dept_owner=$_POST['dept_owner'];


// create variables for student details
$student_id=$_POST['student_id'];
$dept_id_f=$_POST['dept_id_f'];
$student_name=$_POST['student_name'];
$student_address=$_POST['student_address'];
$student_contact=$_POST['student_contact'];


//Add Department
mysqli_query($conn,"INSERT INTO Department (dept_id,dept_name,dept_owner)
		        VALUES ('$dept_id','$dept_name','$dept_owner')");
				
	if(mysqli_affected_rows($conn) > 0)
	{
	echo "<p>Department Added</p>";
	} 
	else 
	{
	echo "Department NOT Added<br />";
	echo mysqli_error ($conn);
	}
	
//Add Student
mysqli_query($conn,"INSERT INTO Student (student_id,dept_id,student_name,student_address,student_contact)
		        VALUES ('$student_id','$dept_id_f','$student_name','$student_address','$student_contact')");
				
	if(mysqli_affected_rows($conn) > 0)
	{
	echo "<p>Student Added</p>";
	} 
	else 
	{
	echo "Student NOT Added<br />";
	echo mysqli_error ($conn);
	}

?>