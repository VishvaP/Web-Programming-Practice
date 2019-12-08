<?php 
include 'phpsql.php';
$query='SELECT dept_id, COUNT(*) student_id as CN
        FROM Student
        GROUP BY dept_id';
$query2=
'SELECT D.dept_id, S.student_id
   FROM Department D
   LEFT JOIN (
          SELECT dept_id, COUNT(*) student_id
            FROM Student 
           GROUP BY dept_id
        ) S ON D.dept_id = S.dept_id 
		order by dept_id';
try{
$result = mysqli_query($conn,$query2);
}catch(exception $e)
{
	echo "exception found: $e ";
}

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)) {
        echo "Department ID: " . $row["dept_id"]. " - No. of Students: " . $row[student_id]."<br>";
    }
}
else
{
	echo "Null value";
}
?> 

