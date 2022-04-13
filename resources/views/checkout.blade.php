@include('favicon')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="../../assets/css/style.css">
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
                        <img src="../imagens/Logo CoopON Fundo Transparente.png" alt="Molla Logo" width="105" height="25">
                    </a>

                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container active">
                                <a href="../" class="sf-with-ul">Home</a>
                            </li>
                            <li>
                                <a  class="sf-with-ul">Produtos</a>
                            </li>
                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->
                </div><!-- End .header-left -->

                <div class="header-right">
                    <div class="header-search">

                    </div><!-- End .header-search -->
                    <div class="dropdown compare-dropdown">


                        <div class="dropdown-menu dropdown-menu-right">



                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .compare-dropdown -->

                    <div class="dropdown cart-dropdown">


                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="product.html">Beige knitted elastic runner shoes</a>
                                        </h4>

                                        <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->

                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="product.html">Blue utility pinafore denim dress</a>
                                        </h4>

                                        <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->
                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price">$160.00</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="cart.html" class="btn btn-primary">View Cart</a>
                                <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .cart-dropdown -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->
    </header><!-- End .header -->

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container d-flex align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../">Home</a></li>
                    <li class="breadcrumb-item"><a >Produtos</a></li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="checkout">
                <div class="container">
                    <div class="checkout-discount">

                    </div><!-- End .checkout-discount -->
                    <form method="post" action="salvarcheckout">

                        <div class="row">
                            <div class="col-lg-9">


                                    @guest
                                    <div class="row">
                                        <h2 class="checkout-title">Você não está logado por favor faça login ou se cadastre clicando <a href="#signin-modal" data-toggle="modal">aqui</a></h2>

                                </div><!-- End .row -->
                                @endguest
                                @if($endereco == null )
                                <div class="row">
                                    <h3 class="card-title">Cadastre seu Endereço e a Foto de Perfil</h3>
                                    <br>
                                    <br>


                                    <div class="custom-file" style="width: 50%;margin-left: -37%;margin-top: 5%;">
                                    <input placeholder="Selecione a foto" type="file" name="foto" class="custom-file-input" required/>
                                    <label class="custom-file-label" for="validatedCustomFile">Selecione a foto...</label>
                                    </div>

                                        <br>
                                    <div class="col-lg-6">
                                        <label>Rua</label>
                                        <input type="text" name="rua" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Numero</label>
                                        <input type="text" name="numero" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Estado</label>
                                        <input type="text" name="numero" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6">
                                            <label>Cidade</label>
                                            <input type="text" name="cidade" class="form-control"  required>

                                    </div>
                                    <div class="col-sm-6">
                                        <label>Complemento</label>
                                        <input type="text" name="complemento" class="form-control"  required>

                                    </div>
                                    <div class="col-sm-6">
                                        <label>Telefone com DDD</label>
                                        <input type="text" name="telefone" class="form-control" required>

                                    </div>
                                </div>
                                        @endif
                   
                                    <!-- Step #2 -->
                                      
                                          
                                            <div id="formcartao" class="row">
                                            <div class="col-sm-6">
                                            <label>Número Cartão</label>
                                            <input type="text" class="form-control" name="cardNumber" id="form-checkout__cardNumber" />
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Data de Validade</label>
                                            <input type="text" class="form-control" name="cardExpirationDate" id="form-checkout__cardExpirationDate" />
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Nome no Cartão</label>
                                            <input type="text" class="form-control" name="cardholderName" id="form-checkout__cardholderName"/>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>E-mail</label>
                                            <input type="email" class="form-control" name="cardholderEmail" id="form-checkout__cardholderEmail"/>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Codigo de segurança </label>
                                            <input type="text"  class="form-control"name="securityCode" id="form-checkout__securityCode" />
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Parcelas</label>
                                            <select name="issuer"  class="form-control" id="form-checkout__issuer">
                                                <option>1</option>

                                            </select>
                                            </div>
                                          
                                                @csrf
                                           
                                         
                                            </div>
                                           
                                       

                            </div><!-- End .col-lg-9 -->
                            <aside class="col-lg-3">
                                <div class="summary">
                                    <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                    <table class="table table-summary">
                                        <thead>
                                        <tr>
                                            <th>Produto</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        @foreach($produto as $produtos)
                                        <tbody>
                                        <tr>
                                            <td><a>{{$produtos->nome}}</a></td>
                                            <td>R${{$produtos->preco}}</td>
                                        </tr>
                                        </tbody>
                                        @endforeach
                                    </table><!-- End .table table-summary -->

                                    <div class="accordion-summary" id="accordion-payment">


                                        <div class="card">
                                            <div class="card-header" id="heading-2">
                                                <h2 class="card-title">
                                                    <a id="cartaobutton" name="cartaobutton" class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                        Cartão  de Credito
                                                        <img src="../assets/images/payments-summary.png" alt="payments cards">
                                                    </a>
                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
                                                <div class="card-body">

                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->

                                        <div class="card">
                                            <div class="card-header" id="heading-3">
                                                <h2 class="card-title">
                                                    <a id="boleto" class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                        Boleto Bancario
                                                    </a>
                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
                                                <div class="card-body">

                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->

                                       
                                    </div><!-- End .accordion -->

                                    <button type="submit" id="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                        <span class="btn-text">Place Order</span>
                                        <span class="btn-hover-text">Proceed to Checkout</span>
                                    </button>
                                   <input type="text" name="opcao" id="opcao">
                                </form>
                                </div><!-- End .summary -->
                            </aside><!-- End .col-lg-3 -->
                        </div><!-- End .row -->

                </div><!-- End .container -->
            </div><!-- End .checkout -->
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
@include('modal')

