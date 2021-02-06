 <?php
            session_start();
            include_once"header.html"
            
    ?>
 <html>
    <head>
<title>Feedback</title>
</head>
<body>
 <!--CONTENT-->
    <!--wrappee wraps left and right column as table cells; so we call both the coulmns equalH1; Left column inturn wraps left and center content..;
        so we call left and center content as equalH2 and Left column as sub-wrapper-->
        <div id="content-area" class="wrapper">
            <div id="left-col" class="equalH1 sub-wrapper" style="height:inherit;">
                <div id="sideI" class="equalH2" style="width:15%; background-color: #f1f1f1;">
                    <ul id="side">
                        <li><a class="sidea w3-btn w3-white w3-hover-teal" href="Book_complain1.php">Book Complaint</a></li>
                        <li><a class="sidea w3-btn w3-grey w3-hover-teal" onclick="cdisp(); cempty();">ChangePassword</a></li>
                        <li><a class="sidea w3-btn w3-dark-grey w3-hover-teal " href="updation.php">Update Profile</a></li>
                        <li><a class="sidea w3-btn w3-light-blue w3-hover-teal " href="Service_complain.php">Feedback</a></li>
                       
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
           <!--  <div class="w3-container;" style="float:left; margin:14px 0px;width:68%">-->
             <div style="margin-top:4%;"class="w3-container w3-teal">
             <h2>Feedback Form</h2>
             </div>

         <form class="w3-container" method="POST" action = "Service_complainfinal.php" >
   
       <div class="w3-group">
       <input style="margin-left:20px;width:80%;  color:black; " class="w3-input" type="text"  name= "c_no" required>
      <label style="margin-left:20px;width:80%;  " class="w3-label w3-validate w3-large w3-text-blue-grey">Complaint No.</label></p>
      </div>
       <div style="margin-left:20px; width:80%;" class="w3-label w3-validate w3-medium " class="w3-group">
     <select class="w3-select" name="fb" required>
     <option style="color:teal;"value="" disabled selected>Choose your option</option>
     <option value="Satisfied" >Satisfied</option>
    <option value="Not-Satisfied" >Not-Satisfied</option>
     </select>
     <label style="margin-left:15px; width:80%;" class="w3-label w3-validate w3-large w3-text-blue-grey">Feedback</label></p>
    </div>
    <div class="w3-group">

    <textarea style="margin-left:20px; width:80%; color:black;" class ="w3-input" name="desc" >
                            </textarea><br>
   <label style="margin-left:20px; width:80%;" class="w3-label w3-validate w3-large w3-text-blue-grey">Description</label></p>
   </div>

   <input  style = "margin-left:35%; margin-bottom:4%;"class="w3-btn  w3-ripple w3-hover-blue-grey w3- black w3-large" type='submit' name = "submit" value="Thank You"  action = "Service_complainfinal.php" />
<!--<button class="w3-btn w3-ripple w3-blue-grey w3-large">Thank You</button>-->

 </form>
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



<!-- Start of Alert Box1 -->
                     <div id="errorBox1" class="w3-modal">
                    <div style="width:50%; margin:3%;" class="w3-modal-content w3-light-grey w3-card-8">
                        <div class="w3-container w3-red">
                                <header>
                                    <span onclick="document.getElementById('errorBox1').style.display='none'"
                                        class="w3-closebtn">x</span>
                                    <h2>Error</h2>
                                </header>
                            </div>
                            <p style="margin:3%;">Complaint No doesn't exist !!</p><br/>
                     </div>
                </div>
            <!--End of Alert Box 1-->
    <!-- Start of Alert Box2 -->
                      <!-- Start of Non Satisfied Alert Box -->
                     <div id="errorBox2" class="w3-modal">
                    <div style="width:50%; margin:3%;" class="w3-modal-content w3-light-grey w3-card-8">
                        <div class="w3-container w3-light-green">
                                <header>
                                    <span onclick="document.getElementById('errorBox2').style.display='none'"
                                        class="w3-closebtn">x</span>
                                    <h2></h2>
                                </header>
                            </div>
                            <p style="margin:3%;">Thank you !! Feedback has been recorded and your complain has been booked again</p><br/>
                     </div>
                </div>
            <!--End of Alert Box 2-->
               
 <!-- Start of Satisfied Alert Box -->
                     <div id="errorBox3" class="w3-modal">
                    <div style="width:50%; margin:3%;" class="w3-modal-content w3-light-grey w3-card-8">
                        <div class="w3-container w3-green">
                                <header>
                                    <span onclick="document.getElementById('errorBox3').style.display='none'"
                                        class="w3-closebtn">x</span>
                                    <h2>Success</h2>
                                </header>
                            </div>
                            <p style="margin:3%;">Thank you !! Feedback has been recorded </p><br/>
                     </div>
                </div>
             <!--End of Alert Box 2-->
             
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
   </script>
   
    <?php error_reporting(0); 
       $flag=$_GET['flag'];
        if($flag==1)
          {
              echo "<script> alert1();  </script>"; 
          }
       if($flag==2)
          {
              echo "<script> alert2();  </script>"; 
         }
     if($flag==3)
   {
   echo"<script>alert3();</script>";
             
     } ?> 
  <!--   ############################################# CHANGE PASSWORD ################################################  -->

  <div id="id02" class="w3-modal">
        <div style="width:50%;" class="w3-modal-content w3-animate-top w3-card-8">

            <form  id ="c_pass" method="post" action="change.php">


                <div class="w3-container w3-teal">
                    <header>
                        <span onclick="document.getElementById('id02').style.display='none'"
                              class="w3-closebtn">x</span>
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

<?php
     include_once"footer.html";
?>
    </body>
</html>