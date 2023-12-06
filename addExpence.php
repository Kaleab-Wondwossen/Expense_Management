<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Management System</title>
    <link rel="stylesheet" href="../login.css">
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
      <h1 class="signup-heading">Add Expenses</h1>
      <button class="signup-social">
        <a href="../dashboard.php"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
        <span class="signup-social-text"> GOTO DASHBOARD</span></a>
       </button>
       <pre></pre>
      <form action="" class="signup-form" method="post" autocomplete="off">
        <label for="amount"  class="signup-label">AMOUNT</label>
        <input type="text" name="amount" class="signup-input" placeholder="You`r amount">
        <label for="date" class="signup-label" >DATE</label>
        <input type="text" name="date" class="signup-input" placeholder="You`r date">
        <pre></pre>
        <label for="email" class="signup-label" >CODE</label>
        <input type="text"  name="code" class="signup-input" placeholder="You`r code">
        <button class="signup-submit" name="submit">Add</button>
      </form>
      <p class="signup-already">
        <span style="color: purple;" class="oops">OOPS!! dont want to Add Expense </span>
        <a href="index.php" class="signup-login-link">Home</a>
      </p>
    </div>
    </div>
</body>
</html>
<?php
include '../Models/expenseModel.php';
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize the form data
    $amount = filter_var($_POST['amount'], FILTER_SANITIZE_STRING);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
    $code = filter_var($_POST['code'], FILTER_SANITIZE_STRING);

    // Create an associative array to store the sanitized data
    $data = [
        'amount' => $amount,
        'date_' => $date,
        'category_id' => $code
    ];
    $expense_model = new ExpenseModel();
    $expense_model->createExpense($data);
    // Print the sanitized data
    print_r($data);
}
?>
