<?php

$cod_calendario = $_GET['id'];

//Abre conexao com banco
include 'conexao.php';

$sql = "SELECT * FROM calendario WHERE codigo = $cod_calendario ";

$result = mysqli_query($connx, $sql);

$dados = mysqli_fetch_assoc($result);

$id_calendario = $dados['codigo'];
$semestreAno_calendario = $dados['semestreAno'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fateb | Cadastro de Calendário Letivo</title>
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
                <img src="./dist/img/FatebLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                            <h1>Cadastro de Calendário Letivo</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                                <li class="breadcrumb-item active">Cadastro de Calendário Letivo</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <form action="alterar_Calendario.php" method="POST">
                    <div class="card-body">
                        <div class="x_content" style="display: block;">
                            <div class="row">
                                <div class="col-md-2 col-xs-3">
                                    <label for="ID">Código</label>
                                    <input name="codCalendario" readonly type="text" id="codCalendario" maxlength="4" class="form-control" value="<?php echo $id_calendario ?>">
                                </div>

                                <div class="col-md-2 col-xs-12">
                                    <label for="semestreAno">Semestre/Ano</label>
                                    <input name="semestreAno" type="text" maxlength="5" id="semestreAno" onblur="this.value=this.value.toUpperCase();" class="form-control" required="" value="<?php echo $semestreAno_calendario ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="margin-top: 160px" text-align="right">
                                    <input type="submit" value="Salvar" class="btn btn-success">
                                    <a href="form_cad_calendario.php"><input type="submit" value="VOLTAR" class="btn btn-primary pull-right"></a>
                                    <a href="excluir_Calendario.php?id=<?php echo $id_calendario ?>" type="button" class="btn btn-danger pull-right">Excluir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
</body>

</html>