<?php
// Connect to the database
include "db.php";

// Start the session to check if the user is logged in
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Fetch menu items from the database
$result = $conn->query("SELECT * FROM menu_items");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #343a40;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        header a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        header a:hover {
            text-decoration: underline;
        }

        .menu-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-evenly;
            padding: 20px;
        }

        .menu-item {
            flex: 1 1 calc(33.333% - 20px);
            box-sizing: border-box;
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-img {
            width: 100%;
            max-width: 200px;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .menu-item h3 {
            font-size: 1.2rem;
            color: #333;
            margin: 10px 0;
        }

        .menu-item p {
            color: #777;
            margin: 5px 0;
        }

        .menu-item .price {
            font-weight: bold;
            color: #28a745;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 15px 20px;
            text-align: center;
            margin-top: 20px;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to FoodieHub</h1>
    <a href="dashboard.php">Back to Dashboard</a>
</header>

<h2 style="text-align: center; margin: 20px 0;">Our Delicious Menu</h2>

<div class="menu-container">

<?php
// Display the menu items
while ($row = $result->fetch_assoc()) {
    echo "<div class='menu-item'>";
    echo "<img src='" . $row['image_url'] . "' class='menu-img'><br>";
    echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
    echo "<p>" . htmlspecialchars($row['description']) . "</p>";
    echo "<p class='price'>₹" . $row['price'] . "</p>";
    echo "<form method='post' action='cart.php'>";
    echo "<input type='hidden' name='food_id' value='" . $row['id'] . "'>";
    echo "<input type='hidden' name='name' value='" . htmlspecialchars($row['name']) . "'>";
    echo "<input type='hidden' name='price' value='" . $row['price'] . "'>";
    echo "<button type='submit' name='add_to_cart'>Add to Cart</button>";
    echo "</form>";
    echo "</div>";
}
?>

</div>

<footer>
    <p>&copy; 2025 FoodieHub. All Rights Reserved. <a href="dashboard.php">Back to Dashboard</a></p>
</footer>

</body>
</html>
