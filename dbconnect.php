<?php
/*error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!($db=mysql_connect("localhost","root","kanika")))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("complain_system",$db))
{
	die('oops database selection problem ! --> '.mysql_error());
}
//echo 'Database entered successfully';*/
	$servername = "localhost";
	$username = "root";
	$password = "kanika";
	$dbname = "complain_system";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

?>

