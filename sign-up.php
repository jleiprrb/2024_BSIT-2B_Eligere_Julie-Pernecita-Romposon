<!DOCTYPE html>
<html lang="en">

   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_two.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="login_customer.php">
    
    <title>Sign-up Form</title>
   </head>

    <body>
      <div class="nav_menu">
        <div class="logo" style="position: absolute; left: 0; top: 0;" >
          <img src="../images/logo.png" width="180px" height="80px" style="margin-left: 10px;">
        </div>
        <ul>
           <li><a href="../index.php" class="link">Home</a></li>
           <li><a href="#" class="link">About Us</a></li>
           <li><a href="#" class="link">Contact Us</a></li>
           <li><a href="#" class="link">Sign-up</a></li>
        </ul>
     </div>
      <div class="user-form">
          <form action="sign-up_process.php" method="POST">
              <h1>Sign Up</h1>
            <div class="input-container">
              <div class = "input-fields">
                <input type = "text" name="cust_name" placeholder="Fullname" required>
                <i class="bi bi-person-fill"></i>
              </div>
              <div class = "input-fields">
                <input type = "text" name="cust_username" placeholder="Username" required>
                <i class="bi bi-person-fill"></i>
              </div>
            </div>
            <div class="input-container">
              <div class = "input-fields">
                <input type = "text" name="cust_address" placeholder="Complete Address" required>
                <i class="bi bi-house-fill"></i>
              </div>
              <div class = "input-fields">
                <input type = "text" name="cust_contact" placeholder="Contact Number" required>
                <i class="bi bi-phone-fill"></i>
              </div>
            </div>
            <div class="input-center">
              <div class = "input-fields">
                <input type = "text" name="cust_email" placeholder="Email" required>
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div class = "input-fields">
                <input type = "text" name="cust_password" placeholder="Password" required>
                <i class="bi bi-lock-fill"></i>
              </div>
              <div class = "input-fields">
                <input type = "text" name="cust_passwordRepeat" placeholder="Confirm Password" required>
                <i class="bi bi-lock-fill"></i>
              </div>
            </div>
             <button type="submit" class="button">Sign-up</button>
             <div class="register-link">
               <p>Already have an account? <a href ="login_customer.php">Login</a></p>
             </div>
          </form>
      </div>

    </body>


</html>