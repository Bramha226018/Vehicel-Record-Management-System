<?php
// Database connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_management_system"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO vehicle_info (email, number_plate, vehicle_model) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $number_plate, $vehicle_model);

    // Set parameters and execute
    $email = $_POST['email'];
    $number_plate = $_POST['number_plate'];
    $vehicle_model = $_POST['vehicle_model'];

    if ($stmt->execute()) {
        echo "<script>alert('New vehicle information added successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Information - VRMS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #FF5733;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1.1em;
        }

        .btn-submit {
            background-color: #FFA500;
            color: white;
            padding: 12px 20px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #e94c2e;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Vehicle Information</h1>
    <form action="vehicle_info.php" method="POST">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label for="number_plate">Number Plate</label>
            <input type="text" id="number_plate" name="number_plate" placeholder="Enter vehicle number plate" required>
        </div>

        <div class="form-group">
            <label for="vehicle_model">Vehicle Model</label>
            <input type="text" id="vehicle_model" name="vehicle_model" placeholder="Enter vehicle model" required>
        </div>

        <button type="submit" class="btn-submit">Submit Vehicle Info</button><br><br>
        <button type="submit" class="btn-submit" onclick="window.location.href='admin.php'">Go To Home</button>
    </form>
</div>

</body>
</html>
