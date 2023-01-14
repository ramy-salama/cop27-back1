

<nav dir="ltr" class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-3 px-lg-0 shadow-lg">
        <a href="index.html" class="navbar-brand ms-lg-5">
            <h1 class="display-5 m-0 text-primary">Safe<span class="text-secondary">World</span></h1>
        </a>
        <select class="btn btn-sm h-25  mx-2">
            <option value="en" data-i18n="english" selected>English</option>
            <option value="ar" data-i18n="arabic">Arabic</option>
        </select>

        <p  class=" m-0 text-primary" data-i18n="hello">Hello : </p>
        <span style="font-size:small;" class="text-secondary mx-2"> <?php echo $_SESSION['name'] ?> </span>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 mx-auto">
                <a href="home.php" class="nav-item nav-link" data-i18n="home">Home</a>
                <a href="0-cop.php" class="nav-item nav-link" data-i18n="cop">COP27</a>
                <a href="1-play.php" class="nav-item nav-link" data-i18n="play">Play</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-i18n="pages">Pages</a>
                    <div class="dropdown-menu m-0 rounded-3">
                        <a href="2-climate.php" class="dropdown-item hover" data-i18n="climate">Climate Change</a>
                        <a href="3-reasons.php" class="dropdown-item hover" data-i18n="causes">Causes of climate change</a>
                        <a href="4-solution.php" class="dropdown-item hover" data-i18n="solutions">Solutions and alternatives</a>
                        <a href="5-egypt.php" class="dropdown-item hover" data-i18n="egypt">Egypt's efforts</a>
                    </div>
                </div>
                <a href="logout.php" class="nav-item nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="44" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                    <path d="M7 12h14l-3 -3m0 6l3 -3" />
                    </svg>
                </a>
            </div>
        </div> 
    </nav>