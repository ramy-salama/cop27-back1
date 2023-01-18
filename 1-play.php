<?php include ("control/Controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SafeWorld</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="COP27" name="keywords">
    <meta content="Sharm El-Sheikh Climate Change Conference - November 2022" name="description">
    <link href="imgGame/img1/0-icon.png" rel="icon">

    <!--Style CSS-->
    <link href="lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/game.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="lib/font/Jost-font.css" rel="stylesheet">

</head>

<body dir="ltr">
    <!--Start Secion navbar----------------------------------------------------------->
    <?php include "nav.php" ?>
    <!-- End Secion navbar-->


    <!-- Start Secion cop-------------------------------------------------------------->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div id="game-over" class="control-buttons">
                    <span data-i18n="start">Start Game</span>
                </div>
                <div class="info-container">
                    <div class="name">
                        <span class="px-1" data-i18n="hello">Hello: </span><span><?php echo $_SESSION['name'];?></span>
                    </div>
                    <div class="icon">
                        <div id="light" class="haid">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <circle cx="12" cy="12" r="4" />
                                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>
                        </div>
                        <div id="dark" class="show">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moon" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#252b43" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg>
                        </div>
                    </div>
                    <div class="tries">
                    <p class="px-1 d-inline" data-i18n="wrong">Wrong Tries: </p><span>0</span>
                    </div>
                </div>

                <div class="memory-game-blocks">
                    <div class="game-block" data-letters="A">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img1/A.jpg"></img>
                        </div>
                    </div>
                    <div class="game-block" data-letters="A">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img2/A.jpg"></img>
                        </div>
                    </div>

                    <div class="game-block" data-letters="B">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img1/B.jpg"></img>
                        </div>
                    </div>
                    <div class="game-block" data-letters="B">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img2/B.jpg"></img>
                        </div>
                    </div>

                    <div class="game-block" data-letters="F">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img1/C.jpg"></img>
                        </div>
                    </div>
                    <div class="game-block" data-letters="F">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img2/C.jpg"></img>
                        </div>
                    </div>

                    <div class="game-block" data-letters="J">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img1/D.jpg"></img>
                        </div>
                    </div>
                    <div class="game-block" data-letters="J">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img2/D.jpg"></img>
                        </div>
                    </div>

                    <div class="game-block" data-letters="L">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img1/E.jpg"></img>
                        </div>
                    </div>
                    <div class="game-block" data-letters="L">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img2/E.jpg"></img>
                        </div>
                    </div>

                    <div class="game-block" data-letters="M">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img1/F.jpg"></img>
                        </div>
                    </div>
                    <div class="game-block" data-letters="M">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img2/F.jpg"></img>
                        </div>
                    </div>

                    <div class="game-block" data-letters="N">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img1/G.jpg"></img>
                        </div>
                    </div>
                    <div class="game-block" data-letters="N">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img2/G.jpg"></img>
                        </div>
                    </div>

                    <div class="game-block" data-letters="R">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img1/H.jpg"></img>
                        </div>
                    </div>
                    <div class="game-block" data-letters="R">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img2/H.jpg"></img>
                        </div>
                    </div>

                    <div class="game-block" data-letters="S">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img1/I.jpg"></img>
                        </div>
                    </div>
                    <div class="game-block" data-letters="S">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img2/I.jpg"></img>
                        </div>
                    </div>

                    <div class="game-block" data-letters="Y">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img1/J.jpg"></img>
                        </div>
                    </div>
                    <div class="game-block" data-letters="Y">
                        <div class="face front"></div>
                        <div class="face back">
                            <img src="imgGame/img2/J.jpg"></img>
                        </div>
                    </div>
                </div>

                <div class="reload mt-5">
                    <span onclick="location.reload()" data-i18n="reload">Reload</span>
                </div>

                <audio id="start" src="audio/start.mp3" preload="auto"></audio>
                <audio id="success" src="audio/win.mp3" preload="auto"></audio>
                <audio id="fall" src="audio/lost.mp3" preload="auto"></audio>
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
    <!--Javascript -->
    <script src="js/game.js"></script>
    <!-- trans code -->
    <script src="js/script.js"></script>
    <!-- trans code -->
    <script src="js/script.js"></script>
</body>

</html>