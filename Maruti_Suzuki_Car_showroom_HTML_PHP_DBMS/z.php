<?php
//include auth.php file on all secure pages
//include("auth.php");
?>
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
<style>
body {
  background-image: url('mslogo.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>
<body>
    <center>
<div class="form">
<h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
<h3>Welcome to Maruti Suzuki CarShowroom This is secure area.</h3>
<p><a href="Main Home.html">Click Here To Go!!</a></p>
<a href="Home.html">Logout</a>
</div>
</center>
</body>
</html>