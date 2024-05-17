<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Timeline</title>
    <link rel="stylesheet" href="style.css"> 
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
            <?php if(isset($_SESSION['loggedin'])) { ?>
                <a href="logout.php"><i class='bx bx-log-out'></i></a>
            <?php } ?>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <main>
        <div class="delivery-container">
             <h2 class="delivery-title">Online Store Delivery Terms</h2>
         <div class="delivery-content">
                 <div class="delivery-text">
                    <p>At Da BeanChase – brews and concepts, we are committed to providing you with the freshest and highest quality coffee beans. In order to ensure that you receive our products at their peak freshness, we have implemented the following pick-up delivery policy:</p>
                        <ol>
                            <li>
                            <p>1. Timelines:</p>
                            <ul>
                                <li><strong>Local pick-up delivery:</strong>  we kindly request that you collect your order within 5 to 7 days at the <b> Main Store.</b></li>
                                <li><strong>Same day delivery: </strong> cut off is at 4PM daily. Orders after cut-off will be prepared on the next working day.</li>
                            </ul>
                            </li>
                            <li>
                                <p>2. Perishable Nature: Our coffee beans are perishable items, and their quality and flavor are best preserved when consumed within a certain timeframe. It is essential that you understand the urgency of picking up your order promptly to enjoy the optimal coffee experience.</p>
                            </li>
                            <li>
                                <p>3. Nullification of Orders: If the ordered products are not collected within 7 days (for Local Pickup) from the date of purchase, <b> your order will be considered abandoned, and payment will be forfeited. </b></p>
                            </li>
                            <li>
                                <p>4. Reminder Notifications: To assist you in keeping track of your order, we will send reminder messages as the pick-up delivery deadline approaches. These reminders will help ensure that you are aware of the pending collection and can make necessary arrangements.</p>
                            </li>
                            <li>
                                <p>5. Customer Responsibility: We kindly request that you plan accordingly and prioritize the pick-up of your orders. Please understand that we cannot be held responsible for any loss of flavor or quality resulting from delayed pick-up.</p>
                            </li>
                        </ol>
                     <p>We appreciate your understanding and cooperation in adhering to our pick-up delivery policy. By promptly collecting your order, you will experience our coffee beans at their freshest, allowing you to savor the true essence of each cup.<br><br><br></p> 
                </div>
            </div>
        </div>
    </main>


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

