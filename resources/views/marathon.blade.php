@extends('layout')

@section('content')
        <div class='container-fluid vh-100'>
            @include('navbar')
            <div class="cont">
                <div class="row mt-2">
                    <div class="col text-center p-5">
                        <img class="img-fluid project-image w-100" src="{{asset("projets/marathon/marathon.png")}}" alt=""></img>
                    </div>
                    <div class="col p-5">
                        <h1 class="mb-4">Musée virtuel</h1>
                        <p class="justify">En fin de 2ème année de BUT Informatique, nous avons dû, en équipe, créer et déployer un site web en 48h.
                            Pour notre site web, nous avons choisi de créer un musée virtuel avec différentes salles.
                            Chaque salle contenait des images créées par des intelligences artificielles, dans le style d’artistes célèbres.
                        </p>
                        <div class="row mt-3">
                            <div class="col"><p><span class="bold">Année :</span> 2023</p></div>
                            <div class="col"><p><span class="bold">Technos :</span> PHP, Laravel</p></div>
                            <div class="col"><p><span class="bold">Contexte :</span> BUT Informatique 2</p></div>
                        </div>
                        <a class="background-yellow text-decoration-none link-custom object-fit-contain w-100 bold" target="_blank" href="https://github.com/JonIsamb?tab=repositories">
                            Voir sur GitHub
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row px-5 pt-3">
                            <h2>Déroulement du projet</h2>
                            <p class="justify">
                            Ce projet était à réaliser en équipe de 8, composée de 4 étudiants en BUT Informatique et 4 étudiants en BUT MMI (multimédia).<br>
                            Nous devions créer et déployer un site web en 48h.<br>
                            Mon rôle dans ce projet a été responsable de l’équipe Informatique. Je faisais le lien entre le back-end, et l’avancement des maquettes côté front-end.<br>
                            J’ai également participé au développement, notamment en mettant en place l’architecture CRUD du modèle de données.
                            </p>
                        </div>
                        <div class="row">
                            <ul class="list">
                                <li>Création des modèles.</li>
                                <li>Mise en place d'une architecture CRUD.</li>
                                <li>Gestion des équipes.</li>
                                <li>Déploiement du site web.</li>
                                <li>Intégration des maquettes.</li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col text-center">
                        <img class="img-fluid project-image w-100" src="{{asset("projets/marathon/Hokusai-2.png")}}" alt=""></img>
                    </div>
                </div>
            </div>
        </div>
@endsection
