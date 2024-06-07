<?php
session_start();
include("dbconn.php");

if (isset($_GET['act']) && $_GET['act'] == 'edit') {
    $bnum = $_GET['bnum'];
    $sql = "SELECT * FROM listacc WHERE bnum = '$bnum'";
    $qry = $conn->query($sql);
    $row = $qry->fetch_array();
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $bnum = $_POST['bnum'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $status = $_POST['status'];

    $sql = "UPDATE listacc SET name = '$name', address = '$address', mobile = '$mobile', email = '$email', dob = '$dob', gender = '$gender', password = '$password', status = '$status' WHERE bnum = '$bnum'";
    $qry = $conn->query($sql);

    if ($qry) {
        header("Location: listacc.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Person</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
        }

        table tr {
            margin-bottom: 10px;
        }

        table td {
            padding: 10px;
            vertical-align: top;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="password"],
        input[type="submit"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .back-button {
            width: calc(100% - 20px);
            box-sizing: border-box;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 8px 16px;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
            transition: background-color 0.3s;
            text-align: center;
        }

        .back-button:hover {
            background-color:  black;
            color: white;
        }
    </style>
</head>
<body>

    <form method="post" action="">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo $row['name']; ?>" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" value="<?php echo $row['address']; ?>" required></td>
            </tr>
            <tr>
                <td>Bank number:</td>
                <td><input type="text" name="bnum" value="<?php echo $row['bnum']; ?>" required></td>
            </tr>
            <tr>
                <td>Mobile:</td>
                <td><input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="<?php echo $row['email']; ?>" required></td>
            </tr>
            <tr>
                <td>DOB:</td>
                <td><input type="date" name="dob" value="<?php echo $row['dob']; ?>" required></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="Male" <?php if ($row['gender'] == 'Male') echo 'checked'; ?>> Male
                    <input type="radio" name="gender" value="Female" <?php if ($row['gender'] == 'Female') echo 'checked'; ?>> Female
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value="<?php echo $row['password']; ?>" required></td>
            </tr>
            <tr>
                <td>Status:</td>
                <td><input type="text" name="status" value="<?php echo $row['status']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="listacc.php" class="back-button">Back</a></td>
            </tr>
        </table>
    </form>
</body>
</html>