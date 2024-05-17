<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

include "config.php";

$user_id = $_SESSION['ID'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updateProfile'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
 
    $sql = "UPDATE users SET name = ?, email = ?, address = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $email, $address, $user_id]);

    // Refresh user data after update
    $user['name'] = $name;
    $user['email'] = $email;
    $user['address'] = $address;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
        }
        .prof{
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
    <div class="prof">
            <div class="container rounded bg-white mt-5 mb-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-7 border-right"> 
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="text-center mb-4">Profile Settings</h2> 
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3"> 
                                <label class="labels">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-md-6 mb-3">  
                                <label class="labels">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3"> 
                                <label class="labels">Email</label>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-12 mb-3"> 
                                <label class="labels">Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
