@extends('layouts.app')

@section('title', 'Application Csharp')

@section('content')
    <section class="hero-wrap js-fullheight imageHeader" style="background-image:url(images/csharp-background.jpg)"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center imageHeader">
                <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
                    <h1 class="mb-3 bread">Application C#</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                href="{{ route('applicsharp') }}">Application C#</a></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">Application C# GSB</h2>
                    <p class="justify">L'application réalisée avec Visual Studio, sous Windows Form, en C#, devra permettre à l'utilisateur
                        de gérer les visiteurs, les médecins, les mdédicaments et de créer des rapports, à partir
                        de fiches de rapport de visite envoyées par les visiteurs par mail au format pdf.
                    </p>
                    <h2 class="mb-3 mt-5" id="tag-cloud-link-1">
                        # L'intérêt
                    </h2>
                    <p class="justify">
                        L'objectif est de maîtriser l'architecture d'une application "client lourd" avec un accès aux
                        données.

                    </p>
                    <p>
                        <img src="{{ url('images/applicsharp5.jpg') }}" alt="" class="img-fluid">
                    </p>
                    Ci-dessus l'architecture de l'application à réaliser.
                    <p>
                    </p>
                    <h2 class="mb-3 mt-5"># Visuellement </h2>
                    <p class="justify">
                        Visuellement, l'application n'aura pas de design appliqué ou récent. Pour un design soigné,
                        il aurait été préférable de s'orienter vers une application WPF. Ci-dessous des visuels.
                        L'intérêt est d'apprendre le fonctionnel: la gestion, l'affichage, la mise à jour, l'insertion,
                        la modification, la suppression...

                    </p>
                    <p>
                        <img src="{{ url('images/applicsharp.JPG') }}" alt="" class="img-fluid">
                    </p>
                    <p>
                    </p>
                    <p>
                        <img src="{{ url('images/applicsharp2.JPG') }}" alt="" class="img-fluid">
                    </p>
                    <p>
                    </p>
                    <p>
                        <img src="{{ url('images/applicsharp3.JPG') }}" alt="" class="img-fluid">
                    </p>
                    <h2 class="mb-3 mt-5"># Une approche du C#</h2>
                    <p class="justify">Grâce à ce projet, j'ai pu approcher la programmation C#, stricte, que j'apprécie très
                        particulièrement.
                        Ses exigences obligent un développement propre et carré.
                    </p>
                    <p>
                        <img src="{{ url('images/applicsharp4.JPG') }}" alt="" class="img-fluid">
                    </p>
                    <p>
                    </p>
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <a href="#tag-cloud-link-2" class="tag-cloud-link">Visual Studio</a>
                            <a href="#tag-cloud-link-2" class="tag-cloud-link">Client Lourd</a>
                            <a href="#tag-cloud-link-2" class="tag-cloud-link">C#</a>
                            <a href="#tag-cloud-link-2" class="tag-cloud-link">MySql</a>
                            <a href="#tag-cloud-link-2" class="tag-cloud-link">Application</a>
                            <a href="#tag-cloud-link-2" class="tag-cloud-link">Windows Forms</a>
                        </div>
                    </div>
                    <div class="about-author d-flex p-4 bg-dark">
                        <div class="bio mr-5">
                            <img src="{{ url('images/csharp-background-ellipse.png') }}" alt="Image placeholder"
                                 class="img-fluid">
                        </div>
                        <div class="desc">
                            <h3>Applications C#</h3>
                            <p>Pour conclure, j'aimerai grandement m'améliorer dans le développement lourd et surtout
                                apprendre à utiliser en autodidacte le WPF.
                            </p>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar">Autres projets</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                               style="background-image:url(images/CICD.jpg)"></a>
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
                               style="background-image:url(images/image_2.jpg); background-color:#0b586d;"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('stagewess') }}">Stage 1er année & CDD Wess-Soft</a></h3>
                                <div class="meta">
                                    <div><span class="icon-calendar"></span> Juin 2020</div>
                                    <div><span class="icon-chat"></span> CDD Fullstack</div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                               style="background-image:url(images/logogsb.jpg); background-color:whitesmoke;background-size: contain;"></a>
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
                            <a href="#tag-cloud-link-1" class="tag-cloud-link">Visual Studio</a>
                            <a href="#tag-cloud-link-1" class="tag-cloud-link">Client Lourd</a>
                            <a href="#tag-cloud-link-1" class="tag-cloud-link">C#</a>
                            <a href="#tag-cloud-link-1" class="tag-cloud-link">MySql</a>
                            <a href="#tag-cloud-link-1" class="tag-cloud-link">Application</a>
                            <a href="#tag-cloud-link-1" class="tag-cloud-link">Windows Forms</a>
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
