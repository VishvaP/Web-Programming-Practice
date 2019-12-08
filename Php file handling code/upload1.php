<?php
//photo validation
if(($_FILES["photo"]["type"]=="image/jpeg" || $_FILES["photo"]["type"]=="image/jpg") && $_FILES["photo"]["size"]<1048576)
{
	if (file_exists("up/".$_FILES["photo"]["name"])) 
	{
    echo $_FILES["photo"]["name"]." file already exists.<br>";
	}
	else
	{
	if(move_uploaded_file($_FILES["photo"]["tmp_name"], "up/".$_FILES["photo"]["name"]))
	{
		echo $_FILES["photo"]["name"]." file uploaded successfully<br>";
	//	copy($_FILES["photo"]["name"],"up/".$_FILES["photo"]["tmp_name"]);
	}
	else
	{
		echo "error :".$FILE["photo"][error];
	}
}
}
else
{
echo "Invalid file : ".$_FILES["photo"]["name"]."<br>";
}

//resume validation
if(($_FILES["resume"]["type"]=="application/pdf" || $_FILES["resume"]["type"]=="application/doc") && $_FILES["resume"]["size"]<500000)
{
	if (file_exists("up/".$_FILES["resume"]["name"])) 
	{
    echo $_FILES["resume"]["name"]." file already exists.";
	}
	else
	{
	if(move_uploaded_file($_FILES["resume"]["tmp_name"], "up/".$_FILES["resume"]["name"]))
	{
		echo $_FILES["resume"]["name"]." file uploaded successfully";
	//	copy($_FILES["resume"]["name"],"up/".$_FILES["resume"]["tmp_name"]);
	}
	else
	{
		echo "error: ".$FILES["resume"][error];
	}
}
}
else
{
echo "Invalid file: ".$_FILES["resume"]["name"];
}

//Checks whether a file was uploaded via HTTP POST
echo "<br>";
if (is_uploaded_file($_FILES["resume"]["name"])) 
    echo ($_FILES["resume"]["name"]."  is uploaded via HTTP POST"); 
else
    echo ($_FILES["resume"]["name"]." is not uploaded via HTTP POST"); 

?>