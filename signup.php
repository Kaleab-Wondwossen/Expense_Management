<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Management System</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <h1 class="signup-heading">Sign Up</h1>
      <button class="signup-social">
        <a href=""> <i class="fa fa-plus-circle" aria-hidden="true"></i>
        <span class="signup-social-text"> Welcome To Sign Up</span></a>
       </button>
       <pre></pre>
      <form action="signup.php" class="signup-form" method="post" autocomplete="off">
        <label for="fullname"  class="signup-label">Full name</label>
        <input type="text" id="fullname" name="name" class="signup-input" placeholder="You`r Name">
        <label for="email" class="signup-label" >Email</label>
        <input type="email" name="email" class="signup-input" placeholder="You`r email">
        <pre></pre>
        <label for="email" class="signup-label" >Passowrd</label>
        <input type="password"  name="password" class="signup-input" placeholder="You`r password">
        <button class="signup-submit" name="submit">Sign Up</button>
      </form>
      <p class="signup-already">
        <span style="color: purple;" class="oops">OOPS!! dont want to Sign Up </span>
        <a href="index.php" class="signup-login-link">Home</a>
      </p>
    </div>
    </div>
</body>
</html>
<?php
 
 $servername = "localhost";
 $username = "root";
 $password = '';
 $dbname = "expense_management";
 
 // Create a new mysqli instance
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 // Check the connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['name'];
  $password = $_POST['password'];

  // Prepare and bind the parameters
  $stmt = $conn->prepare("INSERT INTO user (user_name, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $username, $password);

  // Execute the query
  $stmt->execute();

  // Close the statement and connection
  $stmt->close();
  $conn->close();

  // Redirect to another page or display a success message
}
?>
<!-- // Establish a connection to the database
 $host = 'localhost';
 $user = 'root';
 $password = '';
 $database = 'expense_management';
 
 $connection = new mysqli($host, $user, $password, $database);
 
 if ($connection->connect_error) {
     die("Connection failed: " . $connection->connect_error);
 }

// Create a new user record in the user table
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the data into the user

    $sql = "INSERT INTO user (user_name, password) VALUES ('$name', '$hashedPassword')";

    if ($connection->query($sql) === TRUE) {
        echo "New user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} -->