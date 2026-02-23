<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_management_system";  // Change to your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$success = "";
$error = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $booking_date = $_POST['booking_date'];
    $booking_time = $_POST['booking_time'];
    $service_type = $_POST['service_type'];
    $special_requests = $_POST['special_requests'];

    // Insert query
    $sql = "INSERT INTO booking (name, email, phone_number, booking_date, booking_time, service_type, special_requests) 
            VALUES ('$name', '$email', '$phone_number', '$booking_date', '$booking_time', '$service_type', '$special_requests')";

    if ($conn->query($sql) === TRUE) {
        $success = "Booking successfully made!";
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <style>
                body {
            background-image: url('https://images.pexels.com/photos/190537/pexels-photo-190537.jpeg?cs=srgb&dl=pexels-mikebirdy-190537.jpg&fm=jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 30;
            padding: 0;
            display: flex;
            align-items: flex-start;
            height: 100vh;
            padding-top: 50px;
        }

        .booking-container {
            background-color: #FFFDF2;
            width: 370px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: box-shadow 0.3s ease-in-out;
            margin-top: -27px;
            margin-left: 630px;
            max-height: 850px; /* Set a maximum height */
            overflow-y: auto; /* Enable vertical scrolling */
        }

        .booking-container:hover {
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

        input[type="text"], input[type="email"], input[type="date"], input[type="time"], select, textarea {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="date"]:focus, input[type="time"]:focus, select:focus, textarea:focus {
            border-color: orange;
        }

        .booking-btn {
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

        .booking-btn:hover {
            background-color: #e69500;
        }

        .success-message {
            color: green;
            margin-bottom: 20px;
        }

        .error-message {
            color: red;
            margin-bottom: 20px;
        }
        .navbar {
        background-color: #333;
        overflow: hidden;
        }
        .navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
        }
        .navbar a:hover {
        background-color: #ddd;
        color: black;
        }

    </style>
    <script>
        // Show pop-up for success or error
        window.onload = function() {
            <?php if(!empty($success)): ?>
                alert('<?php echo $success; ?>');
            <?php elseif(!empty($error)): ?>
                alert('<?php echo $error; ?>');
            <?php endif; ?>
        };
    </script>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <a href="home123.php">Home Page</a>
  </div>

</body>
<body>
    <centre><div class="booking-container">
        <h2>Make a Booking</h2>
        <form method="post" action="">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="phone_number">Phone Number:</label>
            <input type="text" name="phone_number" required>

            <label for="booking_date">Booking Date:</label>
            <input type="date" name="booking_date" required>

            <label for="booking_time">Booking Time:</label>
            <input type="time" name="booking_time" required>

            <label for="service_type">Service Type:</label>
            <select name="service_type" required>
                <option value="Consultation">Consultation</option>
                <option value="Appointment">Appointment</option>
                <option value="Event">Event</option>
            </select>

            <label for="special_requests">Special Requests:</label>
            <textarea name="special_requests" rows="4"></textarea>

            <input type="submit" class="booking-btn" value="Book Now"><br><br>
            <button class="booking-btn" onclick="window.location.href='home.php'">Go to Home </button>
        </form>
    </div></centre>
</body>
</html>
