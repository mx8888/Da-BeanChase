<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Da BeanChase Blog</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
         a {
        text-decoration: none;
        }
        .blog-container {
            max-width: 800px;
            margin: 150px auto; 
            padding: 20px;
        }

        .blog-image img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .blog-content {
            line-height: 1.6;
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

    <div class="blog-container">
        <!-- Sample blog posts -->
        <div class="blog-post">
            <h2><a href="blog_post_1.php">Blog Post 1 Title</a></h2>
            <p>This is a short description of Blog Post 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="blog-post">
            <h2><a href="blog_post_2.php">Blog Post 2 Title</a></h2>
            <p>This is a short description of Blog Post 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="blog-post">
            <h2><a href="blog_post_3.php">Blog Post 3 Title</a></h2>
            <p>This is a short description of Blog Post 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>

    <!-- Footer -->
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
</body>
</html>
