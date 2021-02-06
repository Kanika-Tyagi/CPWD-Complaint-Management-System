<html>
<?php
session_start();
?>
<body>
<?php
    
    if(!empty($_POST['submit']))
{	//echo 'hello1';



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
	  //echo "hello2";
           $mail = $_POST['mail'];           
           $_SESSION['email']= $mail;
	   $fname=$_POST['fname'];
	   $lname=$_POST['lname'];
	   $gen=$_POST['gen'];
	   $desig=$_POST['desig'];
	   $org=$_POST['org'];
	   $dob=$_POST['dob'];
	   $date_join=$_POST['date_join'];
	   $date_retire=$_POST['date_retire'];
	   $contact=$_POST['contact'];
	   $hno=$_POST['hno'];
	   $block=$_POST['block'];
	   $area=$_POST['area'];
	   $city=$_POST['city'];
	   $pin=$_POST['pin'];
                    
		//echo "hello3";
          $query1= "Insert into customer_data(mail_id, first_name, last_name, gender, DOB, designation, organisation, date_of_joining, date_of_retirement,  hno, sector, area, city, pin, contact) values('$mail', '$fname',  '$lname', '$gen', '$dob', '$desig', '$org', '$date_join', '$date_retire',  '$hno', '$block', '$area', '$city', '$pin',  '$contact')";
          mysqli_query($conn,$query1) ;
  //echo "hello4";
           
    }

?>
  <style type="text/css">
            <?php
                include("style/w3.css");
                include("style/StyleSheet1.css");
                include("https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css");
            ?>
        </style>
  <!--CONTAINER-->
    <div id="container">
        <!--HEADER-->
        <div id="header">
            <div id="logo"></div>
            <div id="top-info">
                <img id="cpwd" src="images/cpwdLogo.png" style="float:right;" />
            </div>
            <div id="navbar">
                <span class="nav-btn"></span>
                <ul class="collapse1 w3-navbar w3-black w3-large " style="margin:0px;">
                    <li>
                        <a class="active w3-navbar w3-btn w3-black w3-hover-teal " href="index.html" style="float:left;width:100%">
                            <i class="fa fa-home w3-xlarge"></i>
                            &nbsp;HOME
                        </a>
                    </li>
                    <li>
                        <a class="w3-btn w3-black w3-hover-teal " onclick="showInfo('steps')">
                            <i class="fa fa-question-circle"></i>
                            &nbsp;HOW TO BOOK COMPLAINT
                        </a>
                    </li>
                    <li>
                        <a class="w3-btn w3-black w3-hover-teal " href="contactus.html">
                            <i class="fa fa-phone"></i>
                            &nbspCONTACT US
                        </a>
                    </li>
                    <li>
                        <a class="w3-btn w3-black  w3-hover-teal" onclick="showInfo('about')">
                            <i class="fa fa-users"></i>
                            &nbsp;ABOUT US
                        </a>
                    </li>
                    <li>
                        <a onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-black w3-hover-teal">
                            <i class="fa fa-sign-in"></i>
                            &nbsp;LOGIN
                        </a>
                    </li>
                    <li>
                        <a class="w3-btn w3-dark-grey w3-hover-dark-grey" href="http://localhost/signup.php">
                            <i class="fa fa-coffee"></i>
                            &nbsp;SIGNUP
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--Steps to BOOK COMPLAINT-->
        <div id="steps" class="w3-accordion-content">
            <div class="w3-container">
                <h4>STEPS</h4>
                <p>
                    <ol type="i">
                        <li>Create an account</li>
                        <li>Login into your created account</li>
                        <li>Click on "Book complain" tab</li>
                        <li>Choose a complain category</li>
                        <li>Choose preferred date and time</li>
                        <li>Click on Submit button;Your Complaint has been booked</li>
                        <li>Check your registered email id for confirmation</li>
                    </ol>
                </p>
            </div>
        </div>
        <!--About us-->
        <div id="about" class="w3-accordion-content">
            <div class="w3-container">
                <h4>ABOUT US</h4>
                The Central public works department is the premier agency of the Central Government operating throughout the country for construction,
                maintenance and repairs of all works and buildings financed from civil works, budget, except few departments who have their own
                Engineering Units or may get the works executed through private agencies.
                General Financial Rule 136 provides:
                All Central Works, other than the works of Railways and Defence Department,
                irrespective of cost, shall primarily be executed by the Central Public Works Department.
                Prior concurrence of the Department of the Central Government in administrative charge of Public Works shall
                be necessary for entrusting works to an agency other than the Central P.W.D.  Such concurrence may be given by general or special orders.
                <br />
                <br />
            </div>
        </div>
  
   <!--CONTENT-->
        <div id="content-area" class="wrapper">
            <!--Left Column of Page-->
            <div id="left-col" class="equalH1">
    <form  method="post" action="signup_final2.php">
       
                   <h2 style="margin-left:3%;">SET PASSWORD</h2>
	  
        <div class="w3-group">
             <input style="margin-left:2%; width:80%; color:black; " class="w3-input" type="password" name="pass" required>
            <label style="margin-left:2%;width:80%;" class="w3-label w3-validate w3-large">New Password</label><br>
        </div>
       <div class="w3-group">
            <input style="margin-left:2%;width:80%; color:black;" class="w3-input" type="password" name="repass" class="fa fa-key fa-fw" required>
            <label style="margin-left:2%;width:80%;" class="w3-label w3-validate w3-large">Re-enter Password</label><br>
        </div>
       <!-- <button style="margin-left:40%; margin-bottom:1.56%;" class="w3-btn w3-ripple w3-teal w3-large">Submit</button><br>-->
       <input type="submit" style="margin-left:40%; margin-bottom:1.56%;" name="submit" value="OK" class="w3-btn w3-ripple w3-teal w3-large" action="signup_final2.php">
        </form>
</div>
<!--End of Left Column-->
            <!--Right Column of Page-->
            <div id="blank-right-col " class="equalH1  w3-card-8  w3-pale-blue" style="border:3px solid red;">
                <div class="w3-container "> <!--notice div container-->
                    <h2 style="color:black;">Notices</h2>
                    <ul style="color:black;">
                         <li>1)you are free to complain anytime  anywhere , no need to stick to the availability of mobile operator.</li><br>
                        <li>2) Every complain will be handled on the preferred time and date ,if the problem is not dealt thn you have to send mail to junior                                                  engineer.</li><br>
                           <li>3)Assigned employee  will  call you before heading to the venue.</li><br>
                         <li>4)User are required to register themselves to explore this software  and use its services .</li><br>
                          <li>5) Workers will  come to your place in the working hours of 9am -6pm.</li><br>
                        
                    </ul>
                </div> <!--end of notice div container-->

            </div><!--end of right-col-->
          </div> <!--End of Content-->
<div id="errorBox1" class="w3-modal">
                    <div style="width:50%; margin:3%;"  class="w3-modal-content w3-light-grey w3-card-8">
                        <div class="w3-container w3-red">
                                <header>
                                    <span onclick="document.getElementById('errorBox1').style.display='none'"
                                        class="w3-closebtn">
                                        ×
                                    </span>
                                    <h2>Alert Box</h2>
                                </header>
                            </div>
                            <p style="margin:3%;">Password and Re-entered Password do not matched !</p><br/>
                     </div>
                </div>
  <script> 
    function alert1() {
     window.document.getElementById('errorBox1').style.display='block';
    }</script>
 
  <?php error_reporting(0); 
       $flag=$_GET['flag'];
        if($flag==1)
          {
              echo "<script> alert1();  </script>"; 
          }
  
include_once"footer.html";
?>
</body>
</html>