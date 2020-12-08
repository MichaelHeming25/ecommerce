<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    {{-- LINKS CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.css') }}">
    {{-- ICONS --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    {{-- FONTS --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet" type="text/css">
</head>
<body>
    {{-- <nav>
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}">
        </div>  
    </nav> --}}
    <div class="topo-login"></div>
    
    <div class="login-register">
        
        <form method="POST" action="{{ route('save.register') }}">
            @csrf
            <div class="header-login">
                <img src="{{ asset('img/logo.png') }}">
                <div class="title">CADASTRAR</div>
                <div class="linha-vertical"><span></span></div>
                <div class="conteudo-register">
                    <div class="bloco1">
                        <div class="group-register">
                            <div class="group">      
                                <input type="text" name="name" id="name" class="name" required autocomplete="off">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nome</label>
                            </div>
                        </div>
                        <div class="group-register">
                            <div class="group">      
                                <input type="email" name="email" id="email" class="email" required autocomplete="off">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>E-Mail</label>
                            </div>
                        </div>
                    </div>
                    <div class="bloco2">
                         <div class="group-register">
                            <div class="group">      
                                <input type="text" name="telefone" id="telefone" class="telefone" required autocomplete="off">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Telefone</label>
                            </div>
                        </div>
                         <div class="group-register">
                            <div class="group">      
                                <input type="text" name="cpf" id="cpf" class="cpf" required autocomplete="off">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cpf</label>
                            </div>
                        </div>
                    </div>
                     <div class="bloco2">
                         <div class="group-register">
                            <div class="group">      
                                <input type="text" name="usuario" id="usuario" class="usuario" required autocomplete="off">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Usuário</label>
                            </div>
                        </div>
                         <div class="group-register">
                            <div class="group">      
                                <input type="password" name="password" id="password" class="password" required autocomplete="off">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Senha</label>
                            </div>
                        </div>
                    </div>

                    @if (session('mensagem'))
                        <div class="sacefull">
                            <div class="alert alert-success">
                                <span>
                                    <i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
                                    {{ session('mensagem') }}
                                </span>
                                <div class="alert-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @elseif(session('invalido'))
                        <div class="alert alert-danger">
                            <span>
                                <i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
                                {{ session('invalido') }}
                            </span>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                    @endif

                </div>

                <div class="button-register">
                    <button type="submit">CADASTRAR</button>
                </div>
                 
                <div class="info-login">
                    <div class="title-info">
                        Ja é cadastrado ?
                    </div>
                    <a href="{{ route('index.login') }}">
                        <span>Logue-se aqui!</span>
                    </a>
                    <div class="more-login">
                        <div class="title-more">OUTROS MEIOS DE LOGIN</div>
                        <div class="bloco-more-items">
                            <a href="{{ route('login.facebook') }}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="{{ route('login.google') }}">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('css/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script>
        
        var configuracoes = {}

        $("#avatar").base64({
            "onSuccess": function(inst, base64Str) {
                console.log(base64Str)
                configuracoes['base64'] = base64Str;
                console.log(configuracoes)
            }
        });

        function preview(){
            console.log(configuracoes);

            var imagem = document.querySelector('input[name=avatar]').files[0];
            var preview = document.querySelector('img[name=avatar]');

            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if(imagem){
                reader.readAsDataURL(imagem);
            }else{
                preview.src = "";
            }
        }

    </script>
</body>
</html>