<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        header {
            background-color: rgb(255, 255, 255);
            padding: 10px;
            text-align: center;
        }
        .logo-container {
            display: flex;
            justify-content: center; 
            align-items: center;
        }
        .logoo {
            width: 60px;
            height: 60px;
            margin-right: 10px;
        }
        .company-name {
            font-family: Arial, sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #333; 
            text-transform: uppercase; 
            letter-spacing: 2px;
        }
        .login-form {
            padding: 20px; 
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 10px; 
            background-color: rgba(255, 255, 255, 0.8); 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        .login-form input[type="number"],
        .login-form input[type="password"],
        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .login-form input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-form input[type="submit"]:hover {
            background-color: #000000;
        }
        .back-box {
            margin-top: 20px;
            text-align: center;
        }
        .back-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .back-btn:hover {
            background-color: #0056b3;
        }
        
        .success {
            color: green;
            text-align: center;
            margin-top: 10px;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
        .welcome-message {
            text-align: center;
            margin-bottom: 20px;
            background-color: #CEFFE5; 
            padding: 5px; 
        }

        .welcome-message p {
            font-size: 18px;
            font-family: Arial, sans-serif;
            font-weight: bold;
            color: black;   
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        a {
            text-decoration: none;
        }
       body{
        background-color: #DCC5D9;
       }
        
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="loogoo.png" alt="Logoo" class="logoo">
            <span class="company-name"><a href="indexhelp.php">JR-Cooperatives</a></span>
        </div>
        <hr>
    </header>
    <div class="welcome-message">
            <p>Welcome Back!</p>
        </div>
    <div class="container">
        <form method="post" class="login-form">
            <input type="number" name="bnum" placeholder="Account Number" required autocomplete="off"><br>
            <input type="password" name="password" placeholder="Password" required autocomplete="off"><br>
            <input type="submit" name="submit" value="Login">
            </form>
        <?php
        if(isset($_POST['submit'])) {
            $conn = mysqli_connect("localhost", "root", "", "bank_data");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $bnum = $_POST['bnum'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM listacc WHERE bnum = '$bnum'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                if ($row['password'] == $password) {
                    if ($row['status'] == 'n') {
                        echo "<p class='error'>ACCOUNT IS NOT ACTIVATED! Please contact the nearest branch</p>";
                    } else {
                        session_start();
                        $_SESSION['username'] = $row['name'];
                        $_SESSION['banknum'] = $row['bnum'];
                        header("Location: home.php");
                        exit(); // Add exit after header redirect
                    }
                } else {
                    echo "<p class='error'>Incorrect password</p>";
                }
            } else {
                echo "<p class='error'>Account not found</p>";
            }

            mysqli_close($conn);
        }
        ?>
        <div class="back-box">
            <a href="indexhelp.php" class="back-btn">Back</a>
        </div>
    </div>
    <hr>
    <p class="ppp">&copy; 2024 All-Cooperative Internet Banking</p>
</body>
</html>