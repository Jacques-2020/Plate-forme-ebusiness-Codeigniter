<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>MTBUY </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Language" content="en-US" />
    <meta name="description" content="Dynamic responsive Ecommerce free web template" />
    <meta name="keywords" content="Ecommerce template, Ecommerce free responsive template, free template" />
    <meta name="author" content="MBIYA Jacques">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- CSS links -->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>Design/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>Design/css/font-awesome.min.css" />


    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>Design/css/animate.css" />

    <!-- Owl Carousel CSS-->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>Design/css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>Design/css/owl.theme.default.min.css" />



    <!-- Mega navigation bar -->
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>Design/css/webslidemenu.css" />

    <!-- Main css link -->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>Design/css/main.css" />
    <link rel="icon" href="<?= base_url(); ?>images/logo.jpg" />

</head>

<body>
    <div class="wrapper">
        <!-- Header part  -->
        <div class="header" id="top">
            <!-- Start Top Header -->
            <div class="top-header">
                <div class="top-header-left pull-left">
                    <a href="#"></a>
                </div>
                <div class="top-header-right pull-right">
                    <div class="container-fluid">
                        <ul>
                            <li class="top-header-list">
                                <div class="dropdown">
                                    <a href="#" class="link dropdown-toggle pointer" id="menu1" data-toggle="dropdown">
                                        <span class="icon"><i class="fa fa-user"></i></span>
                                        Mon Compte
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                        <li><a href="<?= site_url('Fournisseur/Login/Authentification'); ?>"><i class="fa fa-users"></i>Compte-Fournisseur</a></li>
                                        <li><a href="<?= site_url('Client/Login/Authentification'); ?>"><i class="fa fa-user"></i>Compte-Client</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li class="top-header-list">
                                <a href="#">
                                    <span class="icon"><i class="fa fa-credit-card"></i></span>

                                </a>
                            </li>
                            <li class="top-header-list"><a href="#">
                                    <span class="icon"><i class="fa fa-question-circle"></i></span>
                                    A propos
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!-- End Top Header -->


            <!-- Start Header Main, logo, search bar,cart -->
            <div class="header-bottom">
                <div class="container">
                    <div class="header-logo pull-left">
                        <a href="<?= base_url(); ?>">
                            <img src="<?= base_url(); ?>images/logo.jpg" alt="Your Shop Logo" class="img img-responsive">
                        </a>
                    </div>

                    <div class="header-search pull-left">
                        <form action="#" method="post">
                            <input type="search" name="Search" placeholder="Search for a Product..." required="">
                            <button type="submit" class="btn btn-default" aria-label="Left Align">
                                <i class="fa fa-search" aria-hidden="true"> </i>
                            </button>
                        </form>
                    </div>


                </div>
            </div> <!-- End Model -->

        </div>
    </div>
    <!-- End Header Main, logo, search bar,cart -->



    <div class="header-navigation">
        <div class="wsmenucontainer clearfix">
            <div class="overlapblackbg"></div>
            <div class="wsmobileheader clearfix"> <a href="#" id="wsnavtoggle" class="animated-arrow"><span></span></a> <a class="smallogo"><img src="<?= base_url(); ?>Design/images/logo.png" alt=""></a></div>


            <div class="headerfull">
                <!--Main Menu HTML Code-->
                <div class="wsmain">
                    <!-- <div class="smllogo"><a href="#"><img src="images/logo.jpg" alt=""></a></div> -->
                    <nav class="wsmenu clearfix">
                        <ul class="mobile-sub wsmenu-list">
                            <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Produit Par</span> <span>Departement</span></a>
                                <div class="wsshoptabing wtsdepartmentmenu clearfix">
                                    <div class="wsshopwp clearfix" style="height: 421px;">
                                        <ul class="wstabitem clearfix">

                                            <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-car"></i>Les Meubles</a>
                                                <div class="wstitemright clearfix wstpngsml" style="height: auto;">
                                                    <?php
                                                    foreach ($produit as $p) {
                                                    ?>
                                                        <ul class="wstliststy04">
                                                            <li><img src="<?= base_url("images/Produits/" . $p->Image_article); ?>" alt=" "></li>
                                                            <li class="wstheading"><a href="#"><?= $p->Nom_article; ?></a></li>
                                                        </ul>
                                                    <?php } ?>
                                                </div>
                                            </li>
                                            <li class="wsshoplink-active"><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-heartbeat"></i>Health Care Products</a>
                                                <div class="wstitemright clearfix wstpngsml" style="height: auto;">
                                                    <div class="wstmegamenucolr03 clearfix"> <img src="<?= base_url(); ?>images/product-slide/product1.png" alt=""> </div>
                                                    <div class="wstmegamenucoll04 clearfix">
                                                        <ul class="wstliststy05 clearfix">
                                                            <li><img src="<?= base_url(); ?>images/product-slide/product2.png" alt=" "></li>
                                                            <li class="wstheading">Health Care</li>
                                                            <li><a href="#">Diabetes </a></li>
                                                            <li><a href="#">Incontinence </a></li>
                                                            <li><a href="#">Cough &amp; Cold</a></li>
                                                            <li><a href="#">Baby &amp; Child Care</a> <span class="wstmenutag bluetag">Popular</span></li>
                                                            <li><a href="#">Women's Health</a></li>
                                                            <li><a href="#">First Aid</a></li>
                                                            <li><a href="#">Smoking Cessation</a></li>
                                                            <li><a href="#">Sleep &amp; Snoring</a></li>
                                                        </ul>

                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Nos Fournissers</span> <span>Brand</span></a>
                                <div class="wsshoptabing wtsbrandmenu clearfix">
                                    <div class="wsshoptabingwp clearfix">
                                        <ul class="wstabitem02 clearfix">

                            </li>
                            <!-- <li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-quor brandcolor05" aria-hidden="true"></i>U.A.C</a>
                                <div class="wstbrandbottom clearfix">
                                    <ul class="wstliststy02">
                                        <li class="wstheading">Produit MTBUY </li>

                                        <li><a href="#">List Products 02</a> <span class="wstmenutag redtag">Popular</span></li>

                                    </ul>

                                </div>
                            </li> -->

                        </ul>
                </div>
            </div>
            </li>

            <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Menu Produit</span> <span>Par Magassin</span></a>
                <div class="megamenu clearfix">


                    <!-- <ul class="wstliststy02">
                        <li class="wstheading"> Produit MTBUY</li>
                        <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>

                    </ul> -->

                </div>
            </li>


            <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Autres</span> <span>Menu</span></a>
                <div class="megamenu clearfix halfmenu">

                    <!-- <ul class="wstliststy06">
                        <li class="wstheading"> Produit MTBUY </li>
                        <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>

                    </ul> -->

                </div>
            </li>


            <li class="wssearchbar clearfix">
                <form class="topmenusearch">
                    <input placeholder="Search Product By Name, Category...">
                    <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
                </form>
            </li>

            <!-- <li class="wscarticon clearfix"> <a href="#"><i class="fa fa-shopping-basket"></i> <em class="roundpoint">8</em><span class="mobiletext">Shopping Cart</span></a> </li> -->


            <li class="wsshopmyaccount clearfix"><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="wtxaccountlink"><i class="fa fa-align-justify"></i>Mon Compte <i class="fa  fa-angle-down"></i></a>
                <ul class="wsmenu-submenu">
                    <li><a href="<?= site_url('Fournisseur/Login/Authentification'); ?>"><i class="fa fa-users"></i>Compte-Fournisseur</a></li>
                    <li><a href="<?= site_url('Client/Login/Authentification'); ?>"><i class="fa fa-user"></i>Compte-Client</a></li>

                    <!-- <li><a href="<?= site_url('Client/Login/Authentification'); ?>"><i class="fa fa-sign-out"></i>Se Connecté</a></li> -->
                </ul>
            </li>
            </ul>
            </nav>
        </div>
        <!--Menu HTML Code-->

    </div>
    </div>

    </div> <!-- End Navigation header -->

    </div>
    <!-- Header part  -->