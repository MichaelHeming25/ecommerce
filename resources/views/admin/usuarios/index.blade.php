<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-COMMERCE</title>
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
                 <button type="button" class="btn-brand btn-elevate btn-icon-sm btn-cadastrar" data-idc="{{ url('/usuarios/viewCadastrar') }}">
                    <i class="fa fa-plus"></i> Novo Usuário
                </button>
            </div>

            <table id="table_id" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>E-MAIL</th>
                        <th>CRIADO EM</th>
                        <th>EDITAR / REMOVER</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < sizeof($users); $i++)
                        <tr>
                            @isset($users[$i]['name'])
                            <td>teste</td>
                            @endisset

                            @isset($users[$i]['email'])
                            <td>{{ $users[$i]['email'] }}</td>
                            @endisset

                            @isset($users[$i]['created_at'])
                            <td>{{ $users[$i]['created_at'] }}</td>
                            @endisset

                            <td>
                                <div class="botoes">
                                    <button type="button" class="botao-editar btn-editar" style="margin-right: 10px;" data-id="{{ url('admin/usuarios/editar') }}/{{ $users[$i]['id'] }}"><span class="entypo-tools"><i class="fas fa-edit"></i></span></button>
                                    <button type="button" class="botao-remover" data-id="{{ url('admin/usuarios/confirm') }}/{{ $users[$i]['id'] }}"><i class="far fa-trash-alt"></i></button>  
                                </div>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>

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

        $(document).ready( function () {
            $('#table_id').DataTable({
                responsive: true,
                paging: false,
                searching: false,
                "info": false,
                fixedHeader: {
                    footer: true
                },
            });
        });

         function dropdown(){
            $('.modal-dropdown2').toggleClass('active-drop')
            $('.fa-chevron-down').toggleClass('rotate-icon')
        }
        
        function menu_categories(){
            $('.menu-left-categories').toggleClass('menu-categories-active')
            $('.container-geral').toggleClass('container-left')
        }

        $(".menu-left-categories ul li a").mouseover(function(){
            $(this).find(".menu-left-categories ul li a span").addClass('drop-color');
        });
        $(".menu-left-categories ul li a").mouseout(function(){
            $(this).find(".menu-left-categories ul li a span").removeClass('drop-color');
        });
        
         // EDITAR CLIENTE
        $(document).on('click','.btn-editar', function(e){
            e.preventDefault();

            var bodyFormName = $('.modal-body');
            var modalName = $('.modal');
            var id = $(this).data('id')

            console.log(bodyFormName)
            console.log(modalName)
            console.log(id)

            $(modalName).modal('show'); 

            $.ajax({
                url: id,
                type: 'get',
                success: function(response){       
                    $(bodyFormName).html(response);
                }
            });
            return false;
        });

        // CADASTRAR CLIENTE
        $(document).on('click','.btn-cadastrar', function(e){
            e.preventDefault();

            var bodyFormName = $('.modal-body-cadastrar');
            var modalName = $('.modal-cadastrar');
            var idc = $(this).data('idc')

            console.log(bodyFormName)
            console.log(modalName)
            console.log(idc)

            $(modalName).modal('show'); 

            $.ajax({
                url: '{{ url('admin/usuarios/viewCadastrar') }}',
                type: 'get',
                success: function(response){
                    console.log(response)        
                    $(bodyFormName).html(response);
                }
            });
            return false;
        });

        // CONFIRMAR REMOVER
        $(document).on('click','.botao-remover', function(e){
            e.preventDefault();

            var bodyFormName = $('.modal-body-confirm');
            var modalName = $('.modal-confirm');
            var id = $(this).data('id')

            console.log(bodyFormName)
            console.log(modalName)
            console.log(id)

            $(modalName).modal('show'); 

            $.ajax({
                url: id,
                type: 'get',
                success: function(response){       
                    $(bodyFormName).html(response);
                }
            });
            return false;
        });

        // REMOVER
        $(document).on('click','.btn-remover', function(e){
            e.preventDefault();

            var bodyFormName = $('.modal-body-remover');
            var modalName = $('.modal-remover');
            var modalNamee = $('.modal-confirm');
            var id = $(this).data('id')

            console.log(bodyFormName)
            console.log(modalName)
            console.log(id)

            $(modalName).modal('show'); 

            $.ajax({
                url: id,
                type: 'get',
                success: function(response){
                    $(modalNamee).modal('hide'); 
                    $(bodyFormName).html(response);
                    // location.reload();
                }
            });
            location.reload();
            return true;
        });

    </script>
</body>
</html>