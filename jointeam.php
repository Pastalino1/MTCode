<?php
session_start();

// Include database connection
include_once 'connection.php';

// Check if user is logged in
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    // If user is not logged in, redirect to login.php
    header("Location: login.php");
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve team code from form
    $team_code = $_POST["teamCode"];

    // Check if the entered team code exists in the database
    $sql = "SELECT id FROM teams WHERE team_code = '$team_code'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Team code exists, retrieve the team ID
        $row = $result->fetch_assoc();
        $team_id = $row["id"];

        // Insert the user into the team_members table
        $sql_insert = "INSERT INTO team_members (team_id, user_id) VALUES ('$team_id', '$user_id')";
        if ($conn->query($sql_insert) === TRUE) {
            $_SESSION["success_message"] = "You have successfully joined the team!";
        } else {
            $_SESSION["error_message"] = "Error joining team: " . $conn->error;
        }
    } else {
        // Team code doesn't exist
        $_SESSION["error_message"] = "Invalid team code. Please enter a valid team code.";
    }

    // Redirect back to join.php
    header("Location: join.php");
    exit();
}

// Close database connection
$conn->close();
?>
