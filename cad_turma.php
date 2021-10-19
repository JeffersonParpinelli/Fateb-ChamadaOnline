<?php
//inclui conexao com banco
include 'conexao.php';

//pegar dados da tabela
$buscar_cadastros = "SELECT * FROM turma";
//fazer busca dados da tabela através da query
$query_cadastros = mysqli_query($connx, $buscar_cadastros);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fateb | Cadastro de Turma</title>
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
    <script>
        function limparCampo() {
            document.getElementById("txtDescricao").value = "";
            document.getElementById('txtDescricao').focus();
            document.getElementById("txtCodCurso").value = "";
            document.getElementById('txtCodCurso').focus();
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
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> -->
                <!-- Messages Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item"> -->
                <!-- Message Start -->
                <!-- <div class="media">
                                <img src="./dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div> -->
                <!-- Message End -->
                <!-- </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"> -->
                <!-- Message Start -->
                <!-- <div class="media">
                                <img src="./dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div> -->
                <!-- Message End -->
                <!-- </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"> -->
                <!-- Message Start -->
                <!-- <div class="media">
                                <img src="./dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div> -->
                <!-- Message End -->
                <!-- </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div> -->
                <!-- </li> -->
                <!-- Notifications Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
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
                                    <a href="./cad_curso.php" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Curso</p>
                                    </a>
                                </li>
                                <!--Link para cadastro TURMA-->
                                <li class="nav-item">
                                    <a href="./cad_turma.php" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Turma</p>
                                    </a>
                                </li>
                                <!--Link para cadastro ALUNO-->
                                <li class="nav-item">
                                    <a href="./cad_aluno.php" class="nav-link">
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
                                    <a href="./cad_disciplina.php" class="nav-link">
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
                                    <a href="./cad_professor.php" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Professor</p>
                                    </a>
                                </li>
                                <!--Link para CALENDARIO LETIVO-->
                                <li class="nav-item">
                                    <a href="./cad_calendario.html" class="nav-link">
                                        <!--Página que será chamada href-->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Calendário</p>
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
                            <h1>Cadastro de Turma</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                                <li class="breadcrumb-item active">Cadastro de Turma</li>
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
                                    <div class="col-md-4 col-sm-8 col-xs-12 form-group pull-right top_search">
                                        <div class="input-group">
                                            <input name="txtFiltro" type="text" id="txtFiltro" class="form-control"
                                                placeholder="Pesquisar">
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
                                <!-- <div class="card-header">
                                    <div class="card-title">
                                        <h4>Cadastro de Curso</h4>
                                    </div>
                                </div> -->
                                <!-- /.card-header -->
                                <form action="cadastro.php" method="POST">
                                    <div class="card-body">
                                        <div class="x_content" style="display: block;">
                                            <div class="row">
                                                <div class="col-md-1 col-xs-3">
                                                    <label for="codigo">Código</label>
                                                    <input name="codigo" type="text" id="codigo" class="form-control"
                                                        maxlength="4">
                                                </div>

                                                <div class="col-md-8 col-xs-12">
                                                    <label for="descricao">Descrição</label>
                                                    <input name="descricao" type="text" maxlength="100" id="descricao"
                                                        onblur="this.value=this.value.toUpperCase();"
                                                        class="form-control" required="">
                                                </div>

                                                <div class="col-md-1 col-xs-12">
                                                    <label for="etapa">Etapa</label>
                                                    <input name="etapa" type="text" maxlength="2" id="etapa"
                                                        onblur="this.value=this.value.toUpperCase();"
                                                        class="form-control" required="">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8 col-xs-12" style="padding: 10px;">
                                                    <label for="semestreAno">Semestre/Ano</label>
                                                    <input name="semestreAno" type="text" maxlength="5" id="semestreAno"
                                                        onblur="this.value=this.value.toUpperCase();"
                                                        class="form-control" required="">
                                                </div>

                                                <div class="col-md-8 col-xs-12">
                                                    <label for="calendario">Calendario</label>
                                                    <input name="calendario" type="text" maxlength="200" id="calendario"
                                                        onblur="this.value=this.value.toUpperCase();"
                                                        class="form-control" required="">
                                                </div>

                                                <div class="col-md-8 col-xs-12">
                                                    <label for="curso">Curso</label>                                                
                                                </div>
                                                <select class="form-control" name="descricao">
                                                        <option>Selecione o curso...</option>
                                                        <?php
                                                        include("conexao.php");

                                                        $sql="SELECT descricao FROM curso";
                                                        $resultado=$connx->query($sql);
                                            
                                                        while($dados = $resultado->fetch_assoc()){
                                                            echo "<option value=".$dados['descricao'].">" . $dados['descricao'] . "</option>";
                                                        }
                                            
                                                        ?>
                                                      </select>

                                                <div class="col-md-2 col-xs-6">
                                                    <label for="situacao">Situação</label>
                                                    <select name="situacao" id="situacao" class="form-control">
                                                        <option value="ativo">Ativo</option>
                                                        <option value="inativo">Inativo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" style="margin-top: 160px" text-align="right">
                                                    <input type="submit" name="btnSalvar" value="Salvar" id="btnSalvar"
                                                        class="btn btn-primary pull-right">
                                                    <input type="submit" name="btnLimpar" value="Limpar" id="btnLimpar"
                                                        class="btn btn-primary pull-right" onclick="limparCampo()">
                                                    <input type="submit" name="btnExcluir" value="Excluir"
                                                        id="btnExcluir" class="btn btn-primary pull-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
                                    the plugin. -->
                                </div>
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
    <!-- Page specific script -->
    <script type="text/javascript">
        function limparCampo() {
            document.getElementById("txtDescricao").value = "";
            document.getElementById('txtDescricao').focus();
            document.getElementById("txtCodCurso").value = "";
            document.getElementById('txtCodCurso').focus();
        }
    </script>

    <script>
        $(function () {
            /* jQueryKnob */
            $('.knob').knob({
                /*change : function (value) {
                 //console.log("change : " + value);
                 },
                 release : function (value) {
                 console.log("release : " + value);
                 },
                 cancel : function () {
                 console.log("cancel : " + this.value);
                 },*/
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