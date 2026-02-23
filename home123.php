

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
    <title>Home Panel - V R M S</title>
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
    
        .project-container {
            display: flex;
            align-items: center;
            border: 0;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .image-container {
            border: 0;
            margin-right: 20px;
        }

        .image-container img {
            max-width: 150px;
            border-radius: 50%;
            transition: transform 0.3s ease;
        }
        .image-container img:hover {
            transform: rotate(360deg);
        }

        .title-container {
            border: 0;
        }

        .title-container h1 {
            font-size: 24px;
            color: #333;
            transition: color 0.3s ease;
        }

        .title-container h1:hover {
            color: #ff5722;
            text-shadow: 0 0 8px rgba(255, 87, 34, 0.7);
        }
        /* Marquee Container Styling */
        .marquee-container {
            width: 70%;
            overflow: hidden;
            background-color: #fff;
            padding: 10px;
            
        }
        .marquee {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 10s linear infinite;
            behavior-alternate;
        }
        .marquee span {
            font-size: 18px;
            color: #333;
            behavior-alternate;
        }
        /* Marquee Animation */
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }      }
        .marquee:hover {
            animation-play-state: paused;
        }
        .bramha {
            display: flex;
            justify-content: right;
            align-items: center;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .bramha img {
            width: 62px;
            height: 62px;
            transition: transform 0.3s ease, filter 0.3s ease;
        }
        .bramha img:hover {
            transform: rotate(360deg);
            filter: brightness(1.2);
        }
        .holder {
            display: flex;
            border: 0;
            padding: 20px;
            background-color: #FFFDF2;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .holder-container {
            border: 0;
            margin-right: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .holder-container img {
            border-radius: 10px;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .holder-container img:hover {
            transform: scale(1.1);
            filter: brightness(1.1);
        }

        .points-container {
            border: 0;
            display: flex;
            align-items: center;
        }

        .points-container ul {
            list-style-type: disc;
            color: #333;
            font-size: 21px;
            line-height: 1.6;
        }

        .points-container ul li {
            margin-bottom: 10px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .points-container ul li:hover {
            color: #ff5722;
            transform: translateX(10px);
        }


        .bramha-container {
                    display: flex;
                    justify-content: space-between;
                    width: 100%;
                    max-width: 1200px;
                    background-color: #FFFDF2;
                    border-radius: 10px;
                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                    overflow: hidden;
                }

                .box {
                    padding: 30px;
                    flex: 1;
                    border-right: 2px solid #e0e0e0; /* Divider line */
                }

                .box h2 {
                    color: #333;
                    margin-bottom: 20px;
                    font-size: 24px;
                    border-bottom: 2px solid #007bff;
                    padding-bottom: 10px;
                }

                .box p {
                    line-height: 1.6;
                    color: #555;
                    margin: 10px 0;
                    font-size: 16px;
                }

                .box-container {
                    flex: 1;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 20px;
                
                    transition: transform 0.3s ease;
                }

                .box-container:hover {
                    transform: scale(1.05); /* Zoom effect on hover */
                }

                .box-container img {
                    max-width: 100%;
                    border-radius: 10px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                }

                @media (max-width: 768px) {
                    .container {
                        flex-direction: column;
                    }

                    .box {
                        border-right: none; /* Remove the border for smaller screens */
                        border-bottom: 2px solid #e0e0e0; /* Divider line */
                    }
                }
        </style>
<body>
<div class="project-container">
            <div class="image-container">
                <img src="photos/4.png" alt="Project Image">
            </div>
            <div class="title-container">
                <h1>Vehicle Record Management System</h1>
            </div>
            <div class="marquee-container">
                <div class="marquee">
                <span behavior="alternate">Welcome to Vehicle Record Management System - Version 1.0 New features added! Check out the latest vehicle search functionality.</span>
            </div>
            <div class="bramha">
                
                <a href="logout.php"><img src="https://cdn1.iconfinder.com/data/icons/heroicons-ui/24/logout-512.png"alt="logout"width="60" height="60">
            </div>
    </div>
</div>

</body>
<body>
    <!-- Navigation Bar -->
    <nav>
        <ul>
            
            <li><a href="home.php">Home</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            
            
            &emsp;&emsp;&emsp;&emsp;
            <li><a href="https://www.facebook.com/GovernmentPolyKolhapur"><img src="photos/Facebook.png" alt="facelogo" width="30" height="30"></a></li>
            <li><a href="https://web.telegram.org/k/#@gpkp_firstyear2020"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/2048px-Telegram_logo.svg.png" alt="tellogo" width="30" height="30"></a></li>
            <li><a href="https://www.instagram.com/govtpolytechnickolhapur/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="instalogo" width="30" height="30"></a></li>
        </ul>
    </nav>
<body>

<div class="main-content">
    <h1>Home  - Vehicle Record Management System</h1>
    <p>Welcome to the **Vehicle Record Management System (VRMS) Admin Panel**, your one-stop solution for managing all vehicle and user-related data. This platform has been designed with a focus on efficiency, ease of use, and security, providing you with the tools necessary to oversee and maintain a comprehensive database of vehicles and their owners. As an administrator, you have the responsibility and privilege to manage this system and ensure that all operations run smoothly and efficiently.</p>

    <div class="holder">
        <!-- First container for the image -->
        <div class="holder-container">
        <img src="photos/HB.png" alt="Image Description" width="250" height="250">
        </div>

        <!-- Second container for the bulleted points -->
        <div class="points-container">
        <ul>
                <li>Manages vehicle registration details</li>
                <li>Registration form, data storage</li>
                <li>Includes vehicle registration number, owner name, vehicle type, and other necessary details.</li>
                <li>Secure login system for admin and users to access the dashboard.</li>
            </ul>
        </div>
    </div>

    <div class="bramha-container">
        <div class="box">
            <h2>Key Features of the VRMS Admin Panel:</h2>
            <p><strong>User Management:</strong> The Admin Panel provides an easy-to-use interface for managing user data.</p>
            <p><strong>Vehicle Management:</strong> The system allows you to associate vehicles with specific users, making it easy to track ownership and vehicle details.</p>
            <p><strong>Service Management:</strong> Keeping vehicles in optimal condition is crucial, and the VRMS includes tools for tracking each vehicle's service history.</p>
            <p><strong>Data Integrity and Validation:</strong> One of the core principles of VRMS is ensuring data integrity.</p>
            <p><strong>Secure Access:</strong> As an administrator, you have access to all areas of the system, but security is paramount.</p>
            <p><strong>Role-Based Actions:</strong> The admin panel is equipped with role-based functionality.</p>
            <p><strong>Advanced Search and Filter Options:</strong> The admin panel provides advanced search functionality, allowing you to search for users or vehicles based on various criteria such as name, email, mobile number, vehicle registration number, or service history.</p>
            <p><strong>Comprehensive Reporting:</strong> In addition to managing user and vehicle data, the VRMS Admin Panel includes a reporting feature that provides insights into the system's overall performance.</p>
            <p><strong>User-Friendly Interface:</strong> Despite its advanced features, the VRMS Admin Panel is designed to be intuitive and easy to navigate.</p>
            <p><strong>Data Backup and Recovery:</strong> The VRMS Admin Panel also includes data backup functionality to ensure that no information is lost in the event of a system failure.</p>
        </div>
        <div class="box-container">
            <img src="photos/ee.png" alt="VRMS Image"> <!-- Replace with your image URL -->
        </div>
    </div>
    
    <h2>Our Specialties</h2>
    <div class="holder">
        <!-- First container for the image -->
        <div class="holder-container">
            <img src="photos/3.png" alt="Image Description" width="250" height="250">
        </div>

        <!-- Second container for the bulleted points -->
        <div class="points-container">
            <ul>
                <li>Detailed descriptions of the latest scooter models, including engine type, power output, mileage, and available colors.</li>
                <li>Option to book scooter servicing or repairs online, including regular maintenance schedules and emergency repairs.</li>
                <li>Provides a feature to compare prices of different scooter models, including on-road pricing, loan options, and offers.</li>
                <li>Allows users to find authorized scooter dealerships or service centers near their location with map integration.</li>
            </ul>
        </div>
    </div>
    
    <div class="holder">
        <!-- First container for the image -->
        <div class="holder-container">
        <img src="photos/SS.png" alt="Image Description" width="250" height="250">
        </div>

        <!-- Second container for the bulleted points -->
        <div class="points-container">
            <ul>
                <li>Suspension Kits: High-performance suspension systems designed for off-road use, including lift kits and shock absorbers.</li>
                <li>All-Terrain Tires: Durable tires designed for various terrains, including mud, rocks, and sand, with different tread patterns.</li>
                <li>Skid Plates: Protective plates that shield the vehicle's undercarriage from rocks and obstacles during off-road adventures.</li>
                <li>LED Light Bars: High-intensity LED light bars for improved visibility during nighttime off-roading or low-light conditions.</li>
            </ul>
        </div>
    </div>
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
                <h3 class="footer-heading">Resources</h3>
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