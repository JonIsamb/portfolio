@extends('layout')

@section('content')
   <div class='container-fluid vh-100'>
       @include('navbar')
       <div class="container">
           <div class="row flex-column-reverse flex-lg-row align-items-center">
               <div class="col-12 col-lg-7 text-center text-lg-start px-4">
                   <div class="my-5">
                       <h1 class="welcome-text">Bonjour ! Je suis <span class="half-underline">Jonathan</span>,<br> 
                           <span class="half-underline">un développeur back-end</span>.
                       </h1>
                   </div>

                   <div class="my-5 justify">
                       <p>Suite à mes études en informatique, j'ai développé une forte appétance pour le back-end. J'aime réfléchir au fonctionnement interne d'une application, et ses liens avec d'autres applications.</p>

                       <p>J'ai pour objectif d'obtenir un titre d'ingénieur en informatique, afin de savoir gérer un projet de développement et son équipe.</p>

                       <p>Dans le monde de l'entreprise, je suis travailleur et exigeant envers moi-même.</p>

                       <p>Vous pouvez trouver ci-dessous quelques-uns de mes hobbys !</p>
                   </div>

                   <div class="row g-4 justify-content-center mb-5">
                       <div class="col-12 col-sm-4">
                           <img class="img-fluid hobby-img" src="{{asset("assets/chess.jpg")}}" alt="Échecs">
                           <p class="mt-2">Échecs</p>
                       </div>
                       <div class="col-12 col-sm-4">
                           <img class="img-fluid hobby-img" src="{{asset("assets/badminton.jpg")}}" alt="Badminton">
                           <p class="mt-2">Badminton</p>
                       </div>
                       <div class="col-12 col-sm-4">
                           <img class="img-fluid hobby-img" src="{{asset("assets/piano.jpg")}}" alt="Piano">
                           <p class="mt-2">Piano</p>
                       </div>
                   </div>
               </div>

               <div class="col-12 col-lg-5 text-center mb-4 mb-lg-0">
                   <div class="mb-4"> 
                       <img class="img-fluid rounded-circle profile-img" src="{{asset("projets/photo-cv.png")}}" alt="Ma photo">
                   </div>
                   
                   <div class="d-flex justify-content-center gap-4 mb-4">
                       <a href="https://github.com/JonIsamb?tab=repositories" target="_blank" class="social-link">
                           <img src="{{asset("assets/github.svg")}}" width=30 alt="GitHub">
                       </a>
                       <a href="https://www.linkedin.com/in/jonathan-isambourg/" target="_blank" class="social-link">
                           <img src="{{asset("assets/linkedin-original.svg")}}" width=30 alt="LinkedIn">
                       </a>
                   </div>

                   <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                       <a href="{{asset("files/CV_ISAMBOURG_Jonathan.pdf")}}" download="CV_ISAMBOURG_Jonathan" 
                          class='link-custom background-black text-decoration-none bold'>
                           Télécharger mon cv
                       </a>
                       <a href="{{url('contact')}}" 
                          class='link-custom background-yellow text-decoration-none bold'>
                           Me contacter
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection