<?php
include "config.php";
session_start();

if (isset($_POST['loginUser'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        if (password_verify($password, $result["password"])) { // Compare hashed password
            $_SESSION["loggedin"] = true;
            $_SESSION["ID"] = $result["ID"];
            $_SESSION["email"] = $result["email"];
            $_SESSION["acct_type"] = $result["acct_type"];

            if (strtoupper($_SESSION["acct_type"]) == "ADMIN") {
                header("location: dashboard.php");
            } else {
                header("location: dbctest.html");
            }
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No account found with that email.";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
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
                <a href="profile.php"><i class='bx bx-user'></i></a>
                <a href="logout.php"><i class='bx bx-log-out'></i></a>
            <?php } ?>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <main class="login-container">
        <h2>Login</h2>
        <?php if(isset($error)) { ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php } ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="email"><h3> Email: </h3></label>
                <input type="text" id="email" name="email" required><br><br>
                
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
    <br><p>Don't have an account? <a href="register.php">Register here</a>.</p>
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


</body>
</html>
