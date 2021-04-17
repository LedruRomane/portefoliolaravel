@extends('layouts.app')

@section('title', 'Stage Seconde année Wess-Soft')

@section('content')
<section class="hero-wrap js-fullheight imageHeader" style="background-image:url(images/background_stage.png)"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center imageHeader">
            <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
                <h1 class="mb-3 bread">Stage</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Accueil <i
                                class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                            href="{{ route('stagewess') }}">Stage Seconde année</a></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3">Stage de seconde année chez Wess-Soft</h2>
                <p class="justify">Wess-soft est une agence de développement mobile et web de 6 personnes tenue par deux co-gérants.
                    Leur entreprise est située au 40 rue Laure Diebold à Lyon et loue un open-space dans un
                    regroupement d’entreprises et de bureaux appelés Focus.
                </p>
                <h2 class="mb-3 mt-5" id="tag-cloud-link-1">
                    #- Travaux réalisés
                </h2>
                <ul>
                    <li><p>Maquettage sur Adobe XD</p></li>
                    <li><p>Ws-Mesh-SEO : Développement d'un module Prestashop</p></li>
                    <li><p>Création de pages web et formulaires sur Wordpress</p></li>
                    <li><p>Optimisation d'un site web (GTM, Analytics, Lighthouse)</p></li>
                    <li><p>Mise en place d'une CI (intégration continue sur Github)</p></li>
                </ul>
                <p><br></p>
                <p class="displayFlex justify-content-center">
                    <img src="{{ url('images/software.jpg') }}" alt="" class="img-fluid">
                </p>
                Environnement de travail.
                <p>
                </p>
                <h2 class="mb-3 mt-5">#1 - Maquette XD </h2>
                <p class="justify">À partir d’un cahier des charges et de screens, j’ai pu construire une maquette
                    pour un projet d’intranet. L’objectif étant de proposer une version moderne et épurée de
                    l’existant, il m’a fallu étudier ce qui se faisait et m’inspirer de certaines chartes graphiques.
                    Des couleurs vives et des boutons développable avec Bootstrap étaient mes seules contraintes.
                </p>
                <p>
                    <img src="{{ url('images/MaquetteAlgo.JPG') }}" alt="" class="img-fluid">
                </p>
                <p>
                    <img src="{{ url('images/MaquetteAlgo1.jpg') }}" alt="" class="img-fluid">
                </p>
                <p class="justify">
                    La maquette a été par la suite modifiée au fur et à mesure par le développeur en charge du projet
                    suite aux retours clients.
                </p>
                <h2 class="mb-3 mt-5">#2 -  Ws-Mesh-SEO : Développement d'un module Prestashop</h2>
                <p class="justify">
                    Le module WS-Mesh-SEO a pour utilité de proposer en en-tête des pages de catégories ou de liste de
                    produit de la boutique un maillage en accordéon de liens vers d’autres catégories.
                    L’intérêt d’un module est qu’il est personnalisable (et donc on peut proposer ce service à des
                    clients qui veulent pouvoir l’utiliser sans avoir à avoir des notions de développement).
                    Ici mon chef de stage m’a confié le développement en m’illustrant ses propos avec un maillage déjà
                    préexistant qu’il a vu sur un autre site internet.

                </p>
                <h4>Notion de hook</h4>
                <p class="justify">
                    Un module s’incruste dans les pages (côté admin comme côté client) grâce à des Hooks.
                    Ces hooks peuvent être existant (et donc facilement utilisable) ou inexistant et donc
                    il faut les créer.
                    Dans le cas de mon module, il n’existe pas encore de hook à l’emplacement voulu sur les pages
                    Category. Il m’a fallu gérer aussi à l’installation du module la création de celui-ci,
                    son enregistrement en bdd et son incrustation dans le fichier font de Category.
                </p>
                <p>
                    <img src="{{ url('images/archiPresta.jpg') }}" alt="" class="img-fluid">
                </p>
                <p class="justify">
                   <br> Je vous invite à aller voir le git du projet : <br>
                </p>
                <span><a href="https://github.com/romaneledru/navcategory" class="btn btn-primary py-3 px-4" target="_blank">GitHub Romane Ledru</a></span>
                <h4><br>Qu’est-ce que ça donne visuellement?</h4>
                <p class="justify">
                    Visuellement on a côté admin un formulaire proposant deux configurations possible:
                    personnelles où l’on associe à chaque titre les catégories possédant telle ou telle
                    relation avec la catégorie courante, ou automatique où l’on choisit seulement le titre des
                    4 titres affichés qui correspondront au level depth des catégories en relation avec celle courante.
                </p>
                <p>
                    <img src="{{ url('images/AccessibilityDiagram.jpg') }}" alt="" class="img-fluid">
                </p>
                <p class="justify">
                    Le level-depth est la « profondeur » relationnel des catégories. Une catégorie qui rentre
                    dans une autre catégorie est appelé catégorie enfante. L’autre est donc parente. Avec ce principe,
                    nous pouvons nous permettre d’afficher aussi bien les enfants, les parents, les oncles, neveux,
                    ousins… La catégorie courante peut posséder de nombreux liens de parentés avec les autres catégories
                    du site. Libre au client d’afficher les liens qu’il souhaite en fonction de comment il veux appeler
                    l’utilisateur à naviguer au sein de ses pages.
                </p>
                <p>
                    <img src="{{ url('images/lvlDepth.jpg') }}" alt="" class="img-fluid">
                </p>
                <p class="justify">
                    N'ayant pas encore fait un projet Prestashop en ligne, je ne peux vous montrer directement le
                    fonctionnement du module. Néanmoins j’ai fais quelques vidéos d’utilisation du module côté
                     admin et l’affichage côté client, voici les liens Youtube correspondant:
                </p>
                <ul>
                    <li class="list-group-youtube"><a target="_blank" href="https://www.youtube.com/watch?v=GemhQBKvro4">
                            Présentation du module via le gestionnaire </a></li>
                    <li class="list-group-youtube"><a target="_blank" href="https://youtu.be/UKIVgHhfHv0">Configuration
                            Perso</a></li>
                    <li class="list-group-youtube"><a target="_blank" href="https://youtu.be/6bjiytN-ow8">
                            Configuration Auto</a></li>
                </ul>
                <h2 class="mb-3 mt-5" id="tag-cloud-link-2">#3 - Créations pages web Wordpress et optimisation</h2>
                <p class="justify">
                    J’ai été mandaté pour une évolution du site web de l’entreprise où j’ai effectué mon stage.
                    On m’a demandé une nouvelle page formulaire de devis en ligne. Je n’avais pas plus d’indication
                    (notamment niveau design) mais comme je m’étais déjà occupée du design du site l’année dernière,
                    j’étais déjà familiarisé avec le site wordpress. J’ai utilisé un outil appelé Contact form 7.
                    Comme ci-joint j’ai développé le formulaire avec la documentation de contact form 7 et en langage
                    html. J’y ai ajouté du js et du css pour une navigation rapide et agréable. Une fois le formulaire
                    développé je l’ai inclus dans une page Devis et j’ai ajouté des blocs d’informations pour un
                    meilleur référencement en ligne.<br>
                    Je vous invite aussi à aller jeter un coup d'oeil sur le site de Wess-soft ainsi qu'à la page
                    de formulaire "faire un devis".
                </p>
                <p>
                    <img src="{{ url('images/form7.jpg') }}" alt="" class="img-fluid">
                </p>
                <p class="justify">
                    Pour ce qui est de l’envoi par mail des informations rentrées par l’utilisateur,
                    Contact Form 7 propose une configuration très simple d’utilisation qui renvoie un mail
                    dont le corps est personnalisable et dont les adresses mails sont aussi personnalisables.
                    C’est totalement gratuit et libre d’accès sur Wordpress.
                </p>
                <p>
                    <img src="{{ url('images/2form7.jpg') }}" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3 mt-5" id="tag-cloud-link-2">#4 - Mise en place d'une CI</h2>
                <p class="justify">
                    Je vous invite à aller voir ma veille technologique qui aborde ce sujet ou la CI sur un
                    projet symfony vierge que j'ai mis en place sur GitHub Action : <br>
                </p>
                <ul>
                    <li><a href="{{route('veilletech')}}">
                            Veille Technologique </a></li>
                    <li><a target="_blank" href="https://github.com/romaneledru/SiteAgence/actions">GitHub Action</a></li>
                </ul>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Github Action</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Web</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">CI/CD</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">PhpStorm</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Visual Studio</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Adobe</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">GitKraken</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">WordPress</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Prestashop</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Module</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Maquette XD</a>
                    </div>
                </div>
                <div class="about-author d-flex p-4 bg-dark">
                    <div class="bio mr-5">
                        <img src="{{ url('images/image_2.jpg') }}" alt="Image placeholder"
                             class="img-fluid">
                    </div>
                    <div class="desc">
                        <h3>Merci Wess-soft</h3>
                        <p>Encore merci pour cette expérience très enrichissante et pour toute la bonne humeur pendant
                            ce séjour au sein de votre équipe.
                        </p>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <a href="https://www.wess-soft.com/" target="_blank" class="btn btn-primary py-3 px-4">Visiter le site de Wess-Soft</a>
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Autres projets</h3>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4"
                           style="background-image:url(images/Veille-Techno-scaled.jpg)"></a>
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
                           style="background-image:url(images/csharp-background.jpg)"></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{ route('applicsharp') }}">Application C#</a></h3>
                            <div class="meta">
                                <div><span class="icon-calendar"></span> BTS 2019/2021</div>
                                <div><span class="icon-chat"></span> Client Lourd</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4"
                           style="background-image:url(images/logogsb.jpg); background-color:whitesmoke;background-size: contain;"></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{ route('gsb') }}">PPE GSB</a></h3>
                            <div class="meta">
                                <div><span class="icon-calendar"></span> BTS 2019/2021</div>
                                <div><span class="icon-chat"></span> Client Léger</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4"
                           style="background-image:url(images/image_2.jpg); background-color:#0b586d;"></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{ route('gsb') }}">Stage 1er année & CDD <br>Wess-Soft</a></h3>
                            <div class="meta">
                                <div><span class="icon-calendar"></span> Juin 2020</div>
                                <div><span class="icon-chat"></span> CDD Fullstack</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Tag</h3>
                    <div class="tagcloud">
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Symfony</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Adobe</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Github Action</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">GitKraken</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Wamp</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">MySql</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">WordPress</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Prestashop</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Web</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">CI/CD</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">PhpStorm</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">WordPress</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Module</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Maquette XD</a>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Mes projets</h3>
                    <p class="justify">Que ça soit en Licence, en BTS, en télétravail ou en présentiel,
                        j'ai toujours fais de mon mieux pour présenter des projets
                        qui m'intéressent et qui me forment au mieux pour répondre
                        à mon projet d'étude.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
