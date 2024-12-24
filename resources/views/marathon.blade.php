@extends('layout')

@section('content')
        <div class='container-fluid vh-100'>
            @include('navbar')
            <div class="cont">
                <div class="row mt-2">
                    <div class="col-12 col-lg-6 text-center p-3 p-md-5">
                        <img class="img-fluid project-image w-100" src="{{asset("projets/marathon/marathon.png")}}" alt="Logo du musée virtuel">
                    </div>
                    <div class="col-12 col-lg-6 p-3 p-md-5">
                        <h1 class="mb-4">Musée virtuel</h1>
                        <p class="justify">En fin de 2ème année de BUT Informatique, nous avons dû, en équipe, créer et déployer un site web en 48h.
                            Pour notre site web, nous avons choisi de créer un musée virtuel avec différentes salles.
                            Chaque salle contenait des images créées par des intelligences artificielles, dans le style d'artistes célèbres.
                        </p>
                        <div class="row mt-3 gy-2">
                            <div class="col-12 col-sm"><p><span class="bold">Année :</span> 2023</p></div>
                            <div class="col-12 col-sm"><p><span class="bold">Technos :</span> PHP, Laravel</p></div>
                            <div class="col-12 col-sm"><p><span class="bold">Contexte :</span> BUT Informatique 2</p></div>
                        </div>
                        <a class="background-yellow text-decoration-none link-custom object-fit-contain w-100 bold mt-3" target="_blank" href="https://github.com/JonIsamb?tab=repositories">
                            Voir sur GitHub
                        </a>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 col-lg-6 order-lg-1 order-2 text-center p-3 p-md-5">
                        <img class="img-fluid project-image w-100" src="{{asset("projets/marathon/Hokusai-2.png")}}" alt="Image générée par IA dans le style de Hokusai">
                    </div>
                    <div class="col-12 col-lg-6 order-lg-0 order-1">
                        <div class="row px-3 px-md-5 pt-3">
                            <h2>Déroulement du projet</h2>
                            <p class="justify">
                            Ce projet était à réaliser en équipe de 8, composée de 4 étudiants en BUT Informatique et 4 étudiants en BUT MMI (multimédia).<br>
                            Nous devions créer et déployer un site web en 48h.<br>
                            Mon rôle dans ce projet a été responsable de l'équipe Informatique. Je faisais le lien entre le back-end, et l'avancement des maquettes côté front-end.<br>
                            J'ai également participé au développement, notamment en mettant en place l'architecture CRUD du modèle de données.
                            </p>
                        </div>
                        <div class="row px-3 px-md-5">
                            <ul class="list">
                                <li>Création des modèles.</li>
                                <li>Mise en place d'une architecture CRUD.</li>
                                <li>Gestion des équipes.</li>
                                <li>Déploiement du site web.</li>
                                <li>Intégration des maquettes.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection