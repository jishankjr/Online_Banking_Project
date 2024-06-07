<?php
include("dbconn.php");
if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $bnum = $_POST['bnum'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $pass = $_POST['password'];
        $status = 'n';
        $sql = "INSERT INTO listacc(name, address, bnum,  mobile, email, dob, gender, password, status) VALUES('$name', 
        '$address', '$bnum','$mobile',  '$email' ,'$dob', '$gender', '$pass', '$status')";
        $qry = mysqli_query($conn, $sql);
        if($qry) {
            echo "";
        } else {
            echo "NOT INSERTED";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        .body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #DCC5D9;
}

.container {
    display: flex;
}

.left-panel {
    width: 58%;
    text-align: center;
}

.right-panel {
    width: 40%;
}
.ppp {
    text-align: center;
    background-color: #0099cc; 
    color: white;
    padding: 20px;
    bottom: 0;
    width: 100%;
}
.form-box {
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border: 1px solid #000; 
}

.image {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form {
    margin-bottom: 20px;
}

.form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.radio-group {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.radio-group label {
    margin-right: 10px;
}

.button-group {
    text-align: center;
}

.button-group input[type="submit"],
.button-group input[type="reset"] {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button-group input[type="submit"]:hover,
.button-group input[type="reset"]:hover {
    background-color: #0056b3;
}

.back-btn {
    text-align: center;
    margin-top: 10px;
}

.back-btn a {
    text-decoration: none;
    color: #007bff;
    transition: color 0.3s;
}

.back-btn a:hover {
    color: #0056b3;
}
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
            font-size: 24px;
            font-weight: bold;
        }
a {
            text-decoration: none;
            color: black;
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

    <div class="container">
        <div class="left-panel">
            <img src="createacc.png" alt="Image" class="image">
        </div>
        <div class="right-panel">
           
        
            <div class="form-box">
                <h1>Create Account</h1>
                <form method="post" class="form">
                    <input type="text" name="name" required placeholder="Name" autocomplete="off">
                    <input type="text" name="address" required placeholder="Address" autocomplete="off"> 
                    <input type="text" name="bnum" required placeholder="Account Number" autocomplete="off">
                    <input type="text" name="mobile" required placeholder="Mobile" autocomplete="off">
                    <input type="email" name="email" required placeholder="Email" autocomplete="off">
                    <input type="date" name="dob" required>
                    <div class="radio-group">
                        <label><input type="radio" name="gender" value="male" checked> Male</label>
                        <label><input type="radio" name="gender" value="female"> Female</label>
                        <label><input type="radio" name="gender" value="others"> Others</label>
                    </div>
                    <input type="password" name="password" required placeholder="Password" autocomplete="off">
                    <div class="button-group">
                        <input type="submit" name="submit" value="Create Account">
                        <input type="reset" name="reset" value="Clear">
                    </div>
                </form>
                <button class="back-btn">
                    <a href="indexhelp.php?pg=indexhelp">Back</a>
                </button>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
<hr>
<p class="ppp">
&copy; 2024 All-Cooperative Internet Banking
</p>
</body>
</html>






















