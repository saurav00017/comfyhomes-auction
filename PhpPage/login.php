<?php
include("database.php");
session_start(); // Start the session

// Initialize variables
$message = "";

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data safely using POST
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize inputs to prevent SQL injection
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    // Query the database for the user
    $query = "SELECT username, PASSWORD FROM users WHERE username ='$username'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify the password using password_verify
        if ($password == $user["PASSWORD"]) {
            // Password is correct, start the session
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;

            // Redirect to the home page
            header("Location: Home.php");
            exit();
        } else {
            // Invalid password
            $message = "Invalid Username or Password";
        }
    } else {
        // User not found
        $message = "Invalid Username or Password";
    }

    // Free result set and close the database connection
    mysqli_free_result($result);
    mysqli_close($connection);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Sign Up - D0NU55Ef</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #0d0d0d;
            color: #00ff00; /* Classic hacker green */
            font-family: 'VT323', monospace; /* Retro terminal font */
            margin: 0;
        }

        .login {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 3px solid #00ff00;
            width: 90%;
            max-width: 400px;
            height: auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: #1a1a1a;
            box-shadow: 0 0 15px #00ff00;
        }

        b {
            color: #00ff00;
            font-size: 32px;
            margin-bottom: 20px;
            text-shadow: 0 0 10px #00ff00;
        }

        input {
            margin-bottom: 15px;
            padding: 10px;
            width: 94%;
            background-color: #000;
            color: #00ff00;
            border: 2px solid #00ff00;
            border-radius: 5px;
            font-size: 18px;
        }

        input::placeholder {
            color: #00ff00;
        }

        button {
            padding: 10px;
            background-color: #0d0d0d;
            color: #00ff00;
            width: 100%;
            font-size: 18px;
            border: 2px solid #00ff00;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 5px;
        }

        button:hover {
            background-color: #00ff00;
            color: #0d0d0d;
        }

        a {
            color: #ff0000;
            text-decoration: none;
            margin-top: 10px;
            transition: color 0.3s;
        }

        a:hover {
            color: #ffffff;
            text-shadow: 0 0 5px #ff0000;
        }

        /* Error message styling */
        .error-message {
            color: red;
            margin-bottom: 15px;
        }

        /* Responsive styles for smaller screens */
        @media (max-width: 480px) {
            .login {
                width: 95%;
                padding: 15px;
            }
            b {
                font-size: 24px;
            }
            input, button {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="login">
        <b>D0NU55EF - Login</b>
        
        <!-- Display error message if exists -->
        <?php if (!empty($message)): ?>
            <div class="error-message"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit">Log In</button>
            <br>
            <a href="#">Sign Up</a> | <a href="#">Reset Password</a>
        </form>
    </div>
</body>
</html>
