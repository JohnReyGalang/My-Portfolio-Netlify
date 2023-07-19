<?php include 'PHP/email.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="CSS/Slider/gallery.css" />


    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet">
    <title>My Portfolio</title>

    <link rel="stylesheet" href="CSS/Gallery Plugin/takefive-counters.min.css" />
    <link rel="stylesheet" href="CSS/Gallery Plugin/takefive-glyphs.min.css" />
    <link rel="stylesheet" href="CSS/Gallery Plugin/takefive-i18n-la.min.css" />
    <link rel="stylesheet" href="CSS/Gallery Plugin/takefive-maxsize.min.css" />
    <link rel="stylesheet" href="CSS/Gallery Plugin/takefive-polaroid.min.css" />
    <link rel="stylesheet" href="CSS/Gallery Plugin/takefive-slides.min.css" />
    <link rel="stylesheet" href="CSS/Gallery Plugin/takefive-toolbar.min.css" />
    <link rel="stylesheet" href="CSS/Gallery Plugin/takefive.min.css" />

    <link rel="stylesheet" href="CSS/Background/background.css" />

    <script async src="JS/GAllery/takefive-clean-empty-hash.js"></script>
    <script async src="JS/GAllery/takefive-clean-history.js"></script>
    <script async src="JS/GAllery/takefive-keyboard-events.js"></script>
    <script async src="JS/GAllery/takefive-touch-events.js"></script>
</head>

