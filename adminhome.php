<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="adminhomestyle.css">
</head>
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
        .logout-container {
            margin-left: auto;
        }
        .logout-container a {
            text-decoration: none;
            color: black;
            font-size: 20px;
            font-weight: bold;
            transition: color 0.3s ease;
            background-color: #CEFFE5;
            padding: 10px;
        }
        .logout-container a:hover {
            color: white;
            background-color: black;
        }
        nav a{
            display: inline-block;
            background-color: #CEFFE5;
            color: black;
            padding: 15px 182px;
            text-decoration: none;
            font-family: Arial;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            border-right: 100px;
            border-color: black;
            text-align: center;
            vertical-align: bottom;
        }
        nav a:hover{
            background-color: orange;
            color: white;
        }
        .abc{
            height: 450px;
            width: 600;
        }
    </style>
<body>
<header>
    <div class="logo-container">
        <img src="loogoo.png" alt="Logoo" class="logoo">
        <span class="company-name">JR-Cooperatives</span>
    </div>
    <div class="logout-container">
        <a href="indexhelp.php" class="index-container">LogOut</a>
    </div>
</header>
    <hr>
    <br>

    <nav>
        <a href="#dashboard">DASHBOARD</a>
        <a href="listacc.php">ACCOUNT INFORMATIONS</a>
        <a href="message.php">MESSAGES</a>
    </nav>
    <hr>
    <section id="dashboard">
        <img src="adminshome.jpg" class="abc">
   
</body>
</html>
