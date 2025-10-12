<nav class='navbar custom-navbar flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-start gap-3 py-3'>
    <img class="rounded-circle img-fluid navbar-img mb-2 mb-lg-0" src="{{asset("projets/photo-cv.png")}}" alt="Ma photo">
    
    <div class="d-flex flex-column flex-lg-row align-items-center gap-3 gap-lg-4">
        <a href="{{url('accueil')}}" class="text-decoration-none text-dark bold {{ Request::is('/') ? 'active-page' : '' }}">
            <p class="m-0">Accueil</p>
        </a>
        <a href="{{url('projects')}}" class="text-decoration-none text-dark bold {{ str_contains(url()->current(), 'projects') ? 'active-page' : '' }}">
            <p class="m-0">Projets</p>
        </a>
        <a href="{{url('competences')}}" class="text-decoration-none text-dark bold {{ Request::is('competences') ? 'active-page' : '' }}">
            <p class="m-0">Compétences</p>
        </a>
        <a href="{{url('experiences')}}" class="text-decoration-none text-dark bold {{ Request::is('experiences') ? 'active-page' : '' }}">
            <p class="m-0">Expériences</p>
        </a>
        <a href="{{url('formations')}}" class="text-decoration-none text-dark bold {{ Request::is('formations') ? 'active-page' : '' }}">
            <p class="m-0">Formations</p>
        </a>
    </div>

    <div class="d-flex gap-3 mt-2 mt-lg-0 ms-lg-auto">
        <a href="{{url('cv')}}" class="text-decoration-none text-dark bold">
            <p class="link-custom background-black bold m-0">CV</p>
        </a>
        <a href="{{url('contact')}}" class="text-decoration-none text-dark">
            <p class="link-custom background-yellow bold m-0">Contacts</p>
        </a>
    </div>
</nav>