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
                <img style="height: 400px;" class="w-100" src="img/reasons.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- header End -->

    <!-- Start Secion reasons-------------------------------------------------------------->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img style="max-height: 50%;" class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="img/reasons.png">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 data-i18n="titleReasons" class="display-5 mb-0">The causes and effects of climate change</h5>
                    </div>
                    <h6 data-i18n="h1">Fossil fuels</h6>
                    <p class="mb-4" data-i18n="p1">Coal, oil and gas is by far the largest contributor to global climate change, accounting for more than 75 percent of global greenhouse gas emissions and nearly 90 percent of all carbon dioxide emissions. Because it is located in the Earth's atmosphereGreenhouse gas emissions trap the sun 's heat. This leads to global warming and climate change. The world is currently warming faster than at any time in recorded history. Over time, higher temperatures lead to changes in weather patterns disturbances in the usual balance of nature.Which poses many dangers to humans and all other forms of life on Earth.</p>
                    <h6 data-i18n="h2">Deforestation</h6>
                    <p class="mb-4" data-i18n="p2">Cutting down forests to create farms or pastures, or for other reasons, causes emissions. Because trees, when cut down, release the carbon they were storing. Nearly 12 million hectares of forests are destroyed every year. Because forests absorb carbon dioxide, their destruction also limits nature's ability to keep emissions out of the atmosphere. Deforestation, along with agriculture and other changes in land use, is responsible for nearly a quarter of global greenhouse gas emissions.</p>
                    <h6 data-i18n="h3">Transportation</h6>
                    <p class="mb-4" data-i18n="p3">Most cars, trucks, ships, and planes run on fossil fuels, making transportation a major contributor to greenhouse gas emissions, especially carbon dioxide emissions. Road vehicles account for the bulk of combustion of petroleum-based products, such as gasoline, in internal combustion engines. But emissions from ships and aircraft also continue to increase. Transport is responsible for nearly a quarter of global energy-related carbon dioxide emissions. Trends point to a significant increase in energy use for transportation in the coming years.</p>
                    <h6 data-i18n="h4">food production</h6>
                    <p class="mb-4" data-i18n="p4">Food production emits carbon dioxide, methane, and other greenhouse gases in different ways, including deforestation and clearing of land for agriculture and grazing, the digestion of cattle and sheep, the production and use of fertilizers and manure to grow crops, and the use of energy to power farm equipment or fishing boats. Usually using fossil fuels. All of which makes food production a major contributor to climate change. Greenhouse gas emissions also come from food packaging and distribution.</p>
                    <a class="btn-sm btn-primary" data-i18n="downloPDF" href="https://www.academia.edu/41022985/%D8%A7%D9%84%D8%AA%D8%BA%D9%8A%D8%B1_%D8%A7%D9%84%D9%85%D9%86%D8%A7%D8%AE%D9%8A_%D8%A7%D8%B3%D8%A8%D8%A7%D8%A8%D9%87_%D9%88%D9%86%D8%AA%D8%A7%D8%A6%D8%AC%D9%87">downlo PDF</a>
                    <div class="row g-3 mt-5">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary d-flex flex-column justify-content-center text-center border-bottom border-5 border-secondary rounded p-3" style="height: 200px;">
                                <h4 class="text-white mb-0">The Causes</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                            <div class="bg-secondary d-flex flex-column justify-content-center text-center border-bottom border-5 border-primary rounded p-3" style="height: 200px;">
                                <h4 class="text-white mb-0">Effects</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Secion reasons-->

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