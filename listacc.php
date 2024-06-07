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
        .back-button a{
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #0056b3;
            text-decoration: none;
        }
    </style>
</head>
<body>
<a href="adminhome.php" class="back-button">Back</a>
    <h1>ACCOUNT HOLDER INFORMATION</h1>
    <table class='grid' cellpadding="7" cellspacing="2">
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Address</th>
            <th>Bank number</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Balance</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
include("dbconn.php");
$sql = "SELECT * FROM listacc ORDER BY status='n' DESC";
$qry = $conn->query($sql);
if ($qry->num_rows > 0) {
    $cnt = 0;
    while ($row = $qry->fetch_array()) {
        ?>
        <tr valign="top" <?php echo ($cnt % 2 == 0) ? 'class="evenrow"' : 'class="oddrow"'; ?>>
            <td><?php echo $cnt + 1; ?></td>
            <td><?php echo strtoupper($row['name']); ?></td>
            <td><?php echo strtoupper($row['address']); ?></td>
            <td><?php echo $row['bnum']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['balance']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td align="center"><a href="editperson.php?bnum=<?php echo $row['bnum']; ?>&act=edit" id="edit">Edit</a></td>
            <td align="center"><a href="personDelete.php?bnum=<?php echo $row['bnum']; ?>"
                                   onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
        <?php
        $cnt++;
    }
} else {
    ?>
    <tr>
        <td colspan="11" class="fmsg"><?php echo "Record not found"; ?></td>
    </tr>
    <?php
}
?>
    </table>
</body>
</html>
