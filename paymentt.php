<?php include('bookingprocess1.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment Gateway</title>
<link href="../css/payment.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	
	<header class="header"><h1> PAYMENT GATEWAY </h1>
	
	<div class="navigation" id="nav">
	  <a href="index.html">HOME</a>
	  <a href="packages.html">PACKAGES</a>
	  <a href="destinations.html">DESTINATIONS</a>
	  <a href="services.html">SERVICES</a>
	  <a href="bookingprocess.html">TOUR BOOKING</a>
	  <a href="about.html">ABOUT US</a>
	  <a href="contact.html" class="active">CONTACT US</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
	  </a>
	</div>
	
	</header>
	
	<div class="content">
	<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="payment.php" method="post">
      
        <div class="row">
          <div class="col-50">
			  <?php echo "$selecttour";?>
            <h3 style="text-align: center; font-size: 1.5vw;">Payment</h3>
            <label for="fname" style="text-align: center; font-size: 1.5vw;">Accepted Cards</label>
            <div class="icon-container" style="text-align: center;">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Enter name on card">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Enter credit card number">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Exp Month">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="Exp Year">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
            </div>
          </div>
          
        </div>
        <input type="submit" value="Make Payment Here" class="btn">
      </form>
    </div>
  </div>
</div>
</div>
		<script>
function myFunction() {
  var x = document.getElementById("nav");
  if (x.className === "navigation") {
    x.className += " responsive";
  } else {
    x.className = "navigation";
  }
}
</script>
	
</body>
</html>
