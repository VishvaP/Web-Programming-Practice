
<!DOCTYPE html>
<html>
<head>
<title>Display</title>
</head>
<body>

<form method="post" action="">
<label>Student ID</label>
<input type="text" name="student_id" />
<br />
<br />
<input type="submit" value="Get Details">
</form>
</body>
</html>

<?php 
include 'phpsql.php';
?>


<?php
$student_id=$_POST['student_id'];
$query="SELECT student_name, student_contact, dept_name, dept_owner
FROM Student
INNER JOIN Department 
ON Student.dept_id=Department.dept_id
WHERE Student.student_id=$student_id";
try
{
$result = mysqli_query($conn,$query);
}
catch (exception $e)
{
	echo "not found.";

 
}

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Student Name: " . $row["student_name"]. " - Contact: " . $row["student_contact"]. " - Department Name: " . $row["dept_name"]." - Department Owner: " . $row["dept_owner"]. "<br>";
    }
}
//mysqli_close($conn);
?>
