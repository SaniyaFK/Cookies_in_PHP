<?php
session_start();

if(!isset($_SESSION['qno'])){
header("Location: index.php");
exit();
}

if(isset($_POST['next'])){
$answer = $_POST['answer'];

$correct = ["A","B","C"];

if($answer == $correct[$_SESSION['qno']-1]){
$_SESSION['score']++;
}

$_SESSION['qno']++;

if($_SESSION['qno'] > 3){
header("Location: result.php");
exit();
}
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Question <?php echo $_SESSION['qno']; ?></h2>

<form method="post">

<?php
if($_SESSION['qno']==1){
echo 'What is 2+2?<br>
<input type="radio" name="answer" value="A" required> 4<br>
<input type="radio" name="answer" value="B"> 5<br>
<input type="radio" name="answer" value="C"> 6';
}

if($_SESSION['qno']==2){
echo 'Capital of India?<br>
<input type="radio" name="answer" value="A" required> Mumbai<br>
<input type="radio" name="answer" value="B"> Delhi<br>
<input type="radio" name="answer" value="C"> Pune';
}

if($_SESSION['qno']==3){
echo 'Color of sky?<br>
<input type="radio" name="answer" value="A" required> Red<br>
<input type="radio" name="answer" value="B"> Green<br>
<input type="radio" name="answer" value="C"> Blue';
}
?>

<br><br>
<button type="submit" name="next">Next</button>

</form>

</div>
</body>
</html>