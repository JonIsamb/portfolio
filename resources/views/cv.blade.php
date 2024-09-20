@extends('layout')

@section('content')
        <div class='container-fluid vh-100'>
            @include('navbar')
            <div class="cont">
                <div class="row">
                    <h1 class="title">CV</h1>
                </div>
                <div class="container">
                    <embed class="cv" src="{{asset("files/cv.pdf")}}"/>
                </div>
            </div>
        </div>
@endsection
