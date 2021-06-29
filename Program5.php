<html>

<head>
    <title>BANK TRANSACTION</title>
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
        <a href="#">Create</a>
        <a href="deposit.php">Deposit</a>
        <a href="withdraw.php">Withdraw</a>
        <a href="balance_enq.php">Balance Enquiry</a>
    </center>
</nav>

 <form method="POST">
        <table border="1" cellpadding="20px" align="center">
            <tr>
                <th colspan="2" style="background-color:blue;color:white;">Create your account</th>
            </tr>
            <tr>
                <th>Account No</th>
                <td><input type="number" name="no" maxlength="10" required></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><textarea name="address" required></textarea></td>
            </tr>
            <tr>
                <th>Account Type</th>
                <td><input type="radio" name="acc_type" value="Current account" required>Current account
                    <input type="radio" name="acc_type" value="Saving account">Saving account
                    <input type="radio" name="acc_type" value="Fixed deposit">Fixed deposit
                </td>
            </tr>
            <tr>
                <th>Balance</th>
                <td><input type="number" name="balance" required></td>
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
$name = $_POST['name'];
$address=$_POST['address'];
$acc_type=$_POST['acc_type'];
$balance=$_POST['balance'];

$check="SELECT * FROM bank WHERE accno = '$accno'";
$result = $mysql->query($check);
$row=$result->fetch_array();
if($row[0] > 1) {
    echo "Account Number Already Exists<br/>";
}
else
{
    if($balance<500){
        echo "Minimum balance must be 500 or above<br/>";
    }
    else {
        mysqli_query($mysql, "INSERT INTO bank(accno,a_name,a_address,acc_type,balance) VALUES('$accno','$name','$address','$acc_type','$balance')");
        echo "Customer added successfully"; 
    }

}
}

?>
</body>
</html>