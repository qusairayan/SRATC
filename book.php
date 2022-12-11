<?php include "db.php"; ob_start(); ?>
<?php session_start(); ?>
<?php 
if (isset($_GET['book']) ) {
	
	$seat = $_GET['seat'];

}


?>
<html lang="en" >
<head>
  <title>Ticket</title>
  <link rel="stylesheet" href="tickets.css">

</head>
<body>

<div class="wrapper">
  
  <div class="main">
    <div class="content">
      <h1>Ticket Details</h1>

     <div>   
 <?php
$tripid=$_SESSION['TripID'];
$sql = "SELECT * FROM trip WHERE TripID = '$tripid' ";
$result = $connection->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
     
echo '    <P>TripId<span>'.$row["TripID"].'</span></p>
    <P>from<span>'.$row["From_station"].'</span> To <span>'.$row["To_station"].'</span></p>
	<P>Date<span>'.$row["Date"].'</span></p>
 <P>Time<span>'.$row["Time"].'</span></p>
 <P>Seat<span>'.$seat.'</span></p>';    }}
?>
        
	 </div>
	 </div>	
	  <button onclick="location.href='payment.php'">Pay</button>
   
  </div>
</div>

  
</body>
</html>
