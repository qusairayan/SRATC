<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Payment</title>
  <link rel="stylesheet" href="payStyle.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="card">  
    <h2 class="visa">VISA</h2>
    <h3 class="num">n° 4539  7111  0342  0778</h3>

      <h4>name</br>Ahmad</h4>
      <h4>EXP</br>10/21</h4>
      <h4>CVC</br>014</h4>

  </div>
  <div class="main">
    <div class="content">
      <h1>Payment Details</h1>
      <form >
        
     <!--   <label>Name</label>-->
        <input id="name" type="name" placeholder="Ahmad">
        
       <!-- <label>Card Number</label>-->
        <input type="text" placeholder="4539 7111 0342 0778">
        
      <!--  <label>Expiration Date</label>-->
        <input type="month" value="2021-10">
        <input type="user" placeholder="014">
        
      </form>
      <div class="payment">
        <h4>Payment Amount :<div class ="amount"> SAR</div></h4> 
        <button>Pay</button>
        </div>
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
