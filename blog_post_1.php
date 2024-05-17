<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Da BeanChase</title>
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
            margin: 0 auto;
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
        <div class="blog-image">
            <img src="images/kof.jpg" alt="Blog Image">
        </div>

        <div class="blog-content">
        <h1>Sample Blog Post Title</h1>
                <br>
            <p>This is a sample blog post content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod justo nec ex fermentum, sed tempus tortor posuere. Duis ut fermentum arcu. Ut ultrices magna a mauris lobortis tincidunt. Donec efficitur velit ac tellus posuere, ac eleifend tortor fermentum. Nunc ultrices auctor nisi. Fusce varius sit amet nunc id tincidunt. Nullam id congue nulla. Vivamus sed sem vitae purus ullamcorper volutpat.</p>

            <p>Curabitur sit amet massa nec purus fermentum efficitur. Sed et arcu mauris. Integer a ligula a neque congue ultrices. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam condimentum vehicula tellus, vitae maximus neque suscipit ac. Morbi vehicula neque a magna scelerisque, sed ultrices justo eleifend. Sed ultricies erat nec finibus laoreet. Duis nec leo a elit vehicula placerat. In hac habitasse platea dictumst. Integer nec dui velit. Sed eget lectus id mi vestibulum suscipit.</p>

            <p>Etiam auctor laoreet leo, eget fermentum libero auctor id. Ut vestibulum consequat eros, sed dignissim sapien convallis et. Nulla non tortor eget nibh fringilla pretium. Quisque vehicula orci eu leo congue, eget lacinia orci gravida. Vivamus rutrum tempus felis. Mauris scelerisque scelerisque tellus eget lobortis. Vivamus accumsan felis purus, vel eleifend nunc mattis non. Nam consequat nulla ac orci tristique, nec varius neque bibendum.</p>
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

</body>
</html>
