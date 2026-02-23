<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - VRMS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: #FFFDF2;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #FF5733;
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        .content-section {
            margin-bottom: 40px;
        }

        p {
            color: #555;
            font-size: 1.1em;
            line-height: 1.8;
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

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1.1em;
        }

        textarea {
            resize: vertical;
            height: 150px;
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
        }

        .btn-submit:hover {
            background-color: #e94c2e;
            transform: scale(1.05);
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
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <a href="home123.php">Home Page</a>
  </div>

</body>
<body>

<div class="container">
    <h1>Contact Us</h1>

    <div class="content-section">
        <p>If you have any questions, feedback, or need support, feel free to reach out to us using the contact form below. Our team is here to assist you with any inquiries regarding the <span class="highlight">Vehicle Record Management System (VRMS)</span>.</p>
        <p>We strive to provide exceptional service and will get back to you as soon as possible. Whether you need help with technical issues, have questions about the system’s features, or want to suggest improvements, we’re always happy to hear from you!</p>
    </div>

    <!-- Contact Form -->
    <form action="process_contact.php" method="POST">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject of your message" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write your message here" required></textarea>
        </div>

        <button type="submit" class="btn-submit">Send Message</button>
    </form>

    <!-- Contact Details -->
    <div class="contact-details">
        <h3>Contact Information</h3>
        <p><strong>Email:</strong> <a href="mailto:bramha@gmail.com">bramha@gmail.com</a></p>
        <p><strong>Phone:</strong> +91 9999999999</p>
        <p><strong>Address:</strong> 1234 VRMS Street, Kolhapur, India</p>
    </div>
</div>

</body>
</html>
