<?php
session_start();

// Allow access if attempted
if(!isset($_SESSION['score']) && !isset($_COOKIE['attempted'])){
header("Location: index.php");
exit();
}

// Set attempted cookie
setcookie("attempted","yes",time()+3600);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Quiz Result</h2>

<?php
if(isset($_COOKIE['username'])){
echo "<p>User: ".$_COOKIE['username']."</p>";
}

if(isset($_SESSION['score'])){
echo "<p>Your Score: ".$_SESSION['score']." / 3</p>";
}else{
echo "<p>You have already attempted this quiz.</p>";
}
?>

<a href="index.php">Go to Home</a>
<a href="logout.php">Logout Session</a>

</div>
</body>
</html>