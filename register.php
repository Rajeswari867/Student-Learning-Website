<?php
$id = $_POST['studentid'];
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$con = mysqli_connect("localhost", "root", "", "student");
if (!$con) {
    die("DB connect error");
}

$query = "INSERT INTO studentdetails VALUES('$id','$name','$email','$pass')";
if (mysqli_query($con, $query)) {
    echo "Registered! <a href='login.html'>Login</a>";
} else {
    echo "Error!";
}