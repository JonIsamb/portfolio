<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Simple line icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    @vite(['resources/css/styles.css'])
</head>
<body id="page-top">
<!-- Navigation-->
<a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"><a href="#page-top">Menu</a></li>
        <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
        <li class="sidebar-nav-item"><a href="#technologies">Compétences</a></li>
        <li class="sidebar-nav-item"><a href="#projets">Projets</a></li>
        <li class="sidebar-nav-item"><a href="#parcours">Parcours</a></li>
        <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
    </ul>
</nav>
<!-- Header-->
<header class="masthead d-flex align-items-center">
    <div class="container px-4 px-lg-5 text-center">
        <h1 class="mb-1">Jonathan Isambourg</h1>
        <h3 class="mb-5"><em>Développeur Web</em></h3>
        <a class="btn btn-primary btn-xl" href="#technologies">Compétences</a>
        <a class="btn btn-primary btn-xl m-3" href="{{asset("files/cv.pdf")}}" download="CV_Jonathan_ISAMBOURG">Télécharger mon CV</a>
    </div>
</header>


<section class="content-section bg-primary text-white text-center" id="technologies">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading">
            <h3 class="text-secondary mb-0">Compétences</h3>
            <h2 class="mb-5">Technologies</h2>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <div class="service-icon rounded-circle mx-auto mb-3"><img src="{{asset("/icons/php.png")}}" width="auto" height="65%"></div>
                <h4><strong>PHP</strong></h4>
                <p class="text-faded mb-0">Framework Laravel</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <div class="service-icon rounded-circle mx-auto mb-3"><img src="{{asset("/icons/python.png")}}" width="auto" height="65%"></div>
                <h4><strong>Python</strong></h4>
                <p class="text-faded mb-0">Framework Flask</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                <div class="service-icon rounded-circle mx-auto mb-3"><img src="{{asset("/icons/server.png")}}" width="auto" height="65%"></div>
                <h4><strong>SQL</strong></h4>
                <p class="text-faded mb-0">Gestion des droits, fonctions, requêtes</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-icon rounded-circle mx-auto mb-3"><img src="{{asset("/icons/java.png")}}" width="auto" height="65%"></div>
                <h4><strong>Java</strong></h4>
                <p class="text-faded mb-0">Programmation orientée objet, JavaFX</p>
            </div>
        </div><hr>
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <div class="service-icon rounded-circle mx-auto mb-3"><img src="{{asset("/icons/git.png")}}" width="auto" height="65%"></div>
                <h4><strong>Outils de travail collaboratif</strong></h4>
                <p class="text-faded mb-0">Git, Gitlab, Github</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <div class="service-icon rounded-circle mx-auto mb-3"><img src="{{asset("/icons/browser.png")}}" width="auto" height="65%"></div>
                <h4><strong>Web</strong></h4>
                <p class="text-faded mb-0">HTML, CSS, Bootstrap</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                <div class="service-icon rounded-circle mx-auto mb-3"><img src="{{asset("/icons/operating-system.png")}}" width="auto" height="65%"></div>
                <h4><strong>OS</strong></h4>
                <p class="text-faded mb-0">Windows, Linux</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-icon rounded-circle mx-auto mb-3"><img src="{{asset("/icons/computing.png")}}" width="auto" height="65%"></div>
                <h4><strong>Systèmes et réseaux</strong></h4>
                <p class="text-faded mb-0">Connaissances basiques</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio-->
<section class="content-section" id="projets">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row ">
                @foreach($projets as $projet)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-fluid" src="{{asset($projet->image)}}" alt="..." style="height: 45vh; width: 100%"/>
                            <div class="card-body">
                                <h3>{{$projet->nom}}</h3>
                                <p class="card-text">{{$projet->description}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        @foreach($projet->tags as $tag)
                                            <span class="badge badge-info" style="background-color: black; border: solid 1px white">{{$tag->nom}}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>



<section class="content-section bg-primary text-white text-center" id="parcours">
    <h1>Parcours</h1>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-12">

                <div class="horizontal-timeline">

                    <ul class="list-inline items">
                        <li class="list-inline-item items-list">
                            <div class="px-4">
                                <div class="event-date badge bg-info">2019</div>
                                <h5 class="pt-2">Baccalauréat</h5>
                                <p class="text-muted">Obtiention du baccalauréat série S Section Européenne Mention Bien</p>
                            </div>
                        </li>
                        <li class="list-inline-item items-list">
                            <div class="px-4">
                                <div class="event-date badge bg-success">2019-2021</div>
                                <h5 class="pt-2">Polytech' Lille</h5>
                                <p class="text-muted">Parcours des Écoles d'Ingénieur Polytech</p>
                            </div>
                        </li>
                        <li class="list-inline-item items-list">
                            <div class="px-4">
                                <div class="event-date badge bg-danger">2021-2024</div>
                                <h5 class="pt-2">BUT Informatique</h5>
                                <p class="text-muted">BUT Informatique à l'IUT de Lens. Parcours Réalisation d'applications</p>
                            </div>
                        </li>
                        <li class="list-inline-item items-list">
                            <div class="px-4">
                                <div class="event-date badge bg-warning">Janvier 2023 - Mai 2023</div>
                                <h5 class="pt-2">Mobilité</h5>
                                <p class="text-muted">Semestre de mobilité à Chicoutimi, Québec</p>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>
        </div>

    </div>
</section>

<footer class="footer text-center" id="contact">
    <h1>Contact</h1>
    <div class="container-sm" style="width: 500px">
        <div class="row">
            <div class="col-sm">
                <div class="service-icon rounded-circle mx-auto mb-3">
                    <a href="mailto:jonathan.isambourg1@gmail.com">
                        <img src="{{asset("/icons/envelope.svg")}}" width="auto" height="65%">
                    </a>
                </div>
                <p class="text-faded mb-0 text-black">jonathan.isambourg1@gmail.com</p>
            </div>
            <div class="col-sm">
                <div class="service-icon rounded-circle mx-auto mb-3">
                    <a href="tel:+33768948375">
                        <img src="{{asset("/icons/phone.svg")}}" width="auto" height="65%">
                    </a>
                </div>
                <p class="text-faded mb-0 text-black">07.68.94.83.75</p>
            </div>
            <div class="col-sm">
                <div class="service-icon rounded-circle mx-auto mb-3">
                    <a href="https://www.linkedin.com/in/jonathan-isambourg/">
                        <img src="{{asset("/icons/linkedin-original.svg")}}" width="auto" height="65%">
                    </a>
                </div>
                <p class="text-faded mb-0 text-black">LinkedIn</p>
            </div>
            <div class="col-sm">
                <div class="service-icon rounded-circle mx-auto mb-3">
                    <a href="https://github.com/JonIsamb?tab=repositories">
                        <img src="{{asset("/icons/github.svg")}}" width="auto" height="65%">
                    </a>
                </div>
                <p class="text-faded mb-0 text-black">GitHub</p>
            </div>
        </div>
    </div>

</footer>



<a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
@vite(['resources/js/bootstrap.bundle.min.js'])
@vite(['resources/js/scripts.js'])
</body>
</html>
