<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Sistema insterno de gerenciamento e controle de serviços que a companhia de comando e solicitado">
    <meta name="author" content="THIAGO PEREIRA DOS SANTOS">
    <meta name="keyword" content="FIESMI - CADASTRO DE FICHA">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <title>Fisemi - criar formulario</title>

    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Styles required by this views -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/maskinput.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">

    <link rel="stylesheet" href="{{ asset('plugs/AmaranJS/dist/css/amaran.min.css') }}">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

    @if (Session::has('mensagem'))
        <input type="text" value="{{ Session::get('mensagem')['msg'] }}" id="mensagem" hidden>
        <input type="text" value="{{ Session::get('mensagem')['cor'] }}" id="cor" hidden>
    @endif
    <script>
        jQuery(function($) {
            $("#identidade_militar").mask("999999999-9");
            $("#telefone").mask("(99) 99999-9999");
            $("#cpf").mask("999.999.999-99");
        });

    </script>
    <div class="container-fluid mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h3> <span class="audiowide"> <i class="icon-book-open"></i> FICHA INDIVIDUAL PARA O
                                            SERVIÇO MILITAR</span></h3>
                                </div>
                                <div class="col text-right">
                                    <a type="button" class="btn btn-primary cinza text-white"
                                        href="{{ route('fisemi') }}">
                                        <h3><i class="fa fa-arrow-circle-o-left"> Voltar para página inicial</i></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row ">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{ route('fisemi.store') }}" method="post"
                                                enctype="multipart/form-data" class="form-horizontal">
                                                {{ csrf_field() }}

                                                @include('pages.form.form')

                                                <button
                                                    class="btn btn-block text-white btn-lg cinza audiowide">Salvar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/pace.min.js') }}"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="{{ asset('js/vendor/Chart.min.js') }}"></script>
    <!-- CoreUI main scripts -->
    <script src="{{ asset('js/app.js') }}"></script>



    <script src="{{ asset('DataTables/datatables.min.js') }}" defer></script>
    <script src="{{ asset('js/maskinput.js') }}"></script>
    <script src="{{ asset('plugs/AmaranJS/dist/js/jquery.amaran.min.js') }}"></script>


    <script>
        jQuery(function($) {
            $("#identidade_militar").mask("999999999-9");
            $("#contato").mask("(99) 99999-9999");
            $("#contato2").mask("(99) 99999-9999");
            // $("#placa").mask("9999-a999");
            // $('#placa').mask('99999 - 9999');
        });

        $(document).ready(function() {
            $(".caixa_alta").keyup(function() {
                $(this).val($(this).val().toUpperCase());
            });
            var mensagem = $('#mensagem').val();
            var sinal = $('#cor').val();

            if (mensagem) {

                $.amaran({
                    'theme': 'colorful',
                    'content': {
                        bgcolor: sinal,
                        color: '#fff',
                        message: mensagem,
                        delay: 10000
                    },
                    'position': 'top right',
                    'inEffect': 'slideRight'
                });
            }
        });

    </script>
</body>

</html>
