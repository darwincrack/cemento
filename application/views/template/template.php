<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="<?php echo  base_url()?>css/bootstrap.min.css">


    <!-- Material Design for Bootstrap -->
    <link href="<?php echo  base_url()?>css/roboto.min.css" rel="stylesheet">
    <link href="<?php echo  base_url()?>css/material.min.css" rel="stylesheet">
    <link href="<?php echo  base_url()?>css/ripples.min.css" rel="stylesheet">
    
        <!-- MetisMenu CSS -->
    <link href="<?php echo  base_url()?>css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo  base_url()?>css/sb-admin-2.css">

    <link href="<?php echo  base_url()?>css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo  base_url()?>font_awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top barra" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="padding: 0;"><img src="<?php echo site_url('img/logo.png')?>" style="width: 251px;
height: 60px;
padding-top: 10px;
background:#e7e7e7"/></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
    
                <!-- /.dropdown -->

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#FFFFFF">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        
                        
                        <li><a href="<?php echo site_url('auth/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
            
               <?php echo $menu ?>
 
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-sm-8">
                       	<!--titulo de cada pagina-->
                    	<h1 class="page-header"><?php echo $title ?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
                <div class="row">
				<!--contenido--> 
					<?php echo $content ?>

				<!--fin contenido-->
            	</div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo  base_url()?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo  base_url()?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo  base_url()?>js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo  base_url()?>js/sb-admin-2.js"></script>
            <!-- material js -->
    <script src="<?php echo  base_url()?>js/ripples.min.js"></script>
    <script src="<?php echo  base_url()?>js/material.min.js"></script>
    <script>$.material.init();</script>

</body>

</html>





