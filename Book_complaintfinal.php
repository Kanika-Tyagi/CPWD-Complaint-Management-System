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
 require 'phpmailer\PHPMailer-master\PHPMailerAutoload.php';

?>
<html> <body>

<?php
  
   if(empty($_POST['submit'])){ 
  
   }
   else{ 
  
       
       $mail_id = $_SESSION['email'];
       $category = $_SESSION['category'];
       echo $category;
       
       $time = $_POST['time2'];
       $desc=$_POST['desc'];
       $submit = $_POST['submit'];
       $date = $_SESSION['date']; 
       $pin =  $_SESSION['pin']; 
       $curdate = date('Y-m-d');
         
      
         $query =   "SELECT Name, Email from workers where Category = '$category' AND pin = $pin ";    
      
        $resnew = mysqli_query($conn, $query);
	
		$dt1 = "";
		$dt2 = "";
         while( $row = mysqli_fetch_array($resnew))
             { 
				
              $dt1 =  $row['Name'];
			  $dt2 = $row['Email'];
    
               }      
           
         
         $wname = $dt1;
         $wmail = $dt2;
 

       $query1= "Insert into book_complain(complain_type, preferred_date, start_time,description, mail_id, book_date, pin, worker) values('$category',  '$date', '$time','$desc','$mail_id', '$curdate', $pin, '$wname')";

       mysqli_query($conn, $query1);
      
       $query2 = "Select complain_id, start_time, preferred_date, worker, description from book_complain where complain_type= '$category' AND book_date = '$curdate'  AND  mail_id='$mail_id' ";
      $res = mysqli_query($conn, $query2);
         
             while( $row = mysqli_fetch_array($res))
             { 

              $data = array( $row['complain_id'], $row['start_time'], $row['preferred_date'], $row['worker'],$row['description']);

               } 
                      
               $msg   ='Your complain has been booked successfully ' . 'Complain Id  : ' . '  ' . $data[0] .' , ' . 'Time  : ' . $data[1] . '-' .($data[1]+2) . ',' . 'Preferred Date :  '.$data[2] . 'Worker Name :' . $data[3] . ' Complaint description : '. $data[4] ;

               $query3 = "Select   hno, sector, area, city, contact from customer_data where mail_id = '$mail_id' " ;
               $rnew = mysqli_query($conn, $query3);
              
                while( $row = mysqli_fetch_array($rnew) )
               { 
                $datum = array( $row['hno'], $row['sector'], $row['area'], $row['city']); 
                } 
                $address ="Address of complainant : ". $datum[0] . ',  '. $datum[2] . ', '. $datum[3] ;
    
               $msg = $msg . $address ;
            
               //Sending complaint id to users to complainant details to worker
                  $mail = new PHPMailer;
                  //$mail->isSMTP();                                      
                  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                  $mail->SMTPAuth = true;                               // Enable SMTP authentication
                  $mail->Username = 'complaintsystem.mait@gmail.com';                 // SMTP username
                  $mail->Password = 'complaintsystem';                           // SMTP password
                  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                  $mail->Port = 465;                                    // TCP port to connect to
                  
                 $mail->setFrom('complaintsystem.mait@gmail.com', 'Admin Admin');
                
                 $mail->addAddress($mail_id);       //        Name is optional
                 $mail->addAddress($wname);
                $mail->addReplyTo('complaintsystem.mait@gmail.com', 'Admin Admin');
          
               $mail->Subject = 'Complaint Id';

            $mail->Body = $msg;
            
            
            echo "Message :". $msg;
           if(!$mail->send()) {
                 echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
               } else {
                   echo 'Message has been sent';
                     echo $mail_id;  
			header("Location: profile.php?flag=4");                   

                     }
  
            
              
     }
?>   
</body>
</html>