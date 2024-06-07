<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JR-Cooperatives - Internet Banking</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #D5CACA;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #ffffff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .logo-container {
            display: flex;
            align-items: center;
        }
        .logoo {
            width: 50px;
            height: 50px;
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
        .ibank-container {
            margin-left: auto;
        }
        .ibank-container a {
            text-decoration: none;
            color: #009688;
            font-size: 20px;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .ibank-container a:hover {
            color: #00796b;
        }
        .oknknn{
            background-color: white;
        }
        .okn{
            font-family: arial;
            background-color: white;
            color: black;
            padding: 10px 50px;
        }
        .jumbotron {
            background-image: url('bank-building.jpg');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }
        .jumbotron h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            background-color: rgba(0, 0, 0, 0.7); 
            padding: 10px 20px;
            border-radius: 10px;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .feature {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        .feature h2 {
            color: #009688;
            margin-bottom: 20px;
        }
        .feature ul {
            list-style-type: none;
            padding: 0;
        }
        .feature li {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
            font-size: 1.2rem;
        }
        .feature li:last-child {
            border-bottom: none;
        }
        .feature li::before {
            content: "\2022"; 
            color: #009688;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
        footer {
            text-align: center;
            background-color: #009688;
            color: white;
            padding: 20px 0px;
            width: 100%;
        }
        .btn-primary{
            text-decoration: none;
            background-color: white;
            color: black;
            padding: 5px 5px;

        }
.contact-container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.contact-container h2 {
    color: #009688;
    margin-bottom: 20px;
}

.contact-container p {
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.contact-box {
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 20px;
}

.contact-box label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

.contact-box input[type="text"],
.contact-box input[type="email"],
.contact-box textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.contact-box textarea {
    height: 100px;
}

.contact-box button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #009688;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact-box button:hover {
    background-color: #00796b;
}

        
    </style>
</head>
<body>
<header>
    <div class="logo-container">
        <img src="loogoo.png" alt="Logoo" class="logoo">
        <span class="company-name">JR-Cooperatives</span>
    </div>
    <div class="ibank-container">
        <a href="indexhelp.php" class="index-container">iBank</a>
    </div>
</header>

<div class="jumbotron">
    <div class="container">
        <h1 class="oknknn">Welcome to JR-Cooperatives Internet Banking</h1>
        <p class="okn">Experience convenient and secure online banking services.</p>
        <bottom><a href="create.php" class="btn-primary">Get Started</a></bottom>
    </div>
</div>

<div class="container">
    <div class="feature">
        <h2>About Us</h2>
        <p>
            Welcome to JR-Cooperatives, a leading financial institution dedicated to serving the community with integrity and excellence. Established on February 6, 2063 BS, our bank has been committed to providing reliable banking services to our valued customers for over two decades.
        </p>
         <p>
            At Jishank Cooperative Bank, we understand the diverse needs of our customers and strive to exceed their expectations by offering a comprehensive range of banking services. Some of the key functions of our bank include:
            <br><br>
            1. Deposit Accounts: We offer a variety of deposit accounts, including savings accounts, current accounts, and fixed deposit accounts, to help individuals and businesses manage their funds securely.
            <br><br>
            2. Loan Services: Our bank provides various loan products tailored to meet the financial needs of our customers, including personal loans, business loans, home loans, and agricultural loans.
            <br><br>
            3. Online Banking: With our user-friendly internet banking platform, customers can conveniently manage their accounts, transfer funds, pay bills, and access a range of banking services anytime, anywhere.
            <br><br>
            4. Mobile Banking: Our mobile banking app enables customers to perform banking transactions on their smartphones, offering flexibility and convenience on the go.
            <br><br>
            5. Financial Advisory: Our experienced team of financial advisors is dedicated to providing personalized guidance and assistance to customers, helping them make informed financial decisions and achieve their goals.
            <br><br>
            6. Community Engagement: As a socially responsible institution, we actively participate in community development initiatives and support various social causes to make a positive impact on society.
            <br><br>
            At Jishank Cooperative Bank, we are committed to upholding the highest standards of integrity, transparency, and customer satisfaction. We continuously strive to innovate and evolve to better serve the evolving needs of our customers and communities.
            <br><br>
            Thank you for choosing Jishank Cooperative Bank as your trusted banking partner. We look forward to serving you and building a prosperous future together.<br>
        </p>
    </div>

    <div class="feature">
        <h2>Key Features</h2>
        <ul>
            <li>View Account Information</li>
            <li>Transfer Funds</li>
            <li>Pay Bills Online</li>
            <li>Mobile Banking</li>
            <li>Advanced Security</li>
        </ul>
    </div>

    <hr>
    <div class="contact-container">
    <h2>Contact Us</h2>
    <p>If you have any inquiries or require assistance, please feel free to contact us using the form below:</p>
    <div class="contact-box">
        <form method="post" autocomplete="off">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit" name="send_message">Send Message</button>
        </form>
    </div>
</div>
<?php
   require("dbconn.php");
if (isset($_POST['send_message'])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact_message (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if($conn->query($sql) === TRUE)
        {
            echo "INSERTED";
        } else {
            echo "Failed to send money.";
        }
}
?>

<footer>
    &copy; 2024 JR-Cooperatives Internet Banking. All rights reserved.
</footer>
</body>
</html>
