<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="kapperzaak">
    <meta name="author" content="boi">

    <title>Kapperszaak</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= URL ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= URL ?>public/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= URL ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand">Kapperszaak</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?= URL ?>home/index">Home</a>
                    </li>
                    <li>
                        <a href="<?= URL ?>home/price">Prijzen</a>
                    </li>
                    <?php 
                    if (!isset($_SESSION['username']))
                    {
                    ?> 
                    <li>
                        <a href="<?= URL ?>register/register">Registreren</a>
                    </li>
                    <li>
                        <a href="<?= URL ?>login/login">Login</a>
                    </li>
                    <?php
                    }
                    ?>

                        <?php
                        if (isset($_SESSION['is_admin'])){
                            if($_SESSION['is_admin'] == 0){
                        ?>
                        <li>
                        <a href="<?= URL ?>agenda/freetime">Beschikbare tijden</a>
                        </li>
                        <li>
                        <a href="<?= URL ?>agenda/reservation">Mijn reseveringen</a>
                        </li>
                        <?php
                            }
                        }
                        ?>

                        <?php
                        if (isset($_SESSION['is_admin'])){
                            if($_SESSION['is_admin'] == 1){
                        ?>
                        <li>
                        <a href="<?= URL ?>agenda/index">Agenda</a>
                        </li>
                        <?php
                            }
                        }
                        ?>

                    <?php
                    if (isset($_SESSION['username'])){
                        ?>
                        <li>
                        <a href="<?= URL ?>login/logout">Log out</a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>