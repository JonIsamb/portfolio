@extends('layout')

@section('content')
        <div class='container-fluid vh-100'>
            @include('navbar')
            <div class="text-center w-100 vh-100 d-flex flex-column justify-content-between row">
                <div class="col-6 offset-1">
                    <div class="row mt-5 mb-5"></div>
                    <div class="row mt-5 mb-5">
                        <h1 class="welcome-text">Bonjour ! Je suis <span class="half-underline">Jonathan</span>,<br> <span class="half-underline">un développeur back-end</span>.</h1>
                    </div>
                    <div class="row mt-5 mb-5"></div>
                    <div class="row mt-5 mb-5 justify">
                        <p>Suite à mes études en informatique, j’ai développé une forte appétance pour le back-end. J’aime réfléchir au fonctionnement interne d’une application, et ses liens avec d’autres applications.</p>

                        <p>J’ai pour objectif d'obtenir un titre d’ingénieur en informatique, afin de savoir gérer un projet de développement et son équipe.</p>

                        <p>Dans le monde de l’entreprise, je suis travailleur et exigeant envers moi-même.</p>

                        <p>Vous pouvez trouver ci-dessous quelques-uns de mes hobbys !</p>
                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="col">
                            <img class="img-fluid" src="{{asset("icons/chess.jpg")}}" alt="Échecs" width=250 height=200></img>
                            <p>Échecs</p>
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="{{asset("icons/badminton.jpg")}}" alt="Badminton" width=250 height=200></img>
                            <p>Badminton</p>
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="{{asset("icons/piano.jpg")}}" alt="Piano" width=250 height=200></img>
                            <p>Piano</p>
                        </div>
                    </div>
                </div>
                <div class='col-4'>
                    <div class="row mb-3 mt-5"> 
                        <img class="img-fluid rounded-circle" src="{{asset("projets/photo-cv.png")}}" alt=""></img>
                    </div>
                    <div class="row mb-5">
                        <div class="col-2 offset-4">
                            <a href="https://github.com/JonIsamb?tab=repositories" target="_blank">
                                <img src="{{asset("icons/github.svg")}}" width=30>
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="https://www.linkedin.com/in/jonathan-isambourg/" target="_blank">
                                <img src="{{asset("icons/linkedin-original.svg")}}" width=30>
                            </a>
                        </div>
                    </div>
                    <div class="row justify-content-evenly">
                        <a href="{{asset("files/cv.pdf")}}" download="CV_ISAMBOURG_Jonathan" class='link-custom background-black text-decoration-none bold cv-link'>Télécharger mon cv</a>
                        <a href="{{url('contact')}}" class='link-custom background-yellow text-decoration-none bold cv-link'>Me contacter</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
