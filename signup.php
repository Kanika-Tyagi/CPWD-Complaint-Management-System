
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign up form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1" /><!--user-scalable=no"-->
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
       
        <link href="text.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">


        <style type="text/css">
            <?php
                include("style/w3.css");
                include("style/StyleSheet1.css");
                include("https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css");
            ?>
        </style>

       <!--DatePicker Function-->
       <script>
           $(function() {
               $( ".datepicker" ).datepicker({
                   dateFormat : "yy-mm-dd"
           });
    });
    </script>

            </head>
    
    <body>
        <div id="container">
        <!--PAGE HEADER-->
        <div id="header">
            <!--Logo-->
            <div id="logo">
            </div>
            <!--TopInfo-->
            <div id="top-info">
                <img id="cpwd" src="images/cpwdLogo.png" style="float:right;">
            </div>

            <!--Responsive Navbar-->
            <div id="navbar">
                <span class="nav-btn"></span>
                <ul class="collapse1 w3-navbar w3-black w3-large " style="margin:0px;">
                    <li>
                        <a class="active w3-navbar w3-black  w3-hover-teal" href="index.php" style="float:left;width:100%">
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
                        <a class="w3-btn w3-black w3-hover-teal " href="contactus.php">
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
                    <li><a onclick="disp(); empty();" class="w3-btn w3-black w3-hover-teal"><i class="fa fa-sign-in"></i>&nbsp;LOGIN</a></li>
                    <li>
                            <a class="w3-btn w3-dark-grey w3-hover-dark-grey" href="signup.php">
                                <i class="fa fa-coffee"></i>
                                &nbsp;SIGNUP
                            </a>
                    </li>
                    
                    
                </ul>
            </div>
<script>
function disp()
{
document.getElementById('id01').style.display='block';
}
function empty()
{
document.getElementById("myform").reset();
}
</script>
            <!--End Responsive Navbar-->
        </div> <!--End Header-->


        <!--LOGIN FORM-->
    <div id="id01" class="w3-modal">
        <div style="width:50%;" class="w3-modal-content w3-animate-top w3-card-8">

            <form id="myform" method="post" action="loginfinal.php">


                <div class="w3-container w3-teal">
                    <header>
                        <span onclick="document.getElementById('id01').style.display='none'"
                              class="w3-closebtn">×</span>
                        <h2>LogIn</h2>
                    </header>
                </div>
                
                    <div class="w3-group">
                        <input style="margin-left:2%; width:80%; color:black; " class="w3-input" type="text" name="user_name" required>
                        <label style="margin-left:2%; width:80%;" class="w3-label w3-validate w3-large">User Name</label><br>
                    </div>
                
        <div class="w3-group">
            <input style="margin-left:2%;width:80%; color:black;" type="password" name="pass" class="w3-input" required>
            <label style="margin-left:2%;width:80%;" class="w3-label w3-validate w3-large">Password</label><br>

            <!--label style="margin-left:2%;width:80%; color:black; border: 0px solid; background-color:white; <?php error_reporting(0); if($flag==1){$flag=0;} else {echo 'display:none;';} ?>" class="w3-label">wrong password</!--label><br /-->
           
             <a onclick="f1(); f2();" style="text-decoration:underline; margin-left:2%;width:80%; cursor:pointer;">Restore Password</a>
        </div>

        <!--button style="margin-left:40%; margin-bottom:1.56%;" class="w3-btn w3-ripple w3-teal w3-large">LOGIN</!--button-->
                <input style="margin-left:40%; margin-bottom:1.56%;" class="w3-btn w3-ripple w3-teal w3-large" type="submit" name="submit" value="LOGIN " action="loginfinal.php" /><br>
        <a id="fp" href="signup.php" style="margin-left:34%;margin-bottom:5%;">Not a member? Sign Up!</a>
        </form>

            </div>
        </div>

        <script>
