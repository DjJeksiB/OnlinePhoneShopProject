<?php
if( empty(session_id()) && !headers_sent()){
    session_start();
}
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `producti` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<html>
<head>
<title>Best Phone In Bulgaria</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' href='Des.css' type= 'text/css' >
<link rel='stylesheet' href='contacta.css' type= 'text/css' >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>
<header>
            <div class="module lr">
                <p  id="2" class="TextHead">Online Shop For Best Phones.</p>
              </div>
            </header>
			<nav><div class="navi">
      
        <ul>
            <li  class="liLogo"><div class="container">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h3 class="animate-charcter"> Phone Shop</h3>
                  </div>
                </div>
              </div></a></li>
            <li><a href="#4">Contact</a></li>
            <li><a href="#3">About</a></li>
            <li><a href="#2">Product</a></li>
            
        </ul>
    </div></nav>
<div style="width:700px; ">

<h2>Best Phones in Bulgaria is Here</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<section id="2" class="Products">

<?php
}

$result = mysqli_query($con,"SELECT * FROM `producti`");
while($row = mysqli_fetch_assoc($result)){
	echo "<div class='product_wrapper'>
		  <form method='post' action=''>
		  <input type='hidden' name='code' value=".$row['code']." />
		  <div class='image'><img style='width:200px;height:150px;'src='".$row['image']."' /></div>
		  <div class='name'>".$row['name']."</div>
			 <div class='price'>$".$row['price']."</div>
		  <button href='#2' type='submit' class='buy'>Buy Now</button>
		  </form>
			 </div>";
	

        
	}
		
mysqli_close($con);
?>
<form action="AddBill.html">
<button type="text" class="AddB">Inser Your Bill</button>
</form>
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
<br /><br />
</div>

</section>

<section id="3" class="AboutUs">
      
        <img class ="AboutStyle"src="src/About.png" alt="About" style="width:170px;height:170px;margin-right:15px;">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1 class="AboutUsH1">About Us</h1>
            <p class="AboutText"><b>The telephone company is a leading manufacturer of
              smartphones and other mobile devices.
              They focus on innovative technologies
              and design to offer their customers the best
               possible experience. The company works together with presenters
               partners from various fields, including operators for
               mobile communication, electronics stores and online platforms.
                The company's goal is to offer its customers quality
                products and services to meet their requirements.
            </b></p>


    </section>
    
	<section id="4" class="Contact">
     
        <form  name="frmContact" method="post" action="contact.php">
        <div class="my-form">
      <div class="title">Contact</div>
      <div class="subtitle"> With Us!</div>
      <div class="input-container ic1">
        <input id="fname" name="txtName" class="input" type="text" placeholder="First Name " />
        <div class="cut"></div>
      </div>
      <div class="input-container ic2">
        <input id="lname" name="txtlname" class="input" type="text" placeholder="Last Name " />
        <div class="cut"></div>
      </div>
      <div class="input-container ic2">
        
		<select id="country" name="txtCountry" class="input" type="text" placeholder="Country ">
              <option value="australia">Australia</option>
              <option value="canada">Canada</option>
              <option value="usa">USA</option>
            </select>
		<div class="input-container ic2">
        <input id="txtMessage" name="txtMessage" class="input" type="text" placeholder="Message " />
        <div class="cut cut-short"></div>
        <label for="txtMessage">
      </div>
      <button type="text" class="submit">submit</button>
    </div>
</form>


    </section>
    
    

    <footer class="foot">
    <div class="ko">
        <div class="footer-content">
            <h3><b>Foolish Developer<b></h3>
            <p><b>Mate by Valentin Valeriev.Studing Software Engenering at VTU Veliko Turnovo. Date 23.2.2023@</b></p>
            
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
</div>
        
     
        

    </footer>

</body>
</html>