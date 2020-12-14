<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DASHBOARD - PRINCIPAL</title>
    {{-- LINKS CSS --}}
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('glide/dist/css/glide.core.css') }}">
    <link rel="stylesheet" href="{{ asset('glide/dist/css/glide.theme.css') }}"> --}}
    {{-- ICONS --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    {{-- FONTS --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet" type="text/css">
</head>

<body>
    {{-- MENU DE NAVEGAÇÃO --}}
    <nav>
        <div class="header">
            {{-- <div class="logo">
                <a href="{{ route('index') }}">
                    
                </a>
            </div> --}}
            <button onclick="menu_categories()" class="button-more">
                <i class="fas fa-list-ul"></i>
                <img src="{{ asset('img/logo2.png') }}" style="height: 3rem;padding-left:2.5rem;">
            </button>
     
            <div class="profile">

                <button type="submit modal-dropdown" onclick="dropdown()">
                    <i class="fas fa-chevron-down"></i>

                    Olá, seja bem vindo {{ Auth::user()->name }}!

                    {{-- @if ($data['avatar'] == null) --}}
                        <div class="avatar-img" style="background-image: url('{{ asset('img/user2.png') }}')"></div>
                    {{-- @elseif(session()->get('tipo') == "facebook")
                        <div class="avatar-img" style="background-image: url('{{ session()->get('avatar') }}')"></div>
                    @else
                        <div class="avatar-img" style="background-image: url('data:image/{{$data['ext_img']}};base64,{{$data['avatar']}}')"></div>
                    @endif --}}
                </button>
                
                <div class="modal-dropdown2">
                    <div class="header-modal-dropdown2">
                        {{ Auth::user()->email }}
                    </div>
                    <div class="linha-vertical" style="width:80%;">
                        <span>
                        </span>
                    </div>
                    <a href="{{ route('page.clientes') }}">
                        <i class="far fa-address-card"></i>
                        Meu dados
                    </a>
                    <a href="{{ route('logout') }}">
                        <i class="fas fa-sign-out-alt"></i>
                        Sair
                    </a>
                </div>

            </div>
        </div>
    </nav>

    @include('admin.templates.nav-left')

    <div class="container-geral">
        <div class="header-container">
            <span>
                <i class="fas fa-user-cog"></i>
                Usúarios cadastrados no sistema
            </span>
        </div>
        <div class="body-container">
            <div class="title-body">
                <span>
                    <i class="fas fa-info"></i>
                    Informação dos usuários cadastrados
                </span>
            </div>

           <h1>PRINCIPAL</h1>

        </div>
        <div class="footer-container">
            <span>Copyright - Todos os direitos reservados a heming.</span>
        </div>
    </div>
    
    <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('css/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/popper.js') }}" ></script>
    <script src="{{ asset('DataTables/datatables.js') }}"></script>
    <script>
        
        function menu_categories(){
            $('.menu-left-categories').toggleClass('menu-categories-active')
            $('.container-geral').toggleClass('container-left')
        }

        function dropdown(){
            $('.modal-dropdown2').toggleClass('active-drop')
            $('.fa-chevron-down').toggleClass('rotate-icon')
        }

        $(".menu-left-categories ul li a").mouseover(function(){
            $(this).find(".menu-left-categories ul li a span").addClass('drop-color');
        });
        $(".menu-left-categories ul li a").mouseout(function(){
            $(this).find(".menu-left-categories ul li a span").removeClass('drop-color');
        });

    </script>
</body>
</html>