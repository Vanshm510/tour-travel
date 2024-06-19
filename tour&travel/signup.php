<?php
require 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit;
    }

    
    $sql = "SELECT id FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                echo "Email already registered. <a href='login.html'>Click here to login</a>.";
                $stmt->close();
                exit;
            }
        }
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sss", $username, $email, $hashedPassword);
        
        if ($stmt->execute()) {
            echo "Sign up successful. You can now <a href='login.html'>log in</a>.";
        } else {
            echo "Something went wrong. Please try again.";
        }
        $stmt->close();
    }
    $conn->close();
}
?>
