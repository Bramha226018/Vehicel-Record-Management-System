<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle search input
$search = isset($_POST['search']) ? $conn->real_escape_string($_POST['search']) : '';

// Prepare the SQL query with search functionality
$sql = "SELECT name, email, phone FROM users
        WHERE name LIKE '%$search%' 
        OR email LIKE '%$search%' 
        OR phone LIKE '%$search%'";

$result = $conn->query($sql);

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
            margin: 0;
            padding: 0;
        }

        .container {
           
            background-color: #FFFDF2;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .search-bar {
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 50%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            margin-right: 10px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
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
            cursor: pointer;
        }

        .back-btn:hover {
            background-color: #5a6268;
        }

        .admin-table {
            margin-top: 40px;
        }

        .admin-table th {
            background-color: #ff9d00;
            color: white;
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

        /* Button styles with hover effects */
        .details-btn, .pdf-btn, .del-btn {
            background-color: #ff9d00;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .details-btn:hover, .pdf-btn:hover, .del-btn:hover {
            background-color: #e68a00;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
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
    </style>
</head>
<body>

<div class="container">
    <h1>User Records</h1>

    <!-- Search bar -->
    <div class="search-bar">
        <form method="POST" action="view_users.php">
            <input type="text" name="search" placeholder="Search by Name, Email, or Phone" value="<?php echo htmlspecialchars($search); ?>">
            <button class="search-btn" type="submit">Search</button>
            <button class="cancel-btn" type="button" onclick="document.getElementsByName('search')[0].value=''">Cancel</button>
        </form>
    </div>

    <!-- Display the user records -->
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                    <td>
                        <button class="pdf-btn" onclick="window.location.href='view_vehicle.php?email=<?php echo urlencode($row['email']); ?>'">View Vehicle</button>
                        <button class="pdf-btn" onclick="window.location.href='view_service.php?email=<?php echo urlencode($row['email']); ?>'">View Services</button>
                        <button class="del-btn">Del Record</button>
                    </td>


                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No users found.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    <button class="submit-btn" onclick="window.location.href='admin.php'">Go to Home </button>


</body>
</html>

<?php $conn->close(); ?>
