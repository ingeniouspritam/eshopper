<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];


// database insert SQL code
$sql = "INSERT INTO `tbl_contact` ( `id`,`fldName`, `fldEmail`, `fldPhone`, `fldpassword`,`fldcpassword`) VALUES ('0', '$Name', '$Email', '$Phone', '$password','$cpassword')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>