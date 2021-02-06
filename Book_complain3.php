<html>
    <head>
        <title>Time Slot</title>
    </head>
    
    <body>
    <!--Fetching session variables and disabling not available time-->
        <?php
            session_start();
            $date = $_POST['date'];
            $_SESSION['date'] = $date;
            $pin = $_SESSION['pin']; 
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
           // $try = $_SESSION['try'];
            $category=$_SESSION['category'];
            $query1 = "Select start_time from book_complain where preferred_date = '$date' AND complain_type='$category' AND pin = $pin   ";
            $result = mysqli_query($conn, $query1);
            $data = array();
     
            while($row = mysqli_fetch_array($result))
             {
                 $data[ ] = $row['start_time'];
             }
        ?>
    
    <!--Book Complain Form start-->     
      <form method = "post" action = "Book_complaintfinal.php">
	    <!--Selecting time slot-->
          <?php
            echo '<select  style=" margin-left:16%;width:60%;"class="w3-select" name="time2">';
	        echo '<option value="" disabled selected>Choose Time Slot</option>';
	        if($data[0]==9||$data[1]==9||$data[2]==9||$data[3]==9){$dis = ' disabled';}else{$dis = '';} echo '<option value="9"'.$dis.'>9am - 11am </option>';
	        if($data[0]==11||$data[1]==11||$data[2]==11||$data[3]==11){$dis = ' disabled';}else{$dis = '';}echo '<option value="11"'.$dis.'>11am - 1pm </option>';
   	        if($data[0]==2||$data[1]==2||$data[2]==2||$data[3]==2){$dis = ' disabled';}else{$dis = '';}echo '<option value="2"'.$dis.'>2pm - 4pm</option>';
   	        if($data[0]==4||$data[1]==4||$data[2]==4||$data[3]==4){$dis = ' disabled';}else{$dis = '';}echo '<option value="4"'.$dis.'>4pm -6pm</option>';
	
	        echo '</select>';
	      ?>
      <!--Description start-->
        <div class="w3-group">
            <textarea style="margin-left:16%; width:60%;"  class ="w3-input" name="desc" rows="4" ></textarea><br>
	        <label style="margin-left:16%; width:60%;" class="w3-label w3-validate w3-large w3-text-blue-grey">Description</label>
	    </div>
      <!--Destription end-->
   	    <!--Submit Button-->
        <input type="submit" name = "submit" value="Submit" style = "margin-left:40%; margin-bottom:20px;"class="w3-btn w3-ripple w3-blue-grey w3-large" action="Book_complaintfinal.php"/>
      </form><!--Book COmplain Form End-->   
    </body>      
</html>