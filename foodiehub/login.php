<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = $_POST['username'];
    $p = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $u);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($p, $user['password'])) {
        $_SESSION['username'] = $u;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Login Failed! Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(to right, #6dd5ed, #2193b0);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background-color: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 380px;
      text-align: center;
    }

    .login-box h2 {
      margin-bottom: 20px;
      color: #333;
      font-size: 24px;
      font-weight: 500;
    }

    .login-box input {
      width: 90%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    .login-box input:focus {
      border-color: #2193b0;
      box-shadow: 0 0 8px rgba(33, 147, 176, 0.5);
    }

    .login-box button {
      width: 95%;
      padding: 12px;
      border: none;
      background-color: #2193b0;
      color: white;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 15px;
      transition: all 0.3s ease;
    }

    .login-box button:hover {
      background-color: #176d88;
    }

    .login-box p {
      margin-top: 20px;
      font-size: 14px;
      color: #333;
    }

    .login-box a {
      color: #2193b0;
      text-decoration: none;
    }

    .login-box a:hover {
      text-decoration: underline;
    }

    .error {
      color: red;
      margin-bottom: 10px;
      font-size: 14px;
      font-weight: 500;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .login-box {
        padding: 25px;
      }
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>
    <form method="POST">
      <input name="username" placeholder="Username" required autofocus>
      <input name="password" type="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
  </div>
</body>
</html>
