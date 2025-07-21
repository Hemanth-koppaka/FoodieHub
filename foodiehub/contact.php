<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - FoodieHub</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fffefb;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .contact-box {
            width: 400px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #28a745;
            margin-bottom: 20px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            resize: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        #response {
            text-align: center;
            margin-top: 10px;
            color: #333;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #28a745;
        }
    </style>
</head>
<body>

<div class="contact-box">
    <h2>Contact Us</h2>
    <form id="contact-form">
        <input id="name" placeholder="Your Name" required>
        <input id="email" placeholder="Your Email" type="email" required>
        <textarea id="message" placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Send</button>
    </form>
    <p id="response"></p>
    <a href="dashboard.php">← Back to Dashboard</a>
</div>

<script src="js/contact.js"></script>

</body>
</html>
