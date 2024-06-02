

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../images/icon.jpg">


    <title>Forgot Password</title>
</head>

<body>
    <div class="container">
        <div class="forgot-password-form">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <h1>Forgot Password</h1>
                <div class="input-box">
                    <label>Username:</label>
                    <input type="text" name="username" required><br><br>
                </div>
                <div class="input-box">
                    <label>Email:</label>
                    <input type="email" name="email" required><br><br>
                </div>
                <input type="submit" name="submit" value="Send Password Reset Email">
            </form>
        </div>
    </div>

<style>
body {
    font-family:  "Poppins", sans-serif;
    background-color: #f0f0f0;
}

.container {
    width: 50%;
    margin: 40px auto;
    text-align: center;
}

.forgot-password-form {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.input-box {
    margin-bottom: 20px;
}

.input-box label {
    display: block;
    margin-bottom: 5px;
}

.input-box input[type="text"],.input-box input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.forgot-password-form input[type="submit"] {
    background-color: #ad7b5a;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.forgot-password-form input[type="submit"]:hover {
    background-color: saddlebrown;
}
</style>

</body>

</html>