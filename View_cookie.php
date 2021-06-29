<html>
<head>
    <title>VIEW YOUR COOKIE</title>
</head>
<body>
    <h1>..................ETIHAD FLIGHTS...................</h1>
    <h3>Thank you for choosing ETIHAD Flights</h3>
    <h3>The cookie values are</h3>
    <h3>Name:<?php echo $_COOKIE["user_name"]; ?></h3>
    <h3>Seat:<?php echo $_COOKIE["seat"]; ?></h3>
    <h3>Food:<?php echo $_COOKIE["meal"]; ?></h3>
</body>
<?php
if(isset($_COOKIE['lastVisit']))
{
$visit = $_COOKIE['lastVisit'];
echo "Your last visit on : ".$visit;
}
else
echo "Welcome User.This is your first visit";
?>
</html>