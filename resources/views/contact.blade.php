@extends('layout')

@section('content')
        <div class='container-fluid vh-100'>
            @include('navbar')
            <div class="cont pt-5">
                <div class="row text-center mb-5 mt-5">
                    <h1 class="title-contact">Contacts</h1>
                </div>
                <div class="row">
                    <div class="container w-50 contact-card">
                        <div class="contact row mb-5">
                            <p>Email : <a class="text-decoration-none text-dark" href="mailto:jonathan@isambourg.me">jonathan.isambourg.me</a></p>
                        </div>
                        <div class="contact row mb-5">
                            <p>Téléphone : <a class="text-decoration-none text-dark" href="tel:+33768948375">
                                +33 7 68 94 83 75
                            </a></p>
                        </div>
                        <div class="contact row mb-5">
                            <p>LinkedIn : <a class="text-decoration-none text-dark" href="https://www.linkedin.com/in/jonathan-isambourg/" target="_blank">
                                            <img class="img-fluid" src="{{asset("icons/linkedin-original.svg")}}" width=30>
                                        </a></p>
                        </div>
                        <div class="contact row">
                            <p>GitHub : <a class="text-decoration-none text-dark" href="https://github.com/JonIsamb?tab=repositories">
                                        <img class="img-fluid" src="{{asset("icons/github.svg")}}" width=30>
                                    </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
