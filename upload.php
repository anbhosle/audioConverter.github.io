<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records
$myfile = $_POST['myfile'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldAudio`) VALUES ('0', '$myfile')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Audio Records Inserted";
}

?>

