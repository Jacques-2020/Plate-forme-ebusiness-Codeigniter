<head>
    <?= $header ?>
</head>

<div class="content-area">

    <div class="login-page">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                
                    <h2 class="text-center">S'Authentifier</h2>
                   
                    <?php echo form_open(site_url('Client/Login/Authentification')) ?>
                        
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