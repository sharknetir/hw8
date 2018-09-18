<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HOME WORK SERIES 8</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?=URL.URL_CSS ?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL.URL_CSS ?>/compiled-4.5.9.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?=URL.URL_CSS ?>/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?=URL.URL_CSS ?>/style.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <style type="text/css">
        html,
        body,
        header,
        .carousel {
            height: 60vh;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }
    </style>


</head>

<body>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <?php $name=Session::getSession('login'); $name=explode('@',$name)?>
        <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
            <strong class="blue-text">Hi  <?=$name[0]?></strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link waves-effect" href="<?=URL?>/hw8/site/index">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="<?=URL?>/hw8/site/index" >Product</a>
                </li>

            </ul>

            <!--center-->
            <?php

                if (isset($_POST['add'])){
                $qty=Session::getSession('qty');
                $qty=(int)$_POST['add']+$qty;
                Session::setSession('qty',$qty);
            } ?>
            <form class="form-inline md-form mr-auto mb-4" style="
                      padding-top:  0px;
                      padding-bottom:  0px;
                      margin-top:  0px;
                      margin-bottom: 0px !important;
                      width: 50%;
                      justify-content: center;
                ">

                <input id="search" class="form-control mr-sm-4" type="text" placeholder="Search" aria-label="Search" style="width: 70%;" >
                <div id="result"></div>

                <script>
                    $("#search").on("input",function () {
                       $search=$("#search").val();
                       if ($search.length>0){
                           $.get("../call_ajax.php",{"search":$search},function ($data) {
                               $("#result").html($data);

                           })
                       }
                    });
                </script>
                <button class="btn blue-gradient btn-rounded btn-sm my-0 waves-effect waves-light" type="submit" >Search</button>

            </form>
            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item" style="padding-right: 10px">
                    <a class="nav-link waves-effect" href="<?=URL?>/hw8/site/checkout">
                        <span class="badge red z-depth-1 mr-1"> <?php $num=Session::getSession('qty');echo $num;?> </span>
                        <i class="fa fa-shopping-cart"></i>
                        <span class="clearfix d-none d-sm-inline-block"> Cart </span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">1
                        <i class="fa fa-envelope"></i>
                    </a>
                </li>
                <li class="nav-item avatar dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0" alt="avatar image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5">
                        <a href="../admin/index" class="nav-link waves-effect">
                            <i class="fa fa-lock"></i>   admin
                        </a>
                        <a href="../signup/index" class="nav-link waves-effect">
                            <i class="fa fa-user-plus"></i>   sign-up
                        </a>
                        <a href="../login/index" class="nav-link  waves-effect">
                            <i class="fa fa-sign-in"></i>   Sign-in
                        </a>
                    </div>
                </li>
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->
