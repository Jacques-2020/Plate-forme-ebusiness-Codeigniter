<?php
    defined('BASEPATH')OR exit('No direct script access allowed');

?>
    <div class="main-content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card new-cust-card">
                    <div class="card-header">
                        <h3>Modification de Article</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    
                    <?php 
                        $i=1;
                        foreach($produit as $p)
                        {
                    ?>
                    <div class="card-body" met >
                        
                        <?php echo form_open_multipart(site_url('ControllerAdmin/Produits/Article/Modifier')); ?>
                            <div>
                                <label for="" class="text-danger"><?= $i;?></label>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom-Produit</label>
                                <div class="col-sm-9">
                                    <input type="text" name="modarticle" class="form-control" id="exampleInputUsername2" value="<?= $p->Nom_article;?>" >
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Marque</label>
                                <div class="col-sm-9">
                                    <input type="text" name="modmarque" class="form-control" id="exampleInputUsername2" value="<?= $p->Marque_article;?>" >
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Prix-Produit</label>
                                <div class="col-sm-9">
                                    <input type="text" name="modprix" class="form-control" id="exampleInputUsername2" value="<?= $p->Prix_article;?>" >
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Quantité-Produit</label>
                                <div class="col-sm-9">
                                    <input type="text" name="modquantite" class="form-control" id="exampleInputUsername2" value="<?= $p->Qte_article;?>" >
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Image-article</label>
                                <div class="col-sm-9">
                                    <input type="text" name="modimage" class="form-control" id="exampleInputUsername2" value="<?= $p->Image_article;?>" >
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Description-article</label>
                                <div class="col-sm-9">
                                    
                                    <input type="text" class="form-control" name="modescription" id="" cols="30" rows="10" value="<?= $p->Description_article;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <!-- <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Description-article</label> -->
                                <div class="col-sm-9">
                                    <input type="hidden" name="modid" value="<?= $p->Categorie_idCategorie;?>">
                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom-F-Article</label>
                                <div class="col-sm-9">
                                    <input type="text" name="modnom" class="form-control" id="exampleInputUsername2" value="<?= $p->Nom_F_Article;?>" >
                                    
                                </div>
                            </div>
                            <div>
                                <input type="hidden" name="idart" value="<?= $p->idArticles;?>">
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input">
                                    <span class="custom-control-label">&nbsp;Remember me</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="modifier" class="btn btn-primary mr-2" value="Modifier">
                                <!-- <button type="submit" >Modifier</button> -->
                                <button class="btn btn-light">Cancel</button>
                            </div>
                        <?= form_close();?>
                    </div>
                    <?php 
                        $i++;
                    }
                    ?>
                </div>
        
            </div>
        </div>
    </div>


    <script src="<?= base_url();?>https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= base_url();?>Admin/Design/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="<?= base_url();?>Admin/Design/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/screenfull/dist/screenfull.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/moment/moment.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/d3/dist/d3.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/c3/c3.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/js/tables.js"></script>
        <script src="<?= base_url();?>Admin/Design/js/widgets.js"></script>
        <script src="<?= base_url();?>Admin/Design/js/charts.js"></script>
        <script src="<?= base_url();?>Admin/Design/dist/js/theme.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='<?= base_url();?>https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
