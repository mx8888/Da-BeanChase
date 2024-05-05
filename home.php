<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Da BeanChase</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>


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
            <a href="cart.php"><i class='bx bx-cart-alt'></i></a>
            <a href="login.php"><i class='bx bx-user'></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!--home-->
    <section class="home">
        <div class="home-image" data-aos="fade-up">
            <section class="container"> 
                <div class="slider-wrapper">
                    <div class="slider"> 
                        <img id = "slide-1" src="images/homebg.jpg" alt="Background Image">
                        <img id = "slide-2" src="images/pour-over.jpg" alt="Background Image">
                        <img id = "slide-3" src="images/volodymyr-proskurovskyi-aaHwnxgBmHs-unsplash.jpg" alt="Background Image">
                        <img id = "slide-4" src="images/nathan-dumlao-UfsLEfAoS2U-unsplash.jpg" alt="Background Image">
                    </div>
                    <div class="slider-nav">
                        <a href="#slide-1"></a> 
                        <a href="#slide-2"></a>
                        <a href="#slide-3"></a>
                        <a href="#slide-4"></a>
                    </div>
                </div>
            </section>
            <div class="home-text">
                <h1>Building bonds, Bean by <span class="blue-bean">Bean</span></h1>
                <p>At Da BeanChase, we believe in more than just serving great coffee; we're dedicated to nurturing connections, supporting local communities, and promoting sustainability. With each cup, we strive to build bonds, one bean at a time.</p>
                <a href="shop.html" class="btn">Shop Now</a>
            </div>
        </div>
    </section>
    

    <!--beans-->
    <section class="n-beans">
        <div class="center-text">
            <h2>Beans</h2> 
        </div>
        <div class="n-content">
            <div class="row">
                <div class="row-img">
                    <img src="images/mrarabica.png">
                </div>
                <h3>Medium Roast Arabica</h3>
                <div class="stars">
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"> <span class="reviews"> <b> 4.9</b> (22 reviews)</span> </a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="#">Add to Cart <i class='bx bx-plus'></i></a>
                    </div>
                    <div class="row-right">
                        <h6>₱300</h6>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="row-img">
                    <img src="images/lrarabica.png">
                </div>
                <h3>Light Roast Arabica</h3>
                <div class="stars">
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"> <span class="reviews"> <b> 4.7</b> (24 reviews)</span> </a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="#">Add to Cart <i class='bx bx-plus'></i></a>
                    </div>
                    <div class="row-right">
                        <h6>₱300</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row-img">
                    <img src="images/_mrrobusta.png">
                </div>
                <h3>Medium Roast Arabica</h3>
                <div class="stars">
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"> <span class="reviews"> <b> 5.0</b> (13 reviews)</span> </a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="#">Add to Cart <i class='bx bx-plus'></i></a>
                    </div>
                    <div class="row-right">
                        <h6>₱300</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row-img">
                    <img src="images/drrobusta.png">
                </div>
                <h3>Dark Roast Arabica</h3>
                <div class="stars">
                    <a href="#"><i class='bx bxs-star'></i></a>
                    <a href="#"> <span class="reviews"> <b> 4.8</b> (17 reviews)</span> </a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="#">Add to Cart <i class='bx bx-plus'></i></a>
                    </div>
                    <div class="row-right">
                        <h6>₱300</h6>
                    </div>
                </div>
            </div>
                                    
    
            <div class="n-btn">
                <a href="#" class="btn2">View All</a>
            </div>
        </div>
    </section>

    <!--about us-->
    <section id="about">
        <div class="center-text">
          <h2>About Us</h2> 
        </div>
        <div class="about-container">
          <div class="about-box">
            <div class="story"> <i class="ri-book-read-line"></i>
              <h2>Our Story</h2>
              <p>At Da BeanChase — Brews and Concepts, we're more than just a coffee shop - we're a community hub dedicated to bringing people together over exceptional coffee and supporting local producers. Our journey began with a passion for great coffee and a desire to create a space where everyone feels welcome.</p>
            </div>
          </div>
          <div class="about-box">
            <div class="mission"> <i class="ri-focus-2-line"></i>
              <h2>Our Mission</h2>
              <p>To blend the art of coffee-making with community support, sourcing ingredients locally, showcasing local creatives, and creating a warm environment for patrons to connect and enjoy quality coffee.</p>
            </div>
          </div>
          <div class="about-box">
            <div class="vision"> <i class="ri-eye-line"></i>
              <h2>Our Vision</h2>
              <p>To become a ground of the Cagayan Valley community, known for our commitment to supporting local farmers and artists, providing exceptional coffee, and fostering a space where individuals can gather, create, and unwind.</p>
            </div>
          </div>
        </div>
      </section>
    
    
    <!-- blog-->
    <section class = "Blog">
        <div class = "blog-heading">
            <h2> Blog </h2>

            <div class="blog-container"> 

                <div class ="blog-box"> 

                    <div class="blog-img">
                        <img src="images/kof.jpg" alt="Blog">
                    </div>

                    <div class="blog-text">
                        <span>20 April 2024 / Lorem Ipsum</span>
                        <a href="#" class= "blog-title">Lisan Al Gaib!</a>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, labore odio? Repellendus officiis tenetur dicta sunt, molestias harum est consectetur, minima nam eveniet explicabo voluptatibus, earum temporibus in natus commodi!</p>
                        <a href="#">Read More</a> 
                    </div>
                </div>

                <div class ="blog-box"> 

                    <div class="blog-img">
                        <img src="images/ice kof.jpg" alt="Blog">
                    </div>

                    <div class="blog-text">
                        <span>20 April 2024 / Lorem Ipsum</span>
                        <a href="#" class= "blog-title">Lisan Al Gaib!</a>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, labore odio? Repellendus officiis tenetur dicta sunt, molestias harum est consectetur, minima nam eveniet explicabo voluptatibus, earum temporibus in natus commodi!</p>
                        <a href="#">Read More</a> 
                    </div>
                </div>

                <div class ="blog-box"> 

                    <div class="blog-img">
                        <img src="images/bean farmer.jpg" alt="Blog">
                    </div>

                    <div class="blog-text">
                        <span>20 April 2024 / Lorem Ipsum</span>
                        <a href="#" class= "blog-title">Lisan Al Gaib!</a>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, labore odio? Repellendus officiis tenetur dicta sunt, molestias harum est consectetur, minima nam eveniet explicabo voluptatibus, earum temporibus in natus commodi!</p>
                        <a href="#">Read More</a> 
                    </div>
                </div>
                
            </div>
               
        </div>
    </section>
