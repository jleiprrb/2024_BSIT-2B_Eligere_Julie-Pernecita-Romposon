<?php
include_once "../database.php";

// Function to check if username already exists
function usernameExists($conn, $username) {
    $sql = "SELECT * FROM customers WHERE cust_username =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}


session_start();

$cust_name = $_POST['cust_name'];
$cust_email = $_POST['cust_email'];
$cust_contact = $_POST['cust_contact'];
$cust_address = $_POST['cust_address'];
$cust_username = $_POST['cust_username'];
$cust_password = password_hash($_POST['cust_password'], PASSWORD_DEFAULT);
$cust_passwordRepeat = $_POST['cust_passwordRepeat'];

$errors = array();

// validate email address
if (!filter_var($cust_email, FILTER_VALIDATE_EMAIL)) {
    array_push($errors, "Email is not valid");
}

// verify if passwords are match
if (!password_verify($cust_passwordRepeat, $cust_password)) {
    array_push($errors, "Passwords do not match");
}

// Check if username already exists
if (usernameExists($conn, $cust_username)) {
    array_push($errors, "Username already taken");
}

// If walang errors, insert the new customer into database
if (empty($errors)) {
    $sql = "INSERT INTO customers (cust_name, cust_email, cust_contact, cust_address, cust_password, cust_username)
    VALUES ('$cust_name', '$cust_email', '$cust_contact', '$cust_address', '$cust_password', '$cust_username')";

    if ($conn->query($sql) === TRUE) {
        // if success ang sign up,redirect sa log in form
        echo "New record created successfully";
        header("Location: login_customer.php");
        exit;
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
} else {
   
    echo "Error: ". implode("<br>", $errors);
}

// Close the database connection
$conn->close();
?>