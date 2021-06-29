<html>

<head>
    <title>BANK</title>
    <style>
    a {
        color: white;
        padding: 15px;
        font-size: 25px;
        text-decoration: none;
    }
    </style>
</head>
<body>
<nav style="background-color:#333;">
    <center>
        <a href="Program5.php">Create</a>
        <a href="deposit.php">Deposit</a>
        <a href="withdraw.php">Withdraw</a>
        <a href="#">Balance Enquiry</a>
    </center>
</nav>

 <form method="POST">
        <table border="1" cellpadding="20px" align="center">
            <tr>
                <th colspan="2" style="background-color:blue;color:white;">BALANCE ENQUIRY</th>
            </tr>
            <tr>
                <th>Account No</th>
                <td><input type="number" name="no" maxlength="10" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="SUBMIT" name="submit"></td>
            </tr>
        </table>
</form>
<?php
if(isset($_POST["submit"])){
    $mysql = new mysqli("localhost","root","","Assignment5");
    If(!$mysql) 
    die("error");
    
    $accno=$_POST['no'];
    
    $check="SELECT * FROM bank WHERE accno = '$accno'";
    $result = $mysql->query($check);
    $row=$result->fetch_array();
    if($row[0] > 1) {
        echo "Account Number: <b>$row[0]</b><br>";
        echo "Name: <b>$row[1]</b><br>";
        echo "Your Balance : <b>$row[4]</b><br>";
    }
    else
    {
            echo "Account Number does Not exist<br/>";
    }
    }

?>
</body>
</html>