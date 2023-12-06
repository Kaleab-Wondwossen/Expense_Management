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

    .options-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      padding-bottom: 20px;
    }

    .option {
      width: 150px;
      height: 300px;
      margin-right: 20px;
      margin-bottom: 20px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      transform: rotate(45deg);
    }
    
    .option button {
      width: 100%;
      height: 100%;
      border: none;
      background-color: transparent;
      cursor: pointer;
    }
    
    .btn {
      text-decoration: none;
      color: black;
    }
    
    .form-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
    }
    
    .form-container input[type="text"],
    .form-container input[type="date"],
    .form-container input[type="submit"] {
      margin-top: 10px;
      width: 200px;
      padding: 5px;
    }
    .myIcon {
        font-size: 20px;
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
    <div class="options-container">
      <div class="option" style="transform: rotate(-45deg);">
        <button id="record-expense-btn">
          <a href="View/addExpence.php" class="btn"><h3>Record Expense</h3></a>
          <i class="fa fa-plus-circle myIcon" aria-hidden="true"></i>
        </button>
      </div>
      <div class="option" style="transform: rotate(45deg);">
        <button id="search-expense-btn">
         <a class="btn" href="View/editExpense.php"><h3>Search Expense</h3></a>
         <i class="fa fa-search myIcon" aria-hidden="true"></i>
        </button>
      </div>
      <div class="option" style="transform: rotate(-45deg);">
        <button id="delete-expense-btn">
          <a href="View/deleteExpense.php" class="btn"><h3>Delete Expense</h3></a>
          <i class="fa fa-trash myIcon" aria-hidden="true"></i>
        </button>
      </div>
      <div class="option" style="transform: rotate(45deg);">
        <button>
          <a href="" class="btn"><h3>Generate Expense Report</h3></a>
          <i class="fa fa-building-o myIcon" aria-hidden="true"></i>
        </button>
      </div>
      <div class="option" style="transform: rotate(-45deg);">
        <button id="category-expense-btn">
          <a href="View/setCategories.php" class="btn"><h3>Set Categories</h3></a>
          <i class="fa fa-plus-square-o myIcon" aria-hidden="true"></i>
        </button>
      </div>
      <div class="option" style="transform: rotate(45deg);">
        <button id="edit-expense-btn">
          <a href="View/setCategories.php" class="btn"><h3>Edit Categories</h3></a>
          <i class="fa fa-plus-square-o myIcon" aria-hidden="true"></i>
        </button>
      </div>
    </div>

    <div class="form-container" id="expense-form-container" style="display: none;">
      <form id="expense-form" action="dashboard.php" method="POST">
        <input type="text" name="amount" placeholder="Amount" required>
        <input type="date" name="date" required>
        <input type="text" name="code" placeholder="Code" required>
        <input type="submit" value="Submit">
      </form>
    </div>
    <div class="form-container" id="search-form-container" style="display: none;">
        <form id="search-form">
        <input type="text" name="keyword" placeholder="Keyword" required>
        <input type="submit" value="Search">
        </form>
    </div>
    <div class="form-container" id="delete-form-container" style="display: none;">
        <form id="delete-form">
        <input type="text" name="keyword" placeholder="Enter Expense ID" required>
        <input type="submit" value="Delete">
        </form>
    </div>
    <div class="form-container" id="category-form-container" style="display: none;">
      <form id="category-form" action="dashboard.php" method="POST">
        <input type="text" name="code" placeholder="input the code" required>
        <input type="text" name="category" placeholder="input the category" required>
        <input type="submit" value="Add">
      </form>
    </div>
    <hr>
    
    <script>
        document.getElementById('record-expense-btn').addEventListener('click', function() {
        document.getElementById('expense-form-container').style.display = 'block';
        });
        document.getElementById('search-expense-btn').addEventListener('click', function() {
        document.getElementById('search-form-container').style.display = 'block';
        });
        document.getElementById('delete-expense-btn').addEventListener('click', function() {
        document.getElementById('delete-form-container').style.display = 'block';
        }); 
        document.getElementById('category-expense-btn').addEventListener('click', function() {
        document.getElementById('category-form-container').style.display = 'block';
        });  
    </script>
    
</body>
<!-- <?php
include 'Models/expenseModel.php';
include 'Models/categoriesModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form is submitted
    
    // Sanitize the form data
    $amount = filter_var($_POST['amount'], FILTER_SANITIZE_NUMBER_FLOAT);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
    $code = filter_var($_POST['code'], FILTER_SANITIZE_STRING);
    if (!empty($code) && !empty($category)) {
      $expense_model = new ExpenseModel();
      $expense = array(
            'amount' => $amount,
            'date_' => $date,
            'category_id' => $code
        );
        $expense_model->createExpense($expense);

      // Redirect or display a success message
      header("Location: dashboard.php");
      exit();
    } else {
      echo "Please provide both the code and category values.";
    }
    }

?>
<?php
include 'Models/expenseModel.php';
include 'Models/categoriesModel.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Check if the form is submitted
      
      // Sanitize the form data
      
      $code = filter_var($_POST['code'], FILTER_SANITIZE_STRING);
      $category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);
      echo $category;
      // Check if the code and category values are not empty
      if (!empty($code) && !empty($category)) {
          $categoryModel = new CategoriesModel();
          
          // Call a method to add the category
          $categoryModel->create($category);
          
          // Redirect or display a success message
          header("Location: dashboard.php");
          exit();
      } else {
          echo "Please provide both the code and category values.";
      }
  }
?> -->
