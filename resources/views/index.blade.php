<?PHP session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-COMMERCE</title>
    {{-- LINKS CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('glide/dist/css/glide.core.css') }}">
    <link rel="stylesheet" href="{{ asset('glide/dist/css/glide.theme.css') }}"> --}}
    {{-- ICONS --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    {{-- FONTS --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet" type="text/css">
</head>
<body>
    <nav>
        <div class="header">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}">
            </div>
            <div class="rs">
                <span>
                    <i class="fab fa-facebook-f"></i>
                </span>
                <span>
                    <i class="fab fa-whatsapp"></i>
                </span>
                <span>
                    <i class="fab fa-instagram"></i>
                </span>
                <span>
                    <i class="fab fa-twitter"></i>
                </span>
            </div>
             <form class="form-inline my-2 my-lg-0">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
     
            @if (session()->get('name'))
                <div class="profile">
                    <span style="padding-right: 0.3rem;">
                        SEJA BEM VINDO,</span>
                    @if (session()->get('tipo') == 'login')
                        {{ strtoupper(session()->get('usuario')) }}
                    @else
                        {{ strtoupper(session()->get('name')) }}
                    @endif
                    <a href="{{ route('page.clientes') }}">
                        @if ($data['avatar'] == null)
                            <div class="avatar-img" style="background-image: url('{{ asset('img/user2.png') }}')"></div>
                        @elseif(session()->get('tipo') == "facebook")
                            <div class="avatar-img" style="background-image: url('{{ session()->get('avatar') }}')"></div>
                        @else
                            <div class="avatar-img" style="background-image: url('data:image/{{$data['ext_img']}};base64,{{$data['avatar']}}')"></div>
                        @endif
                    </a>
                </div>
            @else
                <div class="menu-login">
                    <a href="{{ route('index.login') }}">
                        <i class="far fa-user-circle"></i>
                        <span>Entrar</span>
                    </a>
                </div>
             @endif
        </div>
    </nav>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/banner01.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner02.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner03.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <div class="categorias">
        <div class="title-ofertas">
            <span>CATEGORIAS</span>
            <div class="linha-vertical"><span></span></div>
        </div>
        <div class="bloco-categorias">
            <span>
                <i class="fas fa-couch"></i>
                MÓVEIS
            </span>

            <span>
                <i class="fas fa-desktop"></i>
                ELETRONICOS
            </span>

            <span>
                <i class="fas fa-tshirt"></i>
                ROUPAS
            </span>

            <span>
                <i class="fas fa-tshirt"></i>
                ROUPAS
            </span>

            <span>
                <i class="fas fa-desktop"></i>
                ELETRONICOS
            </span>

            <span>
                <i class="fas fa-tshirt"></i>
                ROUPAS
            </span>

            <span>
                <i class="fas fa-desktop"></i>
                ELETRONICOS
            </span>

            <span>
                <i class="fas fa-couch"></i>
                MÓVEIS
            </span>

            <span>
                <i class="fas fa-couch"></i>
                MÓVEIS
            </span>

            <span>
                <i class="fas fa-tshirt"></i>
                ROUPAS
            </span>

            <span>
                <i class="fas fa-couch"></i>
                MÓVEIS
            </span>

            <span>
                <i class="fas fa-tshirt"></i>
                ROUPAS
            </span>
        
            <span>
                <i class="fas fa-mobile-alt"></i>
                SMARTPHONE
            </span>

            <span>
                <i class="fas fa-futbol"></i>
                ESPORTES
            </span>
        </div>
                  
    </div>

    <div class="ads">
        <img src="{{ asset('img/ads.png') }}">
    </div>
    <div class="ads">
        <img src="{{ asset('img/ads2.png') }}">
    </div>

    <div class="ofertas">
        <div class="title-ofertas">
            <span>OFERTAS DA SEMANA</span>
            <div class="linha-vertical"><span></span></div>
        </div>
        <div class="ofertas-interno">
            
            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item2.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item3.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item2.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item3.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="ofertas">
        <div class="title-ofertas">
            <span>MAIS VENDIDOS</span>
            <div class="linha-vertical"><span></span></div>
        </div>
        <div class="ofertas-interno">

            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item2.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item3.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item2.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>

             <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item3.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item2.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item3.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="oferta-item">
                    <div class="oferta-header">
                        <div class="bg">
                            <img src="{{ asset('img/item.webp') }}" alt="" srcset="">
                            <span><i class="far fa-eye eye"></i></span>
                        </div>
                    </div>
                    <div class="oferta-body">
                        <div class="oferta-descricao">
                            iPhone 12 128GB Preto iOS 5G Wi-Fi Tela 6.1" Câmera - 12MP + 12MP - Apple
                        </div>
                        <div class="oferta-valor">
                            $ 10.900,00
                        </div>
                    </div>
                </div>
            </a>

        </div>
       
    </div>

    <div class="ads">
        <img src="{{ asset('img/ads.png') }}">
    </div>
    <div class="ads">
        <img src="{{ asset('img/ads2.png') }}">
    </div>

    <footer>
        <div class="footer-interno">
             <div class="rs">
                <span>
                    <i class="fab fa-facebook-f"></i>
                </span>
                <span>
                    <i class="fab fa-whatsapp"></i>
                </span>
                <span>
                    <i class="fab fa-instagram"></i>
                </span>
                <span>
                    <i class="fab fa-twitter"></i>
                </span>
            </div>
        </div>
        <div class="footer-bottom">
            <span>TODOS OS DIREITOS RESERVADOS</span>
        </div>
    </footer>
    
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('css/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    {{-- <script src="{{ asset('glide/dist/glide.js') }}"></script> --}}
    <script>
        
        $(".oferta-header").mouseover(function(){
            $(this).find(".eye").css('opacity', '1');
            $(this).find(".eye").css('transition', '0.2s linear');
            $(this).find(".bg").addClass('filter');
        });
        $(".oferta-header").mouseout(function(){
            $(this).find(".eye").css('opacity', '0');
            $(this).find(".eye").css('transition', '0.2s linear');
            $(this).find(".bg").removeClass('filter');
        });
        
        //  new Glide(".carrosel-noticiasm", {
        //     type: "carousel",
        //     perView: 5,
        //     focusAt: "center",
        //     gap: 40,

        //     breakpoints: {
        //         1366: {
        //             perView: 5
        //         },
        //         1200: {
        //             perView: 3
        //         },
        //         800: {
        //             perView: 3
        //         },
        //         500: {
        //             perView: 3
        //         }
        //     }
        // }).mount();

        $(document).ready(function(){
            $(window).scroll(function(){
                if (this.scrollY > 80) {
                    $("nav").addClass("sticky");
                    // $(".categorias span").addClass("sticky-font");
                } else {
                    $("nav").removeClass("sticky");
                    // $(".categorias span").removeClass("sticky-font");
                }
            });

            // $('.header button').click(function (){
            //     $(this).toggleClass("active")
            //     $(".lado-direito").toggleClass("active")
            // });

        });


    </script>
</body>
</html>