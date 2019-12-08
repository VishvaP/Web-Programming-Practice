
<!DOCTYPE html>
<html>
<head>
<title>Modify</title>
</head>
<body>

<form method="post" action="">
<label>Student ID</label>
<input type="text" name="student_id" />
<br />
<label>New Contact Number</label>
<input type="text" name="student_contact" />
<br />
<br />
<input type="submit" value="Update">
</form>
</body>
</html>

<?php 
include 'phpsql.php';
?>


<?php
$student_id=$_POST['student_id'];
$student_contact=$_POST['student_contact'];
$query="UPDATE Student SET student_contact=$student_contact WHERE student_id=$student_id";

if (mysqli_query($conn, $query)) {
    echo "Contact Number updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
