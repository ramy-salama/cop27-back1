<?php include ("control/Controller.php"); ?>
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

    <!-- header Start -->
    <div class="container-fluid p-5 shadow-sm">
        <div class="row">
            <div class="col-12">
                <img style="height: 400px;" class="w-100" src="img/energy.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- header End -->

    <!--Start Secion blog-->
    <div class="container-fluid py-5 wow fadeInUp bg-grey shadow" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 data-i18n="titleSolution" class="display-5 mb-0">Solutions to reduce climate change</h5>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <img style="height: 150px;" class="w-100" src="img/solar.png" alt="">
                    <div class="blog-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <h5 data-i18n="h11" class="mb-3">Renewable energy</h5>
                            <p style="max-height: 75px; overflow-y: hidden;" data-i18n="p11">The shift from the use of fossil fuels to the use of clean energy sources such as solar energy is one of the most important solutions to the phenomenon of climate change
                            </p>
                            <a href="https://www.un.org/ar/climatechange/raising-ambition/renewable-energy" data-i18n="more">More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn " data-wow-delay="0.6s">
                    <img style="height: 150px;" class="w-100" src="img/Clean-transfer.png" alt="">
                    <div class="blog-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <h5 data-i18n="h22" class="mb-3">Clean Transportation</h5>
                            <p style="max-height: 75px; overflow-y: hidden;" data-i18n="p22">One of the most important causes of pollution and global warming in the world is transportation, so the world is now moving to replace it with clean energy transportation.
                            </p>
                            <a href="https://www.un.org/ar/desa/sustainable-transport-report" data-i18n="more">More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <img style="height: 150px;" class="w-100" src="img/affores.jpg" alt="">
                    <div class="blog-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <h5 data-i18n="h33" class="mb-3">Afforestation</h5>
                            <p style="max-height: 75px; overflow-y: hidden;" data-i18n="p33">To afforestation and plantation of forests, to confront desertification, and to prevent unjust cutting of forests is an important means of preserving the ecological balance and reducing pollution.</p>
                            <a href="https://www.un.org/ar/observances/desertification-day/background" data-i18n="more">More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <img style="height: 150px;" class="w-100" src="img/hg.jpg" alt="">
                    <div class="blog-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <h5 data-i18n="h44" class="mb-3">Alternative Fuel</h5>
                            <p style="max-height: 75px; overflow-y: hidden;" data-i18n="p44">Reducing dependence on fossil fuels has become an urgent necessity for the planet, so efforts are directed to produce and use less polluting energy                            </p>
                            <a href="https://www.almasryalyoum.com/news/details/2743848" data-i18n="more">More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <img style="height: 150px;" class="w-100" src="img/cl-energy.jpg" alt="">
                    <div class="blog-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <h5 data-i18n="h55" class="mb-3">Clean Industries</h5>
                            <p style="max-height: 75px; overflow-y: hidden;" data-i18n="p55">The world is now heading to support and invest in clean industries and to stop supporting polluting industries to reduce their impact on the environment                            </p>
                            <a href="https://www.un.org/ar/climatechange/raising-ambition/renewable-energy" data-i18n="more">More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <img style="height: 150px;" class="w-100" src="img/food.jpg" alt="">
                    <div class="blog-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <h5 data-i18n="h66" class="mb-3">Reducing Food Waste</h5>
                            <p style="max-height: 75px; overflow-y: hidden;" data-i18n="p66">Food waste contributes to approximately 8% of the total greenhouse gas emissions that result from human activities.                            </p>
                            <a href="https://www.un.org/ar/climatechange/science/climate-issues/food" data-i18n="more">More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Secion blog-->

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

    <!--Javascript -->
    <script src="js/main.js"></script>
    <!-- trans code -->
    <script src="js/script.js"></script>
</body>

</html>