<?php
                 session_start();
?>

<html> 
 <style type="text/css">
            <?php
                 session_start();
               // include("style/w3.css");
               // include("style/StyleSheet1.css");
            ?>
        </style>
<?php
     
      $servername = "localhost";
	$username = "root";
	$password = "kanika";
	$dbname = "mywebsite";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
       require 'phpmailer\PHPMailer-master\PHPMailerAutoload.php';

                 
               
                    $comp_num = mysqli_real_escape_string($conn, $_POST['c_no']);

                 // -------- fetching complain no  from form ----------
                    $query1 = "Select complain_id from book_complain where complain_id = '$comp_num' " ;
   
                      $res = mysqli_query($conn, $query1);
     
                     $rows = mysqli_num_rows($res);
                     if($rows!=1)
                    {
                   header("Location: Service_complain.php?flag=1");                 
                       }

                      else
                      {

                    if(!empty($_POST['submit']))
                    {                  
                     $feedback_desc= $_POST['desc'];
                    
       // ------  updating feedback in book complain ------

                    $query3 = "Update book_complain SET feedback_description = '  $feedback_desc ' 
                     where complain_id =  " . $comp_num ;
                    
                     mysqli_query($conn,$query3) ;
                    
                    $feedback= $_POST['fb'];
                    $query4 = "Update book_complain set feedback='$feedback' where complain_id =". $comp_num;
                    mysql_query($conn,$query4) ;		
                   
                    
                  if($feedback=='Not-Satisfied')
                {                 

                  $mail = new PHPMailer;

                   $mail->isSMTP();                                      // Set mailer to use SMTP
                  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                  $mail->SMTPAuth = true;                               // Enable SMTP authentication
                  $mail->Username = 'tech.pirates2015@gmail.com';                 // SMTP username
                  $mail->Password = 'Maitreyi';                           // SMTP password
                 $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                 $mail->Port = 465;                                    // TCP port to connect to

                 //$mail->setFrom('tech.pirates2015@gmail.com', 'Tech Pirates');
                 $mail->setFrom('complaintsystem.mait@gmail.com', 'Admin Admin');
                 $mail->addAddress('complaintsystem.mait@gmail.com', 'Admin Admin');     // Add a recipient
               //$mail->addAddress('ronakt12@gmail.com');               // Name is optional
                 $mail->addReplyTo('complaintsystem.mait@gmail.com', 'Admin Admin');
          
               $mail->Subject = 'Complainant Details';
                $query5 = 'Select complain_id, mail_id, book_date, preferred_date,start_time,  feedback_description from book_complain where complain_id = ' . $comp_num ;
           
               $res = mysqli_query($conn ,$query5);

                while( $row = mysqli_fetch_array($res))
             { 
              $data = array( $row['complain_id'], $row['mail_id'], $row['book_date'], $row['preferred_date'], $row['start_time'],$row['feedback_description']);
                
               } 
            
           $msg   ='Details of Complainant <br>' . 'Complain Id  : '  . $data[0] . ' <br> ' . 'Mail-id : ' . $data[1] . ' <br> ' . 'Booking-date  : ' .$data[2] . ' <br> '. 'Preferred-date : ' .$data[3] . '<br>' . 'Time : ' . $data[4] . '-'  . ($data[4]+2) . '<br>' . 'Feedback-desciption :  '.$data[5] ;

            $mail->Body = $msg;

       
              // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                  if(!$mail->send())
              {
                 echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
               } 
              else {
                   header("Location:Service_complain.php?flag=2");
                 
                    }
                    }//if satisfied
                   
                 else
                  {
                     header("Location:Service_complain.php?flag=3");
                    
                     }
                  
                }
                
                    }//else
                     ?>

</html>