<?php
session_start();
?>

<?php
    
     var_dump($_POST);
    if(!empty($_POST['submit']))
{	echo 'hello1';

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
           
           $mail = $_SESSION['email'];           
           $pass= $_POST['pass'];
	    $repass= $_POST['repass'];
	if($pass!=$repass)
	{ 
	header("Location:signup_final.php?flag=1");	
	 }
	else
	{
	 $query = "Update customer_data set password='$pass' where mail_id = '$mail' ";
	mysqli_query($conn, $query) ;
	
	header("Location: profile.php");
	}		
 	
}

?>    