function f1()
{
 document.getElementById('id01').style.display='none';
}
 function f2()
{
   document.getElementById('id03').style.display='block';
}
        </script>
        <!--   ############################################# RESTORE PASSWORD ########################################  -->

        <div id="id03" class="w3-modal">
            <div style="width:50%;" class="w3-modal-content w3-animate-top w3-card-8">

                <form method="post" action="">


                    <div class="w3-container w3-teal">
                        <header>
                            <span onclick="document.getElementById('id03').style.display='none'"
                                class="w3-closebtn">
                                ×
                            </span>
                            <h2></h2>
                        </header>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:2%; width:80%; color:black; " class="w3-input" type="email" required />
                        <label style="margin-left:2%; width:80%;" class="w3-label w3-validate w3-large">Enter Email</label>
                    </div>
                    <button style="margin-left:40%; margin-bottom:1.56%;" class="w3-btn w3-ripple w3-teal w3-large">Submit</button>
                    <br />

                </form>

            </div>
        </div>
        <!--Steps to BOOK COMPLAINT-->
        <div id="steps" class="w3-accordion-content">
            <div class="w3-container">
                <h4>STEPS</h4>
                <p><ol type="i">
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
                <br><br />
            </div>
        </div>
        <!--CONTENT-->
        <div id="content-area" class="wrapper">
            <!--Left Column of Page-->
            <div id="left-col" class="equalH1">
                <h2 class="w3-card-8 w3-indigo w3-center" style="margin-left:3%;width:80%;">Sign Up Form</h2>


                <form class="w3-container" method="post" action="signup_final.php" >
                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="email" name="mail" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Email</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="fname" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">First Name </label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="lname" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Last Name </label>
                    </div>
                    
			<div class="w3-group">
                   <select class="w3-select " name="gen" id="gen" style="margin-left:1%; width:80%; color:black;" class="w3-input"  type="text" name="gen" required>
                   
                	        	<option value=" " disabled selected></option>
                        		<option value="Female">Female </option>
                       	 	        <option value="Male">Male </option>
                        		<option value="Other">Other</option>
                        		</select>
                <br>   <label style="margin-left:1%; width:80%; "class="w3-label w3-validate w3-large w3-text-blue-grey">Gender</label>
                </div>


                  

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input datepicker" type="text" name="dob" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Date of Birth</label>
                    </div>
                    
                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="desig" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Designation</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="org" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Organisation</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input datepicker" type="text" name="date_join" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Date of Joining</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input datepicker" type="text" name="date_retire" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Date of Retirement</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="hno" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">House no.</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="block" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Sector/Block</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="area" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Area</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="city" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">City</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="number"  name="pin" maxlength="6" oninput="maxLengthCheck(this)" required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">PIN</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="number" name="contact" maxlength="10" oninput="maxLengthCheck(this)"  required>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Contact</label>
                    </div>

                    <div class="w3-center">
                        <input type="submit" name="submit" value="SUBMIT" action="signup_final.php" class="w3-btn w3-card-8 w3-hover-indigo" style="margin-bottom:3%;margin-top:5%;padding:1% 2%; font-size:140%">
                    </div>
                </form>

<!--Contact Check script-->
<script>
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
</script>
<!--End of contact Check script-->

            </div>  <!--End of Left Column-->
            <!--Right Column of Page-->
            <div id="blank-right-col " class="equalH1  w3-card-8  w3-pale-blue">
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

        <!----FOOTER-->
        <div id="footer" class="w3-container w3-padding-32 w3-black">
            <div class="w3-container w3-black  w3-center">
                <h4>Follow Us</h4>
                <a class="w3-btn-floating w3-center w3-blue" href="http://www.facebook.com" title="Facebook" target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
                <a class="w3-btn-floating w3-center w3-blue" href="https://twitter.com/" title="Twitter" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="w3-btn-floating w3-center w3-blue" href="https://plus.google.com/" title="Google +" target="_blank">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a class="w3-btn-floating w3-center w3-blue" href="https://in.linkedin.com/" title="Linkedin" target="_blank">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
            <!--Go To Top-->
            <div style="position:relative;bottom:103px;z-index:1;" class="w3-tooltip w3-right">
                <a class="scrollup w3-btn"
                    href="">
                    <span class="w3-xxlarge">
                        <i class="fa fa-chevron-circle-up"></i>
                    </span>
                </a>
            </div>
            <!--End of Go Top-->
        </div>
        <!--End of Footer-->
        </div><!--END CONTAINER--> 

    <!--SCRIPT-->
        
    
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