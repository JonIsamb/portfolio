<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @vite(['resources/js/app.js'])
    </head>
    <body id="page-top">
        <div class="container-fluid" style="background-color: #faedcd">
            <div class="row vh-100">
                <div class="col-md-6 col-xs-12 d-flex align-items-center justify-content-center">
                    <img class="rounded-circle img-fluid" src="{{asset("projets/photo_cv.jpg")}}" alt="Ma photo" style="height: 25vmax">
                </div>
                <div class="col-md-6 col-xs-12 d-flex align-items-center justify-content-center pe-md-5">
                    <div class="d-block text-sm-center">
                        <h1>Jonathan Isambourg</h1>
                        <h3>Développeur Back-End</h3>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid pb-4" style="background-color: #fefae0">
            <div class="col text-center">
                <div class="row pt-5">
                    <h2>Mes technologies préférées</h2>
                </div>
                <div class="row align-items-center m-4">
                    <div class="col-md-3 col-sm-12">
                        <img class="img-fluid" src="{{asset("icons/python.png")}}" alt="Python"  style="height: 10vmax">
                        <h4 class="m-3">Python</h4>
                    </div>
                    <div class="col-md-3 d-block col-sm-12">
                        <p>Mon langage de cœur, celui qui m'a fait découvert l'informatique</p>
                        <p>Je l'ai d'abord utilisé pour de l'algorithmique et j'ai par la suite découvert le framework Flask pour développer des applications</p>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <img class="img-fluid" src="{{asset("projets/msi.png")}}" alt="Station météo">
                    </div>
                    <div class="col-md-3 d-block col-sm-12 pt-sm-3">
                        <p>Application récupérant la météo des villes souhaitées via une API</p>
                        <p>Les informations météorologiques sont ensuite récupérées de manière régulière et affichées dans un graphique</p>
                    </div>
                </div>
                <div class="row align-items-center m-4">
                    <div class="col-md-3 col-sm-12">
                        <img class="img-fluid" src="{{asset("icons/php.png")}}" alt="PHP" style="height: 10vmax">
                        <h4 class="m-3">PHP</h4>
                    </div>
                    <div class="col-md-3 d-block col-sm-12">
                        <p>Le premier langage qui m'a permis de développer des applications via Laravel</p>
                        <p>J'ai pu l'utiliser dans différents projets lors de mon BUT et je l'utilise actuellement pour faire ce portfolio</p>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <img class="img-fluid" src="{{asset("projets/marathon.png")}}" alt="Station météo">
                    </div>
                    <div class="col-md-3 d-block col-sm-12 pt-sm-3">
                        <p>Galerie de musée en ligne réalisée en 48 heures</p>
                        <p>Site web réalisé par équipe de 8, mettant en scène une exposition sur le thème de l'IA</p>
                    </div>
                </div>
                <div class="row align-items-center m-4">
                    <div class="col-md-3 col-sm-12">
                        <img class="img-fluid rounded" src="{{asset("icons/java.png")}}" alt="Java" style="height: 10vmax">
                        <h4 class="m-3">Java</h4>
                    </div>
                    <div class="col-md-3 d-block col-sm-12">
                        <p>Ma première initiation à la programmation orientée objet</p>
                        <p>Il m'a servi dans différents projets dont notamment un générateur de fractales</p>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <img class="img-fluid h-auto rounded" src="{{asset("projets/space-invaders.png")}}" alt="Space Invaders">
                    </div>
                    <div class="col-md-3 d-block col-sm-12 pt-sm-3">
                        <p>Jeu Space Invaders</p>
                        <p>Jeu réalisé avec JavaFX dans le but de mettre en pratique les patrons de conception</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-color: #faedcd">
            <div class="col">
                <div class="row d-flex align-items-center text-center justify-content-center pt-5 pb-3">
                    <h2>Autres compétences</h2>
                </div>
                <div class="row d-flex align-items-center text-center justify-content-center">
                    <div class="col-md-auto d-flex align-items-center text-center justify-content-center">
                        <div class="w-50 text-center p-lg-4">
                            <img class="img-fluid h-50" src="{{asset("icons/server.png")}}" alt="SQL">
                            <h4 class="mt-2">SQL</h4>
                        </div>
                    </div>
                    <div class="col-md-auto d-flex align-items-center text-center justify-content-center">
                        <div class="w-50 text-center p-lg-4">
                            <img class="img-fluid h-50" src="{{asset("icons/browser.png")}}" alt="Station météo">
                            <h4 class="mt-2">HTML, CSS, Bootstrap</h4>
                        </div>
                    </div>
                    <div class="col-md-auto d-flex align-items-center text-center justify-content-center">
                        <div class="w-50 text-center p-lg-4">
                            <img class="img-fluid h-50" src="{{asset("icons/typescript.png")}}" alt="TypeScript">
                            <h4 class="mt-2">TypeScript</h4>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center text-center justify-content-center">
                    <div class="col-md-auto d-flex align-items-center text-center justify-content-center">
                        <div class="w-50 text-center p-lg-4">
                            <img class="h-50 img-fluid" src="{{asset("icons/angular.png")}}" alt="Angular">
                            <h4 class="mt-2">Angular</h4>
                        </div>
                    </div>
                    <div class="col-md-auto d-flex align-items-center text-center justify-content-center">
                        <div class="w-50 text-center p-lg-4">
                            <img class="img-fluid h-50" src="{{asset("icons/git.png")}}" alt="Git">
                            <h4 class="mt-2">Git, GitHub</h4>
                        </div>
                    </div>
                    <div class="col-md-auto d-flex align-items-center text-center justify-content-center">
                        <div class="w-50 text-center p-lg-4">
                            <img class="img-fluid h-50" src="{{asset("icons/operating-system.png")}}" alt="OS">
                            <h4 class="mt-2">Linux, Windows</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-5" style="background-color: #fefae0">
            <div class="row text-center pb-5">
                <h2 class="pb-3">
                    Mon parcours
                </h2>
            </div>
            <div class="row mt-lg-3">
                <div class="col-lg-12">
                    <div class="horizontal-timeline">
                        <ul class="list-inline items">
                            <li class="list-inline-item items-list">
                                <div class="px-4">
                                    <div class="event-date badge bg-info">2019</div>
                                    <h5 class="pt-2">Baccalauréat</h5>
                                    <p class="lead">Obtiention du baccalauréat série S Section Européenne Mention Bien</p>
                                </div>
                            </li>
                            <li class="list-inline-item items-list">
                                <div class="px-4">
                                    <div class="event-date badge bg-success">2019-2021</div>
                                    <h5 class="pt-2">Polytech' Lille</h5>
                                    <p class="lead">Parcours des Écoles d'Ingénieur Polytech</p>
                                </div>
                            </li>
                            <li class="list-inline-item items-list">
                                <div class="px-4">
                                    <div class="event-date badge bg-danger">2021-2024</div>
                                    <h5 class="pt-2">BUT Informatique</h5>
                                    <p class="lead">BUT Informatique à l'IUT de Lens. Parcours Réalisation d'applications</p>
                                </div>
                            </li>
                            <li class="list-inline-item items-list">
                                <div class="px-4">
                                    <div class="event-date badge bg-warning">Janvier 2023 - Mai 2023</div>
                                    <h5 class="pt-2">Mobilité</h5>
                                    <p class="lead">Semestre de mobilité à Chicoutimi, Québec</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row text-center pb-5 pt-5">
                <h2 class="pb-3">
                    Contact
                </h2>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-auto col-lg-3 text-center">
                    <div class="row">
                        <a href="mailto:jonathan@isambourg.me">
                            <img src="{{asset("icons/envelope.svg")}}">
                        </a>
                        <p class="lead">jonathan@isambourg.me</p>
                    </div>
                    <div class="row">
                        <a href="tel:+33768948375">
                            <img src="{{asset("icons/phone.svg")}}">
                        </a>
                        <p class="lead">+33 7 68 94 83 75</p>
                    </div>
                </div>
                <div class="col-md-auto col-lg-2 text-center">
                    <a class="btn btn-primary" href="{{asset("files/cv.pdf")}}" download="CV_ISAMBOURG_Jonathan">Télécharger mon CV</a>
                </div>
                <div class="col-md-auto col-lg-3 text-center">
                    <div class="row m-5">
                        <a href="https://www.linkedin.com/in/jonathan-isambourg/">
                            <img src="{{asset("icons/linkedin-original.svg")}}">
                        </a>
                    </div>
                    <div class="row m-5">
                        <a href="https://github.com/JonIsamb?tab=repositories">
                            <img src="{{asset("icons/github.svg")}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
