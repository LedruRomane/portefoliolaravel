@extends('layouts.app')

@section('title', 'Veille Technologique')

@section('content')
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <section class="hero-wrap js-fullheight imageHeader" style="background-image:url(images/Veille-Techno-scaled.jpg)"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center imageHeader">
                <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
                    <h1 class="mb-3 bread">Veille</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                href="{{ route('veilletech') }}">Veille Technologique</a></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">#- Introduction</h2>
                    <p class="justify">Il est nécessaire et même indispensable dans une veille technologique d’optimiser et d’améliorer
                        ses connaissances et ses compétences par la pratique. Apprendre c’est aussi assimiler, comprendre
                        et utiliser afin de posséder l’information utile en toute circonstance.
                        Le monde du développement est en constante expansion, les nouvelles tech sortent très régulièrement
                        et il est important de savoir récupérer, trier et se renseigner sur les domaines dans lesquels nous
                        évoluons.
                        <br>
                        <br>

                    </p>
                    <p>
                        <img src="{{ url('images/VeilleOutils.png') }}" alt="" class="img-fluid">
                    </p>
                    <p class="justify"><br><br>De nombreux outils sont à disposition pour effectuer une veille en bonne et due forme,
                        j’ai donc misé sur les plus simples d’entre eux et des logiciels que j’utilise régulièrement:
                        Discord, Twitter, Ggoogle News, GitHub, Stackoverflow, Youtube…; et des API sur des mots clés.
                        <br><br>
                        Les frameworks symfony et laravel étaient mon premier travail de recherche,
                        je me suis penchée sur leurs différences, leurs forces et leurs faiblesses.
                        Mais ces outils ne sont vraiment sublimés que par une pratique stricte au sein d’un environnement
                        de travail sain, et il m’est devenu évident de l’importance de la méthode de travail au
                        sein d’un projet regroupant de nombreuses personnes. Je me suis donc concentrée sur la méthode
                        Agile, sur le DevOps et surtout sur le principe de l’intégration continue et le déploiement
                        continu.
                        <br><br>
                    </p>
                    <h2 class="mb-3 mt-5" id="tag-cloud-link1">#- La méthode Agile</h2>
                    <p class="justify">La méthode agile regroupe de très nombreux savoir-faire et un vocabulaire étoffé.
                        Elle se manifeste par 4 valeurs fondamentales : L’équipe, l’application,
                        la collaboration et l’acceptation du changement.
                    </p>
                    <p>
                        <img src="{{ url('images/agileSchéma.png') }}" alt="" class="img-fluid">
                    </p>
                    <p>Elle prône principalement ces principes :
                    </p>
                    <ul>
                        <li>Satisfaire le client en priorité</li>
                        <li>Accueillir favorablement les changements</li>
                        <li>Livrer le plus souvent possible les versions opérationnelles</li>
                        <li>Assurer une coopération permanente entre le client et les équipes</li>
                        <li>Construire le projet autour de personnes motivées</li>
                        <li>Privilégier le face à face ou la Webcam</li>
                        <li>Mesurer l’avancement du projet en matière de fonctionnalités</li>
                        <li>Garder un rythme</li>
                        <li>Faire simple</li>
                        <li>Responsabiliser les équipes</li>
                        <li>Ajuster les comportements en fonction des processus</li>
                    </ul>
                    <p class="justify">La méthode agile va de paire avec la méthode scrum, pour insister sur le principe d’agilité dans
                        le processus de développement. L'intérêt étant de gagner du temps, optimiser le budget et les
                        échanges avec le client afin que celui-ci soit le plus satisfait possible du produit en cours
                        de développement et final.
                        Le principe le plus important de la méthode scrum est le sprint et la rétrospective. Ci-dessous
                        un schéma qui résume le fonctionnement et le squelette de la méthode agile par rapport à une
                        méthode dite “classique”.
                    </p>
                    <p>
                        <img src="{{ url('images/schema-methode-classique-methode-agile.png') }}" alt="" class="img-fluid">
                    </p>
                    <p class="justify">Il est important de noter que cette méthode a pour objectif principale la
                        satisfaction du client tout en optimisant le processus de développement au sein de l’équipe.
                        Une structure saine avec un mode de fonctionnement spécifique est le noyau d’un projet réussi.
                    </p>
                    <p class="justify">La planification et l’utilisation de nouveaux outils est primordiale dans la mise en place de
                        la méthode agile. Définir une planification, une estimation de l’effort, un changement de
                        périmètre, les rôles, les boards ou artifacts, les caractéristiques est une étape fondamentale
                        avant, pendant et après chaque projet. Chaque sprint doit être encadré, rythmé et correctement
                        défini afin que l’équipe scrum réalise ce qui doit être fait. </p>
                    <p class="justify">L’outil le plus important dans un sprint est le scrum board. Il se présente
                        souvent sous des cartes (Todo, on going, done) avec les tickets à effectuer pour l’intégralité
                        du sprint. Il est rare mais possible que des tickets soient ajoutés pendant le sprint mais
                        il est préférable de finir un sprint avant d’ajouter des fonctionnalités ou des tâches.</p>
                    <p>
                        <img src="{{ url('images/scrumBoard.png') }}" alt="" class="img-fluid">
                    </p>
                    <p class="justify"><a href="https://trello.com/">Trello</a>, Jira Software, Asana, Airtable,
                        Monday.com sont des scrum board très utilisés par les entreprises pour gérer leurs plan de
                        sprint. Il est néanmoins possible de trouver des scrum boards fait maison dans des entreprises
                        ayant des besoins de fonctionnalités personnalisées.
                    </p>
                    <h2 class="mb-3 mt-5" id="tag-cloud-link1">#- Le DevOps & CI/CD </h2>
                    <p>
                    <p class="justify">Le DevOps est conceptualisé en 2009 en Belgique par Patrick Debois: cela
                        consiste à concilier le métier de développeur logiciel et l’administrateur de systèmes et
                        d'architectures. Il se concrétise par la mise en place de pipelines d’intégration et de
                        livraison continues (CI/CD) cours. Cela a pour vocation d’automatiser et de monitorer
                        l’ensemble du cycle de vie des applications (que ce soit les sprints ou sans) de sa conception,
                        sa phase de test et jusqu’à sa mise en production.
                    </p>
                    <p>
                        <img src="{{ url('images/DevOps-les-fondamentaux.png') }}" alt="" class="img-fluid">
                    </p>
                    <p class="justify">Les bénéfices d’un tel système sont nombreux: l’automatisation permet d’éviter
                        les erreurs dues aux saisies manuelles, libère du temps et de la réflexion, l’adaptation
                        permet de se caser au contexte et aux attentes du marché actuel, la qualité et la productivité,
                        la livraison est plus rapide en incluant un processus d’amélioration continu, la valeur ajoutée
                        qui en ressort permet de rendre plus rentable les projets aussi bien pour le client que pour
                        l’entreprise prestataire.
                    </p>
                    <p class="justify">Un pipeline CI/CD est une série d’étapes à réaliser en vue de distribuer une
                        nouvelle version d’un projet. A l’aide de l’approche DevOps, les pipelines d’intégration et de
                        distribution continues constituent une pratique visant à améliorer le processus de
                        développement.
                    </p>
                    <p class="justify">Un pipeline est constitué de phases : Création (ou compilation), test
                        (automatisation du test), lancement (distribution), déploiement (en production),
                        puis validation et conformité.
                    </p>
                    <p>
                        <img src="{{ url('images/pipeline.png') }}" alt="" class="img-fluid">
                    </p>
                    <p class="justify">L’approche CI/CD permet d’augmenter la fréquence de distribution des
                        applications grâce à l’introduction de l’automatisation. C’est donc un concept très intimement
                        lié à la méthode Agile et Scrum, notamment dans les différents sprints d’un projet.
                    </p>
                    <p class="justify">Dans la pratique:<br>
                        L’intégration continue (CI) permet aux développeurs de fusionner leurs modifications de
                        code dans une branche partagée critique et unique. Chaque modification de cette branche
                        inclut une automatisation des tests pour détecter le moindre conflit entre le code existant
                        et le code ajouté (et ce, à tous les niveaux, classes, fonctions, modules, extensions…).
                        Si dysfonctionnement il y a, il sera rejeté afin que le développeur corrige les erreurs
                        éventuelles.
                    </p>
                    <p class="justify">La distribution (ou livraison continue), s'effectue qu’après la validation des
                        tests de la CI. C’est une automatisation de la publication du code validé dans un référentiel.
                        L’étape finale correspond au déploiement continu (CD), qui complète la distribution, en
                        automatisant la publication d’une version prête pour la production et son exécution.
                    </p>
                    <p class="justify">Suite au déploiement, la validation et la conformité passe par le
                        client qui retourne ses indications à l’équipe de production.
                    </p>
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
                            <img src="images/Veille-Techno-scaled-ellipse.png" alt="Image placeholder"
                                 class="img-fluid mb-4">
                        </div>
                        <div class="desc">
                            <h3>Veille Technologique : Partage</h3>
                            <p>Je me suis abonnée sur Twitter, Youtube, Google New (...) à de nombreuses newsletters et
                                personnes dont le métier est DevOps, j'ai fais une API pour récupérer et centraliser
                                ces informations sur un BOT Discord (logiciel que j'utilise quotidiennement).
                                Partager mon serveur Discord où est trié les informations dans des channels textuels
                                est une bonne manière afin de diffuser ma veille technologique.
                            </p>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <a href="{{ url('http://gsb.romaneledru.fr') }}" target="_blank" class="btn btn-primary py-3 px-4">Voir mes projets</a>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar">Mots clés</h3>
                        <ul class="categories">
                            <li><p>Agile</p></li>
                            <li><p>DevOps</p></li>
                            <li><p>CI/CD</p></li>
                            <li><p>GitHub Action</p></li>
                        </ul>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar" id="tag-2">Autres projets</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                               style="background-image:url(images/image_3.jpg)"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('gsb') }}">PPE GSB: web et intranet</a></h3>
                                <div class="meta">
                                    <div><span class="icon-calendar"></span> BTS 2019/2021</div>
                                    <div><span class="icon-chat"></span> Client Léger</div>
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
                                <h3 class="heading"><a href="{{ route('stagewess') }}">Stage 1er année & CDD Wess-Soft</a></h3>
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
                            <a href="#tag-2" class="tag-cloud-link">DevOps</a>
                            <a href="#tag-2" class="tag-cloud-link">Agile</a>
                            <a href="#tag-2" class="tag-cloud-link">GitHub</a>
                            <a href="#tag-2" class="tag-cloud-link">Action</a>
                            <a href="#tag-2" class="tag-cloud-link">Scrum</a>
                            <a href="#tag-2" class="tag-cloud-link">ScrumBoard</a>
                            <a href="#tag-2" class="tag-cloud-link">CI/CD</a>
                            <a href="#tag-2" class="tag-cloud-link">Pipeline</a>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar">Mes projets</h3>
                        <p class="justify">Que ce soit en Licence, en BTS, en télétravail ou en présentiel,
                            J'ai toujours fait en sorte de présenter des projets
                            qui m'intéressent et qui me font avancer dans ma formation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
