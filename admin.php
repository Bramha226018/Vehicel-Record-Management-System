<?php
session_start();

// Redirect to login if no admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// If logged in, display the admin panel content
?>

<!DOCTYPE html>
<html lang="en">
<body>

    <button id="scrollToTopBtn" title="Go to top">⬆</button>

    <script>
        var mybutton = document.getElementById("scrollToTopBtn");

        // Show the button after scrolling down 100px for better user experience
        window.onscroll = function() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        };

        // Smooth scroll to the top
        mybutton.onclick = function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth" // Smooth scroll effect
            });
        };
    </script>
</body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Vehicle Record Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }
        .button {
            background-color: orange;
            color: white;
            padding: 15px 25px;
            text-align: center;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-top: 50px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #e69500;
        }
        .logout-btn {
            background-color: red;
            color: white;
            padding: 10px 20px;
            text-align: center;
            border: none;
            cursor: pointer;
            font-size: 14px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .logout-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<style>
    /* Scroll-to-Top Button Styling */
    #scrollToTopBtn {
        display: none; /* Hidden by default */
        position: fixed; /* Fixed position */
        bottom: 30px; /* Adjust placement */
        right: 30px;
        z-index: 99; /* Ensure visibility */
        width: 60px; /* Set width */
        height: 60px; /* Set height to make it circular */
        border: none;
        outline: none;
        background-color: #8be318; /* Soft red background */
        color: white; /* White text */
        cursor: pointer; /* Pointer on hover */
        border-radius: 50%; /* Fully rounded to make it circular */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow for better visibility */
        transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transition */
        font-size: 24px; /* Adjust font size for larger button */
        line-height: 60px; /* Vertically center the icon */
        text-align: center; /* Horizontally center the icon */
    }

    #scrollToTopBtn:hover {
        background-color: #1ccb0f; /* Darker red on hover */
        transform: scale(1.1); /* Slightly larger on hover */
    }
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #FFFDF2;
    }

    /* Navigation Bar */
    nav {
        background-color: #000000 /* Orange theme color */
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    nav ul li {
        margin-right: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    nav ul li a {
        text-decoration: none;
        color: black;
        font-weight: bold;
        padding: 10px;
        transition: color 0.3s ease, transform 0.3s ease;
        display: block;
    }

    nav ul li:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        background-color: #FFA500; /* Slightly lighter orange */
    }

    nav ul li a:hover {
        color: #fff3e0; /* Lighter shade of orange */
    }

    /* Header section */
    header {
        background-color: #ff0000;
        text-align: center;
        padding: 20px;
        color: white;
        font-size: 2em;
        font-weight: bold;
    }

    /* Main content styling */
    .main-content {
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
        background-color: #FFFDF2;
        
    }

    .main-content p {
        text-align: justify;
        line-height: 1.6;
    }

    .main-content h1 {
        color:  #ff0000;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Marquee styling */
    .marquee {
        color: red;
        font-size: 24px;
        margin-bottom: 20px;
    }

</style>
<body>
    <!-- Navigation Bar -->
    <nav>
        <ul>
            
            <li><a href="admin.php">Home</a></li>
            <li><a href="add_user.php">Add User</a></li>
            <li><a href="view_users.php">View user</a></li>
            <li><a href="vehicle_info.php">Add  Vehicle</a></li>
            <li><a href="service.php">Add Service</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="home.php">Logout</a></li>
            &emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <li><a href="https://www.facebook.com/GovernmentPolyKolhapur"><img src="photos/Facebook.png" alt="facelogo" width="30" height="30"></a></li>
            <li><a href="https://web.telegram.org/k/#@gpkp_firstyear2020"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/2048px-Telegram_logo.svg.png" alt="tellogo" width="30" height="30"></a></li>
            <li><a href="https://www.instagram.com/govtpolytechnickolhapur/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="instalogo" width="30" height="30"></a></li>
        </ul>
    </nav>
<body>

<div class="main-content">
    <h1>Admin - Vehicle Record Management System</h1>
    <p>Welcome to the **Vehicle Record Management System (VRMS) Admin Panel**, your one-stop solution for managing all vehicle and user-related data. This platform has been designed with a focus on efficiency, ease of use, and security, providing you with the tools necessary to oversee and maintain a comprehensive database of vehicles and their owners. As an administrator, you have the responsibility and privilege to manage this system and ensure that all operations run smoothly and efficiently.</p>

        <p>Key Features of the VRMS Admin Panel:</p>

        <p><strong>User Management:</strong> The Admin Panel provides an easy-to-use interface for managing user data. You can add new users by filling out their details such as name, email, mobile number, and address. These details are validated in real-time to prevent incorrect or incomplete entries. Additionally, you have the option to edit or delete user information at any time, ensuring that only the most up-to-date and relevant data is stored in the system. With an organized table view, all user data is presented clearly, allowing you to search, sort, and filter records quickly and efficiently.</p>

        <p><strong>Vehicle Management:</strong> The system allows you to associate vehicles with specific users, making it easy to track ownership and vehicle details. For each user, you can add detailed vehicle information including vehicle number, make, model, year of manufacture, and additional custom attributes. This ensures that each user’s vehicle data is complete and accurate, facilitating better management and oversight. The vehicle data can be updated or removed as needed, and new vehicles can be added to the system for any existing or new users.</p>

        <p><strong>Service Management:</strong> Keeping vehicles in optimal condition is crucial, and the VRMS includes tools for tracking each vehicle's service history. Administrators can log maintenance events, repairs, or service visits to provide a detailed service record for each vehicle. This section is critical for ensuring that vehicles are maintained on time and that users are aware of upcoming service dates or completed repairs. You can add detailed information such as service dates, service type, cost, and additional notes, helping maintain transparency and accountability for vehicle upkeep.</p>

        <p><strong>Data Integrity and Validation:</strong> One of the core principles of VRMS is ensuring data integrity. The system includes built-in validations that ensure that only accurate and properly formatted information is entered into the database. Whether it's user contact details, vehicle information, or service records, each field is carefully validated before submission. This ensures that mistakes are minimized and data consistency is maintained across the system. For instance, email formats are checked, mobile numbers are validated for correct length, and address fields are structured to avoid ambiguity.</p>

        <p><strong>Secure Access:</strong> As an administrator, you have access to all areas of the system, but security is paramount. Only authorized admins with the correct login credentials can access the admin panel. With password encryption and secure login mechanisms, the VRMS ensures that unauthorized users cannot gain access to sensitive information. In this system, two administrators—Bramha and Harshvardhan—have been pre-configured with secure credentials, ensuring that only trusted personnel can make modifications.</p>

        <p><strong>Role-Based Actions:</strong> The admin panel is equipped with role-based functionality. In addition to basic user management, the admin can assign specific tasks, such as updating vehicle info or managing service records, to other authorized personnel. The system is highly flexible, allowing you to define user roles based on organizational requirements. This modularity ensures that the system can grow alongside the business or institution using it.</p>

        <p><strong>Advanced Search and Filter Options:</strong> The admin panel provides advanced search functionality, allowing you to search for users or vehicles based on various criteria such as name, email, mobile number, vehicle registration number, or service history. You can also filter users by location, vehicle type, or service status, helping you quickly find the information you need. This feature is invaluable for large databases with numerous users and vehicles, as it streamlines the process of locating specific records.</p>

        <p><strong>Comprehensive Reporting:</strong> In addition to managing user and vehicle data, the VRMS Admin Panel includes a reporting feature that provides insights into the system's overall performance. Administrators can generate reports on vehicle usage, service history, and user activity. These reports can be exported for further analysis or shared with other stakeholders to help with decision-making. This feature is especially useful for organizations looking to analyze trends, track vehicle maintenance schedules, or manage fleet efficiency.</p>

        <p><strong>User-Friendly Interface:</strong> Despite its advanced features, the VRMS Admin Panel is designed to be intuitive and easy to navigate. With a responsive design, the panel adjusts to various screen sizes, making it accessible from desktops, tablets, or mobile devices. The system’s layout is clean and straightforward, with all features accessible from a central dashboard. Hover effects, transitions, and other subtle UI enhancements have been added to create a smooth user experience.</p>

        <p><strong>Data Backup and Recovery:</strong> The VRMS Admin Panel also includes data backup functionality to ensure that no information is lost in the event of a system failure. Regular backups can be scheduled, and you can easily restore the database from a previous backup if needed. This ensures that your system remains resilient and data is never at risk of being permanently lost.</p>

        <p>With the VRMS Admin Panel, you have a comprehensive, powerful tool at your disposal for managing vehicle records and user data. The system is built for scalability, ensuring that it can handle a growing number of users and vehicles without compromising on performance. Explore all the features and enjoy the seamless experience of managing the entire system from one centralized location. If you have any questions or need assistance, our support team is ready to help at any time.</p>

    
    <form method="POST" action="logout.php">
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>

</body>
</html>
<html>
<head>
    
    <style>
       /* Footer Styles */
       .footer {
            background-color: #1a1a1a;
            color: #fff;
            font-family: 'Arial', sans-serif;
            padding: 20px 0;
        }

        .footer .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer .container > div {
            flex: 1;
            min-width: 200px;
            margin: 10px;
        }

        .footer-heading {
            color: #ff9d00;
            font-size: 18px;
            margin-bottom: 15px;
            border-bottom: 2px solid transparent;
            transition: border-color 0.3s;
            position: relative;
        }

        .footer-heading:hover {
            border-bottom: 2px solid #ff9d00;
        }

        .footer-link {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-link:hover {
            color: #ff9d00;
        }

        .footer-copyright {
            text-align: center;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.1);
            color: #fff;
            font-size: 14px;
        }

        .footer-copyright a {
            color: #ff9d00;
            text-decoration: none;
        }

        .footer-copyright a:hover {
            text-decoration: underline;
        }
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-icons img {
            width: 20px;
            height: 20px;
            filter: grayscale(100%);
        }

        .social-icons a:hover img {
            filter: grayscale(0%);
        }

    </style>
</head>
<body>
    <footer class="footer">
        <div class="container">
            <div>
                <h3 class="footer-heading">Contact Us</h3>
                <a href="mailto:VRMS@gmail.com" class="footer-link">Email: VRMS@gmail.com</a><br>
                <a href="tel:+919999999999" class="footer-link">Phone: 0231 -1234567</a>
            </div>
            <div>
                <h3 class="footer-heading">Quick Links</h3>
                <a href="https://www.aicte-india.org/" class="footer-link" target="_blank">AICTE</a><br>
                <a href="https://infyspringboard.onwingspan.com/web/en/login" class="footer-link" target="_blank">Infosys Springboard</a><br>
                <a href="https://ndl.iitkgp.ac.in/" class="footer-link" target="_blank">Digital Library</a>
            </div>
            <div>
                <h3 class="footer-heading">Follow Us</h3>
                <div class="social-icons"></div>
                    <a href="https://www.facebook.com/GovernmentPolyKolhapur" class="footer-link" target="_blank"><img src="photos/Facebook.png" alt="facelogo" width="42" height="42"></a>&emsp;&emsp;
                    <a href="https://web.telegram.org/k/#@gpkp_firstyear2020" class="footer-link" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/2048px-Telegram_logo.svg.png" alt="tellogo" width="42" height="42"></a>&emsp;&emsp;
                    <a href="https://www.instagram.com/gp_kolhapur/" class="footer-link" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="instalogo" width="42" height="42"></a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            &copy; 2024 Government Polytechnic Kolhapur. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
        </div>
    </footer>

</body>
</html>