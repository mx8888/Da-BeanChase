<?php
if (isset($_POST['addUser'])) {
    $servername = "localhost";
    $dbname = "dbdbc";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $newUsername = $_POST['username'];
    $password = $_POST['password'];

    // Checks if username already exists
    $checkQuery = "SELECT COUNT(*) FROM users WHERE Username = '$newUsername'";
    $result = $conn->query($checkQuery);

    if ($result->fetch_row()[0] > 0) {
        $userAddError = "Username is already taken. Please choose a different one.";
    } else {
        $sql = "INSERT INTO users (Username, Password) VALUES ('$newUsername', '$password')";

        if ($conn->query($sql) === TRUE) {
        } else {
            $userAddError = "Error adding user: " . $conn->error;
        }
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
</body>
</html>