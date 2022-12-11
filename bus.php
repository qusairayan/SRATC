   <?php include "db.php"; ob_start(); ?>
<?php session_start(); ?><!DOCTYPE html>
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
                <div class="well">
                    <p class="search-title">Bus Search <i class="fa"> &#xf207;</i> <img id="myImg" src="lines.jpeg" alt="Snow" style="width:80%;max-width:80px">


<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div></p>
					
                    <form action="busSearch.php" method="get">
<select name="from">
    <option value="0">From</option>               
    <option value="North station">North station</option>               
    <option value="Airport)North station">(Airport)North station</option>               
    <option value="Eastern station">Eastern station</option> 
    <option value="South station">South station</option> 	
    <option value="West station">West station</option>               
    <option value="Town station">Town station</option>               
              
     
  </select>                       
  
 
  <select name="to">
       <option value="">To</option>

   <option value="Line1">Line1</option>               
    <option value="Line2">Line2</option>               
    <option value="Line3">Line3</option>               
    <option value="Line4">Line4</option>               
    <option value="Line5">Line5</option>               
    <option value="Line6">Line6</option> 
	
	
  </select> 
  <input name="date" type="date" style="margin-top: 10px;" > <input type="submit"   placeholder="Search">


   
                        
                    </form>
                    
                </div>
                </div>
				
				
<div class="navbar">
  <a href="home.php" class="active">Home <i class="fa fa-home"></i> </a>
  <a href="Contact.php">Contact us <i style="font-size:24px;   transform: rotate(250deg);" class="fa">&#xf095;</i> </a>
  <a href="#">Profile  <i style="font-size:24px" class="fa">&#xf2be;</i> </a>
</div>
<script>

var modal = document.getElementById("myModal");


var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}


var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</body>
</html>
