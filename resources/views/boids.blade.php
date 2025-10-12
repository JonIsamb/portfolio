@extends('layout')

@section('content')
        <div class='container-fluid vh-100'>
            @include('navbar')
            <div class="cont">
                <div class="row mt-2">
                    <div class="col-12 col-lg-6 text-center p-3 p-md-5">
                        <img class="img-fluid project-image w-100" src="{{asset("projets/boids/header.png")}}" alt="Illustration du projet Boids">
                    </div>
                    <div class="col-12 col-lg-6 p-3 p-md-5">
                        <h1 class="mb-4">Animation de particules</h1>
                        <p class="justify">Ce projet correspond au développement d'un moteur de particules de types 'Boids' (bird-oïd object).
                            Le but était de créer des interactions entre particules, sous le modèle proie-chasseur. 
                            Des particules (chasseurs) devaient chasser d'autres particules (proies) tout en évitant des obstacles.
                        </p>
                        <div class="row mt-3 gy-2">
                            <div class="col-12 col-sm"><p><span class="bold">Année :</span> 2024</p></div>
                            <div class="col-12 col-sm"><p><span class="bold">Technos :</span> C</p></div>
                            <div class="col-12 col-sm"><p><span class="bold">Contexte :</span> BUT Informatique 3</p></div>
                        </div>
                        <a class="background-yellow text-decoration-none link-custom object-fit-contain w-100 bold" target="_blank" href="https://github.com/JonIsamb?tab=repositories">
                            Voir sur GitHub
                        </a>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 col-lg-6 order-lg-0 order-1">
                        <div class="row px-3 px-md-5 pt-3">
                            <h2>Déroulement du projet</h2>
                            <p class="justify">Ce projet était à réaliser individuellement.
                                Une application 'exemple' nous a d'abord été présentée, nous devions nous y approcher.
                                Nous avions à disposition une librairie C, g2x, nous offrant une interface graphique.
                                Depuis cette librairie, nous devions créer toute la structure de l'application, les déplacements des particules, les interactions entre elles.
                                Nous pouvions personnaliser notre application comme on le souhaiter.
                                Vous pouvez voir dans l'image à droite, le chasseur (en vert), se comportant comme un "snake".
                            </p>
                        </div>
                        <div class="row px-3 px-md-5">
                            <ul class="list">
                                <li>Affichage et déplacements des particules sur une interface graphique.</li>
                                <li>Mise en place de structure dîtes 'doublement chaînées'.</li>
                                <li>Applications mathématiques (déplacement des particules).</li>
                                <li>Influence entre les particules.</li>
                                <li>Ajout de paramètres variant sur les objets.</li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-12 col-lg-6 order-lg-1 order-2 text-center p-3 p-md-5">
                        <img class="project-image" src="{{asset("projets/boids/snake.png")}}" alt="Illustration du projet Boids">
                    </div>
                </div>
            </div>
        </div>
@endsection
