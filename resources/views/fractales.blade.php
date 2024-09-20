@extends('layout')

@section('content')
        <div class='container-fluid vh-100'>
            @include('navbar')
            <div class="cont">
                <div class="row mt-2">
                    <div class="col text-center p-5">
                        <img class="img-fluid project-image w-100" src="{{asset("projets/fractales/generalisationJulia.png")}}" alt=""></img>
                    </div>
                    <div class="col p-5">
                        <h1 class="mb-4">Générateur de fractales</h1>
                        <p class="justify">L'objectif de ce projet est de réaliser un générateur de fractales (objet mathématique dont la structure se répète à toutes les échelles).
                            Les fractales pouvant être reproduites sont celles de Julia, de Mandelbrot, ainsi que le tapis de Sierpinski.
                        </p>
                        <div class="row mt-3">
                            <div class="col"><p><span class="bold">Année :</span> 2022</p></div>
                            <div class="col"><p><span class="bold">Technos :</span> Java, Shell</p></div>
                            <div class="col"><p><span class="bold">Contexte :</span> BUT Informatique 2</p></div>
                        </div>
                        <a class="background-yellow text-decoration-none link-custom object-fit-contain w-100 bold" target="_blank" href="https://github.com/JonIsamb/fractales/">
                            Voir sur GitHub
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row px-5 pt-3">
                            <h2>Déroulement du projet</h2>
                            <p class="justify">Ce projet était à réaliser en équipe.<br>
                                Nous avons dû transcrire des suites mathématiques sous forme de code.</br>
                                Nous avons également mis en place différents patrons de conception (décorateur, méthode, adaptateur).
                            </p>
                        </div>
                        <div class="row">
                            <ul class="list">
                                <li>Implémentations des suites complexes.</li>
                                <li>Génération des images.</li>
                                <li>Génération des fractales Julia et Mandelbrot.</li>
                                <li>Création des scripts de lancement en bash.</li>
                                <li>Utilisation de patrons de conception.</li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col text-center">
                        <img class="img-fluid project-image w-100" src="{{asset("projets/fractales/generalisationMandelbrot.png")}}" alt=""></img>
                    </div>
                </div>
            </div>
        </div>
@endsection
