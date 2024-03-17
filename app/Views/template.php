<?php if (session()->has('login_message')) : ?>
    <div class="alert alert-success">
        <?= session('login_message') ?>
    </div>
<?php endif ?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<meta name = "viewport" content="width=device-width, initial-scale = 1">
<link rel = "stylesheet" href = "/codeigniter/public/CSS/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;300;500;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title> e-commerce</title>
</head>
<body>
<div class="header">
<div class="container">
<div class="navbar">
<div class="logo">
<a href ="">
<image src = "photo/img13.png" width="125px"></a>
</div>
<nav>
<ul id="menuItems">
        <li><a href="#">HOME</a></li>
        <li><a href="#">PRODUCT</a></li>
        <li><a href="#">ABOUT</a></li>
		<li><a href="#">CONTACT</a></li>
        <li><a href="logout">LOGOUT</a></li>
    </ul>
</nav>
	<img src="photo/img15.png" width="30px" height="30px">
	<img src="photo/img14.png" class="menu-icon" onclick="menutoggle()">
</div>
<div class="row">
<div class="col-2">
<h1>New style here! <br> New style here! </h1>
<p> here we have to take small text in the paragraph. And use break line both heading and paragraph . </p>
<a href="#" class="btn">explore now &#8594;</a>
</div>
<div class="col-2"><img src="photo/img13.png"></div>
</div>
</div>
</div>
<!-- featured catogaries------>
	<div class="catogaries">
	<div class="small-container">
<div class="row">
<div class="col-3"><img src="photo/img11.png"></div>
<div class="col-3"><img src="photo/img15.png"></div>
	<div class="col-3"><img src="photo/img13.png"></div>
	</div>
	</div>
	</div>
	<!-- featured product------>
		<div class="small-container">
	<h2 class="title"> featured_protuct</h2>
<div class="row">
<div class="col-4">
<img src="photo/img15.png">
<h4> kids dress </h4>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p> $500.50</p>
	</div>
	<div class="col-4">
	<img src="photo/img15.png">
<h4> kids dress </h4>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p> $500.50</p>
	</div>
	<div class="col-4">
	<img src="photo/img15.png">
<h4> kids dress </h4>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p> $500.50</p>
	</div>
	<div class="col-4"><img src="photo/img15.png">
<h4> kids dress </h4>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p> $500.50</p>
	</div>
	</div>
	<h2 class="title"> Latest products</h2>
	<div class="row">
<div class="col-4"><img src="photo/img8.png">
<h4> kids dress </h4>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p> $500.50</p>
	</div>
<div class="col-4"><img src="photo/img7.png">
<h4> kids dress </h4>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p> $500.50</p>
	</div>
	<div class="col-4"><img src="photo/img2.png">
<h4> kids dress </h4>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p> $500.50</p>
	</div>
	<div class="col-4"><img src="photo/img15.png">
<h4> kids dress </h4>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p> $500.50</p>
	</div>
	
	
<div class="col-4">
<img src="photo/img15.png">
<h4> kids dress </h4>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p> $500.50</p>
	</div>
	<div class="col-4">
	<img src="photo/img15.png">
<h4> kids dress </h4>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p> $500.50</p>
	</div>
	<div class="col-4">
	<img src="photo/img15.png">
<h4> kids dress </h4>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p> $500.50</p>
	</div>
	<div class="col-4"><img src="photo/img15.png">
<h4> kids dress </h4>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<p> $500.50</p>
	</div>
	</div>
	</div>
	
	<!-----offer----->
<div class="offer">
<div class="small-container">
<div class="row">
<div class="col-2">
<img src="photo/img5.png" class="offer-image">
</div>	
<div class="col-2">
<p> it is availavel for shor time (hurry up!)</p>
<h1> Smart brand </h1>

<small> availavel for shor time it is availavel for shor time (use small tag also)availavel for shor time</small>
<a href="#" class="btn"> buy now &#8594;</a>
</div>
</div>
</div>
</div>

<!---testimonial--->
<div class="testimonial">
	<div class="small-container">
<div class="row">
<div class="col-3">
<i class="fa fa-quote-left"></i>
<p> availavel for shor time it is availavel for shor time (use small tag also)availavel for shor time</p>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<img src="photo/img7.png">
<h3>Sean parker</h3>
</div>
<div class="col-3">
<i class="fa fa-quote-left"></i>
<p> availavel for shor time it is availavel for shor time (use small tag also)availavel for shor time</p>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<img src="photo/img6.png">
<h3>Sean parker</h3>
</div>
<div class="col-3">
<i class="fa fa-quote-left"></i>
<p> availavel for shor time it is availavel for shor time (use small tag also)availavel for shor time</p>
<div class ="reating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
<img src="photo/img11.png">
<h3>akshay kumar</h3>
</div>

</div>
</div>
</div>
<!---brand--->
<div class="brands">
	<div class="small-container">
<div class="row">
<div class="col-5">
<img src="photo/img11.png">
</div>
<div class="col-5">
<img src="photo/img8.png">
</div>
<div class="col-5">
<img src="photo/img1.png">
</div>
<div class="col-5">
<img src="photo/img15.png">
</div>
<div class="col-5">
<img src="photo/img6.png">
</div>
</div>
</div>
</div>

<!---footer--->
<div class="footer">
	<div class="container">
<div class="row">
<div class="footer-col-1">
<h3>download the app</h3>
<p> availavel for shor time it is availavel for shor time (use small tag also)availavel for shor time</p>
<div class="app-logo">
<img src="photo/img6.png">
<img src="photo/img9.png">
</div>
</div>
<div class="footer-col-2">
<img src="photo/img6.png" alt="">
<p> it is availavel for shor time (use small tag also)availavel for shor time</p>
</div>
<div class="footer-col-3">
<h3>useful link</h3>
<ul>
<li> Coupons </li>
<li> Blog post </li>
<li> Return Policy </li>
<li> Join Affiliate </li>
</ul>
</div>
<div class="footer-col-4">
<h3>follow us</h3>
<ul>
<li> Facebook </li>
<li> Instagram </li>
<li> youtube </li>
<li> twitter </li>
</ul>
</div>
<hr>
</div>
<p class="copyright"> copuright 2023 - Easy make sopping webpage </p>
</div>
</div>
<script>
var menuItems = document.getElementById("menuItems");
menuItems.style.maxHeight="0px";
function menutoggle(){
if (menuItems.style.maxHeight=="0px"){
menuItems.style.maxHeight="200px";
}else{
menuItems.style.maxHeight="0px";
}
}
</script>
</body>
</html>
