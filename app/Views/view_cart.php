<?php
//  $session = session(); // Load the session helper

//     $count = [];
//         $cart = $this->session->get('product');
//         $count = [count($cart)];
//         print_r($count);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <link rel="stylesheet" href="/codeigniter/public/CSS/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100 300 500 800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title> product detail</title>
</head>

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="home_page.php">
                    <image src="http://localhost/codeigniter/public/images/logo.png" width="125px">
                </a>
            </div>
            <nav>
                <ul id="menuItems">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">PRODUCT</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">LOGOUT</a></li>
                    <li><a href="#">ACCOUNT</a></li>
                    <li><a href="wishlist"><i class="fa fa-heart-o"></i>WISHLIST</a></li>
                </ul>
            </nav>
            <form method="POST" action="search">
                <div class="form" style="display: flex; justify-content: space-between; align-items: center; width: 200px;">
                    <input type="text" class="form-control" name="search" placeholder="search">
                    <input class="btn" type="submit" value="submit" name="submit">
                </div>
            </form>
            <a href="viewCart"><i class="fa fa-shopping-cart"></i>(<?= $count?>)</a>
            <img src="photo_folder/kids.jpg" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>


    <!--cart image detail-->
    <div class="small-container cart-page">
        <?php if (!empty($product)) { 
            
            // print_r($cart);
            ?>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Action</th>
                    <th>Subtotal</th>
                </tr>
                <?php 
                 $ptotal = 0;
                 $total = 0;
                foreach ($product as  $item) : 
                  
                ?>
                

                    <form method="post" action="updateProductInCart">
                        <tr>
                            <td>
                                <?php 
                                  $ptotal = $item['price'] * $item['quantity'];
                                  $total += $ptotal;
                  ?>              
                                <input type="hidden" name="discount" value="<?php echo $item['discount']; ?>">
                                <div class="cart-info">
                                    <img src="<?php echo "http://localhost/codeigniter/public/" . $item['image']; ?>">
                                    <input type="hidden" name="hiddenImg" value="<?php echo $item['image']; ?>">
                                    <div>
                                        <input type="hidden" name="productId" value="<?php echo $item['product_id']; ?>">
                                        <p><?php echo $item['name']; ?></p>
                                        <input type="hidden" name="name" value="<?php echo $item['name']; ?>">

                                        <small><?php echo $item['price']; ?></small><br>
                                        <input type="hidden" name="price" value="<?php echo $item['price']; ?>">

                                        <br>
                                    </div>
                                </div>
                            </td>
                            <td><input type="number" name="quantity" value="<?php echo $item['quantity']; ?>"></td>


                            <td>
                                <button class="btn" name="submit" style="justify-content:center">Update</button>
                                <button class="btn" name="delete">remove</button>
                            </td>

                            <td><input type="text" name="price" value="<?php echo $ptotal?>">
                                <input type="hidden" name="id" value="<?php echo $item['product_id']; ?>"></td>
                        </tr>

                    </form>
                    <div>
                    <?php endforeach;
                    ?>
                    </div>
            </table>
        <?php
        } else {?>
                
            <p>Your cart is empty.</p>
        <?php } ?>

        <div class="total-price">
            <table>
                <br>
                <tr>
                    <td>Subtotal</td>
                    <td><?php
                        echo $total;
                        ?></td>
                </tr>

            </table>

            <br>

        </div>
        <a href="address" class="btn">Continue_shoping</a>

    </div>

</body>

</html>
