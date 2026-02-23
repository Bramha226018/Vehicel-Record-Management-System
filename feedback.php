<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            background-image: url('https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?cs=srgb&dl=pexels-tirachard-kumtanom-414171.jpg&fm=jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .feedback-container {
            background-color: white;
            width: 950px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: box-shadow 0.3s ease-in-out;
        }

        .feedback-container:hover {
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
        }

        h2 {
            color: #333;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
            text-align: left;
        }

        .question-block {
            margin-bottom: 25px;
        }

        input[type="radio"] {
            margin-right: 8px;
        }

        .submit-btn {
            width: 100%;
            background-color: orange;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #e69500;
        }

        .emoji-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            font-size: 25px;
        }

        .emoji {
            cursor: pointer;
            transition: transform 0.2s;
        }

        .emoji:hover {
            transform: scale(1.3);
        }

        .emoji span {
            font-size: 30px;
        }

        .question-label {
            font-size: 16px;
            color: #555;
        
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
        function handleFeedbackSubmission(event) {
            event.preventDefault(); // Prevents the form from submitting

            // Display thank you message
            alert("Thank you for your feedback!");

            // Redirect to home.php after 1 second
            setTimeout(function() {
                window.location.href = "home.php";
            }, 1000);
        }
    </script>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <a href="home123.php">Home Page</a>
  </div>

</body><br><br>
<body>
    <div class="feedback-container">
        <h2>Feedback Form</h2>
        <form onsubmit="handleFeedbackSubmission(event)">
            <!-- Question 1 -->
            <div class="question-block">
                <label for="q1">1. How would you rate our service?</label>
                <div class="emoji-row">
                    <label class="emoji">
                        <input type="radio" name="q1" value="1"> 😟
                        <span class="question-label">Poor</span>
                    </label>
                    <label class="emoji">
                        <input type="radio" name="q1" value="2"> 😐
                        <span class="question-label">Average</span>
                    </label>
                    <label class="emoji">
                        <input type="radio" name="q1" value="3"> 🙂
                        <span class="question-label">Good</span>
                    </label>
                    <label class="emoji">
                        <input type="radio" name="q1" value="4"> 😃
                        <span class="question-label">Very Good</span>
                    </label>
                    <label class="emoji">
                        <input type="radio" name="q1" value="5"> 😍
                        <span class="question-label">Excellent</span>
                    </label>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question-block">
                <label for="q2">2. How satisfied are you with the support team?</label>
                <div class="emoji-row">
                    <label class="emoji">
                        <input type="radio" name="q2" value="1"> 😟
                        <span class="question-label">Poor</span>
                    </label>
                    <label class="emoji">
                        <input type="radio" name="q2" value="2"> 😐
                        <span class="question-label">Average</span>
                    </label>
                    <label class="emoji">
                        <input type="radio" name="q2" value="3"> 🙂
                        <span class="question-label">Good</span>
                    </label>
                    <label class="emoji">
                        <input type="radio" name="q2" value="4"> 😃
                        <span class="question-label">Very Good</span>
                    </label>
                    <label class="emoji">
                        <input type="radio" name="q2" value="5"> 😍
                        <span class="question-label">Excellent</span>
                    </label>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question-block">
                <label for="q3">3. How do you feel about the overall experience?</label>
                <div class="emoji-row">
                    <label class="emoji">
                        <input type="radio" name="q3" value="1"> 😟
                        <span class="question-label">Bad</span>
                    </label>
                    <label class="emoji">
                        <input type="radio" name="q3" value="2"> 😐
                        <span class="question-label">Okay</span>
                    </label>
                    <label class="emoji">
                        <input type="radio" name="q3" value="3"> 🙂
                        <span class="question-label">Good</span>
                    </label>
                    <label class="emoji">
                        <input type="radio" name="q3" value="4"> 😃
                        <span class="question-label">Great</span>
                    </label>
                    <label class="emoji">
                        <input type="radio" name="q3" value="5"> 😍
                        <span class="question-label">Amazing</span>
                    </label>
                </div>
            </div>
            <!-- Submit button -->
            <button type="submit" class="submit-btn">Submit Feedback</button>
        </form>
    </div>
</body>
</html>
