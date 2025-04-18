<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f4f8;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 700px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      color: #2c3e50;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 12px;
    }

    a {
      text-decoration: none;
      color: #3498db;
      font-weight: bold;
    }

    a:hover {
      text-decoration: underline;
    }

    .logout-btn {
      display: inline-block;
      margin-top: 20px;
      background-color: #e74c3c;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      text-decoration: none;
      font-size: 16px;
    }

    .logout-btn:hover {
      background-color: #c0392b;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>👋 Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h2>

  <h3>📘 Courses</h3>
  <ul>
    <li><a href="https://youtu.be/yRpLlJmRo2w?si=Uswvg-AjFW3Schools" target="_blank">Java Programming - YouTube</a></li>
    <li><a href="https://www.w3schools.com" target="_blank">W3Schools - Web Tutorials</a></li>
  </ul>

  <h3>📝 Assignments</h3>
  <ul>
    <li><a href="https://www.hyperwriteai.com/" target="_blank">HyperWrite - Assignment Help Tool</a></li>
  </ul>

  <a class="logout-btn" href="logout.php">🚪 Logout</a>
</div>

</body>
</html>
