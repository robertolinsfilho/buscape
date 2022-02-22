@include('favicon')
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="assets/css/demos/demo-4.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

</head>

<body>
<div class="page-wrapper">
    <header class="header header-intro-clearance header-4">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                </div><!-- End .header-left -->

                <div class="header-right">

                    <ul class="top-menu">
                        <li>
                            <a href="#">Links</a>
                            <ul>

                                @auth
                                    <li>
                                    <div class="header-dropdown">
                                        <a  href="/minhaconta">Minha conta</a>
                                        <div class="header-menu">

                                            <style>
                                                .header-menu ul a{
                                                    font-size: 13px;
                                                }
                                            </style>
                                        <ul >
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                              <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-jet-dropdown-link>
                                            </form>
                                        </ul>
                                        </div><!-- End .header-menu -->
                                    </div>
                                    </li>
                                @endauth
                                @guest
                                <li><a style="padding: 5px" href="#signin-modal" data-toggle="modal">Entrar / Registrar</a></li>
                                @endguest
                            </ul>
                        </li>
                    </ul><!-- End .top-menu -->
                </div><!-- End .header-right -->

            </div><!-- End .container -->
        </div><!-- End .header-top -->

        <div class="header-middle">
            <div class="container">
                <div class="header-left">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>

                    <a href="../" class="logo">
                        <img src="imagens/Logo CoopON Fundo Transparente.png" alt="Molla Logo" width="105" height="25">
                    </a>
                </div><!-- End .header-left -->

                <div class="header-center">

<style>

</style>
                    <div class="input-group">
                        <input type="search" class="form-control rounded" id="nomepesquisa" placeholder="Pesquisar Cooperação" aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" id="pesquisar" class="btn btn-outline-primary">Pesquisar</button>
                    </div>
                </div>
                <div class="header-right">

                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->


    </header><!-- End .header -->

    <main class="main">
<style>
    @keyframes blink {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
    }
    h1::after {
        content: '|';
        opacity: 1;
        display: inline-block;
        animation: blink .7s infinite;
    }
</style>
<div id="contador">
    <h1 style="font-family: impact,fantasy;text-align: center;font-size: 40px;margin-top: 1%;">O coopON já economizou </h1>
    <h1 id="valor" style="font-family: Impact, fantasy;font-size: 120px;text-align: center;margin-top: 2%;margin-bottom: 5%;color: #16C49F;background-color: #ededed;    padding-top: 5%;
    padding-bottom: 5%;letter-spacing: 2.8rem;">RS:1500,00</h1>
