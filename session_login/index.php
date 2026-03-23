<?php
session_start();

$attempted = false;

if(isset($_COOKIE['attempted'])){
$attempted = true;
}

// Start quiz
if(isset($_POST['start']) && !$attempted){
$username = $_POST['username'];

// Store username
setcookie("username",$username,time()+3600);

// Start session
$_SESSION['qno']=1;
$_SESSION['score']=0;

header("Location: quiz.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Start Quiz</h2>

<?php if($attempted){ ?>

<p style="color:#00adb5;">You have already attempted the quiz.</p>
<a href="result.php">View Result</a>
<button disabled>Start Quiz</button>

<?php } else { ?>

<form method="post">
<input type="text" name="username" placeholder="Enter your name" required>
<button type="submit" name="start">Start Quiz</button>
</form>

<?php } ?>

</div>
</body>
</html>