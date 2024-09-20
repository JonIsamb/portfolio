<div class='navbar custom-navbar'>
    <img class="rounded-circle img-fluid navbar-img" src="{{asset("projets/photo-cv.png")}}" alt="Ma photo">
    <a href="{{url('accueil')}}" class="text-decoration-none text-dark bold {{ Request::is('/') ? 'active-page' : '' }}"><p>Accueil</p></a>
    <a href="{{url('projects')}}" class="text-decoration-none text-dark bold {{ str_contains(url()->current(), 'projects') ? 'active-page' : '' }}"><p>Projets</p></a>
    <a href="{{url('competences')}}" class="text-decoration-none text-dark bold {{ Request::is('competences') ? 'active-page' : '' }}"><p>Compétences</p></a>
    <a href="{{url('experiences')}}" class="text-decoration-none text-dark bold {{ Request::is('experiences') ? 'active-page' : '' }}"><p>Expériences</p></a>
    <a href="{{url('formations')}}" class="text-decoration-none text-dark bold {{ Request::is('formations') ? 'active-page' : '' }}"><p>Formations</p></a>
    <a href="{{url('cv')}}" class="text-decoration-none text-dark bold"><p class="link-custom background-black bold">CV</p></a>
    <a href="{{url('contact')}}" class="text-decoration-none text-dark"><p class="link-custom background-yellow bold">Contacts</p></a>
</div>