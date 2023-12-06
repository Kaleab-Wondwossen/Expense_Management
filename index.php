<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
body {
    
  }
.navBar {
  background-color: black;
  display: flex;
  justify-content: flex-end;
  align-items: flex-start;
  padding: 50px;
  /* background-color: #c193c5; */
  background-image: url("ban1.jfif");
  background-repeat: no-repeat;
  background-size: cover;
  border: black;
}
.logo {
  margin-right: auto;
  height: 50px; 
}

.logo img {
  height: 50px; 
}
.navBar button {
  display: inline-block;
  margin-left: 10px;
  padding: 5px 10px;
  background-color: #535B99;
  color: white;
  text-align: left;
  text-decoration: none;
  white-space: nowrap;
  cursor: pointer;
  text-transform: uppercase;
  border-radius: 30%;
  margin: 15px; 
  font-family: cursive;
  background-color: black; 
  
  
}
.btnName{
  color: white;
}
.navBar button i {
  margin-right: 10px;
}
.navBar a {
    text-decoration: none;
}
.headerfont{
  text-align: center;
  color: black;
  font-family: cursive;
}
.parafont{
  text-align: center;
}
.butnEnd{
  display: inline-block;
  margin-left: 10px;
  padding: 5px 10px;
  /* background-color: #535B99; */
  text-align: left;
  text-decoration: none;
  white-space: nowrap;
  cursor: pointer;
  text-transform: uppercase;
  border-radius: 30%;
    /* margin: 15px; */
  font-family: cursive;
  /* background-color: black; */

}
.left-align {
  position: relative;
  left: 0%;
  padding: 10px;
  display: flex;
  flex-direction: row-reverse;
  align-items: center;
}

.right-align{
  position: relative;
  left: 0%;
  padding: 10px;
  display: flex;
  flex-direction: row;
  align-items: center;
}

.left-align img {
  margin: 0 100px 0 0;
  max-width: 500px; /* Adjust the width as needed */
  height: auto;
}
.text-content {
  text-align: left;
}
/* Add the following for the icons */
@font-face {
  font-family: 'FontAwesome';
  src: url('path/to/fontawesome.ttf');
}

/* Add the following for the icons */
@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

/* Add the following for the icons */
@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

/* Add the following for the icons */
@keyframes bounce {
  from {
    transform: translateY(0);
  }
  to {
    transform: translateY(5px);
  }
}

.navBar button:hover i {
  animation: rotate 1s linear infinite;
  animation: spin 1s linear infinite;
  animation: bounce 1s linear infinite;
}
.footerBar {
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
  font-family: cursive;
}
    </style>
</head>
<body>
<nav class="navBar">
    <a href="#" class="logo"><img src="banner1.png" alt="Logo"></a>
    <button><a href="index.php" class="btnName">Home</a><i class="fa fa-home"></i></button>
    <button><a href="login.php" class="btnName">Log In</a><i class="fa fa-sign-in"></i></button>
    <button><a href="dashboard.php" class="btnName">Dashboard</a><i class="fa fa-dashboard"></i></button>
    <button><a href="index.php" class="btnName">About Us</a><i class="fa fa-user"></i></button>
</nav>
<div class="left-align">
        <img src="bb1.jfif" alt="Image">
        <div class="text-content">
            <h2 class="headerfont">Online Expense Tracker</h2>
            <h3 class="headerfont">Giving Creative Services</h3>
            <p class="parafont">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <button class="butnEnd">Learn More</button>
        </div>
    </div>
    <div class="right-align">
        <img src="bb2.jfif" alt="Image">
        <div class="text-content">
            <h2 class="headerfont">Online Expense Tracker</h2>
            <h3 class="headerfont">Optimal Expenses</h3>
            <p class="parafont">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <button class="butnEnd">Learn More</button>
        </div>
    </div>
    <div class="left-align">
        <img src="bb3.jpg" alt="Image">
        <div class="text-content">
            <h2 class="headerfont">Online Expense Tracker</h2>
            <h3 class="headerfont">Giving Creative Services</h3>
            <p class="parafont">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <button class="butnEnd">Learn More</button>
        </div>
    </div>
    <div class="right-align">
        <img src="bb4.jfif" alt="Image">
        <div class="text-content">
            <h2 class="headerfont">Online Expense Tracker</h2>
            <h3 class="headerfont">Tracking Money</h3>
            <p class="parafont">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <button class="butnEnd">Learn More</button>
        </div>
    </div>
<footer>
  <p class="footerBar">Copyright &copy; 2021 Online Expense Tracker | All Rights Reserved.</p>
</footer>
</body>
</html>