<!DOCTYPE html>
<html lang="en">


<!-- molla/dashboard.html  22 Nov 2019 10:03:13 GMT -->
<head>
@include('favicon')

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


</head>

<body>
<div class="page-wrapper">
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-left">



                </div><!-- End .header-left -->

                <div class="header-right">

                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-top -->

        <div class="header-middle sticky-header">
            <div class="container">
                <div class="header-left">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>

                    <a href="/" class="logo">
                        <img src="imagens/Logo CoopON Fundo Transparente.png" alt="Molla Logo" width="105" height="25">
                    </a>

                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container active">
                                <a href="/" class="sf-with-ul">Home</a>




                            </li>
                            <li>
                                <a href="/" class="sf-with-ul">Produtos</a>

                            </li>

                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->
                </div><!-- End .header-left -->


            </div><!-- End .container -->
        </div><!-- End .header-middle -->
    </header><!-- End .header -->

    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Minha Conta<span>Dados do Usuário</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Account</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="dashboard">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-4 col-lg-3">
                            <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="false">Cadastro de Coperações</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-downloads-link" data-toggle="tab" href="#tab-downloads" role="tab" aria-controls="tab-downloads" aria-selected="false">Minhas Coperações</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-address-link" data-toggle="tab" href="#tab-address" role="tab" aria-controls="tab-address" aria-selected="false">Endereço</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">Account Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sign Out</a>
                                </li>
                            </ul>
                        </aside><!-- End .col-lg-3 -->

                        <div class="col-md-8 col-lg-9">
                            <div class="tab-content">
                              <!--  <div style="height: 350px;width: 350px;margin-left: 25%;">
                                    <canvas id="myChart"></canvas>
                                </div>
