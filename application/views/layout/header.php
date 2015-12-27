<?php
if (isset($_SESSION['usuario'])) {
    
} else {
    redirect('Login');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modulo de Registro de Visitas </title>
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo base_url() ?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/icheck/flat/green.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    </head>


    <body class="nav-md">

        <div class="container body">


            <div class="main_container">

                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?php echo base_url() ?>" class="site_title"><i class="fa fa-paw"></i> <span>Administración!</span></a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="<?php echo base_url() ?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bienvenido,</span>
                                <h2><?php echo $_SESSION['usuario'][0]['NOMB_CORT_USU'] ?></h2>
                            </div>
                        </div>
                        <br />