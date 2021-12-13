<?php

error_reporting(0);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fateb | Relatório</title>
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

    <script>
        function openEvents() {
            location.href = "form_relatorio_administradorr.php?dataInicio=" + document.getElementById("dataInicio").value +
                "&dataFim=" + document.getElementById("dataFim").value +
                "&curso=" + document.getElementById("curso").value +
                "&disciplina=" + document.getElementById("disciplina").value +
                "&aluno=" + document.getElementById("aluno").value;
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
                            <h1>Relatório de Chamadas</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                                <li class="breadcrumb-item active">Relatório</li>
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
                                            <span class="input-group-btn">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="x_panel">
                            <div class="card card-default">
                                <form action="form_relatorio_administradorr.php" method="POST">
                                    <div class="card-body">
                                        <div class="x_content" style="display: block;">

                                            <div class="row">
                                                <div class="col-md-2 col-xs-8" style="padding: 10px;">
                                                    <label for="dataInicio">Data Inicial</label>
                                                    <input name="dataInicio" type="date" <?php if ($_GET["dataInicio"] != null) echo "value=\"" . $_GET["dataInicio"] . "\"" ?>id="dataInicio" class="form-control">
                                                </div>

                                                <div class="col-md-2 col-xs-8" style="padding: 10px;">
                                                    <label for="dataFim">Data Final</label>
                                                    <input name="dataFim" type="date" <?php if ($_GET["dataFim"] != null) echo "value=\"" . $_GET["dataFim"] . "\"" ?> id="dataFim" class="form-control">
                                                </div>

                                                <div class="col-md-3 col-xs-8" style="padding: 10px;">
                                                    <label for="curso">Curso</label>
                                                    <select class="form-control" name="curso" id="curso">
                                                        <option>Escolha o curso</option>
                                                        <?php
                                                        include("conexao.php");

                                                        $sql = "SELECT * FROM curso";
                                                        $resultado = mysqli_query($connx, $sql);

                                                        while ($dados = mysqli_fetch_assoc($resultado)) {
                                                        ?>

                                                            <option value="<?php echo $dados['codigo'] ?>" <?php if ($dados['codigo'] == $_GET["curso"]) echo " selected" ?>>
                                                                <?php echo $dados['descricao'] ?>
                                                            </option>";

                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-3 col-xs-8" style="padding: 10px;">
                                                    <label for="disciplina">Disciplina</label>
                                                    <select class="form-control" name="disciplina" id="disciplina">
                                                        <option>Escolha a disciplina</option>
                                                        <?php
                                                        include("conexao.php");
                                                        $curso_selecionado = $dados['codigo'];

                                                        $sql = "SELECT * FROM disciplina";

                                                        $resultado = mysqli_query($connx, $sql);

                                                        while ($dados = mysqli_fetch_assoc($resultado)) {
                                                        ?>
                                                            <option value="<?php echo $dados['codigo'] ?>" <?php if ($dados['codigo'] == $_GET["disciplina"]) echo " selected" ?>>
                                                                <?php echo $dados['descricao'] ?>
                                                            </option>";

                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-2 col-xs-8" style="padding: 10px;">
                                                    <label for="aluno">Aluno</label>
                                                    <select class="form-control" name="aluno" id="aluno">
                                                        <option>TODOS</option>
                                                        <?php
                                                        include("conexao.php");

                                                        $sql = "SELECT * FROM aluno";
                                                        $resultado = mysqli_query($connx, $sql);

                                                        while ($dados = mysqli_fetch_assoc($resultado)) {
                                                        ?>
                                                            <option value="<?php echo $dados['ra'] ?>" <?php if ($dados['ra'] == $_GET["ra"]) echo " selected" ?>>
                                                                <?php echo $dados['nome'] ?>
                                                            </option>";

                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                            </div>
                                            <?php if ($_GET["curso"] != null) { ?>
                                                <div class="row" style="padding-top: 30px;">
                                                    <table class="table" id="aluno">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Curso</th>
                                                                <th scope="col">Disciplina</th>
                                                                <th scope="col">Professor</th>
                                                                <th scope="col">Aluno</th>
                                                                <th scope="col">Presenças</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php
                                                            include("conexao.php");

                                                            $sql = "SELECT c.descricao as Curso, d.descricao as Disciplina, pro.nome as Professor, a.nome,(
                                                                select coalesce(sum(p.presencas),0) FROM presenca p
                                                        JOIN aluno al on al.ra = p.ra
                                                        JOIN turmadiscaluno ta on ta.ra = al.ra
                                                        JOIN chamada cha on cha.codChamada = p.codChamada
                                                        WHERE al.ra = a.ra AND ta.codDisc = td.codDisc AND cha.codDisc = d.codigo";
                                                            if ($_GET["dataInicio"] != "") {
                                                                $sql .= " AND cha.dataAula BETWEEN '" . $_GET["dataInicio"] . "' AND '" . $_GET["dataFim"] . "'";
                                                            }
                                                            $sql .= " ) as 'Presenças' FROM turma as t 
                                                        JOIN curso c on c.codigo = t.codCurso
                                                        JOIN turmadisc td on td.codTurma = t.codigoTurma
                                                        JOIN disciplina d on d.codigo = td.codDisc
                                                        JOIN turmadiscaluno ta on ta.codDisc = d.codigo
                                                        JOIN professor pro on pro.cpf = td.cpfProfessor
                                                        JOIN aluno a on a.ra = ta.ra
                                                        WHERE 1=1";
                                                            if ($_GET["curso"] != "") {
                                                                $sql .= " AND c.codigo = " . $_GET["curso"];
                                                            }
                                                            if ($_GET["disciplina"] != "") {
                                                                $sql .= " AND d.codigo = " . $_GET["disciplina"];
                                                            }
                                                            if ($_GET["aluno"] != "TODOS") {
                                                                $sql .= " AND a.ra = " . $_GET["aluno"];
                                                            }

                                                            //print_r($sql);

                                                            $resultado = mysqli_query($connx, $sql);

                                                            while ($dados = mysqli_fetch_assoc($resultado)) {
                                                            ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $dados['Curso'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $dados['Disciplina'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $dados['Professor'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $dados['nome'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $dados['Presenças'] ?>
                                                                    </td>

                                                                <?php
                                                            }
                                                                ?>
                                                                </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            <?php } ?>

                                            <!-- FIM TESTE SELECIONAR DIVERSAS DISCIPLINAS -->

                                            <div class="row">
                                                <div class="col-md-12" style="margin-top: 90px" text-align="right">
                                                    <a ref="javascript:void(0);" onclick="openEvents();"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-success">
                                                            Visualizar relatório
                                                        </button></a>

                                                    <a href="gerar_relatorio.php"><abbr title="Exportar Excel"><button type="button" class="btn btn-success">
                                                                Gerar relatório
                                                            </button></abbr>
                                                        <input type="submit" name="btnLimpar" value="Limpar Campos" id="btnLimpar" class="btn btn-primary pull-right" onclick="limparCampo()">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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