@extends('layouts.app')

@section('title', 'Stage Wess-Soft')

@section('content')
<section class="hero-wrap js-fullheight imageHeader" style="background-image:url(images/stage1.jpg)"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center imageHeader">
            <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
                <h1 class="mb-3 bread">Wess-Soft</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Accueil <i
                                class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                            href="{{ route('stagewess') }}">Stage</a></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3">Stage de première année chez Wess-Soft</h2>
                <p>Wess-soft est une agence de développement mobile et web de 6 personnes tenue par deux co-gérants.
                    Leur entreprise est située au 40 rue Laure Diebold à Lyon et loue un open-space dans un
                    regroupement d’entreprises et de bureaux appelés Focus.
                </p>
                <h2 class="mb-3 mt-5" id="tag-cloud-link-1">
                    #1. Première approche
                </h2>
                <p>
                    Tout d’abord, il m’a fallu mettre en place un environnement de travail : installation de wamp et
                    laragon pour des travaux en local,
                    installation de symfony & laravel.
                    Ensuite, on m’a confié un travail de mise à niveau du site wordpress de l'agence : Wess-soft.fr
                    Je me suis occupée de la création d’une page de présentation « Solution de réservation en ligne
                    tout-en-un pour votre salon ».
                    Ça m’a permis d’utiliser mes compétences acquises durant ma licence d’art design : travail sur le
                    design/couleur, création et proposition
                    d’une maquette avec un nouveau design sous Adobe XD.

                </p>
                <p>
                    <img src="{{ url('images/maquettews.jpg') }}" alt="" class="img-fluid">
                </p>
                Maquette réalisée sous Adobe XD. Rendu final sur wordpress.
                <p>
                </p>
                <h2 class="mb-3 mt-5">#2. Modification module Prestashop </h2>
                <p>Aussi, j’ai travaillé sur un module Prestashop de prise de rendez-vous en ligne. Cela consistait à
                    créer une nouvelle fonctionnalité au sein du calendrier côté administrateur : L’ajout de la
                    possibilité d’enregistrer des rendez-vous libres dit "en attente", la création du bouton, puis la
                    gestion de la relation entre celui-ci et un popup grâce un formulaire. Et évidemment le traitement
                    du formulaire : <br>
                    -Création de classes ; enregistrement au sein de la base de données. <br>
                    -Installation de cette fonctionnalité à l’installation du module, et désinstallation complète quand
                    celui-ci est retiré du site Prestashop. <br>
                    Dans un second temps, j’ai travaillé sur l’ajout d’un bouton pour ajouter/retirer des clients dans
                    la liste d’attente. Affichage d’un nouveau popup avec un DataList avec la possibilité de
                    sélectionner un client, de modifier ses informations, de le supprimer de la liste. Aussi, il
                    fallait que l'on puisse renseigner un nouveau client et l’ajouter dans la base de données.
                </p>
                <p>
                    <img src="{{ url('images/extraiws.jpg') }}" alt="" class="img-fluid">
                </p>
                <p>
                    Le visuel étant protégé par Wess-Soft, il m'est impossible de montrer le calendrier côté
                     administrateur.
                </p>
                <p>
                    <img src="{{ url('images/extrait2ws.jpg') }}" alt="" class="img-fluid">
                </p>
                <p>
                    Ci-dessus un visuel du rendu des prises de rendez-vous en ligne pour des prestations (ici la date du rdv).
                </p>
                <h2 class="mb-3 mt-5">#3. ReDesign pour des clients de prestations sur Prestashop.</h2>
                <p>J'ai aussi durant mon stage retravaillé les Design de deux sites de prestations en ligne. J'ai pu
                    approfondir mes connaissances en CSS, et apprendre en profondeur l'utilité des SVG.
                </p>
                <p>
                    <img src="{{ url('images/extraitws3.jpg') }}" alt="" class="img-fluid">
                </p>
                <p>
                    Ci-dessus l'avant/après du design du site web.
                </p>
                <h2 class="mb-3 mt-5" id="tag-cloud-link-2">#4. Création sous Symfony d'une application Pivot Table</h2>
                <p>
                    Pour finir, j'ai pu créer sous Symfony une application permettant de proposer à la selection, toutes
                    les tables de n'importe quelle base de données pour ensuite construire dynamiquement une
                    pivot-table. Le design n'est pas soigné, l'intéret étant la gestion des données dans ce projet.
                    Aussi il a fallu gérer l'enregistrement de la pivot-table ainsi que sa configuration en bdd.
                </p>
                <p>
                    <img src="{{ url('images/extraitws4.jpg') }}" alt="" class="img-fluid">
                </p>
                <p>
                    Ci-dessus un aperçu d'une pivot table générée avec deux tables préalablement sélectionnées dans
                    deux selects rétrocompatibles pour gérer les tables liées entre elles.
                </p>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Symfony</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Web</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Twig</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Illustrator</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Visual Studio Code</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Adobe</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">GitKraken</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">WordPress</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Prestashop</a>
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
                            <h3 class="heading"><a href="{{ route('gsb') }}">PPE GSB</a></h3>
                            <div class="meta">
                                <div><span class="icon-calendar"></span> 2020/2021</div>
                                <div><span class="icon-chat"></span> Client Léger</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Tag</h3>
                    <div class="tagcloud">
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Symfony</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Adobe</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Visual Studio Code</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">GitKraken</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Wamp</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">MySql</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">WordPress</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Prestashop</a>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Mes projets</h3>
                    <p>Que ça soit en Licence, en BTS, en télétravail ou en présentiel,
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
