<?php
//inclui conexao com banco
include 'conexao.php';

$id_disciplina = $_GET['id'];

//pegar dados da tabela
$sql = "SELECT * FROM disciplina WHERE codigo = $id_disciplina ";

$result = mysqli_query($connx, $sql);

$dados = mysqli_fetch_assoc($result);

$codigo_disciplina = $dados['codigo'];
$descricao_disciplina = $dados['descricao'];
$cargaHoraria_disciplina = $dados['cargaHoraria'];
$qtdeAulasSemanais_disciplina = $dados['qtdeAulasSemanais'];
$situacao_disciplina = $dados['situacao'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fateb | Cursos da Disciplina</title>
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

    <!-- Função preenchimento automático -->
    <script type='text/javascript'>
        $(document).ready(function() {
            $("input[name='codigo']").blur(function() {
                var $descricao = $("input[name='descricao']");
                var $cargaHoraria = $("input[name='cargaHoraria']");
                var $qtdeAulasSemanais = $("select[name='qtdeAulasSemanais']");
                var $situacao = $("select[name='situacao']");
                $.getJSON('functionDisciplina.php', {
                    codigo: $(this).val()
                }, function(json) {
                    $descricao.val(json.descricao);
                    $cargaHoraria.val(json.cargaHoraria);
                    $qtdeAulasSemanais.val(json.qtdeAulasSemanais);
                    $situacao.val(json.situacao);
                });
            });
        });
    </script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar MENU-->
        <?php include_once('templates/menu.php') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Cursos da Disciplina</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                                <li class="breadcrumb-item active">Cursos da Disciplina</li>
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
                                                <input type="submit" name="btnPesquisar" value="Pesquisar" id="btnPesquisar" class="btn btn-default" data-toggle="modal" data-target="#modal-listarDisciplina">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->
                            <form method="POST" action="listar_Disciplina.php">
                                <div class="modal fade show" id="modal-listarDisciplina">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Disciplinas</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <table class="table table-striped">
                                                        <tr>
                                                            <td> <?php
                                                                    include("listar_Disciplina.php");
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
                                    <!-- /.card-header -->
                                    <form action="cadastrar_Disciplina_Curso.php" method="POST" align="left">
                                        <div class="card-body">
                                            <div class="x_content" style="display: block;">
                                                <div class="row">
                                                    <div class="col-md-1 col-xs-3">
                                                        <label for="codigo">Código</label>
                                                        <input name="codigo" type="text" readonly id="codigo" class="form-control" value="<?php echo $codigo_disciplina ?>">
                                                    </div>

                                                    <div class="col-md-8 col-xs-12">
                                                        <label for="descricao">Descrição</label>
                                                        <input name="descricao" type="text" id="descricao" readonly onblur="this.value=this.value.toUpperCase();" class="form-control" value="<?php echo $descricao_disciplina ?>">
                                                    </div>
                                                </div>

                                                <div class="row" style="padding-top: 20px;">
                                                    <div class="col-md-3 col-xs-6">
                                                        <label for="curso">Curso</label>
                                                        <select class="form-control" name="curso" id="curso">
                                                            <option>ESCOLHA O CURSO</option>
                                                            <?php
                                                            include("conexao.php");

                                                            $sql = "SELECT * FROM curso";
                                                            $resultado = mysqli_query($connx, $sql);

                                                            while ($dados = mysqli_fetch_assoc($resultado)) {
                                                            ?>

                                                                <option value="<?php echo $dados['codigo'] ?>">
                                                                    <?php echo $dados['descricao'] ?>
                                                                </option>

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
                                                        <!--<input type="button" name="btnSalvar" value="Salvar" id="btnSalvar"
                                                        class="btn btn-primary pull-right">-->
                                                        <input type="button" name="btnLimpar" value="Limpar" id="btnLimpar" class="btn btn-primary pull-right" onclick="limparCampo()">
                                                        <input type="submit" name="btnExcluir" value="Excluir" id="btnExcluir" class="btn btn-danger pull-right">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="modal-success">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-success">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Vincular Curso a Disciplina</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Deseja salvar?</p>
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