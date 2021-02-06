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
?>
<html> 
<body>
<style type="text/css">
<?php
	//include("style/w3.css");
    //include("style/StyleSheet1.css");
?>
</style>

<?php
    if(!empty($_POST['submit'])){
		if( empty($_POST['user_name']) ){
			
		}
		else if (empty($_POST['pass'])){

		}
		else{
			//include_once 'dbconnect.php';
			$user_name = $_POST['user_name'];
			$pass= $_POST['pass'];          
			$query1= "Select * from customer_data where  mail_id ='$user_name' AND password= '$pass'  ";
			$res = mysqli_query($conn,$query1);
			$rows = mysqli_num_rows($res);
			if($rows==1){
				$_SESSION['email']= $user_name;
				header ("Location: profile.php");
			}
			else{  
				header("Location: index.php?flag=1");                 
			}
		}
   }
  
?>
</body>
</html>