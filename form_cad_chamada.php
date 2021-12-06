<?php
//inclui conexao com banco
include 'conexao.php';

//pegar dados da tabela
$buscar_cadastros = "SELECT * FROM chamada";
//fazer busca dados da tabela através da query
$query_cadastros = mysqli_query($connx, $buscar_cadastros);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fateb | Registro de Chamada</title>
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
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="plugins/codemirror/codemirror.css">
    <link rel="stylesheet" href="plugins/codemirror/theme/monokai.css">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="plugins/simplemde/simplemde.min.css">
    <!-- API preenchimento automático -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>


    <!-- Função para deixar letra maiúscula colocar no input (onkeydown="upperCaseF(this)") -->
    <script>
        function upperCaseF(a) {
            setTimeout(function() {
                a.value = a.value.toUpperCase();
            }, 1);
        }

        function openEvents() {
            location.href = "form_cad_chamada.php?turma=" + document.getElementById("turma").value +
                "&disciplina=" + document.getElementById("disciplina").value +
                "&data=" + document.getElementById("data").value;
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
                            <h1>Registro de Chamada</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./indexx.php">Home</a></li>
                                <li class="breadcrumb-item active">Registro de Chamada</li>
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
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="x_panel">
                            <div class="card card-default">
                                <!-- /.card-header -->
                                <form action="cadastrar_Chamada.php" method="POST">
                                    <div class="card-body">
                                        <div class="x_content" style="display: block;">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-12">
                                                    <label for="turma">Turma</label>
                                                    <select class="form-control" name="turma" id="turma">
                                                        <option>ESCOLHA A TURMA</option>
                                                        <?php
                                                        include("conexao.php");

                                                        $sql = "SELECT * FROM turma";
                                                        $resultado = mysqli_query($connx, $sql);

                                                        while ($dados = mysqli_fetch_assoc($resultado)) {
                                                        ?>
                                                            <option value="<?php echo $dados['codigoTurma'] ?>" <?php if ($dados['codigoTurma'] == $_GET["turma"]) echo " selected" ?>>
                                                                <?php echo $dados['descricaoTurma'] ?>
                                                            </option>";

                                                        <?php
                                                        }
                                                        ?>

                                                    </select>
                                                </div>

                                                <div class="col-md-4 col-xs-6">
                                                    <label for="disciplina">Disciplina</label>
                                                    <select class="form-control" name="disciplina" id="disciplina">
                                                        <option>ESCOLHA A DISCIPLINA</option>
                                                        <?php
                                                        include("conexao.php");

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

                                                <div class="col-md-3 col-xs-12">
                                                    <label for="data">Data da aula</label>
                                                    <input name="data" type="DATE" <?php if ($_GET["data"] != null) echo "value=\"" . $_GET["data"] . "\"" ?> id="data" onblur="this.value=this.value.toUpperCase();" class="form-control">
                                                </div>

                                                <div class="col-md-2" style="margin-top: 31px" text-align="right">
                                                    <a ref="javascript:void(0);" onclick="openEvents()"><input type="button" name="consultarAlunos" value="Consultar Alunos" id="consultarAlunos" class="btn btn-block btn-dark">
                                                </div>


                                            </div><br>
                                            <?php if ($_GET["turma"] != null) { ?>
                                                <div class="row">
                                                    <div class="col-md-8 col-xs-12">

                                                        <tr>
                                                            <td>
                                                                <a>
                                                                    Presentes
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="icheck d-inline">
                                                                <label><input type="checkbox" id="checkboxPrimary13" checked="">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <tr>
                                                            <td>
                                                                <a>
                                                                    Ausentes
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="icheck d-inline">
                                                                <label><input type="checkbox" id="checkboxPrimary14">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </div>
                                                </div><br>
                                                <div class="row">
                                            <div class="col-md-12">
                                                <section class="content">
                                                    <div class="card">
                                                        <div class="card-body p-0">
                                                            <table class="table" id="aluno">
                                                                <tbody>
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width: 39%">
                                                                                Alunos
                                                                            </th>
                                                                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                1ª
                                                                            </th>
                                                                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                2ª
                                                                            </th>
                                                                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                3ª
                                                                            </th>
                                                                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                4ª
                                                                            </th>
                                                                        </tr>
                                                                    </thead>

                                                                    <?php
                                                                    include("conexao.php");

                                                                    $sql = "SELECT * FROM aluno WHERE ra IN (select ra FROM turmadiscaluno WHERE codDisc = " . $_GET["disciplina"] . ")";
                                                                    $resultado = mysqli_query($connx, $sql);

                                                                    while ($dados = mysqli_fetch_assoc($resultado)) {
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <a>
                                                                                    <?php echo $dados['nome'] ?>
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                <div class="icheck-primary d-inline">
                                                                                    <label> <input type="checkbox" name="presenca[]" id="aluno[]" value="<?php echo $dados['ra'] ?>">

                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="icheck-primary d-inline">
                                                                                    <label> <input type="checkbox" name="presenca[]" id="aluno[]" value="<?php echo $dados['ra'] ?>">

                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="icheck-primary d-inline">
                                                                                    <label><input type="checkbox" name="presenca[]" id="aluno[]" value="<?php echo $dados['ra'] ?>">

                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="icheck-primary d-inline">
                                                                                    <label> <input type="checkbox" name="presenca[]" id="aluno[]" value="<?php echo $dados['ra'] ?>">
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                </section></div></div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card-body">
                                                    <textarea id="summernote" name="conteudo">
              </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="row">
                                        <div class="col-md-12" style="margin-top: 40px" text-align="right">
                                            <button type="button" class="btn btn-success toastrDefaultSuccess" data-toggle="modal" data-target="#modal-success">
                                                Salvar
                                            </button>

                                            <input type="submit" name="btnLimpar" value="Limpar" id="btnLimpar" class="btn btn-primary pull-right" onclick="limparCampo()">
                                            <a href="excluirCurso.php?id=<?php echo $id_curso ?>" type="button" class="btn btn-danger pull-right">Excluir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal-success">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-success">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Chamada Online</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Deseja salvar a chamada?</p>
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
    <!-- Page specific script -->
    <!-- Summernote -->
    <script src="./plugins/summernote/summernote-bs4.min.js"></script>
    <!-- CodeMirror -->
    <script src="./plugins/codemirror/codemirror.js"></script>
    <script src="./plugins/codemirror/mode/css/css.js"></script>
    <script src="./plugins/codemirror/mode/xml/xml.js"></script>
    <script src="./plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        });

        const picker = document.getElementById('data');
        picker.addEventListener('input', function(e){
        var day = new Date(this.value).getUTCDay();
        if([6,0].includes(day)){
            e.preventDefault();
            this.value = '';
            alert('FIM DE SEMANA NÃO PERMITIDO!');
        }
        });
    </script>

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