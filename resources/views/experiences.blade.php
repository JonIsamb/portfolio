@extends('layout')

@section('content')
<div class='container-fluid vh-100'>
    @include('navbar')
    <div class="cont">
        <div class="row">
            <h1 class="title">Expériences</h1>
        </div>
        
        <div class="container">
            <div class="row gy-5">
                <div class="col-12">
                    <div class="row experience align-items-center">
                        <div class="col-12 col-md-4 text-center mb-3 mb-md-0">
                            <p class="bold">
                                Alternance - Charlie Solutions
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-blue">PHP</span>
                                <span class="badge bg-red">Laravel</span>
                                <span class="badge bg-success">SQL</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 expe justify">
                            <p>Septembre 2023 - Aujourd'hui</p>
                            <p>
                                Lors de cette alternance, j'ai participé au développement de nouvelles fonctionnalités sur la plateforme cliente.<br>
                                Une de mes principales missions a été l'automatisation de la création de fiches de contrôle.<br>
                                Charlie Solutions m'a permis d'enrichir mes soft skills, notamment le travail en équipe et la gestion de projet.
                            </p>
                            <a class="background-yellow text-decoration-none link-custom w-100 bold" target="_blank" href="https://www.linkedin.com/company/charlie-solutions/">
                                Découvrir Charlie Solutions
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row experience align-items-center">
                        <div class="col-12 col-md-4 text-center mb-3 mb-md-0">
                            <p class="bold">
                                Stage - Charlie Solutions
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-blue">PHP</span>
                                <span class="badge bg-red">Laravel</span>
                                <span class="badge bg-success">SQL</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 expe justify">
                            <p>Mai 2023 - Juillet 2023</p>
                            <p>
                                Ce stage a été ma première expérience dans une entreprise en tant que développeur back-end.<br>
                                J'ai pu y découvrir le travail en entreprise de développement, ainsi que les méthodes agiles.<br>
                                J'ai été amené à appréhender un système existant, afin de proposer des solutions d'améliorations.
                            </p>
                            <a class="background-yellow text-decoration-none link-custom w-100 bold" target="_blank" href="https://www.linkedin.com/company/charlie-solutions/">
                                Découvrir Charlie Solutions
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection