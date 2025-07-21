<?php 
session_start(); 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Foodie's Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      color: #fff;
    }

    .container {
      background: rgba(0, 0, 0, 0.75);
      padding: 40px 60px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    }

    h2 {
      font-size: 32px;
      margin-bottom: 25px;
    }

    .nav-links a {
      display: inline-block;
      margin: 12px;
      padding: 12px 25px;
      font-size: 18px;
      background: #ff914d;
      color: white;
      text-decoration: none;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .nav-links a:hover {
      background: #ffb570;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Welcome to FoodieHub, <?= htmlspecialchars($_SESSION['username']) ?>! 🍽️</h2>
    <div class="nav-links">
      <a href="menu.php">📋 View Menu</a>
      <a href="cart.php">🛒 Your Cart</a>
      <a href="about.php">👨‍🍳 About Us</a>
      <a href="contact.php">📞 Contact</a>
      <a href="logout.php">🚪 Logout</a>
    </div>
  </div>
</body>
</html>
