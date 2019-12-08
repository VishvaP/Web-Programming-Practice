<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab5";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database ast5
$sql = "CREATE DATABASE ast5";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// sql string to create table Department
$query_dept = "CREATE TABLE Department (
dept_id INT(4) PRIMARY KEY,
dept_name VARCHAR(30) UNIQUE,
dept_owner VARCHAR(30) UNIQUE
)";

if (mysqli_query($conn, $query_dept)) {
    echo "Table Department created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql string to create table Student
$query_dept = "CREATE TABLE Student (
student_id INT(4) PRIMARY KEY,
dept_id INT(4),
student_name VARCHAR(4), 
student_address VARCHAR(20),
student_contact INT(10),
foreign key (dept_id) references Department(dept_id)	
)";
try{
if (mysqli_query($conn, $query_dept)) {
    echo "Table Student created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
}
finally
{
mysqli_close($conn);

}
?>