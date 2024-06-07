<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: userlogin.php");
    exit();
}

if (!isset($_SESSION['banknum'])) {
    header("Location: userlogin.php");
    exit();
}

$conn = mysqli_connect('localhost','root','','bank_data') or die("Not Connected");

function updateBalance($conn, $accountNumber, $amount) {
    $sql = "UPDATE listacc SET balance = balance + $amount WHERE bnum = '$accountNumber'";
    return mysqli_query($conn, $sql);
}

if(isset($_POST['submit_send_money'])){
    $sent_to = $_POST['sent_to'];
    $amount = $_POST['amount'];
    $purpose = $_POST['purpose'];
    $sql = "INSERT INTO transaction (sent_to, samount, purpose) VALUES ('$sent_to', '$amount', '$purpose')";
    $qry = mysqli_query($conn,$sql);
    if($qry){
        $sender_account_number = $_SESSION['banknum'];
        updateBalance($conn, $sender_account_number, -$amount);
        updateBalance($conn, $sent_to, $amount);
        echo "";
    } else {
        echo "Error: " . $conn->error;
    }
}

if(isset($_POST['submit_load_money'])){
    $receivedfrom = $_POST['receivedfrom'];
    $amountt = $_POST['amountt'];
    
    $sql = "INSERT INTO transaction (receivedfrom, ramount, purpose) VALUES ('$receivedfrom', '$amountt', 'Capital')";
    $qry = mysqli_query($conn,$sql);
    if($qry){
        $receiver_account_number = $_SESSION['banknum'];
        updateBalance($conn, $receiver_account_number, $amountt);
        
        updateBalance($conn, $receiver_account_number, $amountt);
        echo "";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Internet Banking</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
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
        .welcome-message {
            font-size: 24px; 
            font-weight: bold; 
        }
        nav {
            text-align: center;
            margin-bottom: 20px;
        }

        nav a {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            margin: 0 5px;
            text-decoration: none;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #0056b3;
        }
        main {
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        section {
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 10px;
        }
        .information {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .information ul {
            list-style-type: none;
            padding: 0;
        }

        .information li {
            margin-bottom: 10px;
        }

        .information li span {
            font-weight: bold;
            margin-right: 5px;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
        }

        .form {
            flex: 1;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .left-form {
            margin-right: 10px;
        }

        .right-form {
            margin-left: 10px;
        }

        .form h3 {
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form label {
            display: block;
            margin-bottom: 5px;
        }

        .form input[type="number"],
        .form input[type="text"] {
            width: calc(100% - 22px); 
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        footer {
            text-align: center;
            background-color: #0099cc;
            color: white;
            padding: 20px;
            border-radius: 5px;
        }
        .balance-box {
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 20px;
}

.balance-box h3 {
    margin-bottom: 10px;
}

.balance-details p {
    margin-bottom: 5px;
}

    </style>
</head>
<body>
<header>
    <div class="logo-container">
        <img src="loogoo.png" alt="Logoo" class="logoo">
        <span class="company-name">JR-Cooperatives</span>
    </div>
     <div class="welcome-message">
        <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
    </div>
</header>
<br><hr><br>
    <nav>
        <a href="#dashboard">Dashboard</a>
        <a href="#yourinformation">Your Information</a>
        <a href="#make-payment">Make Payment</a>
        <a href="viewtransaction.php">View Transactions</a>
        <a href="indexhelp.php">Log out</a>
    </nav><hr><br>
    <section id="dashboard">
    <h3>Dashboard</h3>
    <div class="balance-box">
        <div class="balance-details">
            <?php
            $bnum = $_SESSION['banknum'];
            $balance_query = mysqli_query($conn, "SELECT balance FROM listacc WHERE bnum = '$bnum'");
            $balance_row = mysqli_fetch_assoc($balance_query);
            $balance = $balance_row['balance'];
            ?>
            <p>Balance: NPR. <?php echo $balance; ?></p>
        </div>
    </div>
</section>

    <section id="yourinformation">
        <h2>Your Information</h2>
        <div class="information">
            <?php
            require("dbconn.php");
            $bnum = $_SESSION['banknum']; 
            $sql = "SELECT * FROM listacc WHERE bnum='$bnum'";
            $qry = $conn->query($sql);
            if ($qry) {
                if ($qry->num_rows > 0) {
                    $row = $qry->fetch_assoc();
                    ?>
                    <ul>
                        <li><span>Name:</span> <?php echo $row["name"]; ?></li>
                        <li><span>Address:</span> <?php echo $row["address"]; ?></li>
                        <li><span>Account Number:</span> <?php echo $row["bnum"]; ?></li>
                        <li><span>Mobile Number:</span> <?php echo $row["mobile"]; ?></li>
                        <li><span>Email:</span> <?php echo $row["email"]; ?></li>
                        <li><span>DOB:</span> <?php echo $row["dob"]; ?></li>
                        <li><span>Gender:</span> <?php echo $row["gender"]; ?></li>
                        <li><span>Account type: Saving</li>
                    </ul>
                    <?php
                } else {
                    echo "No information found.";
                }
            } else {
                echo "Error executing query: " . $conn->error;
            }
            ?>
        </div>
    </section>

    <section id="make-payment">
    <h2>Make Payment</h2>
    <div class="form-container">
        <div class="form left-form">
            <h3>Load Money</h3>
            
            <form method="post">
                <div class="form-group">
                    <label for="receivedfrom">Bank Account Number:</label>
                    <input type="number" id="receivedfrom" name="receivedfrom" required placeholder="Bank account number" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="amountt">Amount:</label>
                    <input type="number" id="amountt" name="amountt" required placeholder="Amount" autocomplete="off">
                </div>
                <input type="submit" name="submit_load_money" value="Proceed">
            </form>
        </div>
        <div class="form right-form">
            <h3>Send Money</h3>
            
            <form method="post">
                <div class="form-group">
                    <label for="sent_to">Receiver's Mobile Number:</label>
                    <input type="number" id="sent_to" name="sent_to" required placeholder="Receiver's mobile number" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="amount">Amount:</label>
                    <input type="number" id="amount" name="amount" required placeholder="Amount" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="purpose">Purpose:</label>
                    <input type="text" id="purpose" name="purpose" required placeholder="Purpose" autocomplete="off">
                </div>
                <input type="submit" name="submit_send_money" value="Proceed">
            </form>
        </div>
    </div>
</section>

    </main>
    <footer>
        &copy; 2024 All-Cooperative Internet Banking
    </footer>
</body>
</html>