</div>
        <div class="container">
            <h2 class="title text-center mb-4">Categorias mais Acessadas</h2><!-- End .title text-center -->

            <div class="cat-blocks-container">
                <div class="row">
                    <div class="col-6 col-sm-4 col-lg-2">
                        <a href="/search/notebook" class="cat-block">
                            <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-4/cats/1.png" alt="Category image">
                                    </span>
                            </figure>

                            <h3 class="cat-block-title">Notebook</h3><!-- End .cat-block-title -->
                        </a>
                    </div><!-- End .col-sm-4 col-lg-2 -->

                    <div class="col-6 col-sm-4 col-lg-2">
                        <a href="/search/cameras" class="cat-block">
                            <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-4/cats/2.png" alt="Category image">
                                    </span>
                            </figure>

                            <h3 class="cat-block-title">Câmeras</h3><!-- End .cat-block-title -->
                        </a>
                    </div><!-- End .col-sm-4 col-lg-2 -->

                    <div class="col-6 col-sm-4 col-lg-2">
                        <a href="/search/smartphone" class="cat-block">
                            <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-4/cats/3.png" alt="Category image">
                                    </span>
                            </figure>

                            <h3 class="cat-block-title">SmartPhones</h3><!-- End .cat-block-title -->
                        </a>
                    </div><!-- End .col-sm-4 col-lg-2 -->

                    <div class="col-6 col-sm-4 col-lg-2">
                        <a href="/search/tv" class="cat-block">
                            <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-4/cats/4.png" alt="Category image">
                                    </span>
                            </figure>

                            <h3 class="cat-block-title">Televisão</h3><!-- End .cat-block-title -->
                        </a>
                    </div><!-- End .col-sm-4 col-lg-2 -->

                    <div class="col-6 col-sm-4 col-lg-2">
                        <a href="/search/som" class="cat-block">
                            <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-4/cats/5.png" alt="Category image">
                                    </span>
                            </figure>

                            <h3 class="cat-block-title">Audio</h3><!-- End .cat-block-title -->
                        </a>
                    </div><!-- End .col-sm-4 col-lg-2 -->

                    <div class="col-6 col-sm-4 col-lg-2">
                        <a href="/search/SmartWatches" class="cat-block">
                            <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-4/cats/6.png" alt="Category image">
                                    </span>
                            </figure>

                            <h3 class="cat-block-title">SmartWatches</h3><!-- End .cat-block-title -->
                        </a>
                    </div><!-- End .col-sm-4 col-lg-2 -->
                </div><!-- End .row -->
            </div><!-- End .cat-blocks-container -->
        </div><!-- End .container -->

        <div class="mb-4"></div><!-- End .mb-4 -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="banner banner-overlay banner-overlay-light">
                        <a href="#">
                            <img src="assets/images/demos/demo-4/banners/banner-1.png" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle"><a href="#">SmartPhone</a></h4><!-- End .banner-subtitle -->
                            <h3 class="banner-title"><a href="#">Economize apartir de R$150 <strong><br> em Smartphones </strong></a></h3><!-- End .banner-title -->
                            <a href="#" class="banner-link">Confira Agora<i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-md-4 -->

                <div class="col-md-6 col-lg-4">
                    <div class="banner banner-overlay banner-overlay-light">
                        <a href="#">
                            <img src="assets/images/demos/demo-4/banners/Capturar.PNG" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle"><a href="#">TV</a></h4><!-- End .banner-subtitle -->
                            <h3 class="banner-title"><a href="#"><strong>Tv's</strong> <br>Até 30% Off</a></h3><!-- End .banner-title -->
                            <a href="#" class="banner-link">Confira Agora<i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-md-4 -->

                <div class="col-md-6 col-lg-4">
                    <div class="banner banner-overlay banner-overlay-light">
                        <a href="#">
                            <img src="assets/images/demos/demo-4/banners/notebook.PNG" alt="Banner">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle"><a href="#">Notebook</a></h4><!-- End .banner-subtitle -->
                            <h3 class="banner-title"><a href="#"><strong>Notebook Até 20%</strong> </h3><!-- End .banner-title -->
                            <a href="#" class="banner-link">Confira Já<i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-3"></div><!-- End .mb-5 -->

        <div class="container new-arrivals">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Novos Produtos</h2><!-- End .title -->
                </div><!-- End .heading-left -->

                <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="new-tv-link" data-toggle="tab" href="#new-tv-tab" role="tab" aria-controls="new-tv-tab" aria-selected="false">Smartphone</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="new-computers-link" data-toggle="tab" href="#new-computers-tab" role="tab" aria-controls="new-computers-tab" aria-selected="false">Computadores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="new-phones-link" data-toggle="tab" href="#new-phones-tab" role="tab" aria-controls="new-phones-tab" aria-selected="false">TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="new-watches-link" data-toggle="tab" href="#new-watches-tab" role="tab" aria-controls="new-watches-tab" aria-selected="false">Geladeiras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="new-acc-link" data-toggle="tab" href="#new-acc-tab" role="tab" aria-controls="new-acc-tab" aria-selected="false">Fritadeira</a>
                        </li>

                    </ul>
                </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel just-action-icons-sm">
                <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                         data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>

                        @foreach($all as $todos)
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="produto/{{$todos->imagem}}">
                                    <img src="imagens/{{$todos->imagem}}.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action">
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 78px;" class="fab fa-whatsapp"></i></a>
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 20px;" class="fab fa-facebook"></i></a>
                                </div><!-- End .product-action -->


                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">All</a>
                                </div><!-- End .product-cat -->
                                <div style="display: inline-flex;" id="curtiram">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                <h6 style="font-size: 10px;margin-top: 6%;margin-left: 3%;"> fulano e outra pessoas adiquiriram essa coooperação</h6>
                                </div>
                                <h3 class="product-title"><a href="produto/{{$todos->imagem}}">{{$todos->nome}}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{$todos->preco}}
                                </div><!-- End .product-price -->
                                <div style="width: 82%;margin-left: 6%;" class="progress">
                                    <div  class="progress-bar" role="progressbar" style="width: 75%; background-color: #16C49F" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>


                            </div><!-- End .product-body -->


                        </div><!-- End .product -->
