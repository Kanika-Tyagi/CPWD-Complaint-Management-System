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
               
                $mail = $_SESSION['email'];
                $query1 = "Select  designation, hno, sector, area, city, contact from customer_data where mail_id = '$mail' " ;
               
                $res = mysqli_query($conn,$query1);
               
                
                //var_dump($res);
                while( $row = mysqli_fetch_array($res))
             { 
              $data = array( $row['designation'], $row['hno'], $row['sector'], $row['area'], $row['city'],$row['contact']);
              
                } 
         
  ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
        Profile
    </title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"-->
    
    <link rel="stylesheet" href="ideal-image-slider.css">
    <link rel="stylesheet" href="themes/default/default.css">

    <!--link rel="stylesheet" href="style/StyleSheet1.css"-->
    <style type="text/css">
    <?php

    include("style/w3.css");
    include("style/StyleSheet1.css");
        ?>
        </style>
</head>
           
<body>
    <!--CONTAINER-->
    <div id="container">
        <!--HEADER-->
        <div id="header">
            <div id="logo"></div>
            <div id="top-info"><img id="cpwd" src="images/cpwdLogo.png" style="float:right;"></div>
            <div id="navbar">
                <span class="nav-btn"></span>
                <ul class="collapse1 w3-navbar w3-black w3-large " style="margin:0px;">
                    <li><a class="active w3-navbar w3-black w3-hover-teal " href="homem.html" style="float:left;width:100%"><i class="fa fa-home w3-xlarge"></i>&nbsp;HOME</a></li>
                    <li><a class="w3-btn w3-black w3-hover-teal " onclick="showInfo('steps')"><i class="fa fa-question-circle"></i>&nbsp;HOW TO BOOK COMPLAINT</a></li>
                    <li><a class="w3-btn w3-black w3-hover-teal" href="contactusm.html"><i class="fa fa-phone"></i>&nbspCONTACT US</a></li>
                    <li><a class="w3-btn w3-black  w3-hover-teal" onclick="showInfo('about')"><i class="fa fa-users"></i>&nbsp;ABOUT US</a></li>
                    <li class="w3-dropdown-click"><a class="w3-btn w3-dark-grey w3-hover-dark-grey" href="#" onclick="myDropdown()"><i class="fa fa-coffee"></i>&nbsp;PROFILE&nbsp;<i class="fa fa-caret-down"></i></a>
			<div id="demo" style="width:inherit; z-index:11;" class="w3-dropdown-content w3-dark-grey w3-card-4 w3-center">
    <a href="profile.php">User Profile</a>
    <a href="Book_complain1.php">Book Complaint</a>
    <a onclick="cdisp(); cempty();">Change Password</a>
    <a href="updation.php">Update Profile</a>
    <a href="Service_complain.php">Feedback</a>	
  </div>
	</li>
                
	
	
                    <li><a class="w3-btn w3-black w3-hover-teal" href="Logout.php"><i class="fa fa-sign-out"></i>&nbsp;LOGOUT</a></li>
                </ul>
            </div>
    <!--Script for dropdown-->
<script>
function myDropdown() {
    document.getElementById("demo").classList.toggle("w3-show");
	
}
</script>
<!--Script end for dropdown-->
        
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
                The Central public works department is the premier agency of the Central Government operating throughout the country for construction, maintenance and repairs of all works and buildings financed from civil works, budget, except few departments who have their own Engineering Units or may get the works executed through private agencies.
                General Financial Rule 136 provides:
                “All Central Works, other than the works of Railways and Defence Department, irrespective of cost, shall primarily be executed by the Central Public Works Department.  Prior concurrence of the Department of the Central Government in administrative charge of Public Works shall be necessary for entrusting works to an agency other than the Central P.W.D.  Such concurrence may be given by general or special orders.
                <br><br>
            </div>
        </div>
        <!--CONTENT-->
    <!--wrappee wraps left and right column as table cells; so we call both the coulmns equalH1; Left column inturn wraps left and center content..;
        so we call left and center content as equalH2 and Left column as sub-wrapper-->
        <div id="content-area" class="wrapper">
            <div id="left-col" class="equalH1 sub-wrapper" style="height:inherit;">
               
                <div id="sideI" class="equalH2" style="width:15%; background-color: #f1f1f1;">
                    <span class="side-nav-btn"></span>
                    <ul id="side">
                        <li><a class="sidea w3-btn w3-white w3-hover-teal" href="Book_complain1.php">Book Complaint</a></li>
                        <li><a class="sidea w3-btn w3-grey w3-hover-teal" onclick="cdisp(); cempty();">ChangePassword</a></li>
                        <li><a class="sidea w3-btn w3-dark-grey w3-hover-teal " href="updation.php">Update Profile</a></li>
                        <li><a class="sidea w3-btn w3-black w3-hover-teal " href="Service_complain.php">Feedback</a></li>
                    </ul>
                </div>
