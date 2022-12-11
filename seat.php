<?php include "db.php"; ob_start(); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>seat booking</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="seatStyle.css">

</head>
<body style="    background: darkorchid;">
<div class="bus">
  <div class="cockpit">
    <h1>Please select a seat</h1>
  </div>

   <div class="exit exit--front fuselage">
    <img src="steering.png" class="steering">

  </div>
 
  <?php
  
  if (isset($_GET['trip']) ) {
	
  $TripID = $_GET['trip'];
  $_SESSION['TripID'] =   $TripID;
 

  $query = "SELECT * FROM reservation WHERE TripID='$TripID'";
$result = mysqli_query($connection,$query);

$num_rows = mysqli_num_rows($result);
$row = $result->fetch_assoc();
$disable = '';
//if (!$num_rows){
//$disable = 'disabled="disabled"';
//}
}
?>
  
<form action="book.php" method="get">
  <ol class="cabin fuselage">
    <li class="row row--1">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="1A"value="1A" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='1A' ) echo 'disabled ';?> />
          <label for="1A">1A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1B" value="1B" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='1B') echo 'disabled ';?>/>
          <label for="1B">1B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1C" value="1C" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='1C') echo 'disabled ';?>/>
          <label for="1C">1C</label>
        </li>
        
       
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="2A" value="2A" name="seat" onclick="myFun(this)"<?php if($row['Seat_number']=='2A' ) echo 'disabled ';?> />
          <label for="2A">2A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2B" value="2B" name="seat" onclick="myFun(this)"<?php if($row['Seat_number']=='2B' ) echo 'disabled ';?>/>
          <label for="2B">2B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2C" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='2C') echo 'disabled ';?>/>
          <label for="2C">2C</label>
       
        <li class="seat">
          <input type="checkbox" id="2D" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='2D' ) echo 'disabled ';?> />
          <label for="2D">2D</label>
        </li>
       
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="3A" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='3B' ) echo 'disabled ';?>/>
          <label for="3A">3A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3B" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='3B' ) echo 'disabled ';?>/>
          <label for="3B">3B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3C" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='3C') echo 'disabled ';?>/>
          <label for="3C">3C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3D" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='3D' ) echo 'disabled ';?>/>
          <label for="3D">3D</label>
        </li>
      
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="4A" name="seat" onclick="myFun(this)"  <?php if($row['Seat_number']=='4A' ) echo 'disabled ';?>/>
          <label for="4A">4A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4B" name="seat" onclick="myFun(this)"  <?php if($row['Seat_number']=='4B' ) echo 'disabled ';?>/>
          <label for="4B">4B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4C" name="seat" onclick="myFun(this)"  <?php if($row['Seat_number']=='4C' ) echo 'disabled ';?>/>
          <label for="4C">4C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4D" name="seat" onclick="myFun(this)"  <?php if($row['Seat_number']=='4D' ) echo 'disabled ';?>/>
          <label for="4D">4D</label>
        </li>
       
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="5A" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='5A' ) echo 'disabled ';?>/>
          <label for="5A">5A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5B" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='5B' ) echo 'disabled ';?> />
          <label for="5B">5B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5C" name="seat" onclick="myFun(this)"<?php if($row['Seat_number']=='5C' ) echo 'disabled ';?>/>
          <label for="5C">5C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5D" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='5D' ) echo 'disabled ';?>/>
          <label for="5D">5D</label>
        </li>
      
      </ol>
	   <div class="exit exit--back fuselage">
    
  </div>
    </li>
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="6A" name="seat" onclick="myFun(this)"<?php if($row['Seat_number']=='6A' ) echo 'disabled ';?>/>
          <label for="6A">6A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6B"name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='6B' ) echo 'disabled ';?>/>
          <label for="6B">6B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6C" name="seat" onclick="myFun(this)"<?php if($row['Seat_number']=='6C' ) echo 'disabled ';?>/>
          <label for="6C">6C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6D" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='6D' ) echo 'disabled ';?>/>
          <label for="6D">6D</label>
        </li>
        
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="7A" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='7A' ) echo 'disabled ';?>/>
          <label for="7A">7A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7B" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='7B' ) echo 'disabled ';?>/>
          <label for="7B">7B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7C" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='7C' ) echo 'disabled ';?>/>
          <label for="7C">7C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7D" name="seat" onclick="myFun(this)"<?php if($row['Seat_number']=='7D' ) echo 'disabled ';?>/>
          <label for="7D">7D</label>
        </li>
        
      </ol>
    </li>
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="8A" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='8A' ) echo 'disabled ';?>/>
          <label for="8A">8A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8B" name="seat" onclick="myFun(this)"<?php if($row['Seat_number']=='8B' ) echo 'disabled ';?>/>
          <label for="8B">8B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8C" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='8C' ) echo 'disabled ';?>/>
          <label for="8C">8C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8D" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='8D' ) echo 'disabled ';?>/>
          <label for="8D">8D</label>
        </li>
        
      </ol>
    </li>
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="9A" name="seat" onclick="myFun(this)"<?php if($row['Seat_number']=='9A' ) echo 'disabled ';?>/>
          <label for="9A">9A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9B" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='9B' ) echo 'disabled ';?>/>
          <label for="9B">9B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9C" name="seat" onclick="myFun(this)"<?php if($row['Seat_number']=='9C' ) echo 'disabled ';?>/>
          <label for="9C">9C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9D" name="seat" onclick="myFun(this)" <?php if($row['Seat_number']=='9D' ) echo 'disabled ';?>/>
          <label for="9D">9D</label>
        </li>
       
      </ol>
    </li>
    
  </ol>
 <input type="submit" style="width:100%; background-color: #d8d8d8;border: none;text-decoration: none;cursor: pointer;" name="book"> 
</form>
</div>

<script>
  function myFun(checkbox) {
    var checkboxes = document.getElementsByName('seat')
    checkboxes.forEach((item) => {
      if (item !== checkbox) item.checked =  false
  })}
</script> 
</body>
</html>