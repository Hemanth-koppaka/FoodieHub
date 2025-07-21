<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = $_POST['username'];
    $p = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $u, $p);
    $stmt->execute();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #6dd5ed, #2193b0);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .register-box {
      background-color: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .register-box h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .register-box input {
      width: 90%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    .register-box button {
      width: 95%;
      padding: 12px;
      border: none;
      background-color: #2193b0;
      color: white;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 15px;
    }

    .register-box button:hover {
      background-color: #176d88;
    }

    .register-box p {
      margin-top: 20px;
      font-size: 14px;
    }

    .register-box a {
      color: #2193b0;
      text-decoration: none;
    }

    .register-box a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="register-box">
    <h2>Create Account</h2>
    <form method="POST">
      <input name="username" placeholder="Username" required>
      <input name="password" type="password" placeholder="Password" required>
      <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
  </div>
</body>
</html>
