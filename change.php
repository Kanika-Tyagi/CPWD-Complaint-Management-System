<?php
	session_start();
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

	$mail_id=$_SESSION['email'];
	$pass=$_POST['pass'];
	$new_pass=$_POST['new_pass'];
	$re_pass=$_POST['re_pass'];
    $query1= "Select password from customer_data where  mail_id ='$mail_id' ";
	$res = mysqli_query($conn, $query1) ;
	while( $row = mysqli_fetch_array($res))
             { 
              $data = array( $row ['password']);        
             }

	if($pass!=$data[0])
	{
	    echo "Incorrect password entered";
                     header("Location: profile.php?flag=2");     
        }
	else if($new_pass==$re_pass)
	{
        
	    $query2="Update customer_data set password='$new_pass' where mail_id = '$mail_id' ";
	    mysqli_query($conn,$query2);
	    
        header("Location: profile.php?flag=3");
	                     
	}
	else
	{
        echo "New Password does not match Re-entered Password";
        header("Location: profile.php?flag=1");
    }
                
?>