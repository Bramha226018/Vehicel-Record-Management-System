<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['roll_no'])) {
    echo "<script>alert('Please log in as admin.'); window.location.href='login.php';</script>";
    exit();
}

// Get the logged-in user's roll number
$roll_no = $_SESSION['roll_no'];

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_authentication_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle search input
$search = isset($_POST['search']) ? $_POST['search'] : '';

// Prepare the SQL query with search functionality
$sql = "SELECT vehicle_name, model, username, license_plate FROM vehicles 
        WHERE vehicle_name LIKE '%$search%' 
        OR model LIKE '%$search%' 
        OR username LIKE '%$search%' 
        OR license_plate LIKE '%$search%'";

$result = $conn->query($sql);

// Admin records array
$adminRecords = [
    ['username' => 'Bramha', 'email' => 'bramhagulavani@gmail.com', 'role' => 'Admin'],
    ['username' => 'Harsh', 'email' => 'harsh@example.com', 'role' => 'Admin']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .container {
            margin: 50px auto;
            width: 80%;
            text-align: center;
        }

        .search-bar {
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="text"] {
            width: 50%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-left: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .search-btn {
            background-color: #007bff;
            color: white;
        }

        .cancel-btn {
            background-color: #6c757d;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .back-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .back-btn:hover {
            background-color: #5a6268;
        }

        /* Modal styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px; /* Location of the box */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            border-radius: 5px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .navbar {
            background-color: #ff9d00;
            padding: 10px;
            color: white;
            text-align: right;
        }
        .navbar a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }

    </style>
</head>
<body>
<div class="navbar">
        <span>Logged in as: (Roll No: <?php echo $roll_no; ?>)</span>
        <a href="logout.php">Logout</a>
    </div>
<div class="container">
    <div class="search-bar">
        <form method="POST" action="user.php">
            <input type="text" name="search" placeholder="Search by Vehicle Name, Model, Owner, or License Plate" value="<?php echo htmlspecialchars($search); ?>">
            <button class="search-btn" type="submit">Search</button>
            <button class="cancel-btn" type="button" onclick="document.getElementsByName('search')[0].value=''">Cancel</button>
        </form>
    </div>

    <table>
        <thead>
        <tr>
            <th>Model</th>
            <th>Owner</th>
            <th>License Plate</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['model']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['license_plate']; ?></td>
                    <td class="action-btns">
                        <button class="details-btn" onclick="showDetails('<?php echo addslashes($row['vehicle_name']); ?>', '<?php echo addslashes($row['model']); ?>', '<?php echo addslashes($row['username']); ?>', '<?php echo addslashes($row['license_plate']); ?>')">More Details</button>
                        <button class="pdf-btn" onclick="showServices()">Services</button>
                        <button class="del-btn">Del Record</button>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No vehicles found.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

    <button class="back-btn" onclick="window.location.href='index2.php'">Back to Home</button>
</div>

<!-- More Details Modal -->
<div id="detailsModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('detailsModal')">&times;</span>
        <h2>Vehicle Details</h2>
        <div id="detailsContent"></div>
    </div>
</div>

<!-- Services Modal -->
<div id="servicesModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('servicesModal')">&times;</span>
        <h2>Available Services</h2>
        <div id="servicesContent"></div>
    </div>
</div>

<script>
    function showDetails(vehicleName, model, owner, licensePlate) {
        const detailsContent = `
            <strong>Vehicle Name:</strong> ${vehicleName}<br>
            <strong>Model:</strong> ${model}<br>
            <strong>Owner:</strong> ${owner}<br>
            <strong>License Plate:</strong> ${licensePlate}<br>
        `;
        document.getElementById('detailsContent').innerHTML = detailsContent;
        document.getElementById('detailsModal').style.display = 'block';
    }

    function showServices() {
        const servicesContent = `
            <ul>
                <li>Service 1: Oil Change</li>
                <li>Service 2: Tire Rotation</li>
                <li>Service 3: Brake Inspection</li>
                <li>Service 4: Battery Check</li>
                <li>Service 5: Transmission Fluid Change</li>
            </ul>
        `;
        document.getElementById('servicesContent').innerHTML = servicesContent;
        document.getElementById('servicesModal').style.display = 'block';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }

    // Close modal when clicking outside of the modal
    window.onclick = function(event) {
        if (event.target.className === 'modal') {
            closeModal('detailsModal');
            closeModal('servicesModal');
        }
    }
</script>

</body>
</html>
