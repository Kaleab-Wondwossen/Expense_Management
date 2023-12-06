<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Management System</title>
    <link rel="stylesheet" href="../login.css">
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
        <button class="btnNav" ><a class="butLetter" href="../index.php"><span>Home</span></a><i class="fa fa-home"></i></button>
        <button class="btnNav" ><a class="butLetter" href="../login.php"><span>Log In</span></a><i class="fa fa-sign-in"></i></button>
        <button class="btnNav" ><a class="butLetter" href="../login.php"><span>Dashboard</span></a><i class="fa fa-dashboard"></i></button>
        <button class="btnNav" ><a class="butLetter" href="../index.php"><span>AboutUs</span></a><i class="fa fa-user"></i></button>
    </header>
    <br>
    <div class="body">
    <div class="signup">
    <h1 class="signup-heading">Delete Expense</h1>
        <button class="signup-social">
          <a href="../dashboard.php"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
          <span class="signup-social-text"> GOTO DASHBOARD</span></a>
        </button>
        <pre></pre>
        <form action="" class="signup-form" method="post" autocomplete="off">
          <label for="email" class="signup-label" >Key Word</label>
          <input type="text" name="key" class="signup-input" placeholder="You`r Key Word">
          <!-- <label for="password" class="signup-label" >Password</label>
          <input type="password" id="password" name="password" class="signup-input" placeholder="You`r password"> -->
          <pre></pre>
          <button class="signup-submit" name="submit"><a href="deleteExpense.php">Delete</a></button>
        </form>
        <p class="signup-already">
          <span style="color: purple;" class="oops">OOPS!! dont want to, GO HOME </span>
          <a href="../index.php" class="signup-login-link">Home</a>
        </p>
    </div>
    </div>
    <footer>
  <p class="footerBar">Copyright &copy; 2021 Online Expense Tracker | All Rights Reserved.</p>
</footer>
</body>
</html>
<?php
// Assuming you have a database connection and a table named 'expenses' with columns 'id', 'keyword', and 'description'
include '../Models/expenseModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $key = $_POST['key'];
    $keyword = filter_var($_POST['key'], FILTER_SANITIZE_STRING);
    echo $key;
    $expense_model = new ExpenseModel();
    $expense_model->deleteExpense($keyword);
}
   
?>