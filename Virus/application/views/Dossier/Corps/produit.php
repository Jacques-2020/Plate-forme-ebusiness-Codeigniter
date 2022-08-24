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
    <meta name="author" content="Maniruzzaman Akash">

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
                                </a></li>
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
                        <?php echo form_open(site_url("Produit/Produit/Produits")); ?>
                        <input type="search" name="Search" placeholder="Search for a Product...">
                        <span class="text-danger"><?= form_error('search'); ?></span>
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
                            <i class="fa fa-search" aria-hidden="true"> </i>
                        </button>
                        <?= form_close(); ?>
                    </div>

                    <!-- <div class="header-cart">
                        <a href="cart.html" class="cart-link" data-toggle="modal" data-target="#cart-item"><i class="fa fa-cart-arrow-down"></i></a>
                        <span class="number-of-cart">0</span>
                    </div> -->

                    <!-- Cart Modal -->
                    <div id="cart-item" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;
                                    </button>
                                    <h4 class="modal-title">Cart Produits</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Item Name</th>
                                                <th>Item Image</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Digital Camera</td>
                                                <td><img src="<?= base_url(); ?>images/product-slide/product2.png" class="img img-responsive img-thumbnail" alt=""></td>
                                                <td>3</td>
                                                <td>200$</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Samsung Galaxy 7</td>
                                                <td><img src="<?= base_url(); ?>images/product-slide/product3.png" class="img img-responsive img-thumbnail" alt=""></td>
                                                <td>1</td>
                                                <td>500$</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" rowspan="5">
                                                    Total Prix <span class="bold text-primary" style="margin-left: 73%">800$</span>
                                                </td>
                                            </tr>
                                            <div class="clearfix"></div>
                                        </tbody>
                                    </table>
                                    <p class="text-right text-danger">Il y a <span style="font-weight: bold">2</span> Plus de produit . Click ici maintenant..</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Supprimer
                                    </button>
                                    <a href="cart.html" class="btn btn-yellow">Check Out</a>
                                </div>
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

                                                    <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-home-down"></i></span><a href="#"><i class="fa fa-home"></i> Détail Sur les Produits &amp;</a>
                                                        <div class="wstitemright clearfix" style="height: auto;">
                                                            <?php
                                                            foreach ($produit as $p) {
                                                            ?>
                                                                <ul class="wstliststy02">
                                                                    <li><img src="<?= base_url("images/Produits/" . $p->Image_article); ?>" alt=" "></li>
                                                                    <li class="wstheading"><?= $p->Nom_article; ?></li>
                                                                    <li><a href="#"><?= $p->Description_article; ?> <span class="wstmenutag greentag">New</span></a></li>

                                                                </ul>
                                                            <?php
                                                            }
                                                            ?>

                                                            <div class="wstadsize01 clearfix"><a href="#"><img src="./Megamenu_files/ad-size01.jpg" alt=""></a></div>
                                                            <div class="wstadsize02 clearfix"><a href="#"><img src="./Megamenu_files/ad-size02.jpg" alt=""></a></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Nos Fournissers</span> <span>Brand</span></a>
                                        <div class="wsshoptabing wtsbrandmenu clearfix">
                                            <div class="wsshoptabingwp clearfix">
                                                <ul class="wstabitem02 clearfix">
                                                    <?php
                                                    foreach ($fournisseur as $f) {
                                                    ?>
                                                        <li class="wsshoplink-active"><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-home brandcolor01" aria-hidden="true"></i><?= $f->Nom_fournisseur; ?></a>
                                                            <div class="wsshoptab-active wstbrandbottom clearfix">
                                                                <ul class="wstliststy02">

                                                                    <li class="wstheading">Produit <?= $f->Nom_fournisseur; ?> </li>

                                                                    <?php
                                                                    $i = 01;
                                                                    foreach ($produitf as $pf)
                                                                        if ($pf->Fournisseur_idFournisseur == $f->idFournisseur) { {
                                                                    ?>
                                                                            <li class="wstheading"><a href="#"><?= $pf->Nom_produit; ?> <?= $i; ?> </a> <span class="wstmenutag redtag">Populaire</span></li>

                                                                    <?php
                                                                                $i++;
                                                                            }
                                                                        }
                                                                    ?>
                                                                    <li class="wstheading">Adresse : <?= $f->Adresse_fournisseur; ?></li>
                                                                    <li class="wstheading">Contacter Nous Par : <?= $f->Tel_fournisseur; ?></li>
                                                                    <li class="wstheading"><span class="wstmenutag bluetag">Email: <?= $f->Email_fournisseur; ?></span> </li>
                                                                </ul>

                                                            </div>
                                                        </li>
                                                    <?php
                                                    }
                                                    ?>

                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Menu Produit</span> <span>Par Magassin</span></a>
                                        <div class="megamenu clearfix">


                                            <ul class="wstliststy02">
                                                <li class="wstheading"> Produit MTBUY </li>
                                                <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>

                                            </ul>


                                        </div>
                                    </li>


                                    <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Autres</span> <span>Menu</span></a>
                                        <div class="megamenu clearfix halfmenu">


                                            <ul class="wstliststy06">
                                                <li class="wstheading"> Produit MTBUY </li>
                                                <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>

                                            </ul>

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












        <div class="content-area prodcuts">

            <div class="row">
                <div class="container">
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <div class="sidebar-products-main">

                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <a data-toggle="collapse" class="pointer" aria-expanded="true" data-target="#brandCollapse" aria-controls="#brandCollapse">
                                        <span class="pull-left title-sidebar">Filter By Brand</span>

                                        <span class="pull-right"><i class="fa fa-plus"></i></span>
                                        <span class="pull-right"><i class="fa fa-minus"></i></span>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                                <!--End Sidebar title div-->

                                <div id="brandCollapse" class="collapse in">
                                    <form action="products_submit.php" method="get" accept-charset="utf-8">
                                        <input type="search" name="brand_name" class="form-control" value="" placeholder="Type Brand Name" />

                                        <input type="checkbox" id="c1" name="prodcut_id[]" />
                                        <?php
                                        foreach ($produit as $pd) {
                                        ?>
                                            <label for="c1"><span></span><?= $pd->Nom_article; ?></label><br />
                                        <?php
                                        }
                                        ?>
                                        <input type="submit" name="submit_brand_search" class="btn btn-red pull-right btn-sm" value="Search">
                                        <div class="clearfix"></div>
                                    </form>
                                </div>

                            </div>
                            <!--End Single Sidebar-->

                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <a data-toggle="collapse" class="pointer" aria-expanded="true" data-target="#brandPriceCollapse" aria-controls="#brandPriceCollapse">
                                        <span class="pull-left title-sidebar">Filter By Price</span>

                                        <span class="pull-right"><i class="fa fa-plus"></i></span>
                                        <span class="pull-right"><i class="fa fa-minus"></i></span>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                                <!--End Sidebar title div-->

                                <div id="brandPriceCollapse" class="collapse in">

                                    <form action="products_submit.php" method="get" accept-charset="utf-8">

                                        <input type="checkbox" id="price1" name="prodcut_price[]" />
                                        <label for="price1"><span></span>0-100TK</label><br />


                                        <input type="submit" name="submit_brand_search" class="btn btn-red pull-right btn-sm" value="Search">
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                            <!--End Single Sidebar-->

                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <a data-toggle="collapse" class="pointer" aria-expanded="true" data-target="#productColorCollapse" aria-controls="#productColorCollapse">
                                        <span class="pull-left title-sidebar">Filter By Color</span>

                                        <span class="pull-right"><i class="fa fa-plus"></i></span>
                                        <span class="pull-right"><i class="fa fa-minus"></i></span>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                                <!--End Sidebar title div-->

                                <div id="productColorCollapse" class="collapse in">

                                    <form action="products_submit.php" method="get" accept-charset="utf-8">



                                        <input type="checkbox" id="color2" name="prodcut_color[]" />
                                        <label for="color2" style="color:#00f"><span></span>Blue</label><br />

                                        <input type="name" id="color7" class="form-control" placeholder="Color name" name="prodcut_color[]" /><br />


                                        <input type="submit" name="submit_brand_search" class="btn btn-red pull-right btn-sm" value="Search">
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                            <!--End Single Sidebar-->

                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <a data-toggle="collapse" class="pointer" aria-expanded="true" data-target="#productReviewCollapse" aria-controls="#productReviewCollapse">
                                        <span class="pull-left title-sidebar">Filter By Review</span>

                                        <span class="pull-right"><i class="fa fa-plus"></i></span>
                                        <span class="pull-right"><i class="fa fa-minus"></i></span>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                                <!--End Sidebar title div-->

                                <div id="productReviewCollapse" class="collapse in">

                                    <form action="products_submit.php" method="get" accept-charset="utf-8">

                                        <input type="checkbox" id="review1" name="prodcut_review[]" />
                                        <label for="review1" style="color:#008000"><span></span>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        </label><br />
                                        <input type="checkbox" id="review2" name="prodcut_review[]" />
                                        <label for="review2" style="color:#6f6"><span></span>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        </label><br />
                                        <input type="checkbox" id="review3" name="prodcut_review[]" />
                                        <label for="review3" style="color:#9c9"><span></span>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        </label><br />
                                        <input type="checkbox" id="review4" name="prodcut_review[]" />
                                        <label for="review4" style="color:#f99"><span></span>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        </label><br />
                                        <input type="checkbox" id="review5" name="prodcut_review[]" />
                                        <label for="review5" style="color:#fc9"><span></span>
                                            <i class="fa fa-star"></i>
                                        </label><br />


                                        <input type="submit" name="submit_brand_search" class="btn btn-red pull-right btn-sm" value="Search">
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                            <!--End Single Sidebar-->



                        </div>
                    </div>
                    <div class="col-sm-10 col-md-10 col-lg-10">
                        <ol class="breadcrumb breadcrumb1">
                            <li><a href="<?= site_url('Internaute/index'); ?>">Accueil</a></li>
                            <!-- $this->session->nomfournisseur; ?> -->
                            <li class="active">Products -<strong class="text-danger"></strong></li>
                        </ol>
                        <div class="product-top">
                         <!-- $this->session->nomfournisseur; ?> -->
                            <h4>TOUS LES PRODUITS DE <?= $this->session->Nomfournisseur; ?></h4>
                            
                            <ul>
                                <li class="dropdown head-dpdn">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sort By<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Most Popular</a></li>
                                        <li><a href="#">New In</a></li>
                                        <li><a href="#">Lowest price</a></li>
                                        <li><a href="#">Highest price</a></li>
                                        <li><a href="#">Best Rating</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="all-products">
                            <div class="">
                                <h2 class="title-div wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Notre Dernier Produits</h2>
                                <div class="products">
                                    <div class="row">
                                        <?php
                                        foreach ($produit as $pd)
                                        // if($f->Nom_fournisseur == $pd->Nom_F_Article)

                                        {
                                        ?>
                                            <div class="col-md-3">
                                                <div class="product-item">
                                                    <div class="product-borde-inner">
                                                        <a href="product_single.html">
                                                            <img src="<?= base_url('images/Produits/' . $pd->Image_article); ?>" class="img img-responsive" />
                                                        </a>

                                                        <div class="product-price">
                                                            <a href="product_single.html"><?= $pd->Nom_article; ?></a><br />
                                                            <span class="prev-price">
                                                                <del>100$</del>
                                                            </span>
                                                            <span class="current-price">
                                                                <?= $pd->Prix_article; ?>
                                                            </span>
                                                        </div>

                                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                                            <input type="hidden" name="cmd" value="_s-xclick">
                                                            <input type="hidden" name="hosted_button_id" value="ZR8TW6884W5ZS">
                                                            <input type="image" src="https://www.paypalobjects.com/fr_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                                            <img alt="" border="0" src="https://www.paypalobjects.com/fr_XC/i/scr/pixel.gif" width="1" height="1">
                                                        </form>

                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div><!-- End Latest products[single] -->
                                        <?php
                                        }
                                        ?>
                                        <div class="clear"></div>


                                    </div> <!-- End Latest products row-->
                                    <a class="btn btn-blue btn-lg pull-right btn-more wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                                        <span>Voir Plus des Produits.. </span>
                                    </a>
                                    <div class="clear"></div>
                                </div> <!-- End products div-->
                            </div> <!-- End container latest products-->
                        </div> <!-- End Latest products -->
                    </div>
                </div>

            </div>

            <div class="featured-products">
                <div class="container">
                    <h2 class="title-div wow slideInLeft pull-left" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Nos Meilleurs produits</h2>
                    <div class="clearfix"></div>
                    <div class="featured-navigation pull-right">
                        <span class="">
                            <a class="owl-prev owl-navigaiton"><i class="fa fa-angle-double-right"></i></a>
                        </span>
                        <span class="stop">
                            <a class="owl-next owl-navigaiton">||</a>
                        </span>
                        <span class="">
                            <a class="owl-next owl-navigaiton"><i class="fa fa-angle-double-left"></i></a>
                        </span>

                    </div>
                    <div class="clear"></div>
                    <div class="featured-items">
                        <!-- Set up your HTML -->
                        <div class="owl-carousel">

                            <div class="item featured1">
                                <div class="item-full animated featured1-inner  width0">
                                    <a href="products.html">
                                        <h4>Digital Camera</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    <h5>200$</h5>
                                    <a href="products.html" class="btn btn-cart">
                                        Add To Cart
                                    </a>

                                </div>
                                <a href="products.html">
                                    <img src="images/product-slide/product3.png" class="img img-responsive" alt="Product1">
                                </a>
                            </div> <!-- Single Featured Item -->

                            <div class="item featured2">
                                <div class="item-full animated featured2-inner  width0">
                                    <a href="products.html">
                                        <h4>Digital Camera</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    <h5>200$</h5>
                                    <a href="products.html" class="btn btn-cart">
                                        Add To Cart
                                    </a>

                                </div>
                                <a href="products.html">
                                    <img src="images/product-slide/product1.png" class="img img-responsive" alt="Product1">
                                </a>
                            </div> <!-- Single Featured Item -->

                            <div class="item featured3">
                                <div class="item-full animated featured3-inner  width0">
                                    <a href="products.html">
                                        <h4>Digital Camera</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    <h5>200$</h5>
                                    <a href="products.html" class="btn btn-cart">
                                        Add To Cart
                                    </a>

                                </div>
                                <a href="products.html">
                                    <img src="images/product-slide/product2.png" class="img img-responsive" alt="Product1">
                                </a>
                            </div> <!-- Single Featured Item -->

                            <div class="item featured4">
                                <div class="item-full animated featured4-inner  width0">
                                    <a href="products.html">
                                        <h4>Digital Camera</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    <h5>200$</h5>
                                    <a href="products.html" class="btn btn-cart">
                                        Add To Cart
                                    </a>

                                </div>
                                <a href="products.html">
                                    <img src="images/product-slide/product3.png" class="img img-responsive" alt="Product1">
                                </a>
                            </div> <!-- Single Featured Item -->

                            <div class="item featured5">
                                <div class="item-full animated featured5-inner  width0">
                                    <a href="products.html">
                                        <h4>Digital Camera</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    <h5>200$</h5>
                                    <a href="products.html" class="btn btn-cart">
                                        Add To Cart
                                    </a>

                                </div>
                                <a href="products.html">
                                    <img src="images/product-slide/product4.png" class="img img-responsive" alt="Product1">
                                </a>
                            </div> <!-- Single Featured Item -->




                        </div>
                    </div>
                </div>
            </div>




            <div class="services-area">
                <div class="services">
                    <div class="container">
                        <div class="ftr-toprow">
                            <div class="col-md-4 ftr-top-grids wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                                <div class="ftr-top-left pull-left">
                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                </div>
                                <div class="ftr-top-right">
                                    <h4>FREE DELIVERY</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="col-md-4 ftr-top-grids wow slideInUp" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                                <div class="ftr-top-left pull-left">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                                <div class="ftr-top-right">
                                    <h4>CUSTOMER CARE</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="col-md-4 ftr-top-grids wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                                <div class="ftr-top-left pull-left">
                                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                </div>
                                <div class="ftr-top-right">
                                    <h4>GOOD QUALITY</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Service -->

        </div> <!-- End content Area class -->

        <?= $footer; ?>