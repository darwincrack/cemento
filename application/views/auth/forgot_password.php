<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login-Venezolana de Cementos</title>

<!-- Bootstrap Core CSS -->
  
    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <!-- Material Design for Bootstrap -->
    <link href="../css/roboto.min.css" rel="stylesheet">
    <link href="../css/material.min.css" rel="stylesheet">
    <link href="../css/ripples.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    
    <link href="../css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font_awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="back-site">

    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-4">

                <img style="margin-top:15%; margin-bottom:10%" src="<?php echo site_url('img/logo.png') ?>" class="img-responsive" />

                
                <div class="panel panel-success  ">
                 
                    <div class="panel-heading">
                        <h3 class="panel-title">He Olvidado Mi Contraseña</h3>
                    </div>
                     <strong style="font-size:11px; padding-left:3%">Introduce tu Usuario, te Ayudaremos a Restablecer tu Contraseña</strong> 
                    <div class="panel-body">
                  
                    
                    
                    <?php $attributes = array('role' => 'form');
					echo form_open('auth/forgot_password', $attributes);?>
                        <form role="form">
                            <fieldset>

                            <?php echo $message;?>
                                <div class="form-group has-error">
                                
                                

                                    <input class="form-control floating-label" type="text" placeholder="Usuario" name="email" value="" id="email"  autofocus>
                                </div>
                                

                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" value="Enviar" class="btn btn-lg btn-danger btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>
            <!-- material js -->
    <script src="../js/ripples.min.js"></script>
    <script src="../js/material.min.js"></script>


    
    <script>$.material.init();</script>

</body>

</html>