<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio website for Charan, showcasing projects, education, achievements, and contact information.">
    <meta name="keywords" content="Portfolio, Web Design, Projects, Charan, Contact">
    <title>Charan's Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js">
    <link rel="stylesheet" href="stu.css">
    <style>
        /*GLOBAL*/
        :root {
            --bg-color: #ecf0f3;
            --color: #555;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
            background-color: var(--bg-color);
            font-family: Arial, sans-serif;
            color: var(--color);
        }

        .btn-parent label p::selection {
            background: transparent;
        }

        .background {
            width: 100%;
            background-color: var(--bg-color);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 50px 0;
        }

        .welcome-message {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .card {
            width: 370px;
            height: 500px;
            overflow: hidden;
            margin: 20px auto;
            border-radius: 20px;
            background-color: var(--bg-color);
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
        }

        .btn-parent {
            position: relative;
            width: 190px;
            height: 50px;
            background-color: rgba(255, 255, 255, 0.28);
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
            border: 5px solid #ffffff ;
            border-radius: 20px;
            margin: 10px auto;
            display: flex;
            overflow: hidden;
        }

        .btn {
            position: absolute;
            width: 95px;
            height: 50px;
            background: #fff;
            box-shadow: 8px 8px 8px #cbced1, -8px -8px 8px #cbced1;
            border-radius: 20px;
            top: -5px;
            transition: .5s;
            transition-timing-function: cubic-bezier(.89,-0.23,.11,1.38);
        }

        .login {
            flex-grow: 1;
            background-color: transparent;
            line-height: 40px;
            color: rgb(83, 83, 83);
            z-index: 9999;
            position: relative;
        }

        .login p {
            position: absolute;
            right: 25px;
        }

        .register {
            flex-grow: 1;
            text-align: center;
            line-height: 40px;
            color: rgb(83, 83, 83);
            background-color: transparent;
            z-index: 9999;
            position: relative;
        }

        .register p {
            position: absolute;
            right: 20px;
        }

        #login {
            display: none;
        }

        #register:checked ~ .btn {
            margin-left: 95px;
        }

        #register {
            display: none;
        }

        .parent_ {
            height: 100%;
            width: 200%;
            position: relative;
            left: 0;
            display: flex;
            transition: .6s;
            justify-content: space-between;
        }

        .parent_.moveRegister {
            left: -100%;
        }

        .form {
            height: 100%;
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card form {
            width: 280px;
        }

        .card form input.input-field {
            width: 100%;
            color: var(--color);
            height: 50px;
            border-radius: 5px;
            margin: 10px auto;
            background-color: transparent;
            border-top: none;
            border-bottom: 2px solid white;
            border-left: none;
            border-right: none;
            outline: none;
            font-size: 18px;
            padding: 20px 10px 20px 5px;
        }

        .card form input.input-field:focus {
            border-bottom: 2px solid rgb(155, 155, 155);
        }

        .card form a {
            text-decoration: none;
            font-size: 12px;
            margin-left: 30px;
            color: rgb(170, 174, 175);
        }

        .card form a:hover {
            text-decoration: underline;
        }

        .card form label {
            display: inline-block;
            margin-left: -5px;
            font-size: 12px;
            margin-right: 20px;
        }

        .card form input[type="checkbox"] {
            display: inline-block;
            width: 2px;
            margin-right: 15px;
        }

        .card form button[type="submit"] {
            width: 100%;
            height: 40px;
            margin-top: 20px;
            border-radius: 20px;
            outline: none;
            font-size: 16px;
            border: none;
            background-color: var(--color);
            color: white;
            cursor: pointer;
        }

        .card form button[type="submit"]:active {
            background-color: darken(var(--color), 10%);
        }

        .form.login-form, .form.register-form {
            position: relative;
            transition: opacity .6s;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="welcome-message">
            Hello, welcome to Charan's portfolio website!
        </div>
        <div class="card">
            <div class="btn-parent">
                <label for="login" class="login">
                    <p>Login</p>
                </label>
                <label for="register" class="register">
                    <p>Register</p>
                </label>
                <input type="radio" name="login-register" id="login" onclick="login()">
                <input type="radio" name="login-register" id="register" onclick="register()">
                <div class="btn"></div>
            </div>
            <div class="parent_">
                <div class="form login-form">
                    <form action="http://localhost/port.php" method="get">
                        <input type="text" name="username" required placeholder="Username" class="input-field">
                        <input type="password" name="password" required placeholder="Password" class="input-field">
                        <div class="parent2">
                            <label for="keep-me-signin"><input type="checkbox" name="keep-me-signin" id="keep-me-signin"> keep me signed in</label>
                            <a href="">Forgot your password?</a>
                        </div>
                        <button type="submit" name="login">Login</button>
                    </form>
                </div>
                <div class="form register-form">
                    <form action="" method="post">
                        <input type="text" name="username" required placeholder="Username" class="input-field">
                        <input type="email" name="email" required placeholder="Email" class="input-field">
                        <input type="password" name="password" required placeholder="Password" class="input-field">
                        <button type="submit" name="register">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "port";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['register'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            // Check if username or email already exists
            $check_sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $check_result = $conn->query($check_sql);

            if ($check_result->num_rows > 0) {
                echo "<script>alert('Username or email already exists. Please choose another.');</script>";
            } else {
                // Insert data into the database
                $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Registration successful!');</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }

        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    session_start();
                    $_SESSION['username'] = $username;
                    echo "<script>alert('Login successful!');</script>";
                    // Redirect to the portfolio page
                    echo "<script>window.location.href = 'portfolio.html';</script>";
                } else {
                    echo "<script>alert('Invalid password.');</script>";
                }
            } else {
                echo "<script>alert('Username not found.');</script>";
            }
        }
    }

    $conn->close();
    ?>

    <script>
        function login() {
            document.querySelector(".parent_").classList.remove("moveRegister");
        }

        function register() {
            document.querySelector(".parent_").classList.add("moveRegister");
        }
    </script>
</body>
</html>
