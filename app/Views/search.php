<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <link rel="stylesheet" href="/codeigniter/public/CSS/style.css" />
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
                    <a href="">
                        <image src="http://localhost/codeigniter/public/images/logo.png" width="125px">
                    </a>
                </div>
                <nav>
                    <ul id="menuItems">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">PRODUCT</a></li>
                        <li><a href="#">ACCOUNT</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="wishlist">wishlist</a></li>
                    </ul>
                </nav>
                <form method="POST" action="search">
<div class="form" style="display: flex; justify-content: space-between; align-items: center; width: 200px;">
  <input type="text" class="form-control" name="search" placeholder="search">
  <input class="btn"style="" type = "submit" value="submit" name="submit">
</div>
</form>
               <a href="viewCart"><i class="fa fa-shopping-cart"></i>( )</a>
                <img src="photo/img14.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>New style here! <br> New style here! </h1>
                    <p> here we have to take small text in the paragraph. And use break line both heading and paragraph . </p>
                    <a href="#" class="btn">explore now &#8594;</a>
                </div>
                <div class="col-2"><img src="http://localhost/codeigniter/public/images/shopping.jpg"></div>
            </div>
        </div>
    </div>
    
    <!-- featured product------>
    <div class="small-container">
        <h2 class="title"> featured_protuct</h2>
        <div class="row">
        <?php if (!empty($product)): ?>
    <?php foreach ($product as $item): ?>
            <div class="col-4">
            
            <a href = "<?= 'product_view/' . $item['product_id'] ?>"> <img src="<?php echo "http://localhost/codeigniter/public/" . $item['image']; ?>"width='250px'; height='350px'></a>
            <div class="wishlist"><a href="<?= 'product_wishlist/'. $item['product_id'] ?>"><i class="fa fa-heart"></i></div>
                <h4><a href = ""><?php echo $item['name']; ?></a> </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs: <?php echo $item['price']; ?></p>
                <!-- <p> <?php //echo $item['description']; ?></p> -->
                
            </div>
            <?php endforeach; ?>
<?php else: ?>
    <p>No products found.</p>
<?php endif; ?>
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
    <!-- <p>SELECT product.product_id, product.name, product.price, product.image, category.category 
            FROM product 
            INNER JOIN category ON product.product_id = category.product_id  
            WHERE product.name LIKE '$search%' OR category.brand like 'redoster';</p> -->
    <script src="/codeigniter/public/js/home.js"></script>
</body>

</html>
