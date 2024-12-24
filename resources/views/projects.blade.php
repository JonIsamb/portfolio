@extends('layout')

@section('content')
        <div class='vh-100'>
            @include('navbar')
            <div class="cont">
                <div class="row">
                    <h1 class="title">Projets</h1>
                </div>
                <div class="container-fluid">
                    <div class="row">
                    <section class="mt-5">
                        <section id="splideProjects" class="splide" aria-label="Splide Basic HTML Example">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <div class="skill-slide">
                                            <img class="img-fluid img-carousel w-100" src="{{asset("projets/boids/header.png")}}" alt="Particules" width=200 height=200>
                                            <p class="lead bold project-label">Animation de particules</p>
                                            <div class="mb-sm-3">
                                                <span class="badge bg-info tech-label">C</span>
                                            </div>
                                            <p class="project-description d-flex justify-content-center align-items-center">Développement d'un moteur d'animation de particules de type 'Boids'.</p>
                                            <a class="background-yellow text-decoration-none link-custom object-fit-contain w-100 bold" href="{{url('projects/boids')}}">
                                                En savoir plus
                                            </a>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="text-center">
                                            <img class="img-fluid img-carousel w-100" src="{{asset("projets/chronos/calendar.png")}}" alt="Calendrier de l'application Chronos">
                                            <p class="lead bold project-label">Chronos</p>
                                            <div class="mb-sm-3">
                                                <span class="badge bg-primary tech-label">React</span>
                                                <span class="badge bg-success tech-label">SQL</span>
                                            </div>
                                            <p class="project-description d-flex justify-content-center align-items-center">Développement d'une application de gestion scolaire.</p>
                                            <a class="background-yellow text-decoration-none link-custom object-fit-contain w-100 bold" href="{{url('projects/chronos')}}">
                                                En savoir plus
                                            </a>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="text-center">
                                            <img class="img-fluid img-carousel w-100" src="{{asset("projets/marathon/header.jpg")}}" alt="Header de l'application du marathon web" height=80>
                                            <p class="lead bold project-label">Musée virtuel</p>
                                            <div class="mb-sm-3">
                                                <span class="badge bg-blue tech-label">PHP</span>
                                                <span class="badge bg-red tech-label">Laravel</span>
                                            </div>
                                            <p class="project-description d-flex justify-content-center align-items-center">Création d'un musée virtuel en 48h.</p>
                                            <a class="background-yellow text-decoration-none link-custom object-fit-contain w-100 bold" href="{{url('projects/marathon')}}">
                                                En savoir plus
                                            </a>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="text-center">
                                            <img class="img-fluid img-carousel w-100" src="{{asset("projets/fractales/julia2.png")}}" alt="Image de la fractale de Julia" width=200 height=200>
                                            <p class="lead bold project-label">Générateur d'images</p>
                                            <div class="mb-sm-3">
                                                <span class="badge bg-warning tech-label">Java</span>
                                            </div>
                                            <p class="project-description d-flex justify-content-center align-items-center">Développement d'un générateur de fractales.</p>
                                            <a class="background-yellow text-decoration-none link-custom object-fit-contain w-100 bold" href="{{url('projects/fractales')}}">
                                                En savoir plus
                                            </a>                             
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </div>


<script>
    $(document).ready(function () {
    var itemsMainDiv = ('.multi-carousel');
    var itemsDiv = ('.multi-carousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "multi-carousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>

@endsection
