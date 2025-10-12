@extends('layout')

@section('content')
        <div class='container-fluid vh-100'>
            @include('navbar')
            <div class="cont">
                <div class="row">
                    <h1 class="title">CV</h1>
                </div>
                <div class="container">
                    <embed class="cv desktop-only" src="{{asset("files/CV_ISAMBOURG_Jonathan.pdf")}}" type="application/pdf"/>

                    <object class="mobile-only" data="{{ asset('files/CV_ISAMBOURG_Jonathan.pdf') }}" type="application/pdf">
                        <a class="text-decoration-none bold background-yellow p-5" href="{{ asset('files/CV_ISAMBOURG_Jonathan.pdf') }}" download>Télécharger mon CV</a>
                    </object>
                </div>
            </div>
        </div>
@endsection
