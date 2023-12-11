<?php
session_start();

// Hardcoded user credentials (Replace these with your desired values)
$validUserEmail = 'user@email.com';
$validPassword = '1';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $useremail = $_POST['useremail'];
    $password = $_POST['password'];

    if ($useremail == $validUserEmail && $password == $validPassword) {
        // Valid credentials, redirect to index.php or any other desired location
        header("location: index.php");
        exit();
    } else {
        // Invalid credentials, display error message
        $error_message = "Wrong email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body {
            font-family: 'Assistant', sans-serif;
            margin: 0;
            padding: 0;
            background: #f3f3f3;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #login-block {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-box {
            text-align: center;
        }

        p {
            font-size: 24px;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .user-box {
            position: relative;
            margin-bottom: 25px;
        }

        .input {
            width: 100%;
            padding: 10px 0;
            border: none;
            outline: none;
            border-bottom: 1px solid #333;
        }

        label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            pointer-events: none;
            transition: 0.5s;
        }

        .input:focus ~ label,
        .input:valid ~ label {
            top: -20px;
            font-size: 14px;
            color: #cc8e35;
        }

        .custom-submit {
            display: inline-block;
            background-color: #cc8e35;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-right: 10px;
        }

        .custom-submit:hover {
            background-color: #af7223;
        }

        .gmail-button {
            display: inline-block;
            margin-top: 10px;
        }

        .gmail-button a {
            display: block;
        }

        .gmail-button img {
            height: 30px;
            width: auto;
            cursor: pointer;
        }

        #error_notif {
            color: #cc8e35;
            font-size: 16px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="login-block">
        <form method="POST" action="" name="login">
            <div class="input-group">
                <div class="login-box">
                    <p>Welcome to Cafe Namon!</p>
                    <div class="user-box">
                        <input autocomplete="off" class="input" required name="useremail" placeholder="" />
                        <label>Email</label>
                    </div>
                    <div class="user-box">
                        <input type="password" class="input" required name="password" placeholder="" />
                        <label>Password</label>
                    </div>
                    <span>
                        <input type="submit" name="submit" value="Login" class="custom-submit" />
                    </span>
                </div>
            </div>
        </form>

        <?php
        // Display error message if login fails
        if (isset($error_message)) {
            echo "<div id='error_notif'>$error_message</div>";
        }
        ?>

        <div class="gmail-button">
            <a href="login-with-google.php">
                <img src="gmail.png" alt="Gmail Logo">
            </a>
        </div>
    </div>
</body>
</html>