<!-- Plugins JS File -->
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.hoverIntent.min.js"></script>
<script src="../../assets/js/jquery.waypoints.min.js"></script>
<script src="../../assets/js/superfish.min.js"></script>
<script src="../../assets/js/owl.carousel.min.js"></script>
<!-- Main JS File -->
<script src="../../assets/js/main.js"></script>
<script>
  $( document ).ready(function() {
    $('#formcartao').css('display', 'none');
    $('#opcao').css('visibility', 'hidden');
    
});
var x = 0;
$( "#cartaobutton" ).on( "click", function() {
        if ((x / 2) % 2 == 0 ){
            x++;
            $('#formcartao').css('display', 'flex');  
            document.querySelector("#opcao").value = 1    
            $('#form-checkout__cardNumber').prop('required',true);    
            $('#form-checkout__cardExpirationDate').prop('required',true);
            $('#form-checkout__cardholderName').prop('required',true);
            $('#form-checkout__cardholderEmail').prop('required',true);
            $('#form-checkout__securityCode').prop('required',true);
            $('#form-checkout__issuer').prop('required',true);
              
        }else{
            x--;
            $('#formcartao').css('display', 'none');
            $('#form-checkout__cardNumber').prop('required',false);    
            $('#form-checkout__cardExpirationDate').prop('required',false);
            $('#form-checkout__cardholderName').prop('required',false);
            $('#form-checkout__cardholderEmail').prop('required',false);
            $('#form-checkout__securityCode').prop('required',false);
            $('#form-checkout__issuer').prop('required',false);                       
        }   
});
$( "#boleto" ).on( "click", function() {
    $('#formcartao').css('display', 'none'); 
    $('#form-checkout__cardNumber').prop('required',false);    
            $('#form-checkout__cardExpirationDate').prop('required',false);
            $('#form-checkout__cardholderName').prop('required',false);
            $('#form-checkout__cardholderEmail').prop('required',false);
            $('#form-checkout__securityCode').prop('required',false);
            $('#form-checkout__issuer').prop('required',false); 
    x = 0;    
    document.querySelector("#opcao").value = 2

});

        
 
       
    

</script>
</body>


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
</html>
