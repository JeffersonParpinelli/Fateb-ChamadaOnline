<?php

$cod_disciplina = $_GET['id'];

//Abre conexao com banco
include 'conexao.php';

$sql = "SELECT * FROM disciplina WHERE codigo = $cod_disciplina";

$result = mysqli_query($connx, $sql);

$dados = mysqli_fetch_assoc($result);

$id_disciplina = $dados['codigo'];
$descricao_disciplina = $dados['descricao'];
$cargaHoraria_disciplina = $dados['cargaHoraria'];
$qtdeAulasSemanais_disciplina = $dados['qtdeAulasSemanais'];
$sit_disciplina = $dados['situacao'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fateb | Alterar Disciplina</title>
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

        <!-- Navbar MENU-->
        <?php include_once('templates/menu.php') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Alterar Disciplina</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                                <li class="breadcrumb-item active">Alterar Disciplina</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <form action="alterar_Disciplina.php" method="POST">
                    <div class="card-body">
                        <div class="x_content" style="display: block;">
                            <div class="row">
                                <div class="col-md-1 col-xs-1">
                                    <label for="codigo">Código</label>
                                    <input name="codigo" readonly type="text" id="codigo" class="form-control" value="<?php echo $id_disciplina ?>">
                                </div>

                                <div class="col-md-4 col-xs-6">
                                    <label for="descricao">Descrição</label>
                                    <input name="descricao" type="text" id="descricao" onblur="this.value=this.value.toUpperCase();" class="form-control" onkeydown="upperCaseF(this)" value="<?php echo $descricao_disciplina ?>">
                                </div>

                                <div class="col-md-2 col-xs-2">
                                    <label for="cargaHoraria">Carga Horária</label>
                                    <input name="cargaHoraria" type="text" id="cargaHoraria" onblur="this.value=this.value.toUpperCase();" class="form-control" onkeydown="upperCaseF(this)" value="<?php echo $cargaHoraria_disciplina ?>">
                                </div>

                                <div class="col-md-2 col-xs-2">
                                    <label for="qtdeAulasSemanais">Qtde Aulas semana</label>
                                    <select name="qtdeAulasSemanais" id="qtdeAulasSemanais" class="form-control">

                                        <?php
                                        switch ($qtdeAulasSemanais_disciplina) {
                                            case "1": ?>
                                                <option value="<?php echo $qtdeAulasSemanais_disciplina ?>" selected><?php echo $qtdeAulasSemanais_disciplina ?></option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>

                                            <?php
                                                break;

                                            case "2": ?>
                                                <option value="1">1</option>
                                                <option value="<?php echo $qtdeAulasSemanais_disciplina ?>" selected><?php echo $qtdeAulasSemanais_disciplina ?></option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            <?php
                                                break;

                                            case "3": ?>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="<?php echo $qtdeAulasSemanais_disciplina ?>" selected><?php echo $qtdeAulasSemanais_disciplina ?></option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            <?php
                                                break;

                                            case "4": ?>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="<?php echo $qtdeAulasSemanais_disciplina ?>" selected><?php echo $qtdeAulasSemanais_disciplina ?></option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>

                                            <?php
                                                break;

                                            case "5": ?>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="<?php echo $qtdeAulasSemanais_disciplina ?>" selected><?php echo $qtdeAulasSemanais_disciplina ?></option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            <?php
                                                break;

                                            case "6": ?>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="<?php echo $qtdeAulasSemanais_disciplina ?>" selected><?php echo $qtdeAulasSemanais_disciplina ?></option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            <?php
                                                break;

                                            case "7": ?>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="<?php echo $qtdeAulasSemanais_disciplina ?>" selected><?php echo $qtdeAulasSemanais_disciplina ?></option>
                                                <option value="8">8</option>
                                            <?php
                                                break;

                                            case "8": ?>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="<?php echo $qtdeAulasSemanais_disciplina ?>" selected><?php echo $qtdeAulasSemanais_disciplina ?></option>
                                        <?php
                                                break;
                                        }
                                        ?>

                                    </select>
                                </div>

                                <div class="col-md- col-xs-6">
                                    <label for="situacao">Situação: </label>
                                    <select name="situacao" id="situacao" class="form-control" value="<?php echo $sit_disciplina ?>">
                                        <?php
                                        if ($sit_disciplina == "ativo") {
                                        ?>
                                            <option value="<?php echo $sit_disciplina ?>" selected> <?php echo $sit_disciplina ?> </option>
                                            <option value="inativo">inativo</option>
                                        <?php
                                        } else if ($sit_disciplina == "inativo") {
                                        ?>
                                            <option value="ativo">ativo</option>
                                            <option value="<?php echo $sit_disciplina ?>" selected> <?php echo $sit_disciplina ?> </option>
                                        <?php
                                        } else {
                                        ?>
                                            <option value="ativo">ativo</option>
                                            <option value="inativo">inativo</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" style="margin-top: 140px" text-align="right">
                                    <input type="submit" value="Salvar" class="btn btn-success">
                                    <a href="form_cad_disciplina.php" type="button" class="btn btn-primary pull-right">VOLTAR</a>
                                    <a href="excluir_Disciplina.php?id=<?php echo $id_disciplina ?>" type="button" class="btn btn-danger pull-right">Excluir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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