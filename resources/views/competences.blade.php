@extends('layout')

@section('content')
        <div class='vh-100'>
            @include('navbar')
            <div class="cont">
                <div class="row">
                    <h1 class="title">Compétences</h1>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <section class="mb-5">
                            <h2>Languages</h2>
                            <section id="splide" class="splide" aria-label="Splide Basic HTML Example">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <div class="skill-slide">
                                                <img class="img-fluid language-image" src="{{asset("icons/php.png")}}" alt="PHP">
                                                <p class="bold background-yellow skill-label">PHP</p>
                                                <p class="skill-description">PHP est le langage dans lequel j'ai le plus de compétences, surtout avec le framework Laravel. J'ai l'occasion de l'utiliser dans un contexte professionnel via mon alternance.</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="text-center">
                                                <img class="img-fluid language-image" src="{{asset("icons/python.png")}}" alt="Python">
                                                <p class="bold background-yellow skill-label">Python</p>
                                                <p class="skill-description">Le premier langage de programmation que j'ai appris. Je l'ai principalement utilisé pour de l'algorithmie, mais aussi pour créer des applications en utilisant le framework Flask.</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="text-center">
                                                <img class="img-fluid language-image" src="{{asset("icons/java.png")}}" alt="Java">
                                                <p class="bold background-yellow skill-label">Java</p>
                                                <p class="skill-description">Durant mon parcours scolaire, j'ai pu réaliser des applications graphiques à l'aide du framework JavaFX.</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="text-center">
                                                <img class="img-fluid language-image" src="{{asset("icons/c.svg.png")}}" alt="C">
                                                <p class="bold background-yellow skill-label">C</p>
                                                <p class="skill-description">J'ai développé plusieurs projets en C, notamment un simulateur de particules et un compresseur d'images.</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="text-center">
                                                <img class="img-fluid language-image" src="{{asset("icons/server.png")}}" alt="SQL">
                                                <p class="bold background-yellow skill-label">SQL</p>
                                                <p class="skill-description">Langage de programmation indispensable pour la gestion des données.</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="text-center">
                                                <img class="img-fluid language-image" src="{{asset("icons/React-icon.svg.png")}}" alt="React">
                                                <p class="bold background-yellow skill-label">React</p>
                                                <p class="skill-description">J'ai découvert le language récemment, durant mon projet d'application de gestion scolaire.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </section>
                        <section class="mb-5">
                            <h2>Outils et plateformes</h2>
                            <section id="splide2" class="splide">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <div class="skill-slide">
                                                <img class="img-fluid tools-image" src="{{asset("icons/git.png")}}" alt="PHP">
                                                <p class="bold background-yellow skill-label">Git & GitHub</p>
                                                <p class="skill-description">Je maîtrise les outils de versioning dans un contexte professionnel.</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="text-center">
                                                <img class="img-fluid tools-image" src="{{asset("icons/postman.svg")}}" alt="Postman">
                                                <p class="bold background-yellow skill-label">Postman</p>
                                                <p class="skill-description">Je sais utiliser ce logiciel, notamment pour tester les API REST que je développe.</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="text-center">
                                                <img class="img-fluid tools-image" src="{{asset("icons/linux.svg.png")}}" alt="Java">
                                                <p class="bold background-yellow skill-label">Linux</p>
                                                <p class="skill-description">J'utilise Linux dans un contexte professionnel mais aussi pour mes projets personnels.</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="text-center">
                                                <img class="img-fluid tools-image" src="{{asset("icons/docker.png")}}" alt="Docker">
                                                <p class="bold background-yellow skill-label">Docker</p>
                                                <p class="skill-description">J'utilise Docker dans un contexte professionnel.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </section>
                        <section class="mb-5">
                            <h2>Soft skills</h2>
                            <section id="splide3" class="splide" aria-label="Splide Basic HTML Example">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <div class="skill-slide pt-2">
                                                <img class="img-fluid soft-skills-image" src="{{asset("icons/france.png")}}" alt="PHP">
                                                <p class="bold background-yellow skill-label">Français</p>
                                                <p class="skill-description">Langue maternelle.</p>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="skill-slide pt-2">
                                                <img class="img-fluid soft-skills-image" src="{{asset("icons/union-jack.jpg")}}" alt="Python">
                                                <p class="bold background-yellow skill-label">Anglais</p>
                                                <p class="skill-description">B2 - Certification Cambridge 2019.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </section>
                    </div>
                </div>
            </div>
        </div>
@endsection