<script>
function cdisp()
{
document.getElementById('id02').style.display='block';
}
function cempty()
{
document.getElementById("c_pass").reset();
}
</script>
<!-- Center div start -->    
        
                <div class="equalH2" style= "width:50%;">
                    
                    <div id="userI" class="w3-card-12">
                        <br>
                        <img src="images/4.jpeg" alt="User" style="width:100%;">
                        <div class="w3-container w3-center w3-indigo" >
                           <input name = "U_name"  class="w3-indigo"  style = "border: 0px solid; width:30%; height:50%;" disabled="disabled"/><br>   <!--Add name of the user here-->
                         </div>
                    </div>
               
                    <br>
                   <div style="margin-left:3%; color:#00004d;">
                   <i><b>Designation:</b><br>
                    <input name = "designation" type = "text" value="<?php echo $data[0]?>" style ="background-color: #d6d6c2; border: 0px solid;" disabled="disabled"/><br><br></i>
                
                    <i><b>Address:</b><br>
                    <input name = "address" type = "text" value="<?php echo $data[1] . ',  '.$data[2] . ', '. $data[3]. ', '. $data[4] ; ?>" style ="background-color: #d6d6c2; border: 0px solid; width:60%; " disabled="disabled"/><br><br></i>
                    <i style ="color:#00004d;"><b>Contact No :</b><br>
                     <input name = "contact" value="<?php echo $data[5]?>" style ="  background-color: #d6d6c2; border: 0px solid;"  disabled="disabled"/></i>
                    <br><br>
                   </div>
                    <div class="w3-card-8 w3-indigo" style="padding:1%;">
                    <p>Please update your profile as soon as possible in case of change of any of the above information.</p>
                        </div>
                </div>

            <div id="blank-right-col " class="equalH1  w3-card-8  w3-pale-blue" >
                <div id="notice"class="w3-container" style="width:100%;" >
                    <h2 style="color:black;">Notices</h2>
                    <ul style="color:black;">
                   <li>1)you are free to complain anytime  anywhere , no need to stick to the availability of mobile operator.</li><br>
                        <li>2) Every complain will be handled on the preferred time and date ,if the problem is not dealt thn you have to send mail to junior                                                  engineer.</li><br>
                           <li>3)Assigned employee  will  call you before heading to the venue.</li><br>
                         <li>4)User are required to register themselves to explore this software  and use its services .</li><br>
                          <li>5) Workers will  come to your place in the working hours of 9am -6pm.</li><br>
                        
                        </ul>
                    </div>  
            </div>
        </div>
        </div>


 <!-- Alert BOX -->
    
        <div id="errorBox1" class="w3-modal">
            <div style="width:50%; margin-right:30%; margin-top:3%;" class="w3-modal-content w3-light-grey w3-card-8">
                <div class="w3-container w3-red">
                    <header>
                        <span onclick="document.getElementById('errorBox1').style.display='none'"
                              class="w3-closebtn">
                            x
                        </span>
                        <h2>Error</h2>
                    </header>
                </div>
                <p style="margin:3%;">Entered and re-entered password doesn't match !</p><br />
            </div>
        </div>
<!--dialog-->

<! -- Alert Box 2 -->
 <div id="errorBox2" class="w3-modal">
            <div style="width:50%; margin-right:30%; margin-top:3%;" class="w3-modal-content w3-light-grey w3-card-8">
                <div class="w3-container w3-pink">
                    <header>
                        <span onclick="document.getElementById('errorBox2').style.display='none'"
                              class="w3-closebtn">
                            x
                        </span>
                        <h2>Error</h2>
                    </header>
                </div>
                <p style="margin:3%;">Incorrect previous password !</p><br />
            </div>
        </div>
<! -- Alert Box 3 -->
 <div id="errorBox3" class="w3-modal">
            <div style="width:50%; margin-right:30%; margin-top:3%;" class="w3-modal-content w3-light-grey w3-card-8">
                <div class="w3-container w3-green">
                    <header>
                        <span onclick="document.getElementById('errorBox3').style.display='none'"
                              class="w3-closebtn">
                            x
                        </span>
                        <h2></h2>
                    </header>
                </div>
                <p style="margin:3%;">Successfully done !</p><br />
            </div>
        </div>

       <!-- Alert BOX of Book complaint-->
    
        <div id="errorBox4" class="w3-modal">
            <div style="width:50%; margin-right:30%; margin-top:3%;" class="w3-modal-content w3-light-grey w3-card-8">
                <div class="w3-container w3-green">
                    <header>
                        <span onclick="document.getElementById('errorBox4').style.display='none'"
                              class="w3-closebtn">
                            x
                        </span>
                        <h2>Success</h2>
                    </header>
                </div>
                <p style="margin:3%;">Complaint has been booked successfully!! Check registered Email-ID for details</p><br />
            </div>
        </div>
