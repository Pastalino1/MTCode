<?php
session_start();

// Include database connection
include_once 'connection.php';

// Check if user is logged in
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
} else {
    // If user is not logged in, redirect to login.php
    header("Location: login.php");
    exit();
}

// Function to generate a random team code
function generateTeamCode($length = 8) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

// Function to check if the user is a leader and has already created a team
function hasCreatedTeam($user_id, $conn) {
    $sql = "SELECT * FROM teams WHERE leader_id = $user_id";
    $result = $conn->query($sql);
    return $result->num_rows > 0;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve team name from form
    $team_name = $_POST["teamName"];

    // Check if the team name already exists
    $sql_check_name = "SELECT * FROM teams WHERE team_name = '$team_name'";
    $result_check_name = $conn->query($sql_check_name);
    if ($result_check_name->num_rows > 0) {
        $_SESSION["error_message"] = "Team name already used!";
        header("Location: join.php");
        exit();
    }

    // Check if the user has already created a team
    if(hasCreatedTeam($user_id, $conn)) {
        $_SESSION["error_message"] = "You can only create one team!";
        header("Location: join.php");
        exit();
    }

    // Generate a random team code
    $team_code = generateTeamCode();

    // Insert team data into teams table
    $sql = "INSERT INTO teams (team_name, team_code, leader_id) VALUES ('$team_name', '$team_code', '$user_id')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION["success_message"] = "Team created successfully!";
        $_SESSION["team_code"] = $team_code; // Store team code in session
        header("Location: join.php");
        exit();
    } else {
        $_SESSION["error_message"] = "Error creating team: " . $conn->error;
        header("Location: join.php");
        exit();
    }
}

// Close database connection
$conn->close();
?>
