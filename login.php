<?php
session_start();
$email = $_POST['email'];
$pass = $_POST['password'];

$con = mysqli_connect("localhost", "root", "", "student");
$result = mysqli_query($con, "SELECT * FROM studentdetails WHERE email='$email' AND password='$pass'");

if (mysqli_num_rows($result) == 1) {
    $_SESSION['email'] = $email; // <- THIS MUST EXIST
    header("Location: dashboard.php");
} else {
    echo "Login failed. <a href='login.html'>Try Again</a>";
}
?>