<body>
    <div id='stars'></div>

    <div id='stars2'></div>
    <div id='stars3'></div>
    <div class="d-flex" id="wrapper">
        <!--alert messages start-->
        <?php echo $alert; ?>
        <!--alert messages end-->

        <!-- Sidebar -->

        <aside class="sidebar" id="sidebar-wrapper">

            <div class="list-group list-group-flush my-3">

                <div class="skewed1">
                    <div class="skewed2">
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
                            <div class="image-text text-center text-white">
                                <div class="skew">
                                    <div class="profileInfo">
                                        <img class="mt-4" src="Images/quagmire.jpg" alt="logo">
                                        <h5>John Rey Galang</h5>
                                        <p class="text-secondary">Web Developer</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="information text-white">
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col">
                                <img src="Icons/LocationIcon.svg" alt="">
                            </div>
                            <div class="col-8 text-end me-3 ">
                                <p class="mb-auto">Cabuyao, Laguna</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row align-items-center text-center">
                            <div class="col">
                                <img src="Icons/ContactIcon.svg" alt="">
                            </div>
                            <div class="col-8 text-end  me-3">
                                <p class="mb-auto">+639702988561</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row align-items-center text-center">
                            <div class="col">
                                <img src="Icons/GmailIcon.svg" alt="">
                            </div>
                            <div class="col-8 text-end me-3">
                                <p class="mb-auto">johnreygalang12<br>@gmail.com</p>
                            </div>

                        </div>
                    </a>
                    <hr>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row">
                            <div class="col text-start">
                                <p class="mb-auto">HTML</p>
                            </div>
                            <div class="col text-end">
                                <p class="mb-auto">90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger start-0" role="progressbar" style="width: 90%; ">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row">
                            <div class="col text-start">
                                <p class="mb-auto">CSS</p>
                            </div>
                            <div class="col text-end">
                                <p class="mb-auto">68%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger start-0" role="progressbar" style="width: 68%; ">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row">
                            <div class="col text-start">
                                <p class="mb-auto">JS</p>
                            </div>
                            <div class="col text-end">
                                <p class="mb-auto">58%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger start-0" role="progressbar" style="width: 58%; ">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row">
                            <div class="col text-start">
                                <p class="mb-auto">PHP</p>
                            </div>
                            <div class="col text-end">
                                <p class="mb-auto">53%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger start-0" role="progressbar" style="width: 53%; ">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row">
                            <div class="col text-start">
                                <p class="mb-auto">SQL</p>
                            </div>
                            <div class="col text-end">
                                <p class="mb-auto">55%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger start-0" role="progressbar" style="width: 55%; ">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row">
                            <div class="col text-start">
                                <p class="mb-auto">FIGMA</p>
                            </div>
                            <div class="col text-end">
                                <p class="mb-auto">45%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger start-0" role="progressbar" style="width: 45%; ">
                                </div>
                            </div>
                        </div>
                    </a>
                    <hr>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row align-items-center">
                            <div class="col-2 text-start">
                                <img src="Icons/checkIcon.svg" alt="">
                            </div>
                            <div class="col text-start">
                                <p class="mb-auto">Bootstrap 5</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row align-items-center">
                            <div class="col-2 text-start">
                                <img src="Icons/checkIcon.svg" alt="">
                            </div>
                            <div class="col text-start">
                                <p class="mb-auto">JQuery</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row align-items-center">
                            <div class="col-2 text-start">
                                <img src="Icons/checkIcon.svg" alt="">
                            </div>
                            <div class="col text-start">
                                <p class="mb-auto">MySQL</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row align-items-center">
                            <div class="col-2 text-start">
                                <img src="Icons/checkIcon.svg" alt="">
                            </div>
                            <div class="col text-start">
                                <p class="mb-auto">Basic knowledge of CodeIgniter</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row align-items-center">
                            <div class="col-2 text-start">
                                <img src="Icons/checkIcon.svg" alt="">
                            </div>
                            <div class="col text-start">
                                <p class="mb-auto">Encoding</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <div class="row align-items-center">
                            <div class="col-2 text-start">
                                <img src="Icons/checkIcon.svg" alt="">
                            </div>
                            <div class="col text-start">
                                <p class="mb-auto">Microsoft Word, Excel and PowerPoint</p>
                            </div>
                        </div>
                    </a>
                    <hr>
                    <div class="downloadCV text-center mb-4">
                        <a class="btn btn-danger" href="John Rey D. Galang-resume.pdf">
                            Download CV<img class="ms-3" src="Icons/downloadIcon.svg"></a>
                    </div>

                </div>
            </div>
            <footer class="socialLink d-flex justify-content-center">
                <div class="row g-0 align-items-center ">
                    <div class="col-3">
                        <img src="Icons/facebookIcon.svg" style="width: 40%;">
                    </div>
                    <div class="col-3">
                        <img src="Icons/linkedInIcon.svg" style="width: 40%;">
                    </div>
                    <div class="col-3">
                        <img src="Icons/InstaIcon.svg" style="width: 40%;">
                    </div>
                    <div class="col-3">
                        <img src="Icons/githhubIcon.svg" style="width: 40%;">
                    </div>
                </div>
            </footer>

        </aside>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <main id="page-content-wrapper">
            <a href="#" id="scroll" style="display: none;"><span></span></a>
            <nav class="navbar navbar-expand-lg  bg-transparent py-4 px-4" id="home">
                <div class="d-flex align-items-center ">

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="menu-toggle">
                    </div>
                </div>

                <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="three col">
                        <div class="hamburger" id="hamburger-1">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </a>


                <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
                    <ul class="navbar-nav navbar-menu -fillable text-center ">
                        <li class="nav-item px-2">
                            <a class="nav-link text-white" href="#home">Home</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-white" href="#experience">Experience</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-white" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link text-white" href="#contact" tabindex="-1">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>


            <div class="col-lg-12 ">
                <div class="col-lg-8 m-auto">
                    <div class="row  row-cols-lg-2 ">
                        <div class="col mt-5 text-lg-start text-center ps-lg-5">
                            <h1 style="color: #8ee4af;">Hi, I'm John Rey</h1>
                            <p class="text1 text-white"></p>
                            <a class="offset rounded-3 btn-1 border-0 btn-lg text-decoration-none text-white"
                                href="#contact">Contact
                                me</a>
                        </div>
                        <div class="col d-flex justify-content justify-content-center">
                            <img src="Images/homeImage.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-11 m-lg-auto me-2 ms-2 mt-5">
                    <h4 class="fs-2 text-white">What I <span style="color: #5cdb95;">Do</span></h4>


                    <div class="row row-cols-lg-3 row-cols-1 ">
                        <div class="col d-flex justify-content-center mt-2">
                            <div class="card border-1"
                                style="border-radius: 10px; width: 20rem; color:white; background-color:  transparent; border-color: gray;">
                                <div class="card-body p-0">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-4">
                                            <img src="Icons/Figma Icon.svg">
                                        </div>
                                        <div class="col-8 text-start">
                                            <h5 class="card-title">Web Designing</h5>
                                        </div>
                                    </div>
                                    <a
                                        class="font-monospace fs-6 mt-1 me-1 text-white rounded-pill border border-1 border-secondary btn pe-2 ps-2 p-0 position-absolute top-0 end-0 ">45%</a>
                                    <p class="card-text ps-3 pe-3 pb-2">I design UI & UX. My tool
                                        used for designing is Figma.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center mt-2">
                            <div class="card border-1"
                                style="border-radius: 10px; width: 20rem; color:white; background-color:  transparent; border-color: gray;">
                                <div class="card-body p-0">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-4">
                                            <img src="Icons/Development Icon.svg">
                                        </div>
                                        <div class="col-8 text-start">
                                            <h5 class="card-title">Web Development</h5>
                                        </div>
                                    </div>
                                    <a
                                        class="font-monospace fs-6 mt-1 me-1 text-white rounded-pill border border-1 border-secondary btn pe-2 ps-2 p-0 position-absolute top-0 end-0 ">75%</a>
                                    <p class="card-text ps-3 pe-3 pb-2">I'm front-end developer with basic knowledge in
                                        back-end. I like to
                                        develop solid and scalable products with great user experience.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center mt-2">
                            <div class="card border-1"
                                style="border-radius: 10px; width: 20rem; color:white; background-color:  transparent; border-color: gray;">
                                <div class="card-body p-0">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-4">
                                            <img src="Icons/Word Icon.svg">
                                        </div>
                                        <div class="col-8 text-start">
                                            <h5 class="card-title">Encoding</h5>
                                        </div>
                                    </div>
                                    <a
                                        class="font-monospace fs-6 mt-1 me-1 text-white rounded-pill border border-1 border-secondary btn pe-2 ps-2 p-0 position-absolute top-0 end-0 ">90%</a>
                                    <p class="card-text ps-3 pe-3 pb-2"> Basic encoding.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-10 align-items-center m-lg-auto me-2 ms-2 mt-5 mt-lg-5" id="experience">
                <h4 class="fs-2 text-white mb-4">My <span style="color: #5cdb95;">Experience</span></h4>

                <hr>
                <div class="row g-0  align-items-center mt-5">
                    <div class="col-lg-3 d-flex justify-content-center p-2">
                        <a class=" rounded-pill border border-1 border-secondary btn ps-3 pe-3 p-2"
                            style="color: gray;">Feb 2019 - Apr 2019</a>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center text-lg-start text-center mb-lg-0 mb-3">
                        <div class="row text-white">
                            <span class="fw-bold">Pamantasan ng Cabuyao - Internship </span>
                            <span>Encoder, Technical Support</span>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center mb-lg-0 mb-3">
                        <img src="Icons/circle.svg">
                    </div>
                    <div class="col-lg-1">
                        <div class="center-con d-flex justify-content-center align-items-center">
                            <div class="round">
                                <div id="cta">
                                    <span class="arrow primera next "></span>
                                    <span class="arrow segunda next "></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-0 align-items-center mt-5">
                    <div class="col-lg-3 d-flex justify-content-center p-2">
                        <a class=" rounded-pill border border-1 border-secondary btn ps-3 pe-3 p-2"
                            style="color: gray;">Feb 2023 - Apr 2023</a>
                    </div>

                    <div class="col-lg-5 d-flex justify-content-center  text-lg-start text-center mb-lg-0 mb-3">
                        <div class="row text-white">
                            <span class="fw-bold">Dino Tech IT Solutions - Internship </span>
                            <span>Encoder, Front-end Developer</span>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center mb-lg-0 mb-3">
                        <img src="Icons/circle.svg">
                    </div>
                    <div class="col-lg-1">
                        <div class="center-con d-flex justify-content-center align-items-center">
                            <div class="round">
                                <div id="cta">
                                    <span class="arrow primera next "></span>
                                    <span class="arrow segunda next "></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 align-items-center m-lg-auto me-2 ms-2 mt-5 mt-lg-5" id="portfolio">

                <h4 class="fs-2 text-white mb-4">Featured <span style="color: #5cdb95;">Projects</span></h4>
                <hr>
                <ul class="portfolio-items">

                    <li class="item">
                        <figure class="projectsImage">
                            <div class="view"> <a href="#dinoTech"><img
                                        src="Images/Portfolio Img/DinoTech Portfolio/1sp Page.png" /> </div>
                            <figcaption class="projectTitle">
                                <p><span>Dino Tech Company Portfolio</a></span></p>
                                <p><span>Feb 23 - March</span></p>
                            </figcaption>
                        </figure>
                        <div class="date">2023</div>
                    </li>

                    <li class="item">
                        <figure class="projectsImage">
                            <div class="view"><a href="#casino"><img src="Images/Portfolio Img/Casino/HOME.png" />
                            </div>
                            <figcaption class="projectTitle">
                                <p><span>Casino</a></span></p>
                                <p><span>March</span></p>
                            </figcaption>
                        </figure>
                        <div class="date">2023</div>
                    </li>
                </ul>
            </div>

            <!--test gallery-->
            <section>
                <article class="verbose slide" id="dinoTech">
                    <header>
                        <h2>Dino Tech</h2>
                    </header>
                    <section>
                        <h2>Summary</h2>
                        <div style="text-align: center; display: inline-block;">
                            <figure style="display: inline-block;">
                                <a href="#landingPage"><img
                                        src="Images/Portfolio Img/DinoTech Portfolio/1sp Page.png" /></a>
                                <figcaption>Landing Page</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#aboutusPage"><img
                                        src="Images/Portfolio Img/DinoTech Portfolio/2nd page about us.png" /></a>
                                <figcaption>About Us</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#servicesPage"><img
                                        src="Images/Portfolio Img/DinoTech Portfolio/3rd page sevices.png" /></a>
                                <figcaption>Services</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#teamPage"><img
                                        src="Images/Portfolio Img/DinoTech Portfolio/4th page our team.png" /></a>
                                <figcaption>Team</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#missionvisionPage"><img
                                        src="Images/Portfolio Img/DinoTech Portfolio/5th page mission and vision.png" /></a>
                                <figcaption>Mission Vision</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#projectPage"><img
                                        src="Images/Portfolio Img/DinoTech Portfolio/6th page our projects.png" /></a>
                                <figcaption>Projects</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#seeProjects"><img
                                        src="Images/Portfolio Img/DinoTech Portfolio/See project.png" /></a>
                                <figcaption>Projects</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#contactusPage"><img
                                        src="Images/Portfolio Img/DinoTech Portfolio/7th page contact us form.png" /></a>
                                <figcaption>Contact</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#footerPage"><img
                                        src="Images/Portfolio Img/DinoTech Portfolio/8th page footer.png" /></a>
                                <figcaption>Footer</figcaption>
                            </figure>
                        </div>
                    </section>
                    <section class="roomy">
                        <h2>Dino Tech IT Solutions</h2>
                        <p>Dino Tech presents a professional and organized IT company
                            website with a simple design, clear images, and simple navigation,
                            providing clients with a smooth browsing experience.</p>
                    </section>
                    <nav>
                        <a href="#nowhere" rel="parent">Dino Tech Portfolio</a>
                        <a href="#casino" rel="next">Casino</a>

                    </nav>
                </article>

                <article class="foyer verbose slide" id="landingPage">
                    <header>
                        <h2>Slide 1 of 9</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/DinoTech Portfolio/1sp Page.png" itemprop="image" />
                        <figcaption itemprop="caption">Landing Page</figcaption>
                    </figure>
                    <nav>
                        <a href="#dinoTech" rel="index">All photos</a>
                        <a href="#aboutusPage" rel="next">About</a>
                        <a href="#footerPage" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/DinoTech Portfolio/1sp Page.png" rel="attachment"
                            itemprop="contentUrl" target="_blank">Image</a>
                    </nav>
                </article>

                <article class="foyer verbose slide" id="aboutusPage">
                    <header>
                        <h2>Slide 2 of 9</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/DinoTech Portfolio/2nd page about us.png" itemprop="image" />
                        <figcaption itemprop="caption">About Us</figcaption>
                    </figure>
                    <nav>

                        <a href="#dinoTech" rel="index">All photos</a>
                        <a href="#landingPage" rel="first">Landing Page</a>
                        <a href="#landingPage" rel="prev">Landing Page</a>
                        <a href="#servicesPage" rel="next">Services</a>
                        <a href="#footerPage" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/DinoTech Portfolio/2nd page about us.png" rel="attachment"
                            itemprop="contentUrl" target="_blank">Image</a>
                    </nav>
                </article>

                <article class="foyer verbose slide" id="servicesPage" itemprop="image">
                    <header>
                        <h2>Slide 3 of 9</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/DinoTech Portfolio/3rd page sevices.png" itemprop="image" />
                        <figcaption itemprop="caption">Services</figcaption>
                    </figure>
                    <nav>

                        <a href="#dinoTech" rel="index">All photos</a>
                        <a href="#landingPage" rel="first">Landing Page</a>
                        <a href="#aboutusPage" rel="prev">About Us</a>
                        <a href="#teamPage" rel="next">Team</a>
                        <a href="#footerPage" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/DinoTech Portfolio/3rd page sevices.png" rel="attachment"
                            itemprop="contentUrl" target="_blank">Image</a>

                    </nav>
                </article>

                <article class="foyer verbose slide" id="teamPage" itemprop="image">
                    <header>
                        <h2>Slide 4 of 9</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/DinoTech Portfolio/4th page our team.png" itemprop="image" />
                        <figcaption itemprop="caption">Team</figcaption>
                    </figure>
                    <nav>

                        <a href="#dinoTech" rel="index">All photos</a>
                        <a href="#landingPage" rel="first">Landing Page</a>
                        <a href="#servicesPage" rel="prev">Services</a>
                        <a href="#missionvisionPage" rel="next">Mission and Vision</a>
                        <a href="#footerPage" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/DinoTech Portfolio/4th page our team.png" rel="attachment"
                            itemprop="contentUrl" target="_blank">Image</a>
                    </nav>
                </article>

                <article class="foyer verbose slide" id="missionvisionPage" itemprop="image">
                    <header>
                        <h2>Slide 5 of 9</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/DinoTech Portfolio/5th page mission and vision.png"
                            itemprop="image" />
                        <figcaption itemprop="caption">Mission and Vision</figcaption>
                    </figure>

                    <nav>

                        <a href="#dinoTech" rel="index">All photos</a>
                        <a href="#landingPage" rel="first">Landing Page</a>
                        <a href="#teamPage" rel="prev">Team Page</a>
                        <a href="#projectPage" rel="next">Projects</a>
                        <a href="#footerPage" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/DinoTech Portfolio/5th page mission and vision.png page our team.png"
                            rel="attachment" itemprop="contentUrl" target="_blank">Image</a>
                    </nav>
                </article>

                <article class="foyer verbose slide" id="projectPage" itemprop="image">
                    <header>
                        <h2>Slide 6 of 9</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/DinoTech Portfolio/6th page our projects.png" itemprop="image" />
                        <figcaption itemprop="caption">Projects</figcaption>
                    </figure>
                    <nav>

                        <a href="#dinoTech" rel="index">All photos</a>
                        <a href="#landingPage" rel="first">Landing Page</a>
                        <a href="#missionvisionPage" rel="prev">Mission and Vision</a>
                        <a href="#seeProjects" rel="next">Projects</a>
                        <a href="#footerPage" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/DinoTech Portfolio/6th page our team.png" rel="attachment"
                            itemprop="contentUrl" target="_blank">Image</a>

                    </nav>
                </article>

                <article class="foyer verbose slide" id="seeProjects" itemprop="video">
                    <header>
                        <h2>Slide 7 of 9</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/DinoTech Portfolio/See project.png" itemprop="image" />
                        <figcaption itemprop="caption">Projects</figcaption>

                    </figure>
                    <nav>

                        <a href="#dinoTech" rel="index">All photos</a>
                        <a href="#landingPage" rel="first">Landing Page</a>
                        <a href="#projectPage" rel="prev">Projects</a>
                        <a href="#contactusPage" rel="next">Contact</a>
                        <a href="#footerPage" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/DinoTech Portfolio/See project.png" rel="attachment"
                            itemprop="contentUrl" target="_blank">Image</a>
                    </nav>
                </article>

                <article class="foyer verbose slide" id="contactusPage">
                    <header>
                        <h2>Slide 8 of 9</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/DinoTech Portfolio/7th page contact us form.png"
                            itemprop="image" />
                        <figcaption itemprop="caption">Contact</figcaption>
                    </figure>
                    <nav>
                        <div>

                            <a href="#dinoTech" rel="index">All photos</a>
                            <a href="#landingPage" rel="first">Landing Page</a>
                            <a href="#seeProjects" rel="prev">Projects</a>
                            <a href="#footerPage" rel="next last">Footer</a>
                            <a href="#footerPage" rel="last">Footer</a>
                            <a href="Images/Portfolio Img/DinoTech Portfolio/7th page contact us form.png"
                                rel="attachment" itemprop="contentUrl" target="_blank">Image</a>
                        </div>

                    </nav>
                </article>

                <article class="foyer verbose slide" id="footerPage">
                    <header>
                        <h2>Slide 9 of 9</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/DinoTech Portfolio/8th page footer.png" />
                        <figcaption itemprop="caption">Footer</figcaption>
                    </figure>
                    <nav>

                        <a href="#dinoTech" rel="index">All photos</a>
                        <a href="#landingPage" rel="first">Landing Page</a>
                        <a href="#contactusPage" rel="prev">Contact</a>
                        <a href="Images/Portfolio Img/DinoTech Portfolio/8th page footer.png" rel="attachment"
                            itemprop="contentUrl" target="_blank">View Content</a>
                    </nav>
                </article>

                <!--CASINO-->
                <article class="verbose slide" id="casino">
                    <header>
                        <h2>Casino</h2>
                    </header>
                    <section>
                        <h2>Summary</h2>
                        <div style="text-align: center; display: inline-block;">
                            <figure style="display: inline-block;">
                                <a href="#casinoHome"><img src="Images/Portfolio Img/Casino/HOME.png" /></a>
                                <figcaption>Home Page</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#slotGames"><img src="Images/Portfolio Img/Casino/Slots Game.png" /></a>
                                <figcaption>Slots Games</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#fishiGames"><img src="Images/Portfolio Img/Casino/FishingGame.png" /></a>
                                <figcaption>Fishing Games</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#liveCasino"><img src="Images/Portfolio Img/Casino/Live Casino.png" /></a>
                                <figcaption>Live Casino</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#sportsBetting"><img
                                        src="Images/Portfolio Img/Casino/Sports Betting.png" /></a>
                                <figcaption>Sports Betting</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#pokerGames"><img src="Images/Portfolio Img/Casino/Poker Games.png" /></a>
                                <figcaption>Poker Games</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#lotteryGames"><img src="Images/Portfolio Img/Casino/Lottery Games.png" /></a>
                                <figcaption>Lottery Games</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#events"><img src="Images/Portfolio Img/Casino/Events.png" /></a>
                                <figcaption>events</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#casinoSummary"><img src="Images/Portfolio Img/Casino/MySummary.png" /></a>
                                <figcaption>My Summary</figcaption>
                            </figure>
                            <figure style="display: inline-block;">
                                <a href="#casinoFooter"><img src="Images/Portfolio Img/Casino/Footer.png" /></a>
                                <figcaption>Footer</figcaption>
                            </figure>
                        </div>
                    </section>
                    <section class="roomy">
                        <h2>Casino - Mirage</h2>
                        <p>Mirage provides an easy-to-use interface for casino users with
                            clear design and easy navigation that will guarantee an entertaining gambling experience for
                            users.
                        </p>
                    </section>
                    <nav>
                        <a href="#nowhere" rel="parent">Casino</a>
                        <a href="#dinoTech" rel="prev">Dino Tech Portfolio</a>

                    </nav>
                </article>

                <article class="foyer verbose slide" id="casinoHome">
                    <header>
                        <h2>Slide 1 of 10</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/Casino/HOME.png" />
                        <figcaption itemprop="caption">Home Page</figcaption>
                    </figure>
                    <nav>
                        <a href="#casino" rel="index">All photos</a>
                        <a href="#slotGames" rel="next">Slot Games</a>
                        <a href="#casinoFooter" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/Casino/HOME.png" rel="attachment" itemprop="contentUrl"
                            target="_blank">Image</a>
                    </nav>
                </article>

                <article class="foyer verbose slide" id="slotGames">
                    <header>
                        <h2>Slide 2 of 10</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/Casino/Slots Game.png" itemprop="image" />
                        <figcaption itemprop="caption">Slot Games</figcaption>
                    </figure>
                    <nav>

                        <a href="#casino" rel="index">All photos</a>
                        <a href="#casinoHome" rel="first">Home Page</a>
                        <a href="#casinoHome" rel="prev">Home Page</a>
                        <a href="#fishingGames" rel="next">Fishing Games</a>
                        <a href="#casinoFooter" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/Casino/Slots Game.png" rel="attachment" itemprop="contentUrl"
                            target="_blank">Image</a>
                    </nav>
                </article>

                <article class="foyer verbose slide" id="fishingGames" itemprop="image">
                    <header>
                        <h2>Slide 3 of 10</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/Casino/FishingGame.png" itemprop="image" />
                        <figcaption itemprop="caption">Fishing Games</figcaption>
                    </figure>
                    <nav>

                        <a href="#casino" rel="index">All photos</a>
                        <a href="#casinoHome" rel="first">Home Page</a>
                        <a href="#slotGames" rel="prev">Slot Games</a>
                        <a href="#liveCasino" rel="next">Live Casino</a>
                        <a href="#casinoFooter" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/Casino/FishingGame.png" rel="attachment" itemprop="contentUrl"
                            target="_blank">Image</a>

                    </nav>
                </article>

                <article class="foyer verbose slide" id="liveCasino" itemprop="image">
                    <header>
                        <h2>Slide 4 of 10</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/Casino/Live Casino.png" itemprop="image" />
                        <figcaption itemprop="caption">Live Casino</figcaption>
                    </figure>
                    <nav>

                        <a href="#casino" rel="index">All photos</a>
                        <a href="#casinoHome" rel="first">Home Page</a>
                        <a href="#fishingGames" rel="prev">Fishing Games</a>
                        <a href="#sportsBetting" rel="next">Sports Betting</a>
                        <a href="#casinoFooter" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/Casino/Live Casino.png" rel="attachment" itemprop="contentUrl"
                            target="_blank">Image</a>
                    </nav>
                </article>

                <article class="foyer verbose slide" id="sportsBetting" itemprop="image">
                    <header>
                        <h2>Slide 5 of 10</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/Casino/Sports Betting.png" itemprop="image" />
                        <figcaption itemprop="caption">Sports Betting</figcaption>
                    </figure>

                    <nav>

                        <a href="#casino" rel="index">All photos</a>
                        <a href="#casinoHome" rel="first">Home Page</a>
                        <a href="#liveCasino" rel="prev">Live Casino</a>
                        <a href="#pokerGames" rel="next">Poker Games</a>
                        <a href="casinoFooter" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/Casino/Sports Betting.png" rel="attachment" itemprop="contentUrl"
                            target="_blank">Image</a>
                    </nav>
                </article>

                <article class="foyer verbose slide" id="pokerGames" itemprop="image">
                    <header>
                        <h2>Slide 6 of 10</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/Casino/Poker Games.png" itemprop="image" />
                        <figcaption itemprop="caption">Poker Games</figcaption>
                    </figure>
                    <nav>

                        <a href="#casino" rel="index">All photos</a>
                        <a href="#casinoHome" rel="first">Home Page</a>
                        <a href="#sportsBetting" rel="prev">Sports Betting</a>
                        <a href="#lotteryGames" rel="next">Lottery Games</a>
                        <a href="#casinoFooter" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/Casino/Poker Games.png" rel="attachment" itemprop="contentUrl"
                            target="_blank">Image</a>

                    </nav>
                </article>

                <article class="foyer verbose slide" id="lotteryGames" itemprop="video">
                    <header>
                        <h2>Slide 7 of 10</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/Casino/Lottery Games.png" itemprop="image" />
                        <figcaption itemprop="caption">Lottery Games</figcaption>

                    </figure>
                    <nav>

                        <a href="#casino" rel="index">All photos</a>
                        <a href="#casinoHome" rel="first">Home Page</a>
                        <a href="#pokerGames" rel="prev">Poker Games</a>
                        <a href="#events" rel="next">Events</a>
                        <a href="#casinoFooter" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/Casino/Lottery Games.png" rel="attachment" itemprop="contentUrl"
                            target="_blank">Image</a>
                    </nav>
                </article>

                <article class="foyer verbose slide" id="events">
                    <header>
                        <h2>Slide 8 of 10</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/Casino/Events.png" itemprop="image" />
                        <figcaption itemprop="caption">Events</figcaption>
                    </figure>
                    <nav>
                        <div>

                            <a href="#casino" rel="index">All photos</a>
                            <a href="#casinoHome" rel="first">Home Page</a>
                            <a href="#lotteryGames" rel="prev">Lottery Games</a>
                            <a href="#casinoSummary" rel="next">My Summary</a>
                            <a href="#casinoFooter" rel="last">Footer</a>
                            <a href="Images/Portfolio Img/Casino/Events.png" rel="attachment" itemprop="contentUrl"
                                target="_blank">Image</a>
                        </div>

                    </nav>
                </article>

                <article class="foyer verbose slide" id="casinoSummary">
                    <header>
                        <h2>Slide 9 of 10</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/Casino/MySummary.png" />
                        <figcaption itemprop="caption">My Summary</figcaption>
                    </figure>
                    <nav>

                        <a href="#casino" rel="index">All photos</a>
                        <a href="#casinoHome" rel="first">Home Page</a>
                        <a href="#events" rel="prev">Events</a>
                        <a href="#casinoFooter" rel="next last">Footer</a>
                        <a href="#casinoFooter" rel="last">Footer</a>
                        <a href="Images/Portfolio Img/Casino/MySummary.png" rel="attachment" itemprop="contentUrl"
                            target="_blank">View Content</a>
                    </nav>
                </article>

                <article class="foyer verbose slide" id="casinoFooter">
                    <header>
                        <h2>Slide 10 of 10</h2>
                    </header>
                    <figure>
                        <img src="Images/Portfolio Img/Casino/Footer.png" />
                        <figcaption itemprop="caption">Footer</figcaption>
                    </figure>
                    <nav>

                        <a href="#casino" rel="index">All photos</a>
                        <a href="#casinoHome" rel="first">Home Page</a>
                        <a href="#casinoSummary" rel="prev">My Summary</a>
                        <a href="Images/Portfolio Img/Casino/Footer.png" rel="attachment" itemprop="contentUrl"
                            target="_blank">View Content</a>
                    </nav>
                </article>
            </section>
            <!--end of portfolio-->

            <div class="col-lg-10 m-lg-auto me-2 ms-2" id="contact">
                <hr class="mt-5" style="width: 100%;">
                <div class="row row-cols-1 row-cols-lg-2 mt-5">
                    <div class="col">
                        <a class=" rounded-pill border border-1 border-light btn ps-3 pe-3 p-2" style="color: gray;">Get
                            in Touch</a>
                        <div class="row">

                            <span class="fs-1 text-white">Let's make your brand brilliant!</span>
                            <span style="color: gray;">If you would like to work with me or want to get in touch I'd
                                love to hear from
                                you!</span>
                            <span class="fs-1 fw-bold text-decoration-underline" style="color: #5cdb95;">+639 702 988
                                561</span>
                        </div>
                    </div>
                    <div class="col">
                        <form method="post">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-4">
                                        <div class="input-group ">
                                            <input type="text"
                                                class="bg-transparent form-control border-secondary text-secondary"
                                                id="username" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-4">
                                        <div class="input-group">
                                            <input type="email"
                                                class="bg-transparent form-control border-secondary text-secondary"
                                                id="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-4">
                                    <div class="input-group">
                                        <input type="text"
                                            class="bg-transparent form-control border-secondary text-secondary"
                                            id="subject" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-4">

                                    <textarea rows="5" style="color: gray; width: 100%;" id="message" name="message"
                                        class="bg-transparent border-1 rounded-3">Message</textarea>

                                </div>
                            </div>
                            <div class="d-grid gap-2 mb-3">


                                <button type="submit" name="send" class="btn fs-5 btnslide">SEND A MESSAGE</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- /#page-content-wrapper -->

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/modernizr-1.5.min.js"></script>
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/scripts.js"></script>
    <script src="JS/plugins/jquery.mousewheel.js"></script>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");

        };


        $('.text1').text('<p>I develop websites</p>');

        function myFunction(x) {
            if (x.matches) { // If media query matches
                el.classList.remove('toggled');

            }
        }
        var x = window.matchMedia("(min-width: 768px)")
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction) // Attach listener function on state changes

        $('.round').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            $('.arrow').toggleClass('bounceAlpha');
        });

        //checks if element it is called on is visible (only checks horizontally
        (function ($) {
            var $window = $(window);

            $.fn.isVisible = function () {
                var $this = $(this),
                    Left = $this.offset().left,
                    visibleWidth = $window.width();

                return Left < visibleWidth;
            }
        })(jQuery);

        (function ($) {
            var list = $('.portfolio-items'),
                showVisibleItems = function () {
                    list.children('.item:not(.falldown)').each(function (el, i) {
                        var $this = $(this);
                        if ($this.isVisible()) {
                            $this.addClass('falldown');
                        }
                    });
                };

            //initially show all visible items before any scroll starts
            showVisibleItems();

            //then on scroll check for visible items and show them
            list.scroll(function () {
                showVisibleItems();
            });

            //image hover pan effect
            list.on('mousemove', 'img', function (ev) {
                var $this = $(this),
                    posX = ev.pageX,
                    posY = ev.pageY,
                    data = $this.data('cache');
                //cache necessary variables
                if (!data) {
                    data = {};
                    data.marginTop = -parseInt($this.css('top')),
                        data.marginLeft = -parseInt($this.css('left')),
                        data.parent = $this.parent('.view'),
                        $this.data('cache', data);
                }

                var originX = data.parent.offset().left,
                    originY = data.parent.offset().top;

                //move image
                $this.css({
                    'left': -(posX - originX) / data.marginLeft,
                    'top': -(posY - originY) / data.marginTop
                });
            });


            list.on('mouseleave', '.item', function (e) {
                $(this).find('img').css({
                    'left': '0',
                    'top': '0'
                });
            });

            //add mouse wheel support with the jquery.mousewheel plugin
            list.mousewheel(function (event, delta) {

                this.scrollLeft -= (delta * 60);

                event.preventDefault();

            });

        })(jQuery);

        //scroll back

        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#scroll').fadeIn();
                } else {
                    $('#scroll').fadeOut();
                }
            });
            $('#scroll').click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        });


        //hamburger
        $(document).ready(function () {
            $(".hamburger").click(function () {
                $(this).toggleClass("is-active");
            });
        });

        //alert message
        $(document).ready(function () {

            setTimeout(function () {

                $('.flash').addClass('hide');

            }, 5000)

            $('.flash .close').click(function () {

                $('.flash').addClass('hide');

            })

        })
    </script>
</body>

</html>