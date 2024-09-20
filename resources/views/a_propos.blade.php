@extends('layout')

@section('content')
        <div class='vh-100'>
            @include('navbar')
            <div class="text-center vh-100 w-100 row">
                <div class='col-8'>
                    <h1>Jonathan Isambourg</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam ex veritatis consectetur tempore accusamus aspernatur, ab cupiditate culpa obcaecati rem aperiam minus, fuga dolorem perspiciatis autem quae odio repudiandae nesciunt.</p>
                    <div class="d-inline-flex align-items-center justify-content-center">
                        <a href="#" class='link-custom background-black text-decoration-none object-fit-contain'>Télécharger mon cv</a>
                        <a href="#" class='link-custom background-yellow text-decoration-none'>Me contacter</a>
                    </div>
                    <div>
                        <img src="{{asset("projets/photo-cv.png")}}" alt="" width=100 height=100></img>
                        <img src="{{asset("projets/photo-cv.png")}}" alt="" width=100 height=100></img>
                        <img src="{{asset("projets/photo-cv.png")}}" alt="" width=100 height=100></img>
                    </div>
                </div>
                <div class='col-4'>
                    <img src="{{asset("projets/photo-cv.png")}}" alt="">Ma photooooooooo</img>
                </div>
            </div>
        </div>
@endsection
