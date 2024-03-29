<?php
// Turn off all error reporting
error_reporting(0);
?>

<!-- Navbar MENU-->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="./index.php" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="loginn.php" type="button" class="btn btn-danger pull-right">SAIR</a>
        </li>
      </ul>
    </nav>
    </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="dist/img/FatebLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
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
            <a href="#" class="d-block">Administrador</a>
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

                <!--Link para CALENDARIO LETIVO-->
                <li class="nav-item">
                  <a href="./form_cad_calendario.php" class="nav-link">
                    <!--Página que será chamada href-->
                    <i class="far fa-circle nav-icon"></i>
                    <p>Calendário</p>
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

                 <!--Link para PROFESSOR-->
                 <li class="nav-item">
                  <a href="./form_cad_professor.php" class="nav-link">
                    <!--Página que será chamada href-->
                    <i class="far fa-circle nav-icon"></i>
                    <p>Professor</p>
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

                <!--Link para DETALHES DISCIPLINA-->
                <li class="nav-item">
                  <a href="./form_cad_detalhes_disciplina.php" class="nav-link">
                    <!--Página que será chamada href-->
                    <i class="far fa-circle nav-icon"></i>
                    <p>Detalhes Disciplina</p>
                  </a>
                </li>

                <!--Link para cadastro ALUNO-->
                <li class="nav-item">
                  <a href="form_cad_aluno.php" class="nav-link">
                    <!--Página que será chamada href-->
                    <i class="far fa-circle nav-icon"></i>
                    <p>Matrícula</p>
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
              
              </ul>
            </li>
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Chamada Online
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
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
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>