@endforeach

                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="new-tv-tab" role="tabpanel" aria-labelledby="new-tv-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                         data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>

                        @foreach($celulares as $celular)
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-new">Celular</span>
                                <a href="produto/{{$celular->imagem}}">
                                    <img src="imagens/{{$celular->imagem}}.jpg" alt="Product image" class="product-image">
                                </a>



                                <div class="product-action">
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 78px;" class="fab fa-whatsapp"></i></a>
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 20px;" class="fab fa-facebook"></i></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Smartphones</a>
                                </div><!-- End .product-cat -->
                                <div style="display: inline-flex;" id="curtiram">
                                    <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                    <h6 style="font-size: 10px;margin-top: 6%;margin-left: 3%;"> fulano e outra pessoas adiquiriram essa coooperação</h6>
                                </div>
                                <h3 class="product-title"><a href="produto/{{$celular->imagem}}">{{$celular->nome}}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{$celular->preco}}
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div style="width: 82%;margin-left: 6%;" class="progress">
                                        <div  class="progress-bar" role="progressbar" style="width: 75%; background-color: #16C49F" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!-- End .rating-container -->


                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        @endforeach



                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="new-computers-tab" role="tabpanel" aria-labelledby="new-computers-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                         data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                        @foreach($computadores as $computador)
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="produto/{{$computador->imagem}}">
                                    <img src="imagens/{{$computador->imagem}}.jpg" alt="Product image" class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 78px;" class="fab fa-whatsapp"></i></a>
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 20px;" class="fab fa-facebook"></i></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Computadores</a>
                                </div><!-- End .product-cat -->
                                <div style="display: inline-flex;" id="curtiram">
                                    <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                    <h6 style="font-size: 10px;margin-top: 6%;margin-left: 3%;"> fulano e outra pessoas adiquiriram essa coooperação</h6>
                                </div>
                                <h3 class="product-title"><a href="produto/{{$computador->imagem}}">{{$computador->nome}}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{$computador->preco}}
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div style="width: 82%;margin-left: 6%;" class="progress">
                                        <div  class="progress-bar" role="progressbar" style="width: 75%; background-color: #16C49F" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        @endforeach

                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="new-phones-tab" role="tabpanel" aria-labelledby="new-phones-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                         data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                        @foreach($tv as $tvs)
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="produto/{{$tvs->imagem}}">
                                    <img src="imagens/{{$tvs->imagem}}.jpg" alt="Product image" class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 78px;" class="fab fa-whatsapp"></i></a>
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 20px;" class="fab fa-facebook"></i></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Tv</a>
                                </div><!-- End .product-cat -->
                                <div style="display: inline-flex;" id="curtiram">
                                    <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                    <h6 style="font-size: 10px;margin-top: 6%;margin-left: 3%;"> fulano e outra pessoas adiquiriram essa coooperação</h6>
                                </div>
                                <h3 class="product-title"><a href="produto/{{$tvs->imagem}}">{{$tvs->nome}}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{$tvs->preco}}
                                </div><!-- End .product-price -->
                                <div style="width: 82%;margin-left: 6%;" class="progress">
                                    <div  class="progress-bar" role="progressbar" style="width: 75%; background-color: #16C49F" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        @endforeach

                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="new-watches-tab" role="tabpanel" aria-labelledby="new-watches-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                         data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                        @foreach($geladeira as $geladeiras)
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="produto/{{$geladeiras->imagem}}">
                                    <img src="imagens/{{$geladeiras->imagem}}.jpg" alt="Product image" class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 78px;" class="fab fa-whatsapp"></i></a>
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 20px;" class="fab fa-facebook"></i></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Geladeiras</a>
                                </div><!-- End .product-cat -->
                                <div style="display: inline-flex;" id="curtiram">
                                    <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                    <h6 style="font-size: 10px;margin-top: 6%;margin-left: 3%;"> fulano e outra pessoas adiquiriram essa coooperação</h6>
                                </div>
                                <h3 class="product-title"><a href="produto/{{$geladeiras->imagem}}">{{$geladeiras->nome}}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                   {{$geladeiras->preco}}
                                </div><!-- End .product-price -->

                                <div style="width: 82%;margin-left: 6%;" class="progress">
                                    <div  class="progress-bar" role="progressbar" style="width: 75%; background-color: #16C49F" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
