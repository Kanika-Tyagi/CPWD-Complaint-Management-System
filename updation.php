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
include_once"header.html";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <style type="text/css">
            <?php
            include("style/w3.css");
            include("style/StyleSheet1.css");
            
            ?>
        </style>

        <!--Adding Scripts-->
        <script>
            $(document).ready(function () {
                $("#dob").datepicker({
                    dateFormat: "yy-mm-dd"
                });
               });

             $(document).ready(function() {
                 $("#date_join").datepicker({
                     dateFormat: "yy-mm-dd"
                 });
               });

             $(document).ready(function() {
                 $("#date_retire").datepicker({
                     dateFormat: "yy-mm-dd"
                 });
               });

             $(document).ready(function(){
                $('#im1').click(function(){
                    $('#fname').prop('disabled',false);
                });
            });
             $(document).ready(function(){
                $('#im2').click(function(){
                    $('#lname').prop('disabled',false);
                });
            });
             $(document).ready(function(){
                $('#im3').click(function(){
                    $('#gen').prop('disabled',false);
                });
            });

            $(document).ready(function(){
                $('#im4').click(function(){
                    $('#dob').prop('disabled', false);

                });
            });

            $(document).ready(function(){
                $('#im5').click(function(){
                    $('#desig').prop('disabled',false);
                });
            });
            $(document).ready(function(){
                $('#im6').click(function(){
                    $('#org').prop('disabled',false);
                });
            });
            $(document).ready(function(){
                $('#im7').click(function(){
                    $('#date_join').prop('disabled',false);
                });
            });

            $(document).ready(function(){
                $('#im8').click(function(){
                    $('#date_retire').prop('disabled',false);
                });
            });

            $(document).ready(function(){
                $('#im9').click(function(){
                    $('#hno').prop('disabled',false);
                });
            });
 
            $(document).ready(function(){
                $('#im10').click(function(){
                    $('#block').prop('disabled',false);
                });
            });
            $(document).ready(function(){
                $('#im11').click(function(){
                    $('#area').prop('disabled',false);
                });
            });
            $(document).ready(function(){
                $('#im12').click(function(){
                    $('#city').prop('disabled',false);
                });
            });
            $(document).ready(function(){
                $('#im13').click(function(){
                    $('#pin').prop('disabled',false);
                });
            });

            $(document).ready(function(){
                $('#im14').click(function(){
                    $('#contact').prop('disabled',false);
                });
            });
        </script>
    </head>
    
    <body >
  
        <!--CONTENT-->
        <div id="content-area" class="wrapper">
            <div id="left-col" class="sub-wrapper equalH1">
            <div id="sideI" class="equalH2" style="background-color: #f1f1f1; width:15%;">
                    <ul id="side">
                        <li><a class="sidea w3-btn w3-white w3-hover-teal" href="Book_complain1.php">Book Complaint</a></li>
                        <li><a class="sidea w3-btn w3-grey w3-hover-teal" onclick="cdisp(); cempty();">ChangePassword</a></li>
                        <li><a class="sidea w3-btn w3-light-blue w3-hover-teal " href="updation.php">Update Profile</a></li>
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

            <?php
           
           //$_SESSION['email']="new@gmail.com";
           $mail_id=$_SESSION['email']; 

            $query1 = "SELECT first_name,last_name, gender, dob, designation, organisation, date_of_joining, date_of_retirement, hno, sector, area, City, Pin, contact  FROM complain_system.customer_data where mail_id = '$mail_id'";
            $res = mysqli_query($conn,$query1);
            //echo 'After query5';
            //var_dump($res);
            while( $row = mysqli_fetch_array($res))
            { 
                //echo "Inside while";
                $data = array( $row['first_name'], $row['last_name'], $row['gender'],$row['dob'], $row['designation'], $row['organisation'],$row['date_of_joining'], $row['date_of_retirement'], $row['hno'], $row['sector'], $row['area'], $row['City'], $row['Pin'], $row['contact']);
                //print_r($data);         
            } 
            ?>

            <div class="equalH2" style="width:50%;">
                    <h2 class="w3-card-8 w3-indigo w3-center" style="width:80%; margin-top:0;">Updation</h2>
                <form class="w3-container" method="post" action="updation_final.php" >
                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="fname" id="fname" value = "<?php echo $data[0]; ?>" disabled="disabled"><i class ="fa fa-pencil w3-text-black " id ="im1"></i>
                        <label style="margin-left:1%; width:80%;" class="w3-label w3-validate w3-large w3-text-blue-grey">First Name </label>
                    </div>
                    
                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input " type="text" name="lname"  id="lname" value= "<?php echo $data[1]; ?>" disabled="disabled"><i  class ="fa fa-pencil w3-text-black  " id ="im2"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Last Name </label>
                    </div>

                    <!--<div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="gen" id="gen"  value= "<?php echo $data[2]; ?>" disabled="disabled"><i  class ="fa fa-pencil w3-text-black " id ="im3"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Gender </label>
                    </div>-->
                     <div class="w3-group">
                     <select class="w3-select " id="gen" style="margin-left:1%; width:80%; color:black;"  type="text" name="gen" disabled="disabled" required>
                              	<option value= "<?php echo $data[2]; ?>" ><?php echo $data[2]; ?></option>
                                
                        		<option value="Female">Female </option>
                       	        <option value="Male">Male </option>
                        		<option value="Other">Other</option>
                      </select>
                <br>   <i  class ="fa fa-pencil w3-text-black " id ="im3"></i><label style="margin-left:1%; width:80%; "class="w3-label w3-validate w3-large w3-text-blue-grey">Gender</label>
                </div>   

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="dob" id="dob" value= "<?php echo $data[3]; ?>"  disabled="disabled"><i  class ="fa fa-pencil w3-text-black " id ="im4"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Date of Birth</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="desig" id="desig" value= "<?php echo $data[4]; ?>" disabled="disabled"><i  class ="fa fa-pencil w3-text-black " id ="im5"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Designation</label>
                    </div>

                    <div class="w3-group"> 
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="org" id="org"value= "<?php echo $data[5]; ?>" disabled="disabled"><i  class ="fa fa-pencil w3-text-black " id ="im6"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Organisation</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text"  name="date_join" id="date_join" value= "<?php echo $data[6]; ?>" disabled="disabled"><i  class ="fa fa-pencil w3-text-black " id ="im7"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Date of Joining</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text"  name="date_retire" id="date_retire" value= "<?php echo $data[7]; ?>" disabled="disabled"><i  class ="fa fa-pencil w3-text-black " id ="im8"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Date of Retirement</label>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="hno" id="hno" value= "<?php echo $data[8]; ?>" disabled="disabled"><i  class ="fa fa-pencil w3-text-black " id ="im9"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">House no.</label></p>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="block" value= "<?php echo $data[9]; ?>" disabled="disabled"><i  class ="fa fa-pencil w3-text-black " id ="im10"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Sector/Block</label></p>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="area" id="area" value= "<?php echo $data[10]; ?>" disabled="disabled"><i  class ="fa fa-pencil w3-text-black " id ="im11"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Area</label></p>
                    </div>

                    <div class="w3-group"> 
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="text" name="city" id="city"value= "<?php echo $data[11]; ?>" disabled="disabled"><i  class ="fa fa-pencil w3-text-black" id ="im12"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">City</label></p>
                    </div>

                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="number" name="pin" maxlength="6" oninput="maxLengthCheck(this)" id="pin"value= "<?php echo $data[12]; ?>" disabled="disabled" required><i  class ="fa fa-pencil w3-text-black" id ="im13"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">PIN</label></p>
                    </div>
                    
                    <div class="w3-group">
                        <input style="margin-left:1%; width:80%; color:black; " class="w3-input" type="number" name="contact" maxlength="10"oninput="maxLengthCheck(this)" id="contact"value= "<?php echo $data[13]; ?>" disabled="disabled"><i  class ="fa fa-pencil w3-text-black" id ="im14"></i>
                        <label style="margin-left:1%; width:80%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Contact</label></p>
                    </div>

                    <div class="w3-center">
                        <input type="submit" name="submit" value="SUBMIT" action="updation_final.php" class="w3-btn w3-card-8 w3-hover-indigo" style="margin-bottom:3%;margin-top:5%;padding:1% 2%; font-size:140%">
                    </div>
                </form>
                </div>
            </div> <!--End of Left Column-->


