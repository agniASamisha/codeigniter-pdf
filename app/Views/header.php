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
                        <input class="btn" style="" type="submit" value="submit" name="submit">
                    </div>
                </form>

                <a href="viewCart"><i class="fa fa-shopping-cart"></i>(<?php echo 0; ?> )</a>
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