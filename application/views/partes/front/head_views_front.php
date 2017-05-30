<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Front Biblioteca</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/heroic-features.css"); ?>">    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Biblioteca</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url(); ?>">Inicio</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('libros_front');?>">Libros</a>
                    </li>
                    <li>
                         <a id="msg_username"></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if($this->session->userdata('login_ajax') != "TRUE"){ ?>
                    <div class="btn-group btn-posicion">
                        <a class="btn btn-primary" role="button" data-toggle="modal" data-target=".forget-modal">Iniciar sesión</a>
                    </div>
                    <?php }else{?>
                    <li class="dropdown" id="sesion">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido 
                        <?= $this->session->userdata('nombre')?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="#"><a type="button" href="<?php echo base_url('logout_ajax') ?>" role="button">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Iniciar sesión</h4>
                </div>
                <div class="modal-body">
                    <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="usuario" class="sr-only">Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario">
                        </div>
                        <div class="form-group">
                            <label for="pass" class="sr-only">Contraseña</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Iniciar" data-dismiss="modal">
                    </form>
                </div>
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->
