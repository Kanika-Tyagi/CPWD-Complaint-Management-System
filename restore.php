<?php
    session_start();
      include_once 'dbconnect.php';
       require 'phpmailer\PHPMailer-master\PHPMailerAutoload.php';
     
     
                $mail_id = $_POST['mail_id'] ;
                   if($mail_id!=null)
{
              $mail = new PHPMailer;
                  
                   $mail->isSMTP();                                      // Set mailer to use SMTP
                  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                  $mail->SMTPAuth = true;                               // Enable SMTP authentication
                  $mail->Username = 'complaintsystem.mait@gmail.com';                 // SMTP username
                  $mail->Password = 'complaintsystem';                           // SMTP password
                 $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                 $mail->Port = 465;                                    // TCP port to connect to
                
                
                 $mail->setFrom('complaintsystem.mait@gmail.com', 'Admin Admin');
                //$mail->addAddress('jigyasamalik95@gmail.com', 'Jigyasa Malik');     // Add a recipient
               $mail->addAddress($mail_id);               // Name is optional
               $mail->addReplyTo('complaintsystem.mait@gmail.com', 'Admin Admin');
          
               $mail->Subject = 'Password';
                $query5 = "Select password from customer_data where mail_id= '$mail_id' " ;
           
               $res = mysql_query($query5, $db);

                while( $row = mysql_fetch_array($res))
             { 
              $data = array( $row['password']);    
               } 
            
            $msg   ='Your Password : ' . $data[0] ;
         
            $mail->Body = $msg;

      
                  if(!$mail->send())
              {
                 echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
               } 
              else {
                   //echo 'Message has been sent';
                    header("Location: index.php?flag=2");                 
                  }
                    
             }
?>