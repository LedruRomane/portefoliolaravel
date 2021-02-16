@extends('layouts.app')

@section('title', 'PPE GSB')

@section('content')
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <section class="hero-wrap js-fullheight imageHeader" style="background-image:url(images/bkg-1.jpg)"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center imageHeader">
                <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
                    <h1 class="mb-3 bread">PPE Site Web</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                href="{{ route('gsb') }}">GSB</a></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">#1. Projet personnel encadré autour du thème bts GSB</h2>
                    <p>En première partie de seconde année de BTS, nous avons eu comme sujet de PPE : maquetter et concevoir la structure
                        de pages web pour un laboratoire Galaxy Swiss Bourdin dit "GSB". Ce site Internet est repensé dans sa totalité
                        pour permettre aux utilisateurs de voir les médicaments qu'ils proposent mais aussi permettre aux praticiens de
                        s'y connecter afin d'obtenir des informations supplémentaires sur leurs produits.
                    </p>
                    <p>
                        <img src="{{ url('images/AccueilGSB.jpg') }}" alt="" class="img-fluid">
                    </p>
                    <p>Cette première partie de projet a été conçue avec le Framwork Laravel. Cela m'a permis de découvrir ce framework,
                        avec NodeJs, Blade et des technologies que je ne connaissais pas auparavant. La documentation Laravel étant très
                        conséquente, j'ai pu trouver facilement des solutions à mon projet.
                        <br><br>
                        On aura la possibilité de se connecter afin d'avoir accès à plus d'informations: je vous laisse les identifiants ici:
                        <br><br>
                        Pour se connecter en tant que particulier:<br><br>
                        ID: particulier@gmail.com<br>
                        MDP: particulier  <br><br>
                        Pour se connecter en tant que practicien:<br><br>
                        ID: praticien@gmail.com<br>
                        MDP: praticien

                    </p>
                    <a href="{{ url('http://gsb.test') }}" target="_blank" class="btn btn-primary py-3 px-4">Visiter le site web GSB</a>
                    <h2 class="mb-3 mt-5" id="tag-cloud-link1">#2. Création d'un intranet pour le laboratoire GSB</h2>
                    <p>En seconde partie, il a fallu créer un intranet permettant de disposer d'une application de type CRUD pour la
                        gestion des médicaments de GSB. Nous avions d'abord l'obligation de créer un site à part, mais nous aurions pu
                        l'intégrer dans le premier projet.
                    </p>
                    <p>
                        <img src="{{ url('images/gsbCRUD.JPG') }}" alt="" class="img-fluid">
                    </p>
                    <p>J'ai intégré l'obligation de se connecter afin d'avoir accès au CRUD et géré via la base de donnée les utilisateurs
                        concernant leurs droits (insert,upload,delete). Si vous souhaitez y accéder, merci d'utiliser cet identifiant et
                        ce mot de passe:<br>
                        ID: test@gmail.com<br>
                        MDP: toto<br>
                        <br>
                        <br>
                        Inutile de préciser que vous pourrez ajouter et supprimer librement les informations donc veuillez bien respecter
                        un minimum l'intégrité de la BDD afin que tous puissent la tester. J'ajouterai aussi qu'elle sera RESET toutes les heures
                        automatiquement.
                    </p>
                    <a href="{{ url('http://gsb/intranet.test') }}" target="_blank" class="btn btn-primary py-3 px-4">Visiter l'intranet GSB
                    </a>
                    <h2 class="mb-3 mt-5"></h2>
                    <p></p>
                    <p></p>
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <a href="#tag-cloud-link1" class="tag-cloud-link">Laravel</a>
                            <a href="#tag-cloud-link1" class="tag-cloud-link">Web</a>
                            <a href="#tag-cloud-link1" class="tag-cloud-link">CRUD</a>
                            <a href="#tag-cloud-link1" class="tag-cloud-link">PhpStorm</a>
                        </div>
                    </div>
                    <div class="about-author d-flex p-4 bg-dark">
                        <div class="bio mr-5">
                            <img src="images/logogsb.jpg" alt="Image placeholder"
                                 class="img-fluid mb-4">
                        </div>
                        <div class="desc">
                            <h3>Galaxy Swiss Bourdin</h3>
                            <p>Laboratoire fictif souvent utilisé comme contexte pour les élèves de BTS SIO SLAM.</p>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <a href="{{ url('http://gsb.test') }}" target="_blank" class="btn btn-primary py-3 px-4">Visiter le site web GSB</a>
                            </div>
                            <div style="Height:10px;">
                            </div>
                            <div class="form-group">
                                <a href="{{ url('http://gsb/intranet.test') }}" target="_blank" class="btn btn-primary py-3 px-4">Visiter le site Intranet GSB</a>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar">Mots clés</h3>
                        <ul class="categories">
                            <li><p>Laravel</p></li>
                            <li><p>PhpStorm</p></li>
                            <li><p>Wamp</p></li>
                            <li><p>Adobe XD</p></li>
                        </ul>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar" id="tag-2">Autres projets</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                               style="background-image:url(images/image_3.jpg)"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('veilletech') }}">Veille Technologique</a></h3>
                                <div class="meta">
                                    <div><span class="icon-calendar"></span> BTS 2019/2021</div>
                                    <div><span class="icon-chat"></span> Personnel</div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                               style="background-image:url(images/image_4.jpg)"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('construction') }}">Application C#</a></h3>
                                <div class="meta">
                                    <div><span class="icon-calendar"></span> BTS 2019/2021</div>
                                    <div><span class="icon-chat"></span> Client Lourd</div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                               style="background-image:url(images/image_2.jpg)"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('stagewess') }}">Stage Wess-Soft</a></h3>
                                <div class="meta">
                                    <div><span class="icon-calendar"></span> Juin 2020</div>
                                    <div><span class="icon-chat"></span> Client Léger</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar">Tag</h3>
                        <div class="tagcloud">
                            <a href="#tag-2" class="tag-cloud-link">Laravel</a>
                            <a href="#tag-2" class="tag-cloud-link">Adobe</a>
                            <a href="#tag-2" class="tag-cloud-link">NodeJs</a>
                            <a href="#tag-2" class="tag-cloud-link">PhpStorm</a>
                            <a href="#tag-2" class="tag-cloud-link">Wamp</a>
                            <a href="#tag-2" class="tag-cloud-link">MySql</a>
                            <a href="#tag-2" class="tag-cloud-link">Blade</a>
                            <a href="#tag-2" class="tag-cloud-link">GitKraken</a>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar">Mes projets</h3>
                        <p>Que ce soit en Licence, en BTS, en télétravail ou en présentiel,
                            J'ai toujours fait en sorte de présenter des projets
                            qui m'intéressent et qui me font avancer dans ma formation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