-->
                                <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                                    <h3 style="text-align: center;color: #16C49F ">Cadastro de Coperações</h3>
                                    <form method="post" action="salvarcoperacao">
                                        @csrf

                                        <div class="form-group">
                                            <div class="col-lg-4">
                                                <label style="position: absolute;font-size: 19px">Escolha o Produto :    </label>
                                            <select class="selectpicker" name="imagem" id ="produtos"data-live-search="true">
                                                    @foreach($produto as $produtos)
                                                    <option value="{{$produtos->imagem}}">{{$produtos->nome}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <br>
                                            <div class="col-lg-4">
                                               <img style="position: absolute;margin-left: 39%" id="imagem" src="">
                                            </div>
                                            <div id="dados">

                                            <div class="col-lg-12">
                                                <label>Preço:</label>
                                            <input name="preco" class="form-control" id ="preco" readonly>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>Nome do Produto:</label>
                                            <input name="nome" class="form-control" id ="nome" readonly>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>Marca do Produto</label>
                                            <input name="marca" class="form-control" id ="marca" readonly>
                                            </div>
                                            <div class="col-lg-12">
                                                    <label>categoria</label>
                                                    <input name="categoria" class="form-control" id ="categoria" readonly>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>Tempo de Cooperação *</label>
                                                <select name="tempo" class="form-control">
                                                    <option>15</option>
                                                    <option>20</option>
                                                </select>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label>Quantidade *</label>
                                                    <select name="quantidade" class="form-control">
                                                        <option>15</option>
                                                        <option>20</option>
                                                    </select>
                                                </div>
                                            </div>
                                        <button class="form-control" >Salvar</button>
                                        </div>
                                    </form>
                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane fade" id="tab-downloads" role="tabpanel" aria-labelledby="tab-downloads-link">


                                    @if(!empty($coperacao))
                                        <h3 style="text-align: center;color: #16C49F ">Suas  Cooperações</h3>
                                        @foreach($coperacao as $coperacao)

                                    <div class="card text-center">
                                        <div style="font-size: 18px; text-align: start !important;" class="card-header">
                                            Numero da Coperação : {{$coperacao->id}}
                                        </div>
                                        <br>
                                        <div class="card-body">
                                            <h5 style="text-align: start!important;" class="card-title">{{$coperacao->nome}}</h5>
                                            <p style="text-align: start!important;" class="card-text">Marca: {{$coperacao->marca}}</p>
                                            <p style="text-align: start!important;" class="card-text">Preço: {{$coperacao->preco}}</p>
                                            <p style="text-align: start!important;" class="card-text">Tempo de Duração: {{$coperacao->tempo}}</p>
                                            <p style="text-align: start!important;" class="card-text">Quantidade Minima de Pessoas: {{$coperacao->quantidade}}</p>
                                            <p style="text-align: start!important;" class="card-text">Data da Criação: {{$coperacao->created_at}}</p>
                                            <img style="margin-left: 65%;margin-top: -34%;margin-bottom: 10%;" src="imagens/{{$coperacao->imagem}}.jpg">
                                            <a href="#" class="btn btn-primary">Cooperação</a>
                                        </div>

                                    </div>
                                        @endforeach
                                    @endif
                                </div><!-- .End .tab-pane -->




                                <div  class="tab-pane fade" id="tab-address" role="tabpanel" aria-labelledby="tab-address-link">
                                    <p>The following addresses will be used on the checkout page by default.</p>
                                    <?php
                                    if(!empty($endereco)){
                                    foreach($endereco as $enderecos){
                                        $x = $enderecos->nome;
                                    }
                                    }
                                    if(empty($x)) {?>

                                    <form method="post" action="salvarendereco">
                                        @csrf
                                    <h3>Cadastre seu endereço</h3>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="rua" placeholder="Rua"required>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" placeholder="Cidade" name="cidade" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" name="estado" placeholder="Estado"required>
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" placeholder="Numero" name="numero" required>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" placeholder="Complemento" name="complemento" required>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" placeholder="Telefone" name="telefone" required>
                                        </div>
                                    </div>
                                        <button class="form-control" type="submit">Salvar</button>
                                    </form>
                                <?php }else{?>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card card-dashboard">
                                                <div class="card-body">
                                                    <h3 class="card-title">Dados do Endereço</h3><!-- End .card-title -->
                                                    @foreach($endereco2 as $endereco)
                                                    <p>{{$endereco->rua}}<br>
                                                        {{$endereco->cidade}}<br>
                                                        {{$endereco->numero}}<br>
                                                        {{$endereco->estado}}<br>
                                                        {{$endereco->complemento}}<br>
                                                        {{$endereco->email}}<br>
                                                        @endforeach
                                                        <a href="#">Edit <i class="icon-edit"></i></a></p>
                                                </div><!-- End .card-body -->
                                            </div><!-- End .card-dashboard -->
                                        </div><!-- End .col-lg-6 -->

                                        <div class="col-lg-6">
                                            <div class="card card-dashboard">
                                                <div class="card-body">
                                                    <h3 class="card-title">Shipping Address</h3><!-- End .card-title -->

                                                    <p>You have not set up this type of address yet.<br>
                                                        <a href="#">Edit <i class="icon-edit"></i></a></p>
                                                </div><!-- End .card-body -->
                                            </div><!-- End .card-dashboard -->
                                        </div><!-- End .col-lg-6 -->
                                    </div><!-- End .row -->

<?php }?>
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                                    @foreach($results as $result)
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Primeiro Nome</label>
                                                <input type="text" value="{{$result->name}}"class="form-control" readonly>
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Email </label>
                                                <input type="text" value="{{$result->email}}" class="form-control" readonly>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <label>New password (leave blank to leave unchanged)</label>
                                        <input type="password" class="form-control">

                                        <label>Confirm new password</label>
                                        <input type="password" class="form-control mb-2">

                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>SAVE CHANGES</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>
                                    </form>
                                    @endforeach
                                </div><!-- .End .tab-pane -->
                            </div>
                        </div>
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .dashboard -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

  @include('footer')
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

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

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-- Sign in / Register Modal -->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>

                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tab-content-5">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="singin-email">Username or email address *</label>
                                        <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="singin-password">Password *</label>
                                        <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>LOG IN</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signin-remember">
                                            <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                        </div><!-- End .custom-checkbox -->

                                        <a href="#" class="forgot-link">Forgot Your Password?</a>
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="register-email">Your email address *</label>
                                        <input type="email" class="form-control" id="register-email" name="register-email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="register-password">Password *</label>
                                        <input type="password" class="form-control" id="register-password" name="register-password" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>SIGN UP</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                            <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login  btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .modal-body -->
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div><!-- End .modal -->

<!-- Plugins JS File -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.hoverIntent.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

</body>
<script>
    $('#produtos').change(function () {
    var msg = document.getElementById('produtos').value;

    $.ajax({
        type: "GET",
        url: '/produtos', // This is what I have updated
        data: {  msg: msg}
    }).done(function( msg ) {


        if(msg != ''){
            var retorno = msg.split(",");
            document.querySelector("[id='nome']").value = retorno[1].trim() ;
            document.querySelector("[id='preco']").value = 'R$'+retorno[3] ;
            document.querySelector("[id='marca']").value = retorno[2] ;
            document.querySelector("[id='categoria']").value = retorno[6] ;
            image = document.getElementById('imagem');
            image.src = 'imagens/'+retorno[5]+'.jpg';

        }
    });
    //exibe no console o array com os valores selecionados
    });
</script>
<script>
    const data = {
        labels: [
            'Red',
            'Blue',
            'Yellow'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [300, 50, 100],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };
    const config = {
        type: 'doughnut',
        data: data,
    };
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

</script>
<!-- molla/dashboard.html  22 Nov 2019 10:03:13 GMT -->
</html>
