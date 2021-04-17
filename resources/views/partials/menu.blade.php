<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">R • L </a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="{{ route('index') }}#home" class="nav-link"><span>Accueil</span></a></li>
                <li class="nav-item"><a href="{{ route('index') }}#about-section" class="nav-link"><span>À propos</span></a></li>
                <li class="nav-item"><a href="{{ route('index') }}#resume-section" class="nav-link"><span>Formations</span></a></li>
                <li class="nav-item"><a href="{{ route('index') }}#resume-section2" class="nav-link"><span>Expériences</span></a></li>
                <li class="nav-item"><a href="{{ route('index') }}#skills-section" class="nav-link"><span>Compétences</span></a></li>
                <li class="nav-item"><a href="{{ route('index') }}#projects-section" class="nav-link"><span>Licence</span></a></li>
                <li class="nav-item"><a href="{{ route('index') }}#blog-section" class="nav-link"><span>BTS SIO</span></a></li>
                <li class="nav-item"><a href="{{ route('index') }}#contact-section" class="nav-link"><span>Contact</span></a></li>
                <li class="nav-item dropdown">
                    <p class="nav-link">
                        <span>Mes Projets</span>
                    </p>
                    <ul class="dropdown-menu dropdownCustom">
                        <li><a class="dropdown-item dropdownItemCustom" href="{{route('veilletech')}}">Veille Technologique</a></li>
                        <li><a class="dropdown-item dropdownItemCustom" href="{{route('gsb')}}">PPE</a></li>
                        <li><a class="dropdown-item dropdownItemCustom" href="{{route('stagewess')}}">Stage et CDD 1ère année</a></li>
                        <li><a class="dropdown-item dropdownItemCustom" href="{{route('stage2')}}">Stage 2ère année</a></li>
                        <li><a class="dropdown-item dropdownItemCustom" href="{{route('applicsharp')}}">Application C#</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
