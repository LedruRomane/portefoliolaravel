@extends('layouts.app')

@section('title', 'Engagement citoyen')

@section('content')
<section class="hero-wrap js-fullheight imageHeader" style="background-image:url(images/engagement.jpg)"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center imageHeader">
            <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
                <h1 class="mb-3 bread">Engagement</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Accueil <i
                                class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                            href="{{ route('engagement') }}">Engagement</a></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3">Engagement citoyen</h2>
                <p class="justify">J'ai eu la possibilité de m'engager bénévolement dans l'élaboration d'un site
                    internet pour la mairie de Saint-Léger le Guérétois.
                </p>
                <h2 class="mb-3 mt-5" id="tag-cloud-link-1">
                    #1. Maquette
                </h2>
                <p class="justify">
                </p>
                <p>
                    <img src="{{ url('images/maquetteMairie.jpg') }}" alt="" class="img-fluid">
                </p>
                Maquette réalisée sous Adobe XD.
                <h2 class="mb-3 mt-5" id="tag-cloud-link-1">
                    #2. Site fonctionnel
                </h2>
                <p class="justify">Le site ayant été fait sur Wordpress pour que l'adjoint au maire puisse aussi travailler
                    dessus, il est actuellement fonctionnel mais pas approfondi (design et navigation à retravailler).
                    J'ai pu proposer une évolution du site (et notemment sa migration dans un hébergement privé afin de
                    mettre à jour php) ainsi qu'une maquette design.
                </p>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Wordpress</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Web</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Adobe</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Illustrator</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">XD</a>
                        <a href="#tag-cloud-link-2" class="tag-cloud-link">Photoshop</a>
                    </div>
                </div>
                <div class="about-author d-flex p-4 bg-dark">
                    <div class="bio mr-5">
                        <img src="{{ url('images/engagement2.png') }}" alt="Image placeholder"
                             class="img-fluid">
                    </div>
                    <div class="desc">
                        <h3>Le bénévolat</h3>
                        <p>Il a toujours été pour moi une évidence d'alouer de mes compétences et de mon temps tant que
                            je le peux dans le bénévolat.
                        </p>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <a href="http://saintlegerlegueretois.fr/" target="_blank" class="btn btn-primary py-3 px-4">Visiter le site</a>
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
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Wordpress</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Adobe</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">XD</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Photoshop</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">Wamp</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">MySql</a>
                        <a href="#tag-cloud-link-1" class="tag-cloud-link">OVH</a>
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
