
<?php
 include ("control/Controller.php");
  if (isset($_SESSION['loggedIn']) && isset($_SESSION['name'])  ) {
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

    <!-- Fonts -->
    <link href="lib/font/Jost-font.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">

</head>

<body>
    <!--Start Secion navbar----------------------------------------------------------->
    <?php include "nav.php" ?>
    <!-- End Secion navbar-->


    <!--Start Secion slid------------------------------------------------------------->
    <div dir="ltr" class="container-fluid mb-5">
        <div class="cocoen-cont">
            <div class="cocoen">
                <img src="img/before.jpg" alt="" loading="lazy" />
                <img src="img/after.jpg" alt="" loading="lazy" />
            </div>
        </div>
    </div>
    <!-- End Secion slid-->

    <?php include "comment.php" ?>

    <!-- Footer Start ---------------------------------------------------------------------->
    <?php include "footer.php" ?>
    <!-- Footer End -->

    <!-- ------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------- -->

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.js"></script>
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


</body>

</html>