@endforeach

                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="new-acc-tab" role="tabpanel" aria-labelledby="new-acc-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                         data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                        @foreach($fritadeira as $fritadeiras)
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="produto/{{$fritadeiras->imagem}}">
                                    <img src="imagens/{{$fritadeiras->imagem}}.jpg" alt="Product image" class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 78px;" class="fab fa-whatsapp"></i></a>
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 20px;" class="fab fa-facebook"></i></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Fritadeira</a>
                                </div><!-- End .product-cat -->
                                <div style="display: inline-flex;" id="curtiram">
                                    <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                    <h6 style="font-size: 10px;margin-top: 6%;margin-left: 3%;"> fulano e outra pessoas adiquiriram essa coooperação</h6>
                                </div>
                                <h3 class="product-title"><a href="produto/{{$fritadeiras->imagem}}">{{$fritadeiras->nome}}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{$fritadeiras->preco}}
                                </div><!-- End .product-price -->
                                <div style="width: 82%;margin-left: 6%;" class="progress">
                                    <div  class="progress-bar" role="progressbar" style="width: 75%; background-color: #16C49F" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        @endforeach

                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .container -->

        <div class="mb-6"></div><!-- End .mb-6 -->





        <div class="mb-5"></div><!-- End .mb-5 -->

        <div class="container for-you">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Recomendado Para Você</h2><!-- End .title -->
                </div><!-- End .heading-left -->


            </div><!-- End .heading -->

            <div class="products">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="produto/28182268277">
                                    <img src="imagens/63118400652.jpg" alt="Product image" class="product-image">
                                </a>


                                <div class="product-action">
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 78px;" class="fab fa-whatsapp"></i></a>
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 20px;" class="fab fa-facebook"></i></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Smartphone</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="produto/28182268277">Iphone 11 64 GB</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                   R$4.398
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div style="width: 82%;margin-left: 6%;" class="progress">
                                        <div  class="progress-bar" role="progressbar" style="width: 75%; background-color: #16C49F" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div><!-- End .rating-container -->


                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="produto/28182268277">
                                    <img src="imagens/28182268277.jpg" alt="Product image" class="product-image">
                                </a>


                                <div class="product-action">
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 78px;" class="fab fa-whatsapp"></i></a>
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 20px;" class="fab fa-facebook"></i></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Tv</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Smart TV 43" LG 43LM631C0SB</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    R$1.886
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div style="width: 82%;margin-left: 6%;" class="progress">
                                        <div  class="progress-bar" role="progressbar" style="width: 75%; background-color: #16C49F" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-new">New</span>
                                <a href="produto/67527180827">
                                    <img src="imagens/67527180827.jpg" alt="Product image" class="product-image">

                                </a>


                                <div class="product-action">
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 78px;" class="fab fa-whatsapp"></i></a>
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 20px;" class="fab fa-facebook"></i></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Notebook</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="produto/67527180827">Notebook Lenovo Ideapad 3 Core I5 8gb 256gb Ssd W10 Tela 15.6"</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    R$3075
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div style="width: 82%;margin-left: 6%;" class="progress">
                                        <div  class="progress-bar" role="progressbar" style="width: 75%; background-color: #16C49F" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div><!-- End .rating-container -->

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="produto/67527180827">
                                    <img src="assets/images/demos/demo-4/products/product-13.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 78px;" class="fab fa-whatsapp"></i></a>
                                    <a href="https://api.whatsapp.com/send?text=/{{$todos->imagem}}"  target="_blank"> <i aria-placeholder="compartilhar" style="font-size: 30px;padding-left: 20px;" class="fab fa-facebook"></i></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Laptops</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Lenovo - 330-15IKBR 15.6"</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="price">$339.99</span>

                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div style="width: 82%;margin-left: 6%;" class="progress">
                                        <div  class="progress-bar" role="progressbar" style="width: 75%; background-color: #16C49F" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->


                </div><!-- End .row -->
            </div><!-- End .products -->
        </div><!-- End .container -->

        <div class="mb-4"></div><!-- End .mb-4 -->

        <div class="container">
            <hr class="mb-0">
        </div><!-- End .container -->



   @include('footer')
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container mobile-menu-light">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                <nav class="mobile-nav">
                    <ul class="mobile-menu">
                        <li class="active">
                            <a href="index.html">Home</a>

                            <ul>
                                <li><a href="index-1.html">01 - furniture store</a></li>
                                <li><a href="index-2.html">02 - furniture store</a></li>
                                <li><a href="index-3.html">03 - electronic store</a></li>
                                <li><a href="index-4.html">04 - electronic store</a></li>
                                <li><a href="index-5.html">05 - fashion store</a></li>
                                <li><a href="index-6.html">06 - fashion store</a></li>
                                <li><a href="index-7.html">07 - fashion store</a></li>
                                <li><a href="index-8.html">08 - fashion store</a></li>
                                <li><a href="index-9.html">09 - fashion store</a></li>
                                <li><a href="index-10.html">10 - shoes store</a></li>
                                <li><a href="index-11.html">11 - furniture simple store</a></li>
                                <li><a href="index-12.html">12 - fashion simple store</a></li>
                                <li><a href="index-13.html">13 - market</a></li>
                                <li><a href="index-14.html">14 - market fullwidth</a></li>
                                <li><a href="index-15.html">15 - lookbook 1</a></li>
                                <li><a href="index-16.html">16 - lookbook 2</a></li>
                                <li><a href="index-17.html">17 - fashion store</a></li>
                                <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                                <li><a href="index-19.html">19 - games store</a></li>
                                <li><a href="index-20.html">20 - book store</a></li>
                                <li><a href="index-21.html">21 - sport store</a></li>
                                <li><a href="index-22.html">22 - tools store</a></li>
                                <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                                <li><a href="index-24.html">24 - extreme sport store</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="category.html">Shop</a>
                            <ul>
                                <li><a href="category-list.html">Shop List</a></li>
                                <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="#">Lookbook</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="product.html" class="sf-with-ul">Product</a>
                            <ul>
                                <li><a href="product.html">Default</a></li>
                                <li><a href="product-centered.html">Centered</a></li>
                                <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                <li><a href="product-gallery.html">Gallery</a></li>
                                <li><a href="product-sticky.html">Sticky Info</a></li>
                                <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                <li><a href="product-fullwidth.html">Full Width</a></li>
                                <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li>
                                    <a href="about.html">About</a>

                                    <ul>
                                        <li><a href="about.html">About 01</a></li>
                                        <li><a href="about-2.html">About 02</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>

                                    <ul>
                                        <li><a href="contact.html">Contact 01</a></li>
                                        <li><a href="contact-2.html">Contact 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="404.html">Error 404</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>

                            <ul>
                                <li><a href="blog.html">Classic</a></li>
                                <li><a href="blog-listing.html">Listing</a></li>
                                <li>
                                    <a href="#">Grid</a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Masonry</a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Mask</a>
                                    <ul>
                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Single Post</a>
                                    <ul>
                                        <li><a href="single.html">Default with sidebar</a></li>
                                        <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                        <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements-list.html">Elements</a>
                            <ul>
                                <li><a href="elements-products.html">Products</a></li>
                                <li><a href="elements-typography.html">Typography</a></li>
                                <li><a href="elements-titles.html">Titles</a></li>
                                <li><a href="elements-banners.html">Banners</a></li>
                                <li><a href="elements-product-category.html">Product Category</a></li>
                                <li><a href="elements-video-banners.html">Video Banners</a></li>
                                <li><a href="elements-buttons.html">Buttons</a></li>
                                <li><a href="elements-accordions.html">Accordions</a></li>
                                <li><a href="elements-tabs.html">Tabs</a></li>
                                <li><a href="elements-testimonials.html">Testimonials</a></li>
                                <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                <li><a href="elements-portfolio.html">Portfolio</a></li>
                                <li><a href="elements-cta.html">Call to Action</a></li>
                                <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- End .mobile-nav -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                <nav class="mobile-cats-nav">
                    <ul class="mobile-cats-menu">
                        <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                        <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
                        <li><a href="#">Beds</a></li>
                        <li><a href="#">Lighting</a></li>
                        <li><a href="#">Sofas & Sleeper sofas</a></li>
                        <li><a href="#">Storage</a></li>
                        <li><a href="#">Armchairs & Chaises</a></li>
                        <li><a href="#">Decoration </a></li>
                        <li><a href="#">Kitchen Cabinets</a></li>
                        <li><a href="#">Coffee & Tables</a></li>
                        <li><a href="#">Outdoor Furniture </a></li>
                    </ul><!-- End .mobile-cats-menu -->
                </nav><!-- End .mobile-cats-nav -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-- Sign in / Register Modal -->
