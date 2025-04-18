<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .dashboard-container {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      text-align: center;
      width: 300px;
    }

    h2 {
      color: #333;
    }

    p {
      font-size: 18px;
      color: #555;
    }

    a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 20px;
    }

    a:hover {
      background-color: #45a049;
    }

  </style>
</head>
<body>

  <div class="dashboard-container">
    <h2>Welcome to Your Dashboard</h2>
    <p>Hello, <strong><?php echo htmlspecialchars($_SESSION['email']); ?></strong>!</p>
    <p>You're logged in and ready to explore!</p>
    
    <a href="courses.php">View Courses</a>
    <br><br>
    <a href="logout.php">Logout</a>
  </div>

</body>
</html>
