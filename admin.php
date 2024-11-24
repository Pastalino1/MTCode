<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['user_id'])) {
    // Redirect unauthorized users to login page
    header("Location: login.php");
    exit();
}

// Check if the user is an admin (You need to adjust this logic based on your authentication mechanism)
$is_admin = false;
$admin_password = "your_admin_password"; // Change this to your actual admin password
if(isset($_POST['password']) && $_POST['password'] === $admin_password) {
    $is_admin = true;
}

// Include connection file
include_once 'connection.php';

// Retrieve list of tables from the database
$sql = "SHOW TABLES";
$result = $conn->query($sql);
$tables = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tables[] = $row['Tables_in_your_database']; // Replace 'your_database' with your actual database name
    }
}

// Function to sanitize user input
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Function to execute SQL query
function executeQuery($conn, $sql) {
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Delete record from table
if(isset($_POST['delete'])) {
    $table = $_POST['table'];
    $id = $_POST['id'];
    $sql = "DELETE FROM $table WHERE id = $id";
    if(executeQuery($conn, $sql)) {
        $message = "Record deleted successfully";
    } else {
        $error = "Error deleting record: " . $conn->error;
    }
}

// Modify record in table
if(isset($_POST['modify'])) {
    $table = $_POST['table'];
    $id = $_POST['id'];
    // Example modification, you need to adjust this based on your table structure
    $new_data = sanitize($_POST['new_data']);
    $sql = "UPDATE $table SET column_name = '$new_data' WHERE id = $id";
    if(executeQuery($conn, $sql)) {
        $message = "Record modified successfully";
    } else {
        $error = "Error modifying record: " . $conn->error;
    }
}

// Add record to table
if(isset($_POST['add'])) {
    $table = $_POST['table'];
    // Example addition, you need to adjust this based on your table structure
    $data1 = sanitize($_POST['data1']);
    $data2 = sanitize($_POST['data2']);
    $sql = "INSERT INTO $table (column1, column2) VALUES ('$data1', '$data2')";
    if(executeQuery($conn, $sql)) {
        $message = "Record added successfully";
    } else {
        $error = "Error adding record: " . $conn->error;
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
    <title>Admin Panel</title>
</head>
<body>
    <h1>Welcome Admin</h1>

    <?php if($is_admin): ?>
        <h2>Database Tables:</h2>
        <ul>
            <?php foreach($tables as $table): ?>
                <li><?php echo $table; ?></li>
            <?php endforeach; ?>
        </ul>

        <?php if(isset($message)): ?>
            <p style="color: green;"><?php echo $message; ?></p>
        <?php endif; ?>

        <?php if(isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>

        <!-- Form for deleting record -->
        <form action="" method="post">
            <label for="table">Select table:</label>
            <select name="table" id="table">
                <?php foreach($tables as $table): ?>
                    <option value="<?php echo $table; ?>"><?php echo $table; ?></option>
                <?php endforeach; ?>
            </select>
            <label for="id">ID of record to delete:</label>
            <input type="text" name="id" id="id">
            <input type="submit" name="delete" value="Delete Record">
        </form>

        <!-- Form for modifying record -->
        <form action="" method="post">
            <label for="table">Select table:</label>
            <select name="table" id="table">
                <?php foreach($tables as $table): ?>
                    <option value="<?php echo $table; ?>"><?php echo $table; ?></option>
                <?php endforeach; ?>
            </select>
            <label for="id">ID of record to modify:</label>
            <input type="text name="id" id="id">
            <label for="new_data">New data:</label>
            <input type="text" name="new_data" id="new_data">
            <input type="submit" name="modify" value="Modify Record">
        </form>

        <!-- Form for adding record -->
        <form action="" method="post">
            <label for="table">Select table:</label>
            <select name="table" id="table">
                <?php foreach($tables as $table): ?>
                    <option value="<?php echo $table; ?>"><?php echo $table; ?></option>
                <?php endforeach; ?>
            </select>
            <!-- Example fields for adding record, adjust based on your table structure -->
            <label for="data1">Data 1:</label>
            <input type="text" name="data1" id="data1">
            <label for="data2">Data 2:</label>
            <input type="text" name="data2" id="data2">
            <input type="submit" name="add" value="Add Record">
        </form>
    <?php else: ?>
        <form action="" method="post">
            <label for="password">Enter admin password:</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Login">
        </form>
    <?php endif; ?>
</body>
</html>
