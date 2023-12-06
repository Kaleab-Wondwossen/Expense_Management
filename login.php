<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Management System</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .footerBar {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
      font-family: cursive;
    }
</style>
</head>
<body>
    <header class="navBar">
        <a href="index.php"><img src="banner1.png" alt="Logo" class="logo"></a>
        <button class="btnNav" ><a class="butLetter" href="index.php"><span>Home</span></a><i class="fa fa-home"></i></button>
        <button class="btnNav" ><a class="butLetter" href="login.php"><span>Log In</span></a><i class="fa fa-sign-in"></i></button>
        <button class="btnNav" ><a class="butLetter" href="login.php"><span>Dashboard</span></a><i class="fa fa-dashboard"></i></button>
        <button class="btnNav" ><a class="butLetter" href="index.php"><span>AboutUs</span></a><i class="fa fa-user"></i></button>
    </header>
    <br>
    <div class="body">
    <div class="signup">
    <h1 class="signup-heading">LogIn</h1>
        <button class="signup-social">
          <a href="signup.php"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
          <span class="signup-social-text"> Don't Have an Account</span></a>
        </button>
        <pre></pre>
        <form action="" class="signup-form" method="post" autocomplete="off">
          <label for="email" class="signup-label" >Email</label>
          <input type="text" name="email" class="signup-input" placeholder="You`r email">
          <label for="password" class="signup-label" >Password</label>
          <input type="password" id="password" name="password" class="signup-input" placeholder="You`r password">
          <pre></pre>
          <button class="signup-submit" name="submit"><a href="dashboard.php">Log In</a></button>
        </form>
        <p class="signup-already">
          <span style="color: purple;" class="oops">OOPS!! dont want to Log In </span>
          <a href="index.php" class="signup-login-link">Home</a>
        </p>
    </div>
    </div>
    <footer>
  <p class="footerBar">Copyright &copy; 2021 Online Expense Tracker | All Rights Reserved.</p>
</footer>
</body>
</html>
<?php
   // Establish a connection to the database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'expense_management';

$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Retrieve the username and password from the form
$username = $_POST['email'];
$password = $_POST['password'];

// Query the database
$sql = "SELECT * FROM user WHERE user_name='$username' AND password='$password'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // Redirect to the success page
    header("Location: dashboard.php");
} else {
    // Display an error message
    echo "Wrong Username or Password";
}

$connection->close();
?>