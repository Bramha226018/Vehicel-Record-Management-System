<?php
session_start(); // Start session to handle login

// Hardcoded admin credentials
$admins = [
    'bramha@gmail.com' => 'bramha@123',
    'harshvardhan@gmail.com' => 'harsh@123'
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the entered credentials match any of the admins
    if (isset($admins[$email]) && $admins[$email] === $password) {
        $_SESSION['admin'] = $email;
        header("Location: admin.php"); // Redirect to admin panel
        exit();
    } else {
        $error_message = "Invalid email or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - VRMS</title>
    <style>
        /* Basic page styling */
        body {
            background-image: url('https://images.pexels.com/photos/190537/pexels-photo-190537.jpeg?cs=srgb&dl=pexels-mikebirdy-190537.jpg&fm=jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: white;
            width: 420px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: box-shadow 0.3s ease-in-out;
        }

        .login-container:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="email"], input[type="password"] {
            width: 90%;
            padding: 9px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            transition: border 0.3s ease;
        }

        input[type="email"]:focus, input[type="password"]:focus {
            border-color: orange;
        }

        .login-btn {
            width: 100%;
            background-color: orange;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #e69500;
        }

        .error-message {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>
    <?php if (!empty($error_message)): ?>
        <div class="error-message"><?php echo $error_message; ?></div>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <button type="submit" class="login-btn">Login</button>
    </form>
</div>

</body>
</html>
