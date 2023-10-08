<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<style>
.hello a:link, a:visited {
  background-color: #39b7f1;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 15px
}

.hello a:hover{
  background-color: blue ;
}
</style>
<body>
<nav>
        <a href="home.html"><img src="logo.png"></a>
        <div class="nav-links" id="navlinks">
            <i class="fa fa-window-close" onclick="hidemenu()"></i>
            <ul>
                <li><a href="website_replication.html">HOME</a></li>
                <li><a href="website_replication_about_us.html">ABOUT</a></li>
                <li><a href="webite_replication_courses.html">CONTACTS</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>
        </div>
        <i class="fa fa-ellipsis-v" onclick="showmenu()"></i>
    </nav>
	<br>
	<br>
    <div class="container">
        <h2>Welcome to Dashboard</h2>
		<h3> click here to go to the predict page</h3>
		<div class="hello">
		<a href="http://127.0.0.1:5000/" target="_blank">This is the link</a>
		</div>
		<br>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>
