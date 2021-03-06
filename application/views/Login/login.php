<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modulo de Control de Visitas y Control Telefónico </title>

        <!-- Bootstrap core CSS -->

        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo base_url() ?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/icheck/flat/green.css" rel="stylesheet">


        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

    </head>

    <body style="background:#F7F7F7;">

        <div class="">
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>

            <div id="wrapper">
                <div id="login" class="animate form">
                    <section class="login_content">
                        <form method="POST" action="<?php echo base_url() ?>Login/validar_sesion">
                            <h1>INEI</h1>
                            <div>
                                <input type="text" class="form-control" name="USUARIO_USU" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" name="PASSWORD_USU" required="" />
                            </div>
                            <div>
                                <button class="btn btn-default" href="">Ingresar al Modulo</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Modulo de Control de Visitas y Control Telefónico</h1>

                                    <p>©2015 All Rights Reserved.</p>
                                </div>
                            </div>
                        </form>
                        <!-- form -->
                    </section>
                    <!-- content -->
                </div>

            </div>
        </div>

    </body>

</html>