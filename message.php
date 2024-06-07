<?php
session_start();
include("dbconn.php");

if (isset($_POST['delete'])) {
    $sn = $_POST['sn'];
    $sql = "DELETE FROM contact_message WHERE sn = '$sn'";
    $qry = $conn->query($sql);
    if ($qry) {
        header("Location: message.php");
    } else {
        echo "Error deleting message: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of accounts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            text-decoration: underline;
        }

        .back-button {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .delete-button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        .delete-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <a href="adminhome.php" class="back-button">Back</a>
    <h1>Messages from customers</h1>
    <table class='grid' cellpadding="7" cellspacing="2">
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Delete</th>
        </tr>
        <?php
        include("dbconn.php");
        $sql = "SELECT * FROM contact_message";
        $qry = $conn->query($sql);
        if ($qry->num_rows > 0) {
            $cnt = 0;
            while ($row = $qry->fetch_array()) {
                ?>
                <tr valign="top" <?php echo ($cnt % 2 == 0) ? 'class="evenrow"' : 'class="oddrow"'; ?>>
                    <td><?php echo $cnt + 1; ?></td>
                    <td><?php echo strtoupper($row['name']); ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="sn" value="<?php echo $row['sn']; ?>">
                            <button type="submit" name="delete" class="delete-button">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
                $cnt++;
            }
        } else {
            ?>
            <tr>
                <td colspan="5" class="fmsg"><?php echo "Record not found"; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
