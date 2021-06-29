<html>

<head>
    <title>User Login</title>
</head>

<body>
    <form method="POST">
        <table border="1" cellpadding="20px" align="center">
            <tr>
                <th colspan="2" style="background-color:blue;color:white;">Login Sessions</th>
            </tr>
            <tr>
                <th>User Name</th>
                <td><input type="text" placeholder="Enter your name" name="username"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" placeholder="Enter your password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="LOGIN" name="login">
<input type="submit" value="LOGOUT" name="logout">
                </td>
            </tr>
        </table>
</body>
<?php
SESSION_start();
if(isset($_POST["login"]))
{
if(($_SESSION["username"]==$_POST['username']) && ($_SESSION["password"]==$_POST['password']))
{ 
    $_SESSION["counter"]++;
    echo $_SESSION["username"].'<br>';
    echo 'Welcome back user....!This is your '.$_SESSION["counter"].' visit ';
}
else {
     $_SESSION["username"]=$_POST['username'];
     $_SESSION["password"]=$_POST['password'];
     $_SESSION["counter"]=1;
     echo $_SESSION["username"];
     echo"<br>Welcome User....!This is your first visit";
    } 
}
if(isset($_POST['logout'])){
SESSION_unset();
echo"Logged Out<br>";
echo $_SESSION["username"]=$_POST['username']; }
?>

</html>