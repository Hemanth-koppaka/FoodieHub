<?php
include "db.php";
$result = $conn->query("SELECT * FROM menu_items");

// Wrapper for flex layout
echo "<div class='menu-container'>";

while ($row = $result->fetch_assoc()) {
    echo "<div class='menu-item'>";
    echo "<img src='" . $row['image_url'] . "' class='menu-img'><br>";
    echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
    echo "<p>" . htmlspecialchars($row['description']) . "</p>";
    echo "<p>₹" . $row['price'] . "</p>";
    echo "<form method='post' action='cart.php'>";
    echo "<input type='hidden' name='food_id' value='" . $row['id'] . "'>";
    echo "<input type='hidden' name='name' value='" . htmlspecialchars($row['name']) . "'>";
    echo "<input type='hidden' name='price' value='" . $row['price'] . "'>";
    echo "<button type='submit' name='add_to_cart'>Add to Cart</button>";
    echo "</form>";
    echo "</div>";
}

// Closing the wrapper
echo "</div>";
?>
