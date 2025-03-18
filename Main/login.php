<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@363&family=Holtwood+One+SC&family=IM+Fell+DW+Pica:ital@0;1&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="icon" href="ULOGO.png" type="image/x-icon" />
    <title>Cascade Café - Login</title>

    <style>
        .login-container {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 50px;
            width: 25%;
            text-align: center;
            margin: auto;
        }
        .login-container h1 {
            color: #333;
            margin-bottom: 20px;
            font-family: 'Oswald', sans-serif;
        }
        input[type="text"], input[type="password"] {
            width: 75%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #333;
            color:rgb(255, 156, 25);
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 80%;
            font-family: 'Changa', sans-serif;
        }
        button:hover {
            background-color: #ca8f42;
            color:white;
        }
        .login-container{
            margin: 268px auto;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
        <div class="navbar">
            <div class="logo-title">
                <a href="index.php">
                    <img src="assets/img/ULOGO.png" alt="Cascade Café logo" class="logo" />
                </a>
                <a href="index.php"><h1 class="cascade">CASCADE</h1></a>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>

    <!-- Login Form -->
    <div class="login-container">
        <h1>Login</h1>
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign In</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Database credentials
            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $dbname = "coffee_shop";

            // Create connection
            $conn = new mysqli($servername, $db_username, $db_password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get user input
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Query the database
            $sql = "SELECT password FROM users WHERE username=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Verify password
                if (password_verify($password, $row['password'])) {
                    echo "<p>Login successful! Welcome, " . htmlspecialchars($username) . ".</p>";
                } else {
                    echo "<p>Invalid password. Please try again.</p>";
                }
            } else {
                echo "<p>User not found. Please try again.</p>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="social-links">
                <a href="https://x.com"><img src="assets/img/X_logo.jpg" alt="X (Twitter)" class="social-icon" /></a>
                <a href="https://www.facebook.com"><img src="assets/img/facebook.png" alt="Facebook" class="social-icon" /></a>
                <a href="https://youtu.be"><img src="assets/img/youtube logo.png" alt="YouTube" class="social-icon" /></a>
            </div>
            <p class="credit">&copy; 2024 Cascade Café. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
