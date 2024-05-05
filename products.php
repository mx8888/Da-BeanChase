<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
        }
        .products-container{
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <style>

        a {
            text-decoration: none;
        }
        .products-container{
            margin-top: 100px;
        }
        
    </style>

    <header> 
        <a href="dbctest.html"><img src="images/dbc-bnc.png" class="logo"></a>
        <ul class="navlist">
            <li><a href="products.php">Products</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="menu.html">Cafe Menu</a></li>
        </ul>

        <div class="nav-right"> 
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="mycart.php"><i class='bx bx-cart-alt'></i></a>
            <a href="login.php"><i class='bx bx-user'></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>


    <div class="container">
        <div class="products-container">
            <div class="row">
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST"> 
                        <div class="card" style="width: 18rem;">
                            <img src="images/drrobusta.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dark Roast Robusta</h5>
                                <p class="card-text">Price: ₱300</p>
                                <button type ="submit" name="Add_to_Cart" class="btn btn-primary">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Dark-Roast-Robusta">
                                <input type="hidden" name="Price" value="300">
                            </div>
                            </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST"> 
                        <div class="card" style="width: 18rem;">
                            <img src="images/_mrrobusta.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Medium Roast Robusta</h5>
                                <p class="card-text">Price: ₱300</p>
                                <button type ="submit" name="Add_to_Cart" class="btn btn-primary">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Medium-Roast-Robusta">
                                <input type="hidden" name="Price" value="300">
                            </div>
                            </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST"> 
                        <div class="card" style="width: 18rem;">
                            <img src="images/lrarabica.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Light Roast Arabic</h5>
                                <p class="card-text">Price: ₱300</p>
                                <button type ="submit" name="Add_to_Cart" class="btn btn-primary">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Light-Roast-Arabica">
                                <input type="hidden" name="Price" value="300">
                            </div>
                            </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST"> 
                        <div class="card" style="width: 18rem;">
                            <img src="images/mrarabica.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Medium Roast Arabica</h5>
                                <p class="card-text">Price: ₱300</p>
                                <button type ="submit" name="Add_to_Cart" class="btn btn-primary">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Medium-Roast-Arabica">
                                <input type="hidden" name="Price" value="300">
                            </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-box">
                    <h2>Da BeanChase-brews and concepts</h2>
                    <p> Da BeanChase@gmail.com <br> Phone: +63 901 234 5678 </p>
                </div> 
                <div class="col-md-3 footer-box">
                    <h3>Menu</h3>
                    <a href="about.php">About Us</a>
                    <a href="contact.html">Contact Us</a>
                    <a href="delivery.php">Delivery Timeline</a>
                </div> 
                <div class="col-md-3 footer-box">
                    <h3>FAQ</h3>
                    <a href="privacy.html">Privacy Policy</a>
                </div> 
                <div class="col-md-3 footer-box">
                    <h3>Socials</h3>
                    <div class="social">
                        <a href="#"><i class="ri-facebook-box-fill"></i></a>
                        <a href="#"><i class="ri-instagram-line"></i></a>
                    </div>
                </div> 
            </div>
        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="end-text">
                <p> © 2024, Da BeanChase-brews and concepts</p>
            </div>
        </div>
    </div>

    <script type ="text/javascript" src="js/script.js"></script>
</body>
</html>