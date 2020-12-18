@extends('layouts.app')

@section('title', 'portefolio')

@section('content')
    <section id="home-section" class="hero">
        <div class="home-slider  owl-carousel">
            <div class="slider-item ">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                         data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img"
                             style="background-image:url('images/bg_2.png');">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex  align-items-center ftco-animate"
                             data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Bonjour!</span>
                                <h1 class="mb-4 mt-3">Je suis <span>Romane Ledru</span></h1>
                                <h2 class="mb-4">Étudiante en Développement</h2>
                                <p><a href="https://www.linkedin.com/in/romane-ledru" target="_blank"
                                      class="btn btn-primary py-3 px-4 ">LinkedIn</a>
                                    <a href="./CvLedru.pdf" target="_blank"
                                       class="btn btn-white btn-outline-white py-3 px-4">Télécharger mon cv</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                             style="background-image:url(images/bg_1.png);">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">À propos</h1>
                            <h2 class="mb-4">À propos de moi</h2>
                            <p>Jeune étudiante motivée pour s'épanouir dans le milieu du développement</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Nom:</span> <span>Romane Ledru</span></li>
                                <li class="d-flex"><span>Naissance:</span> <span>28 avril 1997</span></li>
                                <li class="d-flex"><span>Adresse:</span> <span>Clermont-Ferrand, 63000</span></li>
                                <li class="d-flex"><span>Email:</span> <span>romane.ldru@gmail.com</span></li>
                                <li class="d-flex"><span>GitHub:</span> <span><a href="https://github.com/romaneledru"
                                                                                 target="_blank">GitHub Romane Ledru</a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p class="mb-4">
                                <span class="number" data-number="2">0</span>
                                <span>Projets entrepris</span>
                            </p>
                            <p><a href="./CvLedru.pdf" target="_blank" class="btn btn-primary py-3 px-3">Télécharger mon
                                    CV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2"></h1>
                    <h2 class="mb-4">Formations</h2>
                    <p>Mon parcours scolaire et de formation, du lycée à aujourd'hui</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2021-2019</span>
                        <h2>BTS SIO SLAM</h2>
                        <span class="position">Lycée Sidoine Apollinaire</span>
                        <p class="mt-4">BTS Services Informatiques aux Organisations, option Solutions
                            Logicielles et Applications Métiers.
                        </p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2015-2017</span>
                        <h2>DEUG Arts Design, Sciences et Techniques</h2>
                        <span class="position">Université Toulouse Jean Jaurès</span>
                        <p class="mt-4">Approche de la programmation, workshops créatifs, apprentissage
                            Marketing et Design.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2017-2018</span>
                        <h2>Licence 3 Arts Plastiques et Appliqués</h2>
                        <span class="position">Université Bordeaux Montaigne</span>
                        <p class="mt-4">Option didactique, Obtenu mention Assez Bien.</p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2014-2015</span>
                        <h2>Baccalauréat Scientifique</h2>
                        <span class="position">Lycée Jean Favard, Guéret</span>
                        <p class="mt-4">Option Mathématiques, obtenu mention Bien.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p><a href="./CvLedru.pdf" target="_blank" class="btn btn-primary py-4 px-5">Voir mon CV</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section2">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2"></h1>
                    <h2 class="mb-4">Experiences</h2>
                    <p>Mes expériences professionnelles, stages et métiers.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Juillet-Août 2020</span>
                        <h2>CDD Développement fullstack</h2>
                        <span class="position"><a href="https://www.wess-soft.com" target="_blank">Wess-Soft</a></span>
                        <p class="mt-4">Prolongement du stage. Projets sur Symfony (front/back), Wordpress (front),
                            Prestashop (front/back module)</p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2018-2019</span>
                        <h2>Marketing Sauthon Industry</h2>
                        <span class="position"><a href="https://www.sauthon.com" target="_blank">Sauthon</a></span>
                        <p class="mt-4">Année sabbatique afin d'obtenir un peu d'expérience professionnelle et le budget
                            pour mon
                            projet de poursuite d'étude dans le développement.
                        </p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Printemps 2018</span>
                        <h2>Employée polyvalente en magasin</h2>
                        <span class="position">Carrefour city Bordeaux</span>
                        <p class="mt-4">Travail en parallèle des études.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Juin 2020</span>
                        <h2>Stage Développement web</h2>
                        <span class="position"><a href="https://www.wess-soft.com" target="_blank">Wess-Soft</a></span>
                        <p class="mt-4">Stage de première année en BTS SIO, dans une entreprise accueillante et
                            chaleureuse. Merci encore!
                            Premier contact vraiment positif.
                        </p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Avril 2018</span>
                        <h2>Stage didactique</h2>
                        <span class="position">Collège Lycée LaSalle Bordeaux</span>
                        <p class="mt-4">Stage de 3ème année de licence d'arts dans les classes d'Arts Plastiques et
                            Appliqués. </p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">été 2015 - été 2016</span>
                        <h2>Employée magasin</h2>
                        <span class="position">Leclerc Guéret</span>
                        <p class="mt-4">Job étudiant les étés afin d'économiser et de me payer l'odinateur de mes
                            rêves et voyager.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p><a href="./CvLedru.pdf" target="_blank" class="btn btn-primary py-4 px-5">Vous ai-je déjà proposé
                            mon CV ?</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="skills-section">
        <div class="container">
            <div class="row justify-content-center py-5 mt-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Compétences</h1>
                    <h2 class="mb-4">Compétences</h2>
                    <p>Design, web, développement, dessin et bonne humeur</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#skills-section" class="services-1">
                        <span class="icon">
                            <i class="flaticon-web-design"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Design Web</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#skills-section" class="services-1">
                        <span class="icon">
                            <i class="flaticon-idea"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Développement Web</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#skills-section" class="services-1">
                        <span class="icon">
                            <i class="flaticon-ideas"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Application C#</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#skills-section" class="services-1">
                        <span class="icon">
                            <i class="flaticon-ux-design"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Suite Adobe</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#skills-section" class="services-1">
                        <span class="icon">
                            <i class="flaticon-analysis"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Frameworks <br> Laravel-Symfony</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#skills-section" class="services-1">
                        <span class="icon">
                            <i class="flaticon-flasks"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Art & Illustrations</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Licence Art</h1>
                    <h2 class="mb-4">Licence</h2>
                    <p>Licence d'Art, Design et artisanat, Toulouse Jean Jaurès et Bordeaux Montaigne</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div onclick="showImage('images/project-4.jpg','images/project-42.jpg','images/project-43.jpg')"
                         class="project img ftco-animate d-flex justify-content-center align-items-center"
                         style="background-image: url(images/project-4.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3>Arts &amp; Travaux plastiques</h3>
                            <span>Licence 3</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div onclick="showImage('images/project-5.jpg','images/project-52.jpg','images/project-53.jpg')"
                         class="project img ftco-animate d-flex justify-content-center align-items-center"
                         style="background-image: url(images/project-5.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3>Bénévolat Faculté Bordeaux Montaigne</h3>
                            <span>Armoires à livre</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div onclick="showImage('images/project-1.jpg','images/project-12.jpg','images/project-13.jpg')"
                         class="project img ftco-animate d-flex justify-content-center align-items-center"
                         style="background-image: url(images/project-1.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3>Dessin graphique</h3>
                            <span>"à la manière de"</span>
                        </div>
                    </div>
                    <div onclick="showImage('images/project-6.jpg','images/project-62.jpg','images/project-63.jpg')"
                         class="project img ftco-animate d-flex justify-content-center align-items-center"
                         style="background-image: url(images/project-6.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3>Travaux artisanat Menuiserie</h3>
                            <span>Stage CFA Montauban</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div onclick="showImage('images/project-2.jpg','images/project-22.jpg','images/project-23.jpg')"
                                 class="project img ftco-animate d-flex justify-content-center align-items-center"
                                 style="background-image: url(images/project-2.jpg);">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3>Prestations & ventes</h3>
                                    <span>Portraits et fanarts</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div onclick="showImage('images/project-3.jpg','images/project-32.jpg','images/project-33.jpg')"
                                 class="project img ftco-animate d-flex justify-content-center align-items-center"
                                 style="background-image: url(images/project-3.jpg);">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3>Dessin et illustrations personnelles</h3>
                                    <span>Nus et dessin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">BTS SIO</h1>
                    <h2 class="mb-4">BTS SIO SLAM</h2>
                    <p>Mes projets durant mes deux années de BTS: PPE et veilles.</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ route('gsb') }}" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">Client Léger</span>
                                </p>
                            </div>
                            <h3 class="heading"><a href="{{ route('gsb') }}">Projet Personnel Encadré: GSB</a>
                            </h3>
                            <p>Site clients et intranet pour un laboratoire de médicaments. Laravel </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ route('stagewess') }}" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">Client Léger</span>
                                </p>
                            </div>
                            <h3 class="heading"><a href="{{ route('stagewess') }}">Stage: Wess-Soft</a>
                            </h3>
                            <p>Travaux réalisés durant mon stage de première année. Symfony - Prestashop - Wordpress</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="{{ route('construction') }}" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">Client Lourd</span>
                                </p>
                            </div>
                            <h3 class="heading"><a href="{{ route('construction') }}">Application C#</a>
                            </h3>
                            <p>PPE application C# - Page en construction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{ route('veilletech') }}" class="block-20" style="background-image: url('images/image_4.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">Veille Technologique</span>
                            </p>
                        </div>
                        <h3 class="heading"><a href="{{ route('veilletech') }}">Veille Technologique: Frameworks</a>
                        </h3>
                        <p>Travail de veille technologique: méthode et recherche d'informations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <span class="icon">
                                <img src="{{ url('images/music-note.png') }}" style="width:50px;height:50px;">
                            </span>
                            <span>Musique</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <span class="icon">
                                <img src="{{ url('images/mountain-range.png') }}" style="width:50px;height:50px;">
                            <span>Randonnée</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <span class="icon">
                                <img src="{{ url('images/virtual-reality-glasses.png') }}" style="width:50px;height:50px;">
                            </span>
                            <span>VR</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <span class="icon">
                                <img src="{{ url('images/popcorn.png') }}" style="width:50px;height:50px;">
                            </span>
                            <span>Cinéma</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bkg-2.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center">
                    <h2>Aussi de <span>nombreuses</span> passions</h2>
                    <p>Très éclectique sur beaucoup de domaines</p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <span class="icon">
                                <img src="{{ url('images/robot.png') }}" style="width:50px;height:50px;">
                            </span>
                            <span>Montage PC</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <span class="icon">
                                <img src="{{ url('images/iceberg.png') }}" style="width:50px;height:50px;">
                            <span>Escalade</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <span class="icon">
                                <img src="{{ url('images/cutlery.png') }}" style="width:50px;height:50px;">
                            </span>
                            <span>Manger</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <span class="icon">
                                <img src="{{ url('images/honey.png') }}" style="width:50px;height:50px;">
                            </span>
                            <span>Apiculture</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact</h1>
                    <h2 class="mb-4">Contactez moi</h2>
                    <p>Je répond rapidement aux mails et aux appels.</p>
                </div>
            </div>
            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Adresse</h3>
                        <p>Clermont-Ferrand 63000 France</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">LinkedIn</h3>
                        <p><a href="https://www.linkedin.com/in/romane-ledru" target="_blank">Mon LinkedIn</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Adresse Mail</h3>
                        <p><a href="#contact-section">romane.ldru@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">GitHub</h3>
                        <p><a href="https://github.com/romaneledru"
                              target="_blank">Mon GitHub</a></p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters block-9" id="formulaire">
                <div class="col-md-6 order-md-last d-flex">
                    <form method="post" action="{{ route('contact.submit') }}"class="bg-light p-4 p-md-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email">
                        </div>
                        <div class="form-group">
                            <input type="sujet" class="form-control" id="sujet" name="sujet" placeholder="Sujet">
                        </div>
                        <div class="form-group">
                            <textarea name="comments" id="comments" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Envoyer le message" class="btn btn-primary py-3 px-5">
                        </div>
                        @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                        @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
                        @error('sujet') <div class="alert alert-danger">{{ $message }}</div> @enderror
                        @error('comments') <div class="alert alert-danger">{{ $message }}</div> @enderror
                        @if(Session::has('success')) <div class="alert alert-success">{{ Session::get('success') }}</div> @endisset
                    </form>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="img" style="background-image: url(images/about.jpg);"></div>
                </div>
            </div>
        </div>
    </section>


@endsection
