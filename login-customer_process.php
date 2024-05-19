<?php
require_once "../database.php";

// Start session
session_start();

/**
 * Validate and sanitize input data
 * @param string $data
 * @return string
 */
function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Login customer
 * @param string $username
 * @param string $password
 */
function loginCustomer($username, $password) {
    global $conn; // Access the global $conn variable

    $sql = "SELECT * FROM customers WHERE cust_username =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['cust_password'])) {
            // Login successful
            $_SESSION['cust_username'] = $username;
            if ($row['user_type'] == 'A') {
                // Admin login, redirect to admin panel
                header("Location:../admin.php");
                exit;
            } else {
                // Customer login, redirect to index page
                header("Location:../index.php");
                exit;
            }
        } else {
            // Password is incorrect
            throw new Exception("Password is incorrect");
        }
    } else {
        // Username not found
        throw new Exception("Username not found");
    }
}

try {
    $cust_username = validateInput($_POST['cust_username']);
    $cust_password = validateInput($_POST['cust_password']);
    loginCustomer($cust_username, $cust_password);
} catch (Exception $e) {
    echo "Error: ". $e->getMessage();
}

// Close database connection
$conn->close();