<!--Length Check Script-->
<script>
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
</script>
<!--End of length Check script-->
            <!--Right Column of the Page-->
            <div id="blank-right-col " class="equalH1  w3-card-8  w3-pale-blue" >
                <div class="w3-container ">
                    <h2 style="color:black;">Notices</h2>
                    <ul style="color:black;">
                        <li>1)you are free to complain anytime  anywhere , no need to stick to the availability of mobile operator.</li><br>
                        <li>2) Every complain will be handled on the preferred time and date ,if the problem is not dealt thn you have to send mail to junior                                                  engineer.</li><br>
                           <li>3)Assigned employee  will  call you before heading to the venue.</li><br>
                         <li>4)User are required to register themselves to explore this software  and use its services .</li><br>
                          <li>5) Workers will  come to your place in the working hours of 9am -6pm.</li><br>
                        
                        </ul>
                    </div>
                
            </div>  <!--End of Right Column-->
        </div> <!--End of Page Content-->
        <!--Change Password start-->
     <div id="id02" class="w3-modal">
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
                        <input style="margin-left:2%; width:80%; color:black; " class="w3-input" type="text" name = "pass" required>
                        <label style="margin-left:2%; width:80%;" class="w3-label w3-validate w3-large">Previous Password</label>
                    </div>
                </p>
        <div class="w3-group">
            <input style="margin-left:2%;width:80%; color:black;" class="w3-input" type="password" name=''new_pass" class="fa fa-key fa-fw" required>
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
        <!--change password end-->

       <!----FOOTER-->
        <div id="footer" class="w3-container w3-black w3-padding-32 w3-center"><h4>Follow Us</h4>
            <a class="w3-btn-floating w3-center w3-blue" href="http://www.facebook.com" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            <a class="w3-btn-floating w3-center w3-blue" href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            <a class="w3-btn-floating w3-center w3-blue" href="https://plus.google.com/" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
            <a class="w3-btn-floating w3-center w3-blue" href="https://in.linkedin.com/" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
        </div> <!--End of Footer-->
        </div><!--END CONTAINER--> 
	
        <!--SCRIPT-->
        
    
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
  