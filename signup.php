<?php
session_start();
 
// Include database connection
include_once 'connection.php';
 
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $is_leader = isset($_POST["is_leader"]) ? 1 : 0;
 
    // Check if email already exists
    $check_email_sql = "SELECT id FROM users WHERE email='$email'";
    $result = $conn->query($check_email_sql);
    if ($result->num_rows > 0) {
        $_SESSION["error_message"] = "Email already exists. Please use a different email.";
        header("Location: signup.php");
        exit();
    }
 
    // Insert user data
    $sql = "INSERT INTO users (name, email, is_leader, number, password) VALUES ('$name', '$email', '$is_leader', '$number' , '$password')";
 
    if ($conn->query($sql) === TRUE) {
        $_SESSION["success_message"] = "Registered successfully!";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
 
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="css/test2.css">
    <style>
        body{
            background-color: #000422;
        }
        .signupform{
            margin-top: 150px;
            margin-left: auto;
            margin-right: auto;
            max-width: 400px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: black; /* Text color */
        }

        /* Styles for form labels */
        .signupform label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        /* Styles for form inputs */
        .signupform input[type="text"],
        .signupform input[type="email"],
        .signupform input[type="number"],
        .signupform input[type="password"],
        .signupform input[type="checkbox"],
        .signupform button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        /* Styles for submit button */
        .signupform button {
            background-color: #010B56;
            color: white;
            border: none;
            cursor: pointer;
        }

        /* Styles for login link */
        .signupform p {
            margin-top: 20px;
            text-align: center;
            color: black; /* Text color */
        }

        .signupform a {
            color: blue;
            text-decoration: none;
            font-weight: bold;
        }

        /* Styles for success and error messages */
        .success-message,
        .error-message {
            color: black; /* Text color */
            font-weight: bold;
            text-align: center;
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


<div class="signupform">
    <?php
    // Display success message
    if(isset($_SESSION["success_message"])) {
        echo "<p class='success-message'>{$_SESSION["success_message"]}</p>";
        unset($_SESSION["success_message"]); // Clear success message from session
    }

    // Display error message
    if(isset($_SESSION["error_message"])) {
        echo "<p class='error-message'>{$_SESSION["error_message"]}</p>";
        unset($_SESSION["error_message"]); // Clear error message from session
    }
    ?>

    <h2>User Registration</h2>
    <form action="signup.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="number">Phone number:</label><br>
        <input type="text" id="name" name="number" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <label for="is_leader">Are you a team leader?</label><br>
        <input type="checkbox" id="is_leader" name="is_leader" value="1"><br>

        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="login">Login</a></p>
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
