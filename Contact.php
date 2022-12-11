<!DOCTYPE html>
<html lang="en" >
<head>
 <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="style.css">
 
 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Contact us</title>
  <style>
body {font-family: Arial, Helvetica, sans-serif;
color:black;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 10px 150px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body class="hBody">
<div class="head">
<img src="logo.png">
</div>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">City</label>
    <select id="City" name="City">
      <option value="Riyadh">Riyadh</option>
      <option value="Jedda">Jedda</option>
      <option value="Medina">Medina</option>
    </select>

    <label for="Message">Message</label>
    <textarea id="Message" name="Message" placeholder="Write Message.." style="height:150px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</div>
<div class="navbar">
  <a href="home.php" class="active">Home <i class="fa fa-home"></i> </a>
  <a href="Contact.php">Contact us <i style="font-size:24px;   transform: rotate(250deg);" class="fa">&#xf095;</i> </a>
  <a href="#">Profile  <i style="font-size:24px" class="fa">&#xf2be;</i> </a>
</div>

</body>
</html>
