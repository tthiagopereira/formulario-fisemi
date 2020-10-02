<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

    <title>Pesquisa - Fisemi</title>

    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- Main styles for this application -->

    <!-- Styles required by this views -->
    <!-- Styles required by this views -->

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
    <!--===============================================================================================-->
    <link href="{{ asset('js/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    {{--
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    --}}
    <link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('js/vendor/animate/animate.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('js/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('js/vendor/select2/select2.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/maskinput.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>

    <!--=============================================================-->
    <link rel="stylesheet" href="{{ asset('plugs/AmaranJS/dist/css/amaran.min.css') }}">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

    <!--=============================================================-->
</head>

<body class="app flex-row align-items-center">

    @if (Session::has('mensagem'))
        <input type="text" value="{{ Session::get('mensagem')['msg'] }}" id="mensagem" hidden>
        <input type="text" value="{{ Session::get('mensagem')['cor'] }}" id="cor" hidden>
    @endif

    <div class="container">
        <div class="row mt-10">
            <div class="col-md-2 alert "></div>
            <div class="col-md-8 alert text-center">
                <h2 class="audiowide">Seja bem vindo</h2>
                <hr>
                <h2 class="audiowide">Pesquise pelo CPF</h2>
            </div>
            <div class="col-md-2 alert"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <script>
                    jQuery(function($) {
                        $("#cpf").mask("999.999.999-99");
                    });

                </script>
                <form method="POST" action="{{ route('fisemi.edit') }} " class="validate-form" name="form1">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            {{--name--}}
                            <div class="wrap-input100 validate-input">
                                <input type="text" name="cpf"
                                    class="form-control input-sm chat-input input100 caixa_alta"
                                    title="não podem conter números" required placeholder="Informe o cpf" id="cpf"
                                    autofocus>
                                <small id="guerraHelp" class="form-text text-muted audiowide text-center">Digite o
                                    CPF</small>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100"><i class="fa fa-user-circle pb-3"
                                        aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Pesquisa
                        </button>
                    </div>
                    <div class="container-login100-form-btn">
                        <a class="login101-form-btn" href="{{ route('fisemi.create') }}">
                            Novo Cadastro
                        </a>
                    </div>
                    <div class="text-center p-t-20">
                        <a class="txt2" href="#">
                            <div class="footer text-white text-center">
                                <p>© 2020 Formulario FISEMI. Desenvolvido pelo: 3º SGT Thiago Pereira <strong>Dos
                                        Santos</strong></p>
                            </div>
                        </a>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <!--===============================================================================================-->
    <script src="{{ asset('js/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/vendor/tilt/tilt.jquery.min.js') }}"></script>

    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })

    </script>

    <script>
        var mensagem = $('#mensagem').val();

        $(document).ready(function() {
            $(".caixa_alta").keyup(function() {
                $(this).val($(this).val().toUpperCase());
            });

            if (mensagem) {
                $.amaran({
                    'theme': 'colorful',
                    'content': {
                        bgcolor: '#ae3232',
                        color: '#fff',
                        message: mensagem
                    },
                    'position': 'bottom right',
                    'outEffect': 'slideBottom'
                });
            }
        });

    </script>
    <!--===============================================================================================-->
    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugs/AmaranJS/dist/js/jquery.amaran.min.js') }}"></script>
</body>

</html>
