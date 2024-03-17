<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>welcome</title>
    <link rel="stylesheet" href="/codeigniter/public/CSS/style.css" />
</head>

<body>
    <!-- Header and navigation bar -->
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
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="#">ACCOUNT</a></li>
                    </ul>
                </nav>
                <form method="POST" action="#">
                    <div class="form" style="display: flex; justify-content: space-between; align-items: center; width: 200px;">
                        <input type="text" class="form-control" name="search" placeholder="search">
                        <input class="btn" type="submit" value="submit" name="submit">
                    </div>
                </form>
                <a href="product_detail.php"><i class="fa fa-shopping-cart"></i>( )</a>
                <img src="photo/img14.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>

    <div class="container">
        <?php if (!empty($product)) : ?>
            <div class="small-container single-product">
                <div class="row">
                    <div class="col-2">
                        <div style="width:480px; height:500px;">
                            <img src="<?php echo "http://localhost/codeigniter/public/" . $product['image'] ?>" width="480px" height="500px" id="productImg" />
                        </div>
                        <div class="small-img-row">
                            <?php foreach ($images as $image) : ?>
                                <div class="small-img-col">
                                    <img src="<?php echo "http://localhost/codeigniter/public/" . $image['image'] ?>" width="110px" height="90px" class="small-img" />
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-2">
                        <p><?= $product['description'] ?></p>
                        <h2><?= $product['name'] ?></h2>
                        <h4>$<?= $product['price'] ?></h4>
                        <!-- <form method="post" action="addToCart.php"> -->
                            <select>
                                <option>Select size</option>
                                <option>XL</option>
                                <option>S</option>
                                <option>M</option>
                                <option>XXL</option>
                                <option>X</option>
                            </select>
                            <form action="/codeigniter/public/index.php/cart/add/<?php echo $product['product_id']; ?>" method="post">
    <button class="btn" type="submit">Add to Cart</button>
</form>
                            <!-- Add other form inputs here -->
                            <!-- <button type="submit" class="btn" name="addToCart">Add to cart</button>
                        </form> -->
                        <h3>Product Detail <i class="fa fa-indent"></i></h3><br>

                    </div>
                </div>
            </div>
        <?php else : ?>
            <p>No product found</p>
        <?php endif; ?>
    </div>

    <!-- Footer and other common elements -->
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
    <!-- ... -->

    <!-- JavaScript for image gallery -->
    <script src="/codeigniter/public/js/home.js"></script>
</body>

</html>