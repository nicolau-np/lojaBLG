
<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <title>{{__($titulo)}}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="{{asset('assets/client/img/favicon.ico')}}" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('assets/client/lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{asset('assets/client/lib/slick/slick-theme.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('assets/client/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        support@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +244 946 216 795
                        &nbsp;&nbsp;&nbsp;
                    <a href="{{route(Route::currentRouteName(), 'pt')}}">PT</a>&nbsp;&nbsp;
                    <a href="{{route(Route::currentRouteName(), 'en')}}">EN</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">@lang('MENU')</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{route('home', app()->getLocale())}}" class="nav-item nav-link @if($menu=="Home") active @endif">@lang('Principal')</a>
                            <a href="{{route('produtos', app()->getLocale())}}" class="nav-item nav-link @if($menu=="Produtos") active @endif">@lang('Produtos')</a>
                            <a href="{{route('carrinho', app()->getLocale())}}" class="nav-item nav-link @if($menu=="Carrinho") active @endif">@lang('Carrinho')</a>
                            <a href="my-account.html" class="nav-item nav-link">@lang('Minha Conta')</a>
                            <a href="my-account.html" class="nav-item nav-link">@lang('Contactar')</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">@lang('Sobre')</a>
                                <div class="dropdown-menu">
                                    <a href="wishlist.html" class="dropdown-item">@lang('Loja')</a>
                                    <a href="login.html" class="dropdown-item">@lang('Sistema')</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">@lang('Usuário')</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">@lang('Entrar')</a>
                                    <a href="#" class="dropdown-item">@lang('Registro')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="{{route('home', app()->getLocale())}}">
                                <img src="{{asset('assets/client/img/logo.png')}}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                        <input type="text" placeholder="@lang('Pesquisar')">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        
        @if($menu!="Home")
          <!-- Breadcrumb Start -->
          <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home', app()->getLocale())}}">@lang('Principal')</a></li>
                <li class="breadcrumb-item"><a href="#">{{__($menu)}}</a></li>
                <li class="breadcrumb-item active">{{__($submenu)}}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        @endif
      
        @yield('content')

        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>@lang('Entrar em contato')</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>LojaJBL, Lubango-Huíla, Angola</p>
                                <p><i class="fa fa-envelope"></i>support@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+244-946-216-795</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>@lang('Siga-nos')</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>@lang('Companhia')</h2>
                            <ul>
                                <li><a href="#">@lang('Sobre Nós')</a></li>
                                <li><a href="#">@lang('Política de Privacidade')</a></li>
                                <li><a href="#">@lang('Termos e Condições')</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>@lang('Compra')</h2>
                            <ul>
                                <li><a href="#">@lang('Política de pagamento')</a></li>
                                <li><a href="#">@lang('Política de Envio')</a></li>
                                <li><a href="#">@lang('Política de devolução')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>@lang('Nós aceitamos'):</h2>
                            <img src="{{asset('assets/client/img/payment-method.png')}}" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>@lang('Assegurado por'):</h2>
                            <img src="{{asset('assets/client/img/godaddy.svg')}}" alt="Payment Security" />
                            <img src="{{asset('assets/client/img/norton.svg')}}" alt="Payment Security" />
                            <img src="{{asset('assets/client/img/ssl.svg')}}" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                    <p>@lang('Copyright') &copy; <a href="{{route('home', app()->getLocale())}}">lojaJBL</a>. @lang('Todos os direitos reservados')</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/client/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('assets/client/lib/slick/slick.min.js')}}"></script>
        
        <!-- Template Javascript -->
        <script src="{{asset('assets/client/js/main.js')}}"></script>
    </body>
</html>
