<?php
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
session_start();

  if(!empty($_POST['submit']))
 {
                     //var_dump(POST);

           $mail_id = $_SESSION['email'];                     
   
           $fname=$_POST['fname'];
	   $lname=$_POST['lname'];
	   $gen=$_POST['gen'];
	   $desig=$_POST['desig'];
	   $org=$_POST['org'];
           $date_join=$_POST['date_join'];
	   $dob=$_POST['dob'];
	   $date_retire=$_POST['date_retire'];
	   $contact=$_POST['contact'];
	   $hno=$_POST['hno'];
	   $block=$_POST['block'];
	   $area=$_POST['area'];
	   $city=$_POST['city'];
	   $pin=$_POST['pin'];


	if($fname!='')
	{
		$query1="Update customer_data set  first_name='$fname' where mail_id ='$mail_id' ";
		mysqli_query($conn, $query1) ;	
	}
         if($lname!='')
	{
		$query2="Update customer_data set  last_name='$lname' where mail_id ='$mail_id' ";
		mysqli_query($conn, $query2) ;	
	}
         if($gen!='')
	{
		$query3="Update customer_data set  gender='$gen' where mail_id ='$mail_id' ";
		mysqli_query($conn,$query3) ;	
	}
         if($desig!='')
	{
		$query4="Update customer_data set  designation='$desig' where mail_id ='$mail_id' ";
		mysqli_query($conn, $query4) ;	
	}
         if($org!='')
	{
		$query5="Update customer_data set  organisation='$org' where mail_id ='$mail_id' ";
		mysqli_query($conn, $query5) ;	
	}
         if($dob!='')
	{
		$query6="Update customer_data set  DOB='$dob' where mail_id ='$mail_id' ";
		mysqli_query($conn, $query6) ;	
	}
         if($date_join!='')
	{
		$query7="Update customer_data set  date_of_joining='$date_join' where mail_id ='$mail_id' ";
		mysqli_query($conn,$query7) ;	
	}
         if($date_retire!='')
	{
		$query8="Update customer_data set  date_of_retirement='$date_retire' where mail_id ='$mail_id' ";
		mysqli_query($onn,$query8) ;	
	}
         if($contact!='')
	{
		$query9="Update customer_data set contact= '$contact' where mail_id ='$mail_id' ";
		mysqli_query($conn, $query9) ;	
	}
        if($hno!='')
	{
		$query10="Update customer_data set hno= '$hno' where mail_id ='$mail_id' ";
		mysqli_query($conn, $query10) ;	
	}
	if($block!='')
	{
		$query11="Update customer_data set sector= '$block' where mail_id ='$mail_id' ";
		mysqli_query($conn,$query11) ;	
	}
	if($area!='')
	{
		$query12="Update customer_data set area='$area' where mail_id ='$mail_id' ";
		mysqli_query($conn,$query12) ;	
	}   
	if($city!='')
	{
		$query13="Update customer_data set city= '$city' where mail_id ='$mail_id' ";
		mysqli_query($conn, $query13) ;	
	}
	if($pin!='')
	{
		$query14="Update customer_data set pin= '$pin' where mail_id ='$mail_id' ";
		mysqli_query($conn,$query14) ;	
	}
                    
 }

 header("Location: profile.php?flag=3");                 
?>