<!--dialog-->
<script> 

    function alert1() {
     window.document.getElementById('errorBox1').style.display='block';
    }
   function alert2() {
     window.document.getElementById('errorBox2').style.display='block';
    }
 function alert3() {
     window.document.getElementById('errorBox3').style.display='block';
    }
  function alert4() {
     window.document.getElementById('errorBox4').style.display='block';
    }

</script>
   
 
    
   <!-- <?php //error_reporting(0); 
       $flag=$_GET['flag'];
        if($flag==1)
          { 
              echo "<script> alert1();  </script>"; 
          }
        if($flag==2)
       {  
         echo"<script>alert2();</script>";
       }
       if($flag==3)
       {  
         echo"<script>alert3();</script>";
       }
     if($flag==4)
       {  
         echo"<script>alert4();</script>";
       }
 ?> 
-->

  <!--   ############################################# CHANGE PASSWORD ################################################  -->

  <div  style="z-index:18;" id="id02" class="w3-modal">
        <div style="width:50%;" class="w3-modal-content w3-animate-top w3-card-8">

            <form  id ="c_pass" method="post" action="change.php">


                <div class="w3-container w3-teal">
                    <header>
                        <span onclick="document.getElementById('id02').style.display='none'"
                              class="w3-closebtn">×</span>
                        <h2></h2>
                    </header>
                </div>
                <p>
                    <div class="w3-group">
                        <input style="margin-left:2%; width:80%; color:black; " class="w3-input" type="password" name = "pass" required>
                        <label style="margin-left:2%; width:80%;" class="w3-label w3-validate w3-large">Previous Password</label>
                    </div>
                </p>
        <div class="w3-group">
            <input style="margin-left:2%;width:80%; color:black;" class="w3-input" type="password" name= "new_pass" class="fa fa-key fa-fw" required>
            <label style="margin-left:2%;width:80%;" class="w3-label w3-validate w3-large">New Password</label><br>
        </div>
       <div class="w3-group">
            <input style="margin-left:2%;width:80%; color:black;" class="w3-input" type="password" name = "re_pass" class="fa fa-key fa-fw" required>
            <label style="margin-left:2%;width:80%;" class="w3-label w3-validate w3-large">Re-enter Password</label><br>
        </div>
   <input style="margin-left:40%; margin-bottom:1.56%;" class="w3-btn w3-ripple w3-teal w3-large" type="submit" name="submit" value="SUBMIT " action="change.php" />
        </form>

    </div>
    </div>


      <!----FOOTER-->
        <div id="footer" class="w3-container w3-padding-32 w3-black">
            <div class="w3-container w3-black  w3-center">
                <h4>Follow Us</h4>
                <a class="w3-btn-floating w3-center w3-blue" href="http://www.facebook.com" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <a class="w3-btn-floating w3-center w3-blue" href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                <a class="w3-btn-floating w3-center w3-blue" href="https://plus.google.com/" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                <a class="w3-btn-floating w3-center w3-blue" href="https://in.linkedin.com/" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
            <!--GoTOTop-->
            <div style="position:relative;bottom:103px;z-index:1;" class="w3-tooltip w3-right">
                <a class="scrollup w3-btn" href="">
                    <span class="w3-xxlarge">
                        <i class="fa fa-chevron-circle-up"></i>
                    </span>
                </a>
            </div>
            <!--End of Go TO Top-->
        </div> <!--End of Footer-->
    </div><!--END CONTAINER-->
    
    <!--SCRIPT-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


    <script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
}
    </script>
    
    <!--Smooth scrollup Code-->
    <script type="text/javascript">
    $(document).ready(function(){

        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });

    });
    </script>
    <!--End of Smooth scroll up Code-->

    <script>
        function showInfo(id) {
        document.getElementById(id).classList.toggle("w3-show");
        }
    </script>
    <script>
        $('span.nav-btn').click(function () {
            $('ul.collapse1').slideToggle();

        })

        $(window).resize(function () {
            if ($(window).width() > 750){
                $('ul.collapse1').removeAttr('style');
            }

        })
    </script>

</body>
</html>
