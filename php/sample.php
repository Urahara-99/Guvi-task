<?php
header('Content-Type: application/json');
error_reporting(0);

// Database connection
$conn = new mysqli("localhost", "root", "", "user_management");

// Check connection
if ($conn->connect_error) {
    echo json_encode(["status" => "Error: Failed to connect to database", "error" => $conn->connect_error]);
    exit;
}

// Get POST data
$username_email = $_POST['username_email'];
$password = $_POST['password'];

// Validate input
if (empty($username_email) || empty($password)) {
    echo json_encode(["status" => "Error: All fields are required."]);
    exit;
}

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
if ($stmt === false) {
    echo json_encode(["status" => "Error: Failed to prepare statement", "error" => $conn->error]);
    exit;
}
$stmt->bind_param("ss", $username_email, $username_email);

// Execute the statement
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists and verify password
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        echo json_encode(["status" => "Login successful!", "user" => $user['username']]);
    } else {
        echo json_encode(["status" => "Error: Invalid credentials."]);
    }
} else {
    echo json_encode(["status" => "Error: Invalid credentials."]);
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>