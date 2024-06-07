<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBank</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #DCC5D9;
            color: #333;
            font-family: Arial, sans-serif;
        }
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
        a {
            text-decoration: none;
            color: black;
        }
        .links {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 40px;
        }
        .box {
            text-align: center;
            border-radius: 10px;
            padding: 40px;
            margin: 20px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            flex-basis: calc(33.33% - 40px);
            max-width: 300px;
        }
        .box:hover {
            transform: translateY(-5px);
        }
        .icon {
            width: 200px;
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #0099cc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .button:hover {
            background-color: #007399;
        }
        .footer {
            background-color: #0099cc;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <div class="logo-container">
        <img src="loogoo.png" alt="Logoo" class="logoo">
        <span class="company-name"><a href="index.php">JR-Cooperatives</a></span>
    </div>
</header>

<section class="links">
    <div class="box">
        <img src="createe.png" alt="Create Account" class="icon">
        <h3>Create Account</h3>
        <p>Open a new account with us.</p>
        <a href="create.php" class="button">Get Started</a>
    </div>
    <div class="box">
        <img src="adminloginn.png" alt="Admin" class="icon">
        <h3>Admin Login</h3>
        <p>Access the admin portal.</p>
        <a href="adminlogin.php" class="button">Login Now</a>
    </div>
    <div class="box">
        <img src="userloginn.png" alt="User" class="icon">
        <h3>User Login</h3>
        <p>Login to your account.</p>
        <a href="userlogin.php" class="button">Login Now</a>
    </div>
</section>

<footer class="footer">
    &copy; 2024 All-Cooperative Internet Banking
</footer>
</body>
</html>
