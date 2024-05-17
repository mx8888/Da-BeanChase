<?php
if (isset($_POST['addUser'])) {
    $servername = "localhost";
    $dbname = "dbdbc";
    $email = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $email, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();

    if ($count > 0) {
        $userAddError = "Email is already taken. Please choose a different one.";
    } else {
        $stmt->close();

        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $registrationSuccess = true;
        } else {
            $userAddError = "Error adding user: " . $conn->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a {
        text-decoration: none;
        }
        .reg-container {
            margin-top: 100px;
        }
        .form-control {
            width: 100%;
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
            <?php } ?>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <div class="reg-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Register</h2>
                <?php if(isset($registrationSuccess) && $registrationSuccess) { ?>
                    <div class="alert alert-success" role="alert">
                        User registered successfully!
                    </div>
                <?php } ?>
                <?php if(isset($userAddError)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $userAddError; ?>
                    </div>
                <?php } ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name:</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name:</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="addUser" class="btn btn-primary">Register</button>
                    </div>
                </form>
                <p class="text-center mt-3">Already have an account? <a href="login.php">Login here</a>.</p>
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
