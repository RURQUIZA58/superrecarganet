<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Page title -->
        <title><?= $titulo ?></title>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->


        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!--    <link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->
        <link rel="shortcut icon" href="<?= base_url() ?>static/assets/img/LogoUteq.png" type="image/x-icon">
        <!-- Vendor styles -->
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/fontawesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/metisMenu/dist/metisMenu.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/animate.css/animate.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/bootstrap/dist/css/bootstrap.css" />

        <!-- App styles -->
        <link rel="stylesheet" href="<?= base_url() ?>static/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/fonts/pe-icon-7-stroke/css/helper.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/styles/style.css">

        <link rel="stylesheet" href="<?= base_url() ?>static/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/fonts/pe-icon-7-stroke/css/helper.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/styles/loader.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/styles/style.css">

        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/sweetalert/lib/sweet-alert.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/toastr/build/toastr.css" />
    </head>
    <body class="blank">
        <!-- color-line START -->
        <div class="color-line"></div>

        <!-- login-container START -->
        <div class="register-container">
            <!-- row START -->
            <div class="row">
                <!-- col-md-12 START -->
                <div class="col-md-12">
                    <!-- text-center m-b-mb START -->
                    <!--<div class="text-center m-b-md">
                        <h3>AIDE</h3>
                        <small>Inicia sesion</small>
                    </div>-->
<!--                    <div class="text-center m-b-md">
                        <img src="<?= base_url() ?>static/images/logos/logo_aide_md.png" alt="" class="img-responsive" style="display: block; margin: auto;" />
                        <h3><?= $titulo ?></h3>
                        <small></small>
                    </div>-->
                    <!-- text-center m-b-mb END -->
                    <!-- hpanel START -->
                    <div class="hpanel">
                        <div class="panel-body">
                            <!-- form start -->
                            <form role="form" id="form" action="<?= base_url() ?>usuario/registro_nuevo_usuario/crear_poster" method="post">
                                <!-- form row -->
                                <div class="row">
                                    <div class="form-group col-lg-12 ">
                                        <label><h4>Registro de poster</h4></label>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <label>T??tulo del p??ster</label>
                                            <input type="hidden" value="<?=$usuario?>" id="usuario" name="usuario">
                                            <input type="text" value="" id="nombre" class="form-control" name="nombre"  placeholder="*Campo requerido" style="text-transform: uppercase;">
                                            <span class="help-block"></span>

                                        </div>
                                    </div>


                                </div>
                                <div class="col-lg-12">
                                    <div class="hr-line-dashed">

                                    </div>
                                </div>

                                <div class="form-group " style="text-align:right;">
                                    <div class="col-lg-12">

                                        <button
                                            class="btn btn-primary" id="correoEnviado" name="correoEnviado" 
                                            type="submit">Registrar</button>

                                        <a class="btn btn-default" href="<?= base_url()?>login" >Cancelar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- hpanel END -->
                </div>
                <!-- col-md-12 END -->
            </div>
            <!--row END -->

<!--            <div class="row">
                <div class="col-md-12 text-center">
                    <strong><?= app_title() ?></strong><br /><?= app_name() ?> <br/> <?= date("Y") ?>. Todos los Derechos Reservados <br />
                    <br /> <small>Desarrollado por <a href="http://cidtai.uteq.edu.mx">CIDTAI - UTEQ</a></small>
                </div>
            </div>-->
        </div>

        <!-- login-container END -->

        <!-- Vendor scripts -->
        <script src="<?= base_url() ?>static/vendor/jquery/dist/jquery.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/metisMenu/dist/metisMenu.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/iCheck/icheck.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/sparkline/index.js"></script>

        <!--Modales alerts-->
        <script src="<?= base_url() ?>static/vendor/sweetalert/lib/sweet-alert.js"></script>
        <script src="<?= base_url() ?>static/vendor/toastr/build/toastr.min.js"></script>

        <!-- App scripts -->
        <script type="text/javascript">
            function base_url() {
                return "<?= base_url() ?>";
            }
        </script>
        <script src="<?= base_url() ?>static/scripts/homer.js"></script>
        

        <!--validacion de contrase??a -->

    </body>
</html>
