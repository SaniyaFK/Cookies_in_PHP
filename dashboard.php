<?php
session_start();

if(!isset($_SESSION['user']))
{
header("Location: login.php");
}
?>

<html>
<body>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<?php
if(isset($_COOKIE['username']))
{
echo "Cookie User: ".$_COOKIE['username'];
}
?>

<br><br>

<a href="logout.php">Logout</a>

</body>
</html>