<?php
include "config.php";
session_start();

if (isset($_POST['loginUser'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        if ($password === $result["password"]) {
            $_SESSION["loggedin"] = true;
            $_SESSION["ID"] = $result["ID"];
            $_SESSION["username"] = $result["username"];
            $_SESSION["acct_type"] = $result["acct_type"];

            if (strtoupper($_SESSION["acct_type"]) == "ADMIN") {
                header("location: dashboard.php");
            } else {
                header("location: dbctest.html");
            }
            
            
       } else {
            $error="Invalid password.";
       }
 } else {
     $error="No account found with that username.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <header> 
        <a href="dbctest.html"><img src="images/dbc-bnc.png" class="logo"></a>
        <ul class="navlist">
            <li><a href="products.html">Products</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="Menu.html">Menu</a></li>
        </ul>

        <div class = "nav-right"> 
            <a href ="#"><i class='bx bx-search'></i></a>
            <a href ="#"><i class='bx bx-cart-alt' ></i></a>
            <a href ="#"><i class='bx bx-user' ></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <main class="login-container">
        <h2>Login</h2>
        <?php if(isset($error)) { ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php } ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="username"><h3> Username: </h3></label>
                <input type="text" id="username" name="username" required><br><br>
                
                <label for="password"><h3>Password:</h3></label>
                <input type="password" id="password" name="password" required><br><br>
                
                <input type="submit" name="loginUser" value="Login">
                <div class="google-login">
                <p>Or login with:</p>
                <a href="#"><i class="ri-google-fill"></i>
                    Login with Google
                </a>
            </div>
        </form>
    <br><p>Don't have an account? <a href="register.html">Register here</a>.</p>
    </main>

    <section class="footer">
        <div class ="footer-box">
            <h2>Da BeanChase-brews and concepts</h2>
            <p> Da BeanChase@gmail.com 
                <br> Phone: +63 901 234 5678
            </p>
        </div> 
        <div class ="footer-box">
            <h3>Menu</h3>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="delivery.php">Delivery Timeline</a>
            <a href="#">Community</a>
        </div> 
        <div class ="footer-box">
            <h3>FAQ</h3>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
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
    <script src="script.js"></script>

