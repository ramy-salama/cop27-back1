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
                <img style="height: 400px; width: 100%;" class="w-100" src="img/cop27.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- header End -->

    <!-- Start Secion cop-------------------------------------------------------------->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="img/cop.webp" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h1 class="display-5 mb-0" data-i18n="titleCop">Sharm El-Sheikh Climate Change Conference - November 2022</h1>
                    </div>
                    <p dir="ltr rtl" class="mb-4" data-i18n="bodyCop">From November 6-18, heads of state, ministers and negotiators, along with climate activists, mayors, civil society representatives and CEOs will gather in the Egyptian city of Sharm El-Sheikh at the largest annual climate gathering. Climate agendas need to resilience and adjust to the inevitable impacts of climate change, all the way to meeting climate finance commitments in countries.Faced with a growing energy crisis, record concentrations of greenhouse gases and increased extreme weather events, COP 27 seeks to renew solidarity among countries to implement the historic Paris Agreement for the sake of people and planet. The Egyptian presidency of the COP27 agenda will organize the work with a focus on implementation, with the aim of mobilizing collective efforts for ambitious emissions reductions from various sectors, promoting the transformative adaptation agenda on the ground, enabling appropriate financing flows and implementation on the ground on time and at scale. When organizing discussions on days The different thematic issues, the role of youth, civil society and different stakeholders must be taken into account to ensure their full and effective participation. Furthermore, in the organization of the days, Africa-dedicated sessions will be dedicated with the aim of promoting understanding about solutions, challenges, and opportunities for the continent. Likewise, the role of regional cooperation, local governments and cities will be identified as cross-cutting issues. Other initiatives and topics of interest such as, but not limited to, transportation and waste should be included during the relevant days</p>

                    <a class="btn-sm btn-primary" href="https://www.cop27.eg/assets/files/COP27-PRESIDENCY-VISION-THEMATIC-DAYS-FULL-PROGRAM.pdf" data-i18n="downloPDF">Download PDF</a>
                    <div class="row g-3 mt-5">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary d-flex flex-column justify-content-center text-center border-bottom border-5 border-secondary rounded p-3" style="height: 200px;">
                                <h4 class="text-white mb-0">COP 27</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                            <div class="bg-secondary d-flex flex-column justify-content-center text-center border-bottom border-5 border-primary rounded p-3" style="height: 200px;">
                                <h4 class="text-white mb-0">EGYPT 2022</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Secion cop-->

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