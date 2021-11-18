<?php
//inclui conexao com banco
include 'conexao.php';

//pegar dados da tabela
$buscar_cadastros = "SELECT * FROM professor";
//fazer busca dados da tabela através da query
$query_cadastros = mysqli_query($connx, $buscar_cadastros);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fateb | Cadastro de Professor</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- Função para deixar letra maiúscula colocar no input (onkeydown="upperCaseF(this)") -->
    <script>
        function upperCaseF(a) {
            setTimeout(function() {
                a.value = a.value.toUpperCase();
            }, 1);
        }
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="./index.html" class="nav-link">Home</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="./index.html" class="brand-link">
                <img src="./dist/img/FatebLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Fateb</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Usuário</a>
                    </div>
                </div>
                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="fa fa-edit"></i>
                                <p>
                                    Cadastro
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <!--Link para cadastro CURSO-->
                                <li class="nav-item">
                                    <a href="./form_cad_curso.php" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Curso</p>
                                    </a>
                                </li>
                                <!--Link para cadastro TURMA-->
                                <li class="nav-item">
                                    <a href="./form_cad_turma.php" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Turma</p>
                                    </a>
                                </li>
                                <!--Link para cadastro ALUNO-->
                                <li class="nav-item">
                                    <a href="./form_cad_aluno.php" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Aluno</p>
                                    </a>
                                </li>
                                <!--Link para VINCULAR ALUNO A TURMA-->
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vincular Aluno</p>
                                    </a>
                                </li>
                                <!--Link para DISCIPLINA-->
                                <li class="nav-item">
                                    <a href="./form_cad_disciplina.php" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Disciplina</p>
                                    </a>
                                </li>
                                <!--Link para DETALHES DISCIPLINA-->
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Detalhes Disciplina</p>
                                    </a>
                                </li>
                                <!--Link para PROFESSOR-->
                                <li class="nav-item">
                                    <a href="./form_cad_professor.php" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Professor</p>
                                    </a>
                                </li>
                                <!--Link para CALENDARIO LETIVO-->
                                <li class="nav-item">
                                    <a href="./form_cad_calendario.php" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Calendário</p>
                                    </a>
                                </li>
                                <!--Link para CALENDARIO EVENTOS-->
                                <li class="nav-item">
                                    <a href="./form_cad_calendarioEventos.php" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Calendário Eventos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--Fim ul de cadastros-->
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Chamada Online
                                </p>
                            </a>
                        </li>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Cadastro de Professor</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                                <li class="breadcrumb-item active">Cadastro de Professor</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="page-title" align="right">
                            <div id="pnlPesquisa"
                                onkeypress="javascript:return WebForm_FireDefaultButton(event, 'btnPesquisar')">
                                <div class="title_right">
                                    <div class="col-md-1 col-sm-8 col-xs-12 form-group pull-right top_search">
                                        <div class="input-group">
                                            <!-- <input name="txtFiltro" type="text" id="txtFiltro" class="form-control"
                                                placeholder="Pesquisar"> -->
                                            <span class="input-group-btn">
                                                <input type="submit" name="btnPesquisar" value="Pesquisar"
                                                    id="btnPesquisar" class="btn btn-default">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="x_panel">
                            <div class="card card-default">
                                <form action="cadastrar_Professor.php" method="POST">
                                    <div class="card-body">
                                        <div class="x_content" style="display: block;">
                                            <div class="row">
                                                <div class="col-md-2 col-xs-3">
                                                    <label for="cpf">CPF</label>
                                                    <input name="cpf" type="text" id="cpf" class="form-control" maxlength="14">
                                                </div>
                                                <div class="col-md-2 col-xs-3">
                                                    <label for="rg">RG</label>
                                                    <input name="rg" type="text" id="rg" class="form-control" maxlength="12">
                                                </div>
                                                <div class="col-md-5 col-xs-6">
                                                    <label for="nome">Nome completo</label>
                                                    <input name="nome" type="text" maxlength="100" id="nome"
                                                        onblur="this.value=this.value.toUpperCase();"
                                                        class="form-control" required="" onkeydown="upperCaseF(this)">
                                                </div>                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-xs-6">
                                                    <label for="titulacao">Titulação</label>
                                                    <select name="titulacao" id="titulacao" class="form-control">
                                                        <option value="D">Doutor</option>
                                                        <option value="M">Mestre</option>
                                                        <option value="E">Especialista</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-xs-3">
                                                    <label for="senha">Senha de acesso</label>
                                                    <input name="senha" type="text" id="senha" class="form-control">
                                                </div>
                                                <div class="col-md-2 col-xs-6">
                                                    <label for="situacao">Situação</label>
                                                    <select name="situacao" id="situacao" class="form-control">
                                                        <option value="ativo">Ativo</option>
                                                        <option value="inativo">Inativo</option>
                                                    </select>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2 col-xs-3">
                                                    <label for="cep">CEP</label>
                                                    <input name="cep" type="text" id="cep" class="form-control">
                                                </div>
                                                <div class="col-md-5 col-xs-3">
                                                    <label for="endereco">Endereço</label>
                                                    <input name="endereco" type="text" id="endereco" class="form-control" onkeydown="upperCaseF(this)">
                                                </div>
                                                <div class="col-md-1 col-xs-3">
                                                    <label for="numero">Nº</label>
                                                    <input name="numero" type="number" id="numero" class="form-control">
                                                </div>
                                                <div class="col-md-3 col-xs-3">
                                                    <label for="bairro">Bairro</label>
                                                    <input name="bairro" type="text" id="bairro" class="form-control" onkeydown="upperCaseF(this)">
                                                </div>
                                            </div>      
                                            <div class="row">
                                                <div class="col-md-2 col-xs-6">
                                                    <label for="pais">País</label>
                                                    <select name="pais" id="pais" class="form-control" disabled="">
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-xs-6">
                                                    <label for="estado">Estado</label>
                                                    <select name="estado" id="estado" class="form-control">
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-xs-6">
                                                    <label for="cidade">Cidade</label>
                                                    <select name="cidade" id="cidade" class="form-control">
                                                    </select>
                                                </div>                                               
                                            </div></br>    

                                            <div class="row">
                                                <div class="col-md-2 col-xs-3">
                                                    <label for="telefone">Telefone/Celular</label>
                                                    <input name="telefone" type="text" id="telefone" class="form-control">
                                                </div>
                                                <div class="col-md-6 col-xs-3">
                                                    <label for="email">E-mail</label>
                                                    <input name="email" type="email" id="email" class="form-control">
                                                </div>
                                            </div>      
                                            <div class="row">
                                                <div class="col-md-12" style="margin-top: 160px" text-align="right">
                                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                                        data-target="#modal-success">
                                                        Salvar
                                                    </button>
                                                    <input type="submit" name="btnLimpar" value="Limpar" id="btnLimpar"
                                                        class="btn btn-primary pull-right" onclick="limparCampo()">
                                                    <input type="submit" name="btnExcluir" value="Excluir"
                                                        id="btnExcluir" class="btn btn-danger pull-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="modal-success">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-success">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Cadastro Professor</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Deseja salvar o professor?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-outline-light"
                                                        data-dismiss="modal">Fechar</button>
                                                    <button type="subtmit" class="btn btn-outline-light">Salvar</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                </form>
                                <!-- /.card-body -->
                                <!-- /.card-footer -->
                            </div>
                        </div>
                        <!-- /.teste -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2021-2021 <a href="https://www.fateb.br/" target="_blank">Fateb</a>.</strong> All
            rights
            reserved.
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
    <!-- jQuery Knob -->
    <script src="./plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- Sparkline -->
    <script src="./plugins/sparklines/sparkline.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./dist/js/demo.js"></script>
    <!-- InputMask -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            /* jQueryKnob */
            $('.knob').knob({
                draw: function () {
                    // "tron" case
                    if (this.$.data('skin') == 'tron') {
                        var a = this.angle(this.cv) // Angle
                            ,
                            sa = this.startAngle // Previous start angle
                            ,
                            sat = this.startAngle // Start angle
                            ,
                            ea // Previous end angle
                            ,
                            eat = sat + a // End angle
                            ,
                            r = true
                        this.g.lineWidth = this.lineWidth
                        this.o.cursor &&
                            (sat = eat - 0.3) &&
                            (eat = eat + 0.3)
                        if (this.o.displayPrevious) {
                            ea = this.startAngle + this.angle(this.value)
                            this.o.cursor &&
                                (sa = ea - 0.3) &&
                                (ea = ea + 0.3)
                            this.g.beginPath()
                            this.g.strokeStyle = this.previousColor
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
                            this.g.stroke()
                        }
                        this.g.beginPath()
                        this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
                        this.g.stroke()
                        this.g.lineWidth = 2
                        this.g.beginPath()
                        this.g.strokeStyle = this.o.fgColor
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
                        this.g.stroke()
                        return false
                    }
                }
            })
            /* END JQUERY KNOB */
            //INITIALIZE SPARKLINE 
            S
            var sparkline1 = new Sparkline($('#sparkline-1')[0], {
                width: 240,
                height: 70,
                lineColor: '#92c1dc',
                endColor: '#92c1dc'
            })
            var sparkline2 = new Sparkline($('#sparkline-2')[0], {
                width: 240,
                height: 70,
                lineColor: '#f56954',
                endColor: '#f56954'
            })
            var sparkline3 = new Sparkline($('#sparkline-3')[0], {
                width: 240,
                height: 70,
                lineColor: '#3af221',
                endColor: '#3af221'
            })
            sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
            sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
            sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])
        })
    </script>
    <script>
        $(document).ready(function () {
            function montaCidade(estado, pais) {
                $.ajax({
                    type: 'GET',
                    url: 'http://api.londrinaweb.com.br/PUC/Cidades/' + estado + '/' + pais + '/0/10000',
                    contentType: "application/json; charset=utf-8",
                    dataType: "jsonp",
                    async: false
                }).done(function (response) {
                    cidades = '';

                    $.each(response, function (c, cidade) {

                        cidades += '<option value="' + cidade + '">' + cidade + '</option>';

                    });

                    // PREENCHE AS CIDADES DE ACORDO COM O ESTADO
                    $('#cidade').html(cidades);

                });
            }

            function montaUF(pais) {
                $.ajax({
                    type: 'GET',
                    url: 'http://api.londrinaweb.com.br/PUC/Estados/' + pais + '/0/10000',
                    contentType: "application/json; charset=utf-8",
                    dataType: "jsonp",
                    async: false
                }).done(function (response) {
                    estados = '';
                    $.each(response, function (e, estado) {

                        estados += '<option value="' + estado.UF + '">' + estado.Estado + '</option>';

                    });

                    // PREENCHE OS ESTADOS BRASILEIROS
                    $('#estado').html(estados);

                    // CHAMA A FUNÇÃO QUE PREENCHE AS CIDADES DE ACORDO COM O ESTADO
                    montaCidade($('#estado').val(), pais);

                    // VERIFICA A MUDANÇA NO VALOR DO CAMPO ESTADO E ATUALIZA AS CIDADES
                    $('#estado').change(function () {
                        montaCidade($(this).val(), pais);
                    });

                });
            }

            function montaPais() {
                $.ajax({
                    type: 'GET',
                    url: 'http://api.londrinaweb.com.br/PUC/Paisesv2/0/1000',
                    contentType: "application/json; charset=utf-8",
                    dataType: "jsonp",
                    async: false
                }).done(function (response) {

                    paises = '';

                    $.each(response, function (p, pais) {

                        if (pais.Pais == 'Brasil') {
                            paises += '<option value="' + pais.Sigla + '" selected>' + pais.Pais + '</option>';
                        } else {
                            paises += '<option value="' + pais.Sigla + '">' + pais.Pais + '</option>';
                        }

                    });

                    // PREENCHE O SELECT DE PAÍSES
                    $('#pais').html(paises);

                    // PREENCHE O SELECT DE ACORDO COM O VALOR DO PAÍS
                    montaUF($('#pais').val());

                    // VERIFICA A MUDANÇA DO VALOR DO SELECT DE PAÍS
                    $('#pais').change(function () {
                        if ($('#pais').val() == 'BR') {
                            // SE O VALOR FOR BR E CONFIRMA OS SELECTS
                            $('#estado').remove();
                            $('#cidade').remove();
                            $('#campo_estado').append('<select id="estado"></select>');
                            $('#campo_cidade').append('<select id="cidade"></select>');

                            // CHAMA A FUNÇÃO QUE MONTA OS ESTADOS
                            montaUF('BR');
                        } else {
                            // SE NÃO FOR, TROCA OS SELECTS POR INPUTS DE TEXTO
                            $('#estado').remove();
                            $('#cidade').remove();
                            $('#campo_estado').append('<input type="text" id="estado">');
                            $('#campo_cidade').append('<input type="text" id="cidade">');
                        }
                    })

                });
            }

            montaPais();
        })
    </script>
</body>
</html>