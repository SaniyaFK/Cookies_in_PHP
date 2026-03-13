<?php
session_start();

$error="";

if(isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "1234")
{
$_SESSION['user']=$username;
setcookie("username",$username,time()+3600);

header("Location: dashboard.php");
exit();
}
else
{
$error="Invalid Login";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Login</title>

<style>

body{
margin:0;
padding:0;
font-family:Arial;
background:#0f0f0f;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

/* Login Box */

.login-box{
background:#1c1c1c;
padding:40px;
border-radius:10px;
width:320px;
box-shadow:0 0 20px rgba(0,0,0,0.8);
text-align:center;
}

/* Title */

.login-box h2{
color:white;
margin-bottom:20px;
}

/* Error message */

.error{
color:#ff4d4d;
background:#2a0000;
padding:8px;
border-radius:5px;
margin-bottom:15px;
font-size:14px;
}

/* Labels */

label{
color:#ccc;
font-size:14px;
display:block;
text-align:left;
margin-bottom:5px;
}

/* Inputs */

input{
width:100%;
padding:10px;
margin-bottom:20px;
border:none;
border-radius:5px;
background:#2a2a2a;
color:white;
}

/* Button */

button{
width:100%;
padding:12px;
background:#00adb5;
border:none;
border-radius:5px;
color:white;
font-size:16px;
cursor:pointer;
transition:0.3s;
}

button:hover{
background:#00979c;
}

</style>

</head>

<body>

<div class="login-box">

<h2>User Login</h2>

<?php if($error!=""){ ?>
<p class="error"><?php echo $error; ?></p>
<?php } ?>

<form method="post">

<label>Username</label>
<input type="text" name="username" required>

<label>Password</label>
<input type="password" name="password" required>

<button type="submit" name="login">Login</button>

</form>

</div>

</body>
</html>