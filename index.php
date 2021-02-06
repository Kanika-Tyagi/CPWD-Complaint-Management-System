<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
            Home
        </title>
        
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
        
        <link rel="stylesheet" href="style/w3.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="ideal-image-slider.css">
        <link rel="stylesheet" href="themes/default/default.css">
        <link rel="stylesheet" href="style/StyleSheet1.css">
    </head>
    <body>
        <!--CONTAINER-->
        <div id="container">
            <!--HEADER-->
            <div id="header">
                <div id="logo"></div>
                <div id="top-info"><img id="cpwd" src="images/cpwdLogo.png" style="float:right;"></div>
                <div id="navbar">
                    <span class="nav-btn"></span> 
                       <ul class="collapse1 w3-navbar w3-black w3-large " style="margin:0px;">
                        <li><a class="active w3-navbar w3-dark-grey w3-hover-dark-grey " href="index.php" style="float:left;width:100%"><i class="fa fa-home w3-xlarge"></i>&nbsp;HOME</a></li>
                        <li><a class="w3-btn w3-black w3-hover-teal " onclick="showInfo('steps')"><i class="fa fa-question-circle"></i>&nbsp;HOW TO BOOK COMPLAINT</a></li>
                        <li><a class="w3-btn w3-black w3-hover-teal " href="contactus.php"><i class="fa fa-phone"></i>&nbspCONTACT US</a></li>
                        <li><a class="w3-btn w3-black  w3-hover-teal"  onclick="showInfo('about')"><i class="fa fa-users"></i>&nbsp;ABOUT US</a></li>
                        <li><a onclick="disp(); empty();" class="w3-btn w3-black w3-hover-teal"><i class="fa fa-sign-in"></i>&nbsp;LOGIN</a></li>
                        <li><a class="w3-btn w3-black  w3-hover-teal" href="signup.php"><i class="fa fa-coffee"></i>&nbsp;SIGNUP</a></li>
                       </ul>
                </div> <!--navbar end-->
            </div><!--header end-->
            
            <!--script to clear the modal-->
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
        <!--end of steps to book complain-->
        
            <!--About us-->
            <div id="about" class="w3-accordion-content">
                <div class="w3-container">
                    <h4>ABOUT US</h4>
                    The Central public works department is the premier agency of the Central Government operating throughout the country for construction,
                     maintenance and repairs of all works and buildings financed from civil works, budget, except few departments who have their own 
                    Engineering Units or may get the works executed through private agencies.
                    General Financial Rule 136 provides:
                    “All Central Works, other than the works of Railways and Defence Department, 
                    irrespective of cost, shall primarily be executed by the Central Public Works Department.
                     Prior concurrence of the Department of the Central Government in administrative charge of Public Works shall 
                    be necessary for entrusting works to an agency other than the Central P.W.D.  Such concurrence may be given by general or special orders.<br>
                    <br>
                </div>
        </div>
        <!--end of about us-->

        <!--CONTENT-->
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
        <!-- use jssor.slider.debug.js instead for debug -->
        <script>
            jQuery(document).ready(function ($) {
            
                var jssor_1_SlideoTransitions = [
                  [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
                  [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
                  [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
                  [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
                  [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
                  [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
                  [{b:10000,d:2000,x:-379,e:{x:7}}],
                  [{b:10000,d:2000,x:-379,e:{x:7}}],
                  [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
                ];
            
                var jssor_1_options = {
                  $AutoPlay: true,
                  $SlideDuration: 800,
                  $SlideEasing: $Jease$.$OutQuint,
                  $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                  },
                  $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                  },
                  $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                  }
                };
            
                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 1920);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>

        <style>
        
            /* jssor slider bullet navigator skin 05 css */
            /*
            .jssorb05 div           (normal)
            .jssorb05 div:hover     (normal mouseover)
            .jssorb05 .av           (active)
            .jssorb05 .av:hover     (active mouseover)
            .jssorb05 .dn           (mousedown)
            */
            .jssorb05 {
                position: absolute;
            }
            .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                background: url('img/b05.png') no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb05 div { background-position: -7px -7px; }
            .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
            .jssorb05 .av { background-position: -67px -7px; }
            .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

            /* jssor slider arrow navigator skin 22 css */
            /*
            .jssora22l                  (normal)
            .jssora22r                  (normal)
            .jssora22l:hover            (normal mouseover)
            .jssora22r:hover            (normal mouseover)
            .jssora22l.jssora22ldn      (mousedown)
            .jssora22r.jssora22rdn      (mousedown)
            */
            .jssora22l, .jssora22r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 58px;
                cursor: pointer;
                background: url('img/a22.png') center center no-repeat;
                overflow: hidden;
            }
            .jssora22l { background-position: -10px -31px; }
            .jssora22r { background-position: -70px -31px; }
            .jssora22l:hover { background-position: -130px -31px; }
            .jssora22r:hover { background-position: -190px -31px; }
            .jssora22l.jssora22ldn { background-position: -250px -31px; }
            .jssora22r.jssora22rdn { background-position: -310px -31px; }
        </style>


        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 450px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
     
      <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="img/light.jpg" />
                 </div>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="img/ele.jpg" />
                </div>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="img/water.jpg" />
                </div>
          <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="img/welding.jpg" />
                </div>
         
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
        </div>

        <!-- #endregion Jssor Slider End -->
        <!--PAGE CONTENT-->
        <div id="content-area" class="wrapper">
            <div id="left-col" class="equalH1" style="background-color:black; height:inherit;">
                <div class="w3-card-16 w3-black" style="width:50%; margin-left:5%;float:left;">
                    <br>
                    <img src="images/1.gif" alt="Plumbing Services" style="width:50%;"><br>
                    <div class="w3-container">
                        <b>Pluming Services</b>
                    </div>
                </div>
    
                <div class="w3-card-16 w3-black" style="width:50%; margin-right:5% ;float:right;">
                    <br />
                    <img src="images/2.jpg" alt="Renovation" style="width:50%;">
                    <br />
                    <div class="w3-container ">
                        <b>Renovation Services</b>
                    </div>
                </div>

                <div class="w3-card-16  w3-black" style="width:50%; margin-left:5%; float:left;">
                    <br />
                    <img src="images/3.png" alt="Plumbing Services" style="width:50%;">
                    <br />
                    <div class="w3-container w3-center">
                        <b>Electrical Services</b>
                    </div>
                </div>
                
                <br>
            </div> <!--end of left column div-->

            <div  class="equalH1 w3-rightbar w3-pale-blue">
                <div class="w3-container">
                    <h2 style="color:black;">Notices</h2>
                    <ol style="color:black;">
                        <li>you are free to complain anytime  anywhere , no need to stick to the availability of mobile operator.</li>
                        <li>Every complain will be handled on the preferred time and date ,if the problem is not dealt thn you have to send mail to junior engineer.</li>
                        <li>Assigned employee  will  call you before heading to the venue.</li>
                        <li>User are required to register themselves to explore this software and use its services .</li>
                        <li>Workers will  come to your place in the working hours of 9am -6pm.</li>
                    </ol>
                </div>
            </div> <!--end of right column-->
        </div><!--end of content-->
        
        <!----FOOTER-->
        <div id="footer" class="w3-container w3-padding-32 w3-black">
            <div class="w3-container w3-black  w3-center"><h4>Follow Us</h4>
            <a class="w3-btn-floating w3-center w3-blue" href="http://www.facebook.com" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            <a class="w3-btn-floating w3-center w3-blue" href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            <a class="w3-btn-floating w3-center w3-blue" href="https://plus.google.com/" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
            <a class="w3-btn-floating w3-center w3-blue" href="https://in.linkedin.com/" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
            <!--Go To Top-->
            <div style="position:relative;bottom:103px;z-index:1;" class="w3-tooltip w3-right">
                <a class="scrollup w3-btn" 
                   href="">
                    <span class="w3-xxlarge">
                        <i class="fa fa-chevron-circle-up"></i>
                    </span>
                </a>
            </div> <!--End of Go Top-->
        </div><!--End of Footer-->
    </div><!--END CONTAINER-->

    
    <!-- Alert BOX of Login -->
    
        <div id="errorBox1" class="w3-modal">
            <div style="width:50%; margin-right:30%; margin-top:3%;" class="w3-modal-content w3-light-grey w3-card-8">
                <div class="w3-container w3-red">
                    <header>
                        <span onclick="document.getElementById('errorBox1').style.display='none'" class="w3-closebtn">
                            x
                        </span>
                        <h2>Error</h2>
                    </header>
                </div>
                <p style="margin:3%;">LoginId and Password do not match !</p><br />
            </div>
        </div>


   <!-- Alert BOX  of Restore password Success-->
    
        <div id="errorBox2" class="w3-modal">
            <div style="width:50%; margin-right:30%; margin-top:3%;" class="w3-modal-content w3-light-grey w3-card-8">
                <div class="w3-container w3-green">
                    <header>
                        <span onclick="document.getElementById('errorBox2').style.display='none'"
                              class="w3-closebtn">
                            ×
                        </span>
                        <h2>Success</h2>
                    </header>
                </div>
                <p style="margin:3%;">Link to restore password has been sent on your Email-ID</p><br />
            </div>
        </div>
<!-- end of alert code -->    


    <script> 
    function alert1() {
     window.document.getElementById('errorBox1').style.display='block';
    }
   function alert2()
  { window.document.getElementById('errorBox2').style.display='block';
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
 ?>     

    
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
                        <a onclick="f1(); f2();" style="text-decoration:underline; margin-left:2%;width:80%; cursor:pointer;">Restore Password</a>
                    </div>

                    <input style="margin-left:40%; margin-bottom:1.56%;" class="w3-btn w3-ripple w3-teal w3-large" type="submit" name="submit" value="LOGIN " action="loginfinal.php" /><br>
                    <a id="fp" href="signup.php" style="margin-left:34%;margin-bottom:5%;">Not a member? Sign Up!</a>
            </form>
        </div>
    </div><!--end of Login Form-->

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
    
    <!--RESTORE PASSWORD-->
    <div id="id03" class="w3-modal">
        <div style="width:50%;" class="w3-modal-content w3-animate-top w3-card-8">
            <form method="post" action="restore.php">
                <div class="w3-container w3-teal">
                    <header>
                        <span onclick="document.getElementById('id03').style.display='none'"
                              class="w3-closebtn">x</span>
                     </header>
                </div>
                
                    <div class="w3-group">
                        <input style="margin-left:2%; width:80%; color:black; " class="w3-input" type="text" name="mail_id" required>
                        <label style="margin-left:2%; width:80%;" class="w3-label w3-validate w3-large">Enter Email</label>
                    </div>
                   <button style="margin-left:40%; margin-bottom:1.56%;" class="w3-btn w3-ripple w3-teal w3-large">Submit</button><br>
             </form>
        </div>
    </div>
 <!--end of restore password-->
    
       <!--SCRIPT-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
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