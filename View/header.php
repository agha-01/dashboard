
<?php $site_url="http://localhost/dashboard/"; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/scss/style.css">
    <link href="<?php echo $site_url; ?>assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->




</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?php echo $site_url; ?>images/logo.png" alt="Logo"></a>

              <!--   <a class="navbar-bratables-basic.htmlnd hidden" href="./"><img src="<?php echo $site_url; ?>images/logo2.png" alt="Logo"></a> -->
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="active">
                        <a href="<?php echo $site_url; ?>home"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                
                   <?php 

                    if (Controller::$conn->checkOrder(1)) {
                        ?>
                    <li>
                        <a href="<?php echo $site_url; ?>adminlist"> <i class="menu-icon fa fa-user"></i>Adminlər </a>
                    </li>
                        <?php
                    }
                    ?>
                    <?php  if (Controller::$conn->checkOrder(2)) {
                        ?>
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo $site_url; ?>" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon  fa fa-newspaper-o"></i>Xeberler</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                            <li><i class="menu-icon fa fa-newspaper-o"></i><a href="<?php echo $site_url; ?>news">Aktiv</a></li>
                            <li><i class="menu-icon fa fa-newspaper-o"></i><a href="<?php echo $site_url; ?>news">Passiv</a></li>
                            <li><i class="menu-icon fa fa-newspaper-o"></i><a href="<?php echo $site_url; ?>news">Olke</a></li>
                            <li><i class="menu-icon fa fa-newspaper-o"></i><a href="<?php echo $site_url; ?>news">Siyaset</a></li>
                            <li><i class="menu-icon fa fa-newspaper-o"></i><a href="<?php echo $site_url; ?>news">Kriminal</a></li>
                            <li><i class="menu-icon fa fa-newspaper-o"></i><a href="<?php echo $site_url; ?>news">Sou-biznes</a></li>
                            <li><i class="menu-icon fa fa-newspaper-o"></i><a href="<?php echo $site_url; ?>news">Idman</a></li>
                            <li><i class="menu-icon fa fa-newspaper-o"></i><a href="<?php echo $site_url; ?>news">Maraqli</a></li>
                        </ul>
                    </li>
                    <!-- eski xeber start -->
                    <li>
                        <a href="<?php echo $site_url; ?>news"> <i class="menu-icon  fa fa-newspaper-o"></i>Xəbərlər </a>
                    </li>
                    <!-- eski xeber end -->
                <?php }  if (Controller::$conn->checkOrder(3)) {?>
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo $site_url; ?>#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users fa fa-th"></i>İstifadəçilər</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                            <li><i class="menu-icon fa fa-th"></i><a href="<?php echo $site_url; ?>userlist">Aktiv</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="<?php echo $site_url; ?>userlist">Qara siyahı</a></li>
                             <li><i class="menu-icon fa fa-th"></i><a href="<?php echo $site_url; ?>userlist">Hamısı</a></li>
                        </ul>
                    </li>
                <?php }
                 if (Controller::$conn->checkOrder(4)) { ?>
                 <li class="menu-item-has-children dropdown">
                        <a href="<?php echo $site_url; ?>#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Elanlar</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                            <li><i class="menu-icon fa fa-th"></i><a href="<?php echo $site_url; ?>elanlar">Aktiv</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="<?php echo $site_url; ?>elanlar">Passiv</a></li>
                             <li><i class="menu-icon fa fa-th"></i><a href="<?php echo $site_url; ?>elanlar">Hamısı</a></li>
                        </ul>
                    </li>
                <?php } ?>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo $site_url; ?>#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                              <?php echo "<span style='color:#999;'>".$_SESSION["email"]."</span>"; ?>
                            <a class="nav-link" href="a_exit"><i class="fa fa-power -off"></i><h5>Cixis</h5></a>
                        </ul>
                    </li>
                </ul>

 
    
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form action="search" method="POST" class="search-form">
                                <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <a href="<?php echo $site_url; ?>mail">
                         <button class="btn mesaj">mesaj gonder</button>
                        </a>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="<?php echo $site_url; ?>#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo $site_url; ?>images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <?php echo "<i>".$_SESSION["email"]."</i>"; ?>
                                <a class="nav-link" href="<?php echo $site_url; ?>a_exit"><i class="fa fa-power -off"></i>Cixis</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <select name="language">
                                <option value="az">az</option>
                                <option value="ru">ru</option>
                                <option value="en">en</option>
                            </select>
                        </a>
                        <!-- <div class="dropdown-menu" aria-labelledby="language" >
                            <a href="<?php echo $site_url; ?>#">
                                <div class="dropdown-item">
                                    <span class="flag-icon flag-icon-ru"></span>
                                </div>
                            </a>
                            <a href="<?php echo $site_url; ?>#">
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-us"></i>
                                </div>
                            </a>

                        </div> -->
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

<style>
    .admin{
        color: green;
    }
    .mesaj{
        background: #e74c3c !important;
        border-radius: 45px;
        color: white;
    }
</style>