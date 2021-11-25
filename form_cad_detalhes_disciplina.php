<?php
//inclui conexao com banco
include 'conexao.php';

//pegar dados da tabela
$buscar_cadastros = "SELECT * FROM turma, disciplina, professor";

//fazer busca dados da tabela através da query
$query_cadastros = mysqli_query($connx, $buscar_cadastros);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fateb | Detalhes Disciplina</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    <!-- API preenchimento automático -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

    <!-- Função para deixar letra maiúscula colocar no input-->
    <script>
        function upperCaseF(a) {
            setTimeout(function() {
                a.value = a.value.toUpperCase();
            }, 1);
        }
    </script>

    <!-- Função preenchimento automático -->
    <script type='text/javascript'>
        $(document).ready(function() {
            $("input[name='codigo']").blur(function() {
                var $descricao = $("input[name='descricao']");
                var $etapa = $("input[name='etapa']");
                var $semestreAno = $("input[name='semestreAno']");
                var $calendario = $("select[name='calendario']");
                var $curso = $("select[name='curso']");
                var $situacao = $("select[name='situacao']");
                $.getJSON('functionTurma.php', {
                    codigo: $(this).val()
                }, function(json) {
                    $descricao.val(json.descricao);
                    $etapa.val(json.etapa);
                    $semestreAno.val(json.semestreAno);
                    $calendario.val(json.calendario);
                    $curso.val(json.curso);
                    $situacao.val(json.situacao);
                });
            });
        });
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
                <img src="./dist/img/FatebLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Fateb</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Usuário</a>
                    </div>
                </div>
                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
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
                                    <a href="./form_cad_matricula_disciplina.php" class="nav-link">
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
                                    <a href="./form_cad_detalhes_disciplina.php" class="nav-link">
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
                                <!--Link para RELATÓRIO-->
                                <li class="nav-item">
                                    <a href="./form_relatorio_administrador.php" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Relatório</p>
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
                            <h1>Detalhes Disciplina</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                                <li class="breadcrumb-item active">Detalhes Disciplina</li>
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
                            <div id="pnlPesquisa" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'btnPesquisar')">
                                <div class="title_right">
                                    <div class="col-md-1 col-sm-8 col-xs-12 form-group pull-right top_search">
                                        <div class="input-group">
                                            <!-- <input name="txtFiltro" type="text" id="txtFiltro" class="form-control" placeholder="Pesquisar"> -->
                                            <span class="input-group-btn">
                                                <input type="submit" name="btnPesquisar" value="Pesquisar" id="btnPesquisar" class="btn btn-default" data-toggle="modal" data-target="#modal-listarTurma">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal -->
                        <form method="POST" action="listar_Turma.php">
                            <div class="modal fade show" id="modal-listarTurma">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Detalhes Disciplina</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td> <?php
                                                                include("listar_Detalhes_Disciplina.php");
                                                                ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal" align="right">Fechar</button>
                                            <!-- <button type="subtmit" class="btn btn-outline-light">Salvar</button> -->
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </form>
                        <div class="x_panel">
                            <div class="card card-default">
                                <form action="cadastrar_Detalhes_Disciplina.php" method="POST">
                                    <div class="card-body">
                                        <div class="x_content" style="display: block;">
                                            <div class="row">

                                                <div class="col-md-2 col-xs-8">
                                                    <label for="turma">Turma</label>
                                                    <select class="form-control" name="turma" id="turma">
                                                        <option>Selecione a turma...</option>
                                                        <?php
                                                        include("conexao.php");

                                                        $sql = "SELECT * FROM turma";
                                                        $resultado = mysqli_query($connx, $sql);

                                                        while ($dados = mysqli_fetch_assoc($resultado)) {
                                                        ?>
                                                            <option value="<?php echo $dados['codigoTurma'] ?>">
                                                                <?php echo $dados['descricaoTurma'] ?>
                                                            </option>";

                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-3 col-xs-8">
                                                    <label for="disciplina">Disciplina</label>
                                                    <select class="form-control" name="disciplina" id="disciplina">
                                                        <option>Selecione a disciplina...</option>
                                                        <?php
                                                        include("conexao.php");

                                                        $sql = "SELECT * FROM disciplina";
                                                        $resultado = mysqli_query($connx, $sql);

                                                        while ($dados = mysqli_fetch_assoc($resultado)) {
                                                        ?>
                                                            <option value="<?php echo $dados['codigo'] ?>">
                                                                <?php echo $dados['descricao'] ?>
                                                            </option>";

                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-2 col-xs-3">
                                                    <label for="dataInicio">Data inicio</label>
                                                    <input name="dataInicio" type="date" id="dataInicio" class="form-control">
                                                </div>

                                                <div class="col-md-2 col-xs-3">
                                                    <label for="dataFim">Data Fim</label>
                                                    <input name="dataFim" type="date" id="dataFim" class="form-control">
                                                </div>

                                            </div>

                                            <div class="row" style="padding-top: 20px;">

                                                <div class="col-md-3 col-xs-8">
                                                    <label for="professor">Professor</label>
                                                    <select class="form-control" name="professor" id="professor">
                                                        <option>Selecione o professor...</option>
                                                        <?php
                                                        include("conexao.php");

                                                        $sql = "SELECT * FROM professor";
                                                        $resultado = mysqli_query($connx, $sql);

                                                        while ($dados = mysqli_fetch_assoc($resultado)) {
                                                        ?>
                                                            <option value="<?php echo $dados['cpf'] ?>">
                                                                <?php echo $dados['nome'] ?>
                                                            </option>";

                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row" style="padding-top: 20px;">
                                                <div class="col-md-3 col-xs-8">
                                                    <label for="diaSemana1">Dia da semana 1</label>
                                                    <select class="form-control" name="diaSemana1" id="diaSemana1">
                                                        <option>Escolha o dia</option>
                                                        <option value="segunda">Segunda-feira</option>
                                                        <option value="terca">Terça-feira</option>
                                                        <option value="quarta">Quarta-feira</option>
                                                        <option value="quinta">Quinta-feira</option>
                                                        <option value="sexta">Sexta-feira</option>

                                                    </select>


                                                </div>
                                                <div class="col-md-8 col-xs-2" style="padding-top: 40px; padding-right: 20px">
                                                    <input type="checkbox" name="aula1" value="1">   1ª
                                                    <input type="checkbox" name="aula2" value="2">   2ª
                                                    <input type="checkbox" name="aula3" value="3">   3ª
                                                    <input type="checkbox" name="aula4" value="4">   4ª
                                                    <input type="checkbox" name="aula5" value="5">   5ª
                                                    <input type="checkbox" name="aula6" value="6">   6ª

                                                </div>

                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-md-12" style="margin-top: 90px" text-align="right">
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                                                    Salvar
                                                </button>
                                                <input type="submit" name="btnLimpar" value="Limpar" id="btnLimpar" class="btn btn-primary pull-right" onclick="limparCampo()">
                                                <input type="submit" name="btnExcluir" value="Excluir" id="btnExcluir" class="btn btn-danger pull-right">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal fade" id="modal-success">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-success">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Cadastro Turma</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Deseja salvar a turma?</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
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
    <!-- Page specific script -->

    <script>
        $(function() {
            /* jQueryKnob */
            $('.knob').knob({
                draw: function() {
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
            //INITIALIZE SPARKLINE CHARTS
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
</body>

</html>