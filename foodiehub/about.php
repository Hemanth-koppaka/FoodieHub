<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About FoodieHub</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        .header-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-bottom: 5px solid #28a745;
        }

        .about-box {
            max-width: 600px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            text-align: center;
            margin-top: -50px; /* to overlap the image */
            z-index: 1;
        }

        h2 {
            color: #28a745;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: #28a745;
            padding: 12px 25px;
            border-radius: 6px;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        a:hover {
            background-color: #218838;
        }

        /* Footer section for social links or other information */
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>

<!-- Background image section -->
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ8QK3tuSlabkPg3H7trB3cFNKEim2LmGMzQ&s" alt="FoodieHub" class="header-image">

<!-- About content box -->
<div class="about-box">
    <h2>About FoodieHub</h2>
    <p>FoodieHub is a demo food ordering portal built using PHP, MySQL, and JavaScript. Browse the menu, add your favorite dishes to the cart, and enjoy a smooth ordering experience! We're passionate about providing a seamless experience for food lovers everywhere.</p>
    <a href="dashboard.php">← Back to Dashboard</a>
</div>

<!-- Footer or additional links -->
<div class="footer">
    <p>© 2025 FoodieHub. All rights reserved.</p>
</div>

</body>
</html>
