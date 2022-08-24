
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
                                        Mon-Compte
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                        <li><a href="<?= site_url('Fournisseur/Login/Authentification');?>"><i class="fa fa-users"></i>Compte-Fournisseur</a></li>
                                        <li><a href="<?= site_url('Client/Login/Authentification');?>"><i class="fa fa-user"></i>Compte-Client</a></li>
                        
                                    </ul>
                                </div>
                            </li>
                            <li class="top-header-list">
                                <a href="#">
                                    <span class="icon"><i class="fa fa-credit-card"></i></span>
                                    
                                </a>
                            </li>
                            <li class="top-header-list"><a href="<?= site_url();?>#faq.html">
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
                        <a href="<?= base_url();?>">
                            <img src="<?= base_url();?>images/logo.jpg" alt="Your Shop Logo" class="img img-responsive">
                        </a>
                    </div>

                    <div class="header-search pull-left">
                        <?php echo form_open(site_url("Internaute/index"));?>
                            <input type="search" name="search" placeholder="Search for a Product..." >
                            <span class="text-danger"><?= form_error('search');?></span>
                            <button type="submit" class="btn btn-default" aria-label="Left Align">
                                <i class="fa fa-search" aria-hidden="true"> </i>
                            </button>
                        <?= form_close();?>
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
                            <h4 class="modal-title">Cart Products</h4>
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
                                        <td><img src="<?= base_url();?>images/b.png" class="img img-responsive img-thumbnail" alt=""></td>
                                        <td>3</td>
                                        <td>200$</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Samsung Galaxy 7</td>
                                        <td><img src="<?= base_url();?>images/product-slide/product3.png" class="img img-responsive img-thumbnail" alt=""></td>
                                        <td>1</td>
                                        <td>500$</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" rowspan="5">
                                            Total Price <span class="bold text-primary" style="margin-left: 73%">800$</span>
                                        </td>
                                    </tr>
                                    <div class="clearfix"></div>
                                </tbody>
                            </table>
                            <p class="text-right text-danger">There are <span style="font-weight: bold">2</span> more products in the cart. Click Checkout now to buy the items..</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel
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
          <div class="wsmobileheader clearfix"> <a href="#" id="wsnavtoggle" class="animated-arrow"><span></span></a> <a class="smallogo"><img src="images/logo.png" alt=""></a></div>


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
                                                foreach($produit as $p)
                                                {
                                            ?>
                                            <ul class="wstliststy04">
                                                <li><img src="<?= base_url("images/Produits/".$p->Image_article);?>" alt=" "></li>
                                                <li class="wstheading"><a href="#"><?= $p->Nom_article;?></a></li>
                                            </ul>
                                            <?php 
                                                }
                                            ?>
                                        </div>
                                    </li>
                                    

                                    <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-home-down"></i></span><a href="#"><i class="fa fa-home"></i> Détail Sur les Produits &amp;</a>
                                    <div class="wstitemright clearfix" style="height: auto;">
                                    <?php 
                                            foreach($produit as $p)
                                            {
                                        ?>
                                        <ul class="wstliststy02">
                                        <li><img src="<?= base_url("images/Produits/".$p->Image_article);?>" alt=" "></li>
                                        <li class="wstheading"><?= $p->Nom_article;?></li>
                                        <li><a href="#"><?= $p->Description_article;?> <span class="wstmenutag greentag">New</span></a></li>
                                        
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
                    
                    
                    <li ><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Nos Fournissers</span> <span>Brand</span></a>
                        <div  class="wsshoptabing wtsbrandmenu clearfix">
                            <div   class="wsshoptabingwp clearfix">
                                <ul class="wstabitem02 clearfix">
                                    <?php 
                                        // ceci consiste A afficher tous nos fournisseur foreach($fournisseur as $f)
                                        // {
                                    ?>
                                        <!-- <li class="wsshoplink-active"><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-home brandcolor01" aria-hidden="true"></i><?= $f->Nom_fournisseur; ?></a> -->
                                                <div  class="wsshoptab-active wstbrandbottom clearfix">
                                                <ul class="wstliststy02" >
                                                    <li class="wstheading">Produit <?= $f->Nom_fournisseur;?> </li>
                                                    <?php 
                                                        $i=1;
                                                        foreach($produitf as $pf)
                                                        if($pf->Fournisseur_idFournisseur == $f->idFournisseur)
                                                        {{
                                                    ?>
                                                    <li><a href="#"><?= $pf->Nom_produit;?> <?= $i;?> </a> <span class="wstmenutag redtag">Popular</span></li>
                                                    <?php 
                                                        $i++;
                                                        }}
                                                    ?>
                                                </ul>
                                            
                                            </div>
                                        <!-- </li> -->
                                    <?php 
                                        // }
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
                        <li><a href="<?= site_url('Fournisseur/Login/Authentification');?>"><i class="fa fa-users"></i>Compte-Fournisseur</a></li>
                        <li><a href="<?= site_url('Client/Login/Authentification');?>"><i class="fa fa-user"></i>Compte-Client</a></li>
                        
                        <!-- <li><a href="<?= site_url('Client/Login/Authentification');?>"><i class="fa fa-sign-out"></i>Se Connecté</a></li> -->
                    </ul>
                    </li>
        </ul>
</nav>
</div>
<!--Menu HTML Code--> 

</div>
</div>

</div>  <!-- End Navigation header -->

</div>
<!-- Header part  -->

<div class="content-area">

    <div class="login-page">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">S'Authentifier</h2>
                    <?php echo form_open(site_url('Client/Login/Authentification')) ?>
                        
                        
                        <input type="hidden"  value="<?= @$nom_fournisseur;?>" name="fournisseur" id="">
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 form-control-label">Email:</label>
                            <div class="col-sm-8">
                                <input type="text" name="email" class="form-control" id="username" placeholder="Email-Client" />
                                <span class="text-danger"><?= form_error('email');?></span>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 form-control-label">Mot de passe:</label>
                            <div class="col-sm-8">
                                <input type="password" name="motdepasse" class="form-control" id="password" placeholder="Mot de passe-Client" />
                                <span class="text-danger"><?= form_error('motdepasse');?></span>
                            </div>
                        </div>

                        <div class="form-group row col-sm-offset-4" >

                            <span class="text-danger"><?= $this->session->flashdata('error');?></span><br />
                        </div>



                        <div class="form-group row">
                            <div class="col-sm-offset-2 col-sm-8">
                                <button type="submit" class="btn btn-success btn-lg btn-block" id="submitForm">Se Connecté</button>
                                
                            </div>
                        </div>

                        <div class="forget">
                            <p class="pull-left"><a href="#">Forgot Password</a></p>
                            <p class="pull-right">Membre.. 
                                <a href="<?= site_url('Client/Compte/CreerCompte');?>">Créer un Nouveau Compte</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                        
                    <?= form_close();?>

                </div>
            </div> <!--End Row-->

        </div>
    </div> <!--End Registration page div-->

</div> <!-- End content Area class -->
<?= $footer ?>