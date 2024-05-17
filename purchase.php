<?php
session_start();
$con=mysqli_connect("localhost","root","","dbdbc");

if(mysqli_connect_error()){
    echo"<script> 
        alert('cannot connect to database'):
        window.location.href='mycart.php';
    </script>";
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['purchase'])) {
        
        if (!isset($_SESSION["loggedin"])) {
            header("Location: login.php");
            exit;
        }

        $fullName = $_POST['full_name'];
        $phoneNumber = $_POST['phone_no'];
        $address = $_POST['address'];
        $paymentMode = $_POST['pay_mode'];

        $query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $query1);
        if($stmt) {
            mysqli_stmt_bind_param($stmt, "siss", $fullName, $phoneNumber, $address, $paymentMode);
            mysqli_stmt_execute($stmt);

 
            if(mysqli_stmt_affected_rows($stmt) > 0) {
                $orderID = mysqli_insert_id($con);
 
                $query2 = "INSERT INTO `user_orders`(`Order_ID`, `Item_Name`, `Price`, `Quantity`) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_prepare($con, $query2);
                if($stmt) {
                    foreach($_SESSION['cart'] as $key => $values) {
                        $itemName = $values['Item_Name'];
                        $price = $values['Price'];
                        $quantity = $values['Quantity'];

                        mysqli_stmt_bind_param($stmt, "isis", $orderID, $itemName, $price, $quantity);
                        mysqli_stmt_execute($stmt);
                    }

 
                    unset($_SESSION['cart']);
                    echo "<script> 
                        alert('Order Placed');
                        window.location.href='products.php';
                    </script>";
                } else {
                    echo "<script> 
                        alert('Error: Unable to prepare SQL statement for user_orders');
                        window.location.href='mycart.php';
                    </script>";
                }
            } else {
                echo "<script> 
                    alert('Error: Unable to insert order into order_manager');
                    window.location.href='mycart.php';
                </script>";
            }
        } else {
            echo "<script> 
                alert('Error: Unable to prepare SQL statement for order_manager');
                window.location.href='mycart.php';
            </script>";
        }
    }
}
?>
