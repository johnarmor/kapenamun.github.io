<!DOCTYPE html> 

<html>
    <head> 
	   <title> Cafe Namon </title>
	   <link rel="shortcut icon" href="logo.png">
	   <link rel="stylesheet" href="assets/stylemenu.css">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
 
 <body>
	<div class="nav-bar">
		 <ul class="menu">
			 <li><a href="#"> <i class="fa-regular fa-circle-user"></i> Customer</a></li>
			 <li><a href="index.php" class="dropdown"> Home</a></li>	
			 <div class="dropdown">
				<button class="dropbtn">Menu
				</button>
			<div class="dropdown-content">
				<a href="#">BEST SELLERS</a>
				<a href="#">COLD BREW</a>
				<a href="#">COFFEE</a>
				<a href="#">HOT BREW</a>
				<a href="#">FRAPPES</a>
				<a href="#">TEA</a>
				<a href="#">BEERS</a>
				<a href="#">SIDES</a>
				</div>
	</div>
			 <li><a href="receipt.php"> Receipts </a></li>
			 <li><a href="aboutus.php"> About us</a></li>
			 <li><a href="contactus.php"> Contact</a></li>
		</ul>
	</div>
		<center> <img class="logo" src="images/logo.png" alt="CAFE namon logo"> </center>
		<h1> BEST SELLERS </h1>
  <div class="row">
  <div class="column">
    <img src="images/best1.jpg">
	<h2>Black Coffee - P80.0</h2>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star"></i>
          <br>
    <p>Double espresso shot <br>
	with specialty-brewed coffee</p>
   <button class="smallbutton">Add to cart</button>
  </div>
  <div class="column">
  <img src="images/best2.jpg">
    <h2>Chilled Sweet Tea - P90.0</h2>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star"></i>
          <br>
    <p>Black tea that's sweetened with sugar, <br>
	then chilled before serving</p>
	<button class="smallbutton">Add to cart</button>
	</div>
	<div class="column">
    <img src="images/best3.jpg">
	<h2>Honey Lavender Latte - P90.0</h2>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star"></i>
          <br>
    <p>A latte sweetened with local raw honey <br>
	and lavender syrup made in house</p>
	<button class="smallbutton">Add to cart</button>
	</div>
  <div class="column">
  <img src="images/best4.jpg">
    <h2>Cocoa Chocolate Shake P60.0</h2>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star star_color_yellow"></i>
          <i class="fa-solid fa-star"></i>
          <br>
    <p>A cold drink made of milk, a sweet flavouring such as
	fruit or chocolate, and typically ice cream, whisked
	until it is frothy</p>
	<button class="smallbutton">Add to cart</button>
  </div>
  </div>
</div>
<div class="box">
	<a class="button" href="#popup1">Here are your orders</a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
	<img class="logocart" src="images/logo.png" alt="CAFE namon logo">
		<a class="close" href="#">&times;</a>
		<div class="content">
		<h2>Current Orders</h2>
			<p>* Order 1 ........... P 0.00
			<br>* Order 2 ........... P 0.00
			<br>* Order 3 ........... P 0.00
			<br>* Order 4 ........... P 0.00
			<br>-----------------------------------
			<br>Total .................. P0.00</p>
			<div class="box2">
	<a class="button2">Delivery</a>
	</div>
	<div class="box3">
	<a class="button3">Pick up</a>
</div>
		</div>
	</div>
</div>
	 <div class="credit">  CafeNamon &copy; <span>All Rights Reserved.</span> </div>
			  	 			 
	</body>
</Html>