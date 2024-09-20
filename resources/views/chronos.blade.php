@extends('layout')

@section('content')
        <div class='container-fluid vh-100'>
            @include('navbar')
            <div class="cont">
                <div class="row mt-2">
                    <div class="col text-center p-5">
                        <img class="img-fluid project-image w-100" src="{{asset("projets/chronos/calendar.png")}}" alt=""></img>
                    </div>
                    <div class="col p-5">
                        <h1 class="mb-4">Application de gestion scolaire</h1>
                        <p class="justify">L'objectif de ce projet est de réaliser une application de gestion scolaire (de type Pronote).
                            L'application doit donc répondre aux besoins des élèves et du personnel administratif.
                        </p>
                        <div class="row mt-3">
                            <div class="col"><p><span class="bold">Année :</span> 2024</p></div>
                            <div class="col"><p><span class="bold">Technos :</span> React, SQL</p></div>
                            <div class="col"><p><span class="bold">Contexte :</span> BUT Informatique 3</p></div>
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
                            <p class="justify">Ce projet était à réaliser en équipe.<br>
                                Nous avons tout d'abord identifié les besoins des utilisateurs (élèves, professeurs, secrétaires, responsables de formation).<br>
                                Après l'analyse du recueil de besoin des utilisateurs, nous avons donc pu créer un cahier des charges listant les fonctionnalités attendues.<br>
                                Côté développement, je me suis occupé de la création du modèle de données, l'import de données ainsi que le processus de changement de mot de passe sécurisé de l'application.
                            </p>
                        </div>
                        <div class="row">
                            <ul class="list">
                                <li>Recueil des besoins des utilisateurs.</li>
                                <li>Création du modèle de données.</li>
                                <li>Mise en place de l'import de données utilisateurs via des APIs.</li>
                                <li>Création du processus de changement de mot de passe.</li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col text-center">
                        <img class="img-fluid project-image w-100" src="{{asset("projets/chronos/notes.png")}}" alt=""></img>
                    </div>
                </div>
            </div>
        </div>
@endsection