<!--footer-->
    <section class="footer">
        <div class ="footer-box">
            <h2>Da BeanChase-brews and concepts</h2>
            <p> Da BeanChase@gmail.com 
                <br> Phone: +63 901 234 5678
            </p>
        </div> 
        <div class ="footer-box">
            <h3>Menu</h3>
            <a href="about.php">About Us</a>
            <a href="contact.html">Contact Us</a>
            <a href="delivery.php">Delivery Timeline</a>
        </div> 
        <div class ="footer-box">
            <h3>FAQ</h3>
            <a href="privacy.html">Privacy Policy</a>
        </div> 
        <div class ="footer-box">
            <h3>Socials</h3>
            <div class = "social">
                <a href="#"><i class="ri-facebook-box-fill"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
            </div>
        </div> 
    </section>

    <!--copyright-->
    <div class="copyright"?>
        <div class="end-text">
            <p> © 2024, Da BeanChase-brews and concepts</p>
        </div>
    </div>

    <!--slider script-->
    <script> 
        const slider = document.querySelector('.slider');

            function autoScroll() {
                const slideWidth = slider.scrollWidth / slider.children.length;
                slider.scrollLeft += slideWidth;

                if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth) {
                    slider.scrollLeft = 0;
                }
            }

            setInterval(autoScroll, 4000);

            window.onload = autoScroll;
    </script>
    
     <script type ="text/javascript" src="js/script.js"></script>
</body>
</html>