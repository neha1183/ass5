<html>

<head>
    <title>FLIGHT BOOKING INTERFACE</title>
</head>

<body>
    <form method="POST">
        <table border="1" cellpadding="20px" align="center">
            <tr>
                <th colspan="2" style="background-color:blue;color:white;">SET YOUR FLIGHT PREFERENCE</th>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" width="300" height="200" name="username"></td>
            </tr>
            <tr>
                <th>Seat Selection</th>
                <td><input type="radio" name="seat" value="Aisle">Aisle
                    <input type="radio" name="seat" value="Window">Window
                    <input type="radio" name="seat" value="Center">Center
                </td>
            </tr>
            <tr>
                <th>Meal Selection</th>
                <td><input type="radio" name="meal" value="Vegetarian">Veg Meal
                    <input type="radio" name="meal" value="Non-vegetarian">Non-veg Meal
                    <input type="radio" name="meal" value="Diabetic">Diabetic Meal
                    <input type="radio" name="meal" value="Child">Children meal
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="SUBMIT" name="ok"></td>
            </tr>
        </table>
</body>
<?php
if(isset($_POST["ok"])){
$expire_time=time()+60*60*24*30;
setcookie("user_name", $_POST['username'], $expire_time);
setcookie("seat", $_POST['seat'], $expire_time);
setcookie("meal", $_POST['meal'], $expire_time);
echo "Cookie has been Set Successfully!<br>";
echo "-------------------------------------------------------------------------------------<br>";
echo 'Press <a href="View_cookie.php" style="text-decoration:none;margin:10px;display:inline-block;border:1px solid black;">GO</a> to view your cookies';

date_default_timezone_set("Asia/kolkata");
$cookie_boundary = 60 * 60 * 24 * 60 + time(); 
setcookie('lastVisit', date("G:i - m/d/y"), $cookie_boundary);

}
?>
</html>
