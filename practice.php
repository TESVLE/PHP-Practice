<?php
$servername = "localhost";
$username = "marckros_1";
$password = "example";
$dbname = "marckros_Commissioners";


session_start();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  if ($_POST['password'] == $_POST['password1']){

$username = $mysqli_real_escape_string($_POST['username']);
$email = $mysqli_real_escape_string($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$fname = $mysqli_real_escape_string($_POST['fname']);
$lname = $mysqli_real_escape_string($_POST['lname']);

$_SESSION['username'] = $username;

$sql = "INSERT INTO commissioners (commname, hash, address, fname, lname)
VALUES ('$username', '$password', '$email', '$fname', '$lname')";

if ($mysqli->query($sql) === true){

header("location: Commissions.html");

}

}
}
 ?>
