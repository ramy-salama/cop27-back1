<?php
include ("control/Controller.php"); 
if (isset($_SESSION['loggedIn']) && isset($_SESSION['name'])) {
  header('Location:home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SafeWorld</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="COP27" name="keywords">
    <meta content="Sharm El-Sheikh Climate Change Conference - November 2022" name="description">
    <link href="img/0-icon.png" rel="icon">
    <!--Style CSS-->
    <link href="lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <!-- Fonts -->
    <link href="lib/font/Jost-font.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">

</head>

<body dir="ltr">
    <!--Start Secion navbar----------------------------------------------------------->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 shadow-sm">
        <a href="home.html" class="navbar-brand ms-lg-5">
            <h1 class="display-5 m-0 text-primary">Safe<span class="text-secondary">World</span></h1>
        </a>
        <select class="btn btn-sm h-25  mx-2 hover">
            <option value="en" data-i18n="english" selected>English</option>
            <option value="ar" data-i18n="arabic">Arabic</option>
        </select>
    </nav>
    <!-- End Secion navbar-->
  <div class="content-login">
    <img src="img/0-icon.png">
    <h2 data-i18n="signin">Signin</h2>
    <div class="" id="logInModal">
      <div class="filed-login space">
        <input type="email" id="userLEmail" class="form-control" placeholder="Your Email">            
      </div>
      <div class="filed-login space">
        <span class="show-login">show</span>
        <input type="password" id="userLPassword" class="pass-key" placeholder="Password"> 
      </div>
      <div class="field1">
        <button id="loginBtn" class="btn btn-sm mt-3 w-25 btn-primary" data-i18n="login">Login</button>           
      </div>
      <div class="signup">  
        <span data-i18n="account">Don't have an account?</span>
        <a href="register.php" data-i18n="signup">Registration</a>
      </div>
    </div>
  </div> 
      <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/ajax/ajax.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/main-slid/cocoen.js"></script>
    <script>
        Cocoen.parse(document.body);
    </script>
    <!--Javascript -->
    <script src="js/main.js"></script>
    <!-- trans code -->
    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/login.js" ></script> 
    <script type="text/javascript" src="js/ajax-code.js" ></script> 

</body>
</html>
