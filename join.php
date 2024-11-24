<?php
session_start();

// Check if user is logged in
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : ''; // Check if 'name' key is set
    $is_leader = isset($_SESSION['is_leader']) ? $_SESSION['is_leader'] : 0;
} else {
    // If user is not logged in, redirect to login.php
    header("Location: login.php");
    exit();
}

// Function to check if the user is a leader
function isLeader() {
    return isset($_SESSION['is_leader']) && $_SESSION['is_leader'] == 1;
}

// Destroy the session and redirect to home.php
function logout() {
    session_destroy();
    header("Location: index.php");
    exit();
}

if(isset($_POST['logout'])) {
    logout();
}

// Check if user is a leader and has already created a team
$leader_has_team = false;
$leader_team_name = "";
if (isLeader()) {
    include_once 'connection.php';
    $sql = "SELECT * FROM teams WHERE leader_id = $user_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $leader_has_team = true;
        $row = $result->fetch_assoc();
        $leader_team_name = $row['team_name'];
        $leader_team_code = $row['team_code']; // Added
    }
}

// Check if user is a member and not already in a team
$member_not_in_team = false;
$member_team_name = "";
if (!$is_leader) {
    include_once 'connection.php';
    $sql = "SELECT t.team_name FROM team_members tm JOIN teams t ON tm.team_id = t.id WHERE tm.user_id = $user_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $member_team_name = $row['team_name'];
    } else {
        $member_not_in_team = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/test2.css">

    <style>
        body {
            background-color: #000422;
            color: white;
            font-family: Arial, sans-serif;
        }

        .tcreate {
            max-width: 600px;
            margin: 170px auto; /* Adjust the top margin to move it below the navbar */
            text-align: center;
            padding: 20px;
        }

        .tcreate p {
            margin-bottom: 20px;
        }

        .tcreate button {
            background-color: #010B56;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .tcreate button:hover {
            background-color: #0f156b;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
        }

        form input[type="text"],
        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        form input[type="submit"] {
            background-color: #010B56;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #0f156b;
        }

        .error {
            color: white; /* Change error message color to white */
            margin-bottom: 10px;
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
<div class="tcreate">
    <?php if ($leader_has_team) { ?>
        <p>You are the leader of the team <?php echo $leader_team_name; ?></p>
        <p>Team Code: <?php echo $leader_team_code; ?></p> <!-- Added -->
    <?php } else if ($is_leader) { ?>
        <p>Hi <?php echo $name; ?>, You Are A Leader, Create Your Team!</p>
    <?php } else { ?>
        <p>Hi <?php echo $name; ?>, You Are A Member of Team <?php echo $member_team_name; ?></p>
    <?php } ?>

    <form action="" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>

    <?php if ($is_leader && !$leader_has_team) { ?>
        <button onclick="showCreateTeamForm()">Create Team</button>
    <?php } ?>

    <div id="createTeamForm" style="display: none;">
        <h3>Create Team</h3>
        <form action="createteam.php" method="post">
            <label for="teamName">Team Name:</label><br>
            <input type="text" id="teamName" name="teamName" required><br>
            <input type="submit" value="Create Team">
        </form>
    </div>

    <?php if (!$is_leader && $member_not_in_team) { ?>
        <h3>Join Team</h3>
        <form action="jointeam.php" method="post">
            <label for="teamCode">Enter Team Code:</label><br>
            <input type="text" id="teamCode" name="teamCode" required><br>
            <input type="submit" value="Join Team">
        </form>
    <?php } ?>

    <?php
    // Display success message and team code if available
    if(isset($_SESSION["success_message"])) {
        echo "<p class='error'>{$_SESSION["success_message"]}</p>";
        if(isset($_SESSION["team_code"])) {
            echo "<p>Team Code: {$_SESSION["team_code"]}</p>";
            unset($_SESSION["team_code"]); // Clear team code from session
        }
        unset($_SESSION["success_message"]); // Clear success message from session
    }

    // Display error message if team name already used
    if(isset($_SESSION["error_message"])) {
        echo "<p class='error'>{$_SESSION["error_message"]}</p>";
        unset($_SESSION["error_message"]); // Clear error message from session
    }
    ?>

    <!-- JavaScript function to show the create team form -->
    <script>
        function showCreateTeamForm() {
            document.getElementById("createTeamForm").style.display = "block";
        }
    </script>
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
