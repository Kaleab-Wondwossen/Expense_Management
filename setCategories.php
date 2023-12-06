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
    <h1 class="signup-heading">Set Categories</h1>
        <button class="signup-social">
          <a href="../dashboard.php"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
          <span class="signup-social-text"> GOTO DASHBOARD</span></a>
        </button>
        <pre></pre>
        <form action="" class="signup-form" method="post" autocomplete="off">
          <label for="code" class="signup-label" >Code</label>
          <input type="text" name="key" class="signup-input" placeholder="You`r Code">
          <label for="category" class="signup-label" >Category</label>
          <input type="text" id="category" name="category" class="signup-input" placeholder="You`r category">
          <pre></pre>
          <button class="signup-submit" name="submit"><a href="">Add</a></button>
        </form>
        <p class="signup-already">
          <span style="color: purple;" class="oops">OOPS!! dont want to, GO HOME </span>
          <a href="../index.php" class="signup-login-link">Home</a>
        </p>
    </div>
</div>
    </script>
    <footer>
  <p class="footerBar">Copyright &copy; 2021 Online Expense Tracker | All Rights Reserved.</p>
</footer>
</body>
</html>
<?php
// Include the necessary models or required files
include '../Models/categoriesModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form is submitted
    
    // Sanitize the form data
    $code = filter_var($_POST['key'], FILTER_SANITIZE_STRING);
    $category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);
    echo $category;
    var_dump($_POST);
    // Check if the code and category values are not empty
    if (!empty($code) && !empty($category)) {
        // Create a new category object or use your preferred method to store the category
        $categoryModel = new CategoriesModel();
        
        // Call a method to add the category
        $categoryModel->create($category);
        
        // Redirect or display a success message
        // header("Location: setCategories.php");
        exit();
    } else {
        // Handle validation errors or display an error message
        echo "Please provide both the code and category values.";
    }
}
?>