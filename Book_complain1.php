<?php
	session_start();
    include_once "header.html";
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
        Complaint Category
    </title>
    </head>
<body>
  <!--CONTENT start-->
    <!--wrappee wraps left and right column as table cells; so we call both the coulmns equalH1; Left column inturn wraps left and center content..;
        so we call left and center content as equalH2 and Left column as sub-wrapper-->
        <div id="content-area" class="wrapper">
            <!--Left Column of page start-->
            <div id="left-col" class="equalH1 sub-wrapper">
                <!--Side menu start-->
                <div id="sideI" class="equalH2" style="width:15%; background-color: #f1f1f1;">
                    <ul id="side">
                        <li><a class="sidea w3-btn w3-light-blue w3-hover-teal" href="Book_complain1.php">Book Complaint</a></li>
                        <li><a class="sidea w3-btn w3-grey w3-hover-teal" onclick="document.getElementById('id02').style.display='block'">ChangePassword</a></li>
                        <li><a class="sidea w3-btn w3-dark-grey w3-hover-teal " href="updation.php">Update Profile</a></li>
                        <li><a class="sidea w3-btn w3-black w3-hover-teal " href="Service_complain.php">Feedback</a></li>
                    </ul>
                </div><!--Side menu end-->
                
                <!-- Center div start -->    
   	            <div class="equalH2" style= "width:50%;">
	                <!--Form Div start-->
                    <div style="margin-left:10%;width:80%;">
                        <!--form start-->     
                         <form action="Book_complain2.php" method="get"> 
	                        <div style="margin-left:1%; " class="w3-label w3-validate w3-medium w3-group"><br><br>
                                <!--Select start-->
                                <select class="w3-select" name="type" id="type">
                            	    <option value="" disabled selected>Choose your option</option>
                        		    <option value="Electrical">Electrical </option>
                           	 	    <option value="Water">Water </option>
                        		    <option value="Renovation">Renovation</option>
                        		    <option value="Sewage">Sewage </option>
		                        </select> <!--Select end-->
                            <!--label for Select-->
                                <label style="margin-left:1%; color:black;font-family:sans-serif; font-size:160%" class="w3-label w3-validate w3-large">Complaint                                   Category</label>
                            </div>
                        
                       </div><!--Form Div end-->
                        <!--Submit Button start-->              
                       <div class="w3-container w3-center" style="margin-right:10%;margin-bottom:10%;margin-top:15%;width:80%;">
                            <input type="submit" class="w3-btn w3-black w3-hover-grey" value="Check Availability" action="Book_complain2.php"/>
                       </div>
<!--Submit button end-->
 </form> <!--form end-->
                       
                </div><!--Center div end-->
            </div>  <!--Left Column of page end-->
                
            <!--Right Column of page start-->
            <div id="blank-right-col " class="equalH1  w3-card-8  w3-pale-blue">
                <!--Notice start-->
                <div id="notice"class="w3-container" style="width:100%;" >
                    <h2 style="color:black;">Notices</h2>
                        <ol style="color:black; font-size:110%;">
                            <li>You are free to complain anytime  anywhere , no need to stick to the availability of mobile operator.</li>
                            <li>Every complain will be handled on the preferred time and date ,if the problem is not dealt thn you have to send mail to junior engineer.</li>
                            <li>Assigned employee  will  call you before heading to the venue.</li>
                            <li>User are required to register themselves to explore this software and use its services .</li>
                            <li>Workers will  come to your place in the working hours of 9am -6pm.</li>
                         </ol>
                </div>   <!--Notice end-->
            </div>  <!--Right Column of page ends-->
        </div><!--Content end-->
        
        <!--Change Password Code-->
        <div id="id02" class="w3-modal">
            <!--Modal content start-->
            <div style="width:50%;" class="w3-modal-content w3-animate-top w3-card-8">
                <!--Change password form start-->
                <form method="post" action="">
                    <div class="w3-container w3-teal">
                        <header>
                            <span onclick="document.getElementById('id02').style.display='none'" class="w3-closebtn">x</span>
                            <h2>Change Password</h2>         
                        </header>
                    </div>
                <p>
                    <div class="w3-group">
                        <input style="margin-left:2%; width:80%; color:black; " class="w3-input" type="text" required>
                        <label style="margin-left:2%; width:80%;" class="w3-label w3-validate w3-large">Previous Password</label>
                    </div>
                </p>
                    <div class="w3-group">
                        <input style="margin-left:2%;width:80%; color:black;" type="password" class="w3-input fa fa-key fa-fw" required>
                        <label style="margin-left:2%;width:80%;" class="w3-label w3-validate w3-large">New Password</label><br>
                    </div>
                   <div class="w3-group">
                        <input style="margin-left:2%;width:80%; color:black;" type="password" class="w3-input fa fa-key fa-fw" required>
                        <label style="margin-left:2%;width:80%;" class="w3-label w3-validate w3-large">Re-enter Password</label><br>
                    </div>
                    
                    <button style="margin-left:40%; margin-bottom:1.56%;" class="w3-btn w3-ripple w3-teal w3-large">Submit</button><br>
                </form><!--Change password form end-->
            </div><!--Modal content End-->
        </div> <!--Change Password Code end-->
        
        <!--Including footer-->        
        <?php
	        include_once "footer.html";
        ?>
    </body>
</html>
