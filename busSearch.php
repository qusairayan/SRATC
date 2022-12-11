   <?php include "db.php"; ob_start(); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
 
  <title>Bus</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="style.css">
 
 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hBody">
<div class="head">
<img src="logo.png">
</div>


 <div class="col4">
 <br>
 <h1 style="	text-align:center;">Found trips:</h1>
              <form style="	font-size:25px; " action="seat.php" method="get"> 
			  <div class="well">
               
<?php 

if (isset($_GET['from'],  $_GET['to']) ) {
	
	$from = $_GET['from'];
	$to = $_GET['to'];
	$date = $_GET['date'];
	
	$_SESSION['from'] = $_GET['from'];
	$_SESSION['to'] = $_GET['to'];
	$_SESSION['date'] = $_GET['date'];
	
	




	
				   $sql = "SELECT * FROM Trip WHERE From_station = '$from' AND TO_station = '$to' AND  Date='$date' AND TID IS NULL ";
$result = $connection->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
     
echo '  <input type="radio" name="trip" value="'.$row["TripID"].'">'.  $row["TripID"].' <label>'.$row["From_station"].' TO '.$row["To_station"].' ON: '.$row["Date"].'  / '.$row["Time"].'</label> <br><br> ' ;
    }
	    echo '                            <input type="submit"   placeholder="Search">';
  ?><?php
} else {
    echo "0 results";
}
}
else{echo "No trips found";}
$connection->close();
				   ?>
				 


				   </form>
                </div>
                </div>
				
		
<div class="navbar">
  <a href="Home.php" class="active">Home <i class="fa fa-home"></i> </a>
  <a href="contactus.php">Contact us <i style="font-size:24px;   transform: rotate(250deg);" class="fa">&#xf095;</i> </a>
  <a href="#">Profile  <i style="font-size:24px" class="fa">&#xf2be;</i> </a>
</div>

</body>
</html>
