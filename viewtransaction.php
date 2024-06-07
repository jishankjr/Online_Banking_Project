<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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

        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }

        nav a:hover {
            background-color: #555;
        }

        main {
            padding: 20px;
        }

        section#transaction-history {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tbody tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<header>
    <div class="logo-container">
        <img src="loogoo.png" alt="Logoo" class="logoo">
        <span class="company-name"><a href="indexhelp.php">JR-Cooperatives</a></span>
    </div>
</header>
<hr>
<nav>
    <a href="viewtransaction.php">View Transactions</a>
    <a href="home.php">Go Back</a>
</nav>
<hr>
<main>
<section id="transaction-history">
        <h2>Transaction History</h2>
        <?php
        include("dbconn.php");

        if (isset($_SESSION["banknum"])) {
            $banknum = $_SESSION["banknum"];
            $sql = "SELECT purpose, ramount, samount
                    FROM transaction";
            $qry = $conn->query($sql);
            if ($qry->num_rows > 0) {
                $cnt = 0;
                $totalDebit = 0;
                $totalCredit = 0;
                
                echo "<table>";
                echo "<thead>";
                echo "<tr><th>SN</th><th>Purpose</th><th>Debit</th><th>Credit</th></tr>";
                echo "</thead>";
                echo "<tbody>";

                while ($row = $qry->fetch_array()) {
                    $cnt++; 
                    echo "<tr>";
                    echo "<td>$cnt</td>"; 
                    echo "<td>{$row["purpose"]}</td>";
                    echo "<td>{$row["samount"]}</td>";
                    echo "<td>{$row["ramount"]}</td>";
                    echo "</tr>";
                    
                    $totalDebit += (float)$row["samount"]; 
                    $totalCredit += (float)$row["ramount"]; 
                    $net = $totalCredit - $totalDebit;
                }

                echo "</tbody>";
                echo "</table>";

                echo "<p>Total Debit: $totalDebit</p>";
                echo "<p>Total Credit: $totalCredit</p>";
                echo "<p>Net: $net</p>";
            } else {
                echo "<p>No transactions found.</p>";
            }
        } else {
            echo "<p>No user logged in.</p>";
        }

        $conn->close();
        ?>
    </section>
</main>
</body>
</html>