@include('modal')

@include('termos')
<!-- Plugins JS File -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.hoverIntent.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap-input-spinner.js"></script>
<script src="assets/js/jquery.plugin.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/demos/demo-4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
</body>
<script>
    function typeWriter(elemento) {
        const textoArray = elemento.innerHTML.split('');
        elemento.innerHTML = '';
        textoArray.forEach((letra, i) => {
            setTimeout(() => elemento.innerHTML += letra, 75 * i);
        });
    }

    // Se estiver tendo problemas com performance, utilize o FOR loop como abaixo no local do forEach
    // function typeWriter(elemento) {
    //   const textoArray = elemento.innerHTML.split('');
    //   elemento.innerHTML = '';
    //   for(let i = 0; i < textoArray.length; i++) {
    //     setTimeout(() => elemento.innerHTML += textoArray[i], 75 * i);
    //   }
    // }

    const titulo = document.querySelector('h1');
    const titulo2 = document.getElementById('valor');
    typeWriter(titulo);
    typeWriter(titulo2);
    $( "#pesquisar" ).click(function() {
        var termo = document.getElementById('nomepesquisa').value;
        console.log(termo)
        $(location).attr('href', '/search/'+termo);
    });

</script>

<!-- molla/index-4.html  22 Nov 2019 09:54:18 GMT -->
</html>
