
<!--Fetching session variables and extracting non available dates-->
<?php
	session_start();
    include_once"header.html";
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
    $_SESSION['category']= $_GET['type'];
    $category = $_SESSION['category'];
    $mail   = $_SESSION['email'];
    $query  = "Select pin from customer_data where mail_id = '$mail'";
    $result = mysqli_query($conn, $query);
    $datanew = array();      

    while($row = mysqli_fetch_array($result))
      {
        $datanew[ ] = $row['pin'];
      } 
    
    $_SESSION['pin']=$datanew[0];
    $pin = $_SESSION['pin'];
    $query1 = "SELECT preferred_date from book_complain where complain_type = '$category' AND pin = '$pin' group by preferred_date having count(start_time)=4 ";
    $r = mysqli_query($conn,$query1);
    $data = array();      
        while($row = mysqli_fetch_array($r))
    	  {
            $data[ ] = $row['preferred_date'];
          }
?>

<html>
    <head>
        <title>Preferred Date</title>
        
        <!--Script for disabling Already allotted dates-->
        <script>
            function ajax_post(date){
        
            // Create our XMLHttpRequest object
            var hr = new XMLHttpRequest();
            // Create some variables we need to send to our PHP file
            var url = "Book_complain3.php";
   
            var date = document.getElementById("date").value;
            var vars = "date="+date;
            hr.open("POST", url, true);
            // Set content type header information for sending url encoded variables in the request
            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            // Access the onreadystatechange event for the XMLHttpRequest object
            hr.onreadystatechange = function() {
	            if(hr.readyState == 4 && hr.status == 200) {
		            var return_data = hr.responseText;
			        document.getElementById("status").innerHTML = return_data;
                                             	
	            }
            }
            // Send the data to PHP now... and wait for response to update the status div
            hr.send(vars); // Actually execute the request
            document.getElementById("status").innerHTML = "processing...";
        }
        </script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 
	    <link href="text.css" rel="stylesheet" type="text/css">  
   	    <link rel="stylesheet" href="w3.css">
   	    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	</head>
    
    <body>

          <!--Date picker div start-->
        <div style="margin-left:10%;width:60%;">
	        <div class="w3-group">
     	        <input style="margin-left:10%; width:60%; color:black; " class="w3-input datepicker" type="text" name="date" id="date" >
    	        <label style="margin-left:10%; width:60%; " class="w3-label w3-validate w3-large w3-text-blue-grey">Date</label>
	        </div>
        </div>
        <!--Date Picker Div end-->
     
        <!--Script for Date Picker Start-->
        <script>
	        var unavailableDates = [<?php echo ' "' . implode('" , "' , $data). '" ' ?>]; // yyyy/MM/dd
        	$('#date').datepicker({
                  dateFormat : "yy-mm-dd",
                  onSelect: function(date){
                  ajax_post(date);
                    },
                  beforeShowDay: function(date) {
   	                ymd = date.getFullYear() + "-" + ("0"+(date.getMonth()+1)).slice(-2) + "-" + ("0"+date.getDate()).slice(-2);
    
   	                if ($.inArray(ymd, unavailableDates) < 0) {
        		        return [true, "enabled", "Book Now"];
   	                } else {
        		        return [false,"disabled","Booked Out"];
    	               }
	        }
                 } );
                  
                   function updateAb(value)
                   {
                   alert("You Clicked");
                    }
	    </script>
        <!--Script for Date Picker End-->
        
        <!--Used for Ajax functioning-->
        <div id="status"></div>

        <!--Including Footer-->    
        <?php
         include_once"footer.html";
        ?>	
    </body>
</html>