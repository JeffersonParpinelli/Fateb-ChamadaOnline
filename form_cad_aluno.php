<?php
//inclui conexao com banco
include 'conexao.php';

//pegar dados da tabela
$buscar_cadastros = "SELECT * FROM aluno,curso";
//fazer busca dados da tabela através da query
$query_cadastros = mysqli_query($connx, $buscar_cadastros);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fateb | Cadastro de Aluno</title>
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
    <!-- API preenchimento automático -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    
    <script>
        // Função para deixar letra maiúscula colocar no input --> (onkeydown="upperCaseF(this)")
        function upperCaseF(a) {
            setTimeout(function() {
                a.value = a.value.toUpperCase();
            }, 1);
        }
    </script>

    <!-- Função preenchimento automático -->
    <script type='text/javascript'>
        $(document).ready(function() {
            $("input[name='ra']").blur(function() {
                var $nome = $("input[name='nome']");
                var $semestreAno = $("input[name='semestreAno']");
                var $situacao = $("select[name='situacao']");
                var $curso = $("select[name='curso']");

                $.getJSON('functionAluno.php', {
                    ra: $(this).val()
                }, function(json) {
                    $nome.val(json.nome);
                    $semestreAno.val(json.semestreAno);
                    $situacao.val(json.situacao);
                    $curso.val(json.curso);
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
                            <h1>Cadastro de Matrícula</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                                <li class="breadcrumb-item active">Cadastro de Matrícula</li>
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
                                                <input type="submit" name="btnPesquisar" value="Pesquisar" id="btnPesquisar" class="btn btn-default" data-toggle="modal" data-target="#modal-listarAluno">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->
                            <form method="POST" action="listarAluno.php">
                                <div class="modal fade show" id="modal-listarAluno">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Alunos</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <table class="table table-striped">
                                                        <tr>
                                                            <td> <?php
                                                                    include("listar_Aluno.php");
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
                            <!-- /.modal -->
                        </div>
                        <div class="x_panel">
                            <div class="card card-default">
                                <form action="cadastrar_Aluno.php" method="POST">
                                    <div class="card-body">
                                        <div class="x_content" style="display: block;">
                                            <div class="row">

                                                <div class="col-md-2 col-xs-3">
                                                    <label for="ra">RA</label>
                                                    <input name="ra" type="text" id="ra" maxlength="7" class="form-control">
                                                </div>

                                                <div class="col-md-5 col-xs-6">
                                                    <label for="nome">Nome</label>
                                                    <input name="nome" type="text" maxlength="100" id="nome" onblur="this.value=this.value.toUpperCase();" class="form-control" required="" onkeydown="upperCaseF(this)">
                                                </div>

                                            </div></br>

                                            <div class="row">
                                                <div class="col-md-4 col-xs-6">
                                                    <label for="curso">Curso</label>
                                                    <select class="form-control" name="curso">
                                                        <option>ESCOLHA O CURSO</option>
                                                        <?php
                                                        include("conexao.php");

                                                        $sql = "SELECT * FROM curso";
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

                                                <div class="col-md-2 col-xs-6">
                                                    <label for="semestreAno">Semestre/Ano</label>
                                                    <input name="semestreAno" type="text" id="semestreAno" class="form-control" maxlength="5">
                                                </div>

                                                <div class="col-md-2 col-xs-6">
                                                    <label for="situacao">Situação</label>
                                                    <select name="situacao" id="situacao" class="form-control">
                                                        <option value="ativo">Ativo</option>
                                                        <option value="trancado">Trancado</option>
                                                        <option value="concluido">Concluído</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" style="margin-top: 160px" text-align="right">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                                                        Salvar
                                                    </button>
                                                    <input type="submit" name="btnLimpar" value="Limpar" id="btnLimpar" class="btn btn-primary pull-right" onclick="limparCampo()">
                                                    <a href="excluir_Aluno.php?id=<?php echo $id_aluno ?>" type="button" class="btn btn-danger pull-right">Excluir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="modal-success">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-success">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Cadastro de Matrícula</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Deseja salvar a matrícula?</p>
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
    <!-- InputMask -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/inputmask/jquery.inputmask.min.js"></script>
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