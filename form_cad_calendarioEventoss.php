<?php
//inclui conexao com banco
include 'conexao.php';

$cod_calendario = $_GET['id'];

//pegar dados da tabela
$sql = "SELECT * FROM eventos";

//fazer busca dados da tabela através da query

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
    <title>Fateb | Cadastro de Eventos do Calendário</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="./plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="./plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="./plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="./plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="./plugins/summernote/summernote-bs4.min.css">

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

        <!-- Navbar MENU-->
        <?php include_once('templates/menuu.php') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Cadastro de Eventos do Calendário</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./indexx.php">Home</a></li>
                                <li class="breadcrumb-item active">Cadastro de Eventos do Calendário</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="col-md-12">

                        <div class="x_panel">
                            <div class="card card-default">
                                <form action="cadastrar_CalendarioEventos.php" method="POST">
                                    <div class="card-body">
                                        <div class="x_content" style="display: block;">
                                            <div class="row">

                                                <div class="col-md-1 col-xs-3">
                                                    <label for="ID">Código</label>
                                                    <input name="codigo" type="text" id="codigo" maxlength="4" class="form-control">
                                                </div>

                                                <div class="col-md-2 col-xs-8">
                                                    <label for="codCalendario">Calendário</label>
                                                    <input name="codCalendario" readonly type="hidden" onblur="this.value=this.value.toUpperCase();" class="form-control" value="<?php echo $id_calendario ?> ">
                                                    <input readonly type="text" id="codCalendario" onblur="this.value=this.value.toUpperCase();" class="form-control" value="<?php echo $semestreAno_calendario ?> ">

                                                </div>

                                                <div class="col-md-2.5 col-xs-12" style="padding: 0px 10px 0px 0px;">
                                                    <label for="data">Data</label>
                                                    <input name="data" type="DATE" id="data" onblur="this.value=this.value.toUpperCase();" class="form-control">
                                                </div>


                                                <div class="col-md-2,5 col-xs-12">
                                                    <label for="tipo">Tipo</label>
                                                    <select required="" class="form-control" name="tipo" id="tipo">
                                                        <option value="REPOSICAO AULA">REPOSIÇÃO DE AULA</option>
                                                        <option value="AULA EXTRA">AULA EXTRA</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row" style="padding-top: 10px;">
                                                <div class="col-md-10 col-xs-12">
                                                    <label for="descMotivo">Descrição/Motivo</label>
                                                    <input name="descMotivo" type="text" maxlength="100" id="descMotivo" onblur="this.value=this.value.toUpperCase();" class="form-control" onkeydown="upperCaseF(this)" required="">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2 col-xs-8" style="padding: 10px;">
                                                    <label for="qtdeAulas">Quantidade de aulas</label>
                                                    <select name="qtdeAulas" id="qtdeAulas" class="form-control">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-3 col-xs-12" style="padding: 10px;">
                                                    <label for="turma">Turma</label>
                                                    <select class="form-control" name="turma">
                                                        <option>ESCOLHA A TURMA</option>
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

                                                <div class="col-md-4 col-xs-6" style="padding: 10px;">
                                                    <label for="codDisc">Disciplina</label>
                                                    <select class="form-control" name="codDisc" id="codDisc">
                                                        <option>ESCOLHA A DISCIPLINA</option>
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
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12" style="margin-top: 160px" text-align="right">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                                                        Salvar
                                                    </button>
                                                    <a href="form_cad_calendarioo.php"><input type="button" value="Voltar" class="btn btn-primary pull-right"></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="modal-success">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-success">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Cadastro de Eventos</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Deseja salvar o evento?</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
                                                        <button type="subtmit" class="btn btn-outline-light">Salvar</button>
                                                    </div>
                                                </div>
                                                <!--/.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>
                                </form>
                                <!-- /.card-body -->
                                <div class="card-footer">
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