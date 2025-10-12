@extends('layout')

@section('content')
        <div class='container-fluid vh-100'>
            @include('navbar')
            <div class="cont">
                <div class="row">
                    <h1 class="title">Formations</h1>
                </div>
                <div class="timeline container">
                    <div class="timeline-item">
                        <div class="dot"></div>
                        <div class="timeline-content">
                            <p class="formation-title background-yellow bold">École d'ingénieur - INSA Hauts-de-France - 59300</p>
                            <span class="badge formation-date">Septembre 2024 - Aujourd'hui</span>
                            <p>1ère année<br>Ingénieur informatique</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="dot"></div>
                        <div class="timeline-content">
                            <p class="formation-title background-yellow bold">BUT Informatique - IUT de Marne-La-Vallée - 77200</p>
                            <span class="badge formation-date">Septembre 2023 - Aout 2024</span>
                            <p>3ème année<br>Parcours Réalisation d'applications : conception, développement, validation</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="dot"></div>
                        <div class="timeline-content">
                            <p class="formation-title background-yellow bold">Semestre de mobilité - Université du Québec à Chicoutimi - Canada</p>
                            <span class="badge formation-date">Janvier 2023 - Mai 2023</span>
                            <ul>
                                <li>Informatique mobile</li>
                                <li>Structures de données</li>
                                <li>Sécurité des applications</li>
                                <li>Modélisation et développement objet</li>
                                <li>Calcul avancé</li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="dot"></div>
                        <div class="timeline-content">
                            <p class="formation-title background-yellow bold">BUT Informatique - IUT de Lens - 62300</p>
                            <span class="badge formation-date">Septembre 2021 - Juillet 2023</span>
                            <p>1ère et 2ème année<br>Parcours Réalisation d'applications : conception, développement, validation</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="dot"></div>
                        <div class="timeline-content">
                            <p class="formation-title background-yellow bold">Prépa intégrée - Polytech Lille - 59491</p>
                            <span class="badge formation-date">Septembre 2019 - Juin 2021</span>
                            <p>Parcours des Écoles d'Ingénieur de Polytech<br>Licence SESI</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="dot"></div>
                        <div class="timeline-content">
                            <p class="formation-title background-yellow bold">Baccalauréat S</p>
                            <span class="badge formation-date">2019</span>
                            <p>Mention Bien<br>Section Européenne Anglais</p>
                        </div>
                    </div>             
                </div>
            </div>
        </div>
@endsection
