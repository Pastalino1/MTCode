<?php
session_start();
 
// Include database connection
include_once 'connection.php';
 
// Check if registration success message is set
$registration_success_message = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : null;
unset($_SESSION['success_message']); // Clear the session variable
 
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
 
    // Retrieve user from database based on email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
 
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
 
            // Set is_leader based on user role
            $_SESSION['is_leader'] = $row['is_leader'];
 
            header("Location: join.php");
            exit();
        } else {
            $_SESSION['error_message'] = "Invalid email or password.";
        }
    } else {
        $_SESSION['error_message'] = "Invalid email or password.";
    }
}
 
// Close database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="css/test2.css">
    <style>
        body {
            background-color: #000422;
            color: white;
            font-family: Arial, sans-serif;
        }
 
        .loginform {
            max-width: 400px;
            margin: 250px auto; /* Adjusted margin for centering */
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: black;
        }
 
        .loginform label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
 
        .loginform input[type="email"],
        .loginform input[type="password"],
        .loginform button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
 
        .loginform button {
            background-color: #010B56;
            color: white;
            border: none;
            cursor: pointer;
        }
 
        .loginform p.error {
            color: black;
            margin-bottom: 10px;
        }
 
        .loginform p.signup-link {
            margin-top: 20px;
            text-align: center;
        }
 
        .loginform a {
            color: blue;
            text-decoration: none;
            font-weight: bold;
 
        }
        .button-85{display: none;}
 
    </style>
</head>
<body>
<section id="header">
    <a href="index"><img src="mtcode\mtcode2.png" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a href="index">About</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a><button class="button-85" role="button">Join Us</button></a></li>
        </ul>
        <div class="navbar-toggle">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>
</section>
<div class="loginform">
    <h2>User Login</h2>
    <?php if(isset($_SESSION['error_message'])) { ?>
        <p class="error"><?php echo $_SESSION['error_message']; ?></p>
        <?php unset($_SESSION['error_message']); ?>
    <?php } ?>
    <?php if($registration_success_message) { ?>
        <p class="success-message"><?php echo $registration_success_message; ?></p>
    <?php } ?>
    <form action="login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
 
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
 
        <button type="submit">Login</button>
    </form>
 
    <p class="signup-link">Don't have an account yet? <a href="signup">Sign up</a></p>
</div>
</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const navbarToggle = document.querySelector(".navbar-toggle");
    const navbar = document.querySelector("#navbar");
 
    navbarToggle.addEventListener("click", function() {
        navbar.classList.toggle("active");
        navbarToggle.classList.toggle("active"); // Toggle the active class for the icon
    });
});
</script>
</html>
