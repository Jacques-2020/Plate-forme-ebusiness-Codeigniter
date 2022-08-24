

<div class="content-area">

<div class="registration-page">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center">Créer-Compte-Fournisseur <br><br><span class='text-success'><?= $this->session->flashdata('valide');?></span></h2>
                <?php echo form_open_multipart(site_url('Fournisseur/Compte/CreerCompte'));?>

                    <div class="form-group row">
                        <label for="Nom" class="col-sm-2 form-control-label">Nom:</label>
                        <div class="col-sm-8">
                            <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom-Fournisseur..." minlength="3" />
                            <span class="text-danger"><?= form_error('nom');?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Prenom" class="col-sm-2 form-control-label">Email :</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="email" minlength="3" placeholder=" Email-Fournisseur..." />
                            <span class="text-danger"><?= form_error('email');?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 form-control-label">Num-Bancaire :</label>
                        <div class="col-sm-8">
                            <input type="text" name="numbancaire" class="form-control email" id="numbancaire" placeholder=" Votre-Numera-Bancaire ..">
                            <span class="text-danger"><?= form_error('numbancaire');?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Adresse" class="col-sm-2 form-control-label">Adresse :</label>
                        <div class="col-sm-8">
                            <input type="text" name="adresse" class="form-control" id="username" placeholder="Adresse...">
                            <span class="text-danger"><?= form_error('adresse');?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 form-control-label">Téléphone :</label>
                        <div class="col-sm-8">
                            <input type="text" name="telephone" class="form-control" id="telephone" minlength="10" placeholder="Téléphone ...">
                            <span class="text-danger"><?= form_error('telephone');?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 form-control-label">Mot de passe:</label>
                        <div class="col-sm-8">
                            <input type="password" name="motdepasse" class="form-control" id="motdepasse" minlength="8" placeholder="Mot de passe...">
                            <span class="text-danger"><?= form_error('motdepasse');?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="confirm_password" class="col-sm-2 form-control-label">Confirm Mot de passe:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="confirm_motdepasse" minlength="8" id="confirm_motdepasse" placeholder="Confirm Mot de passe ...">
                            <span class="text-danger"><?= form_error('confirm_motdepasse');?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" id="submitForm" value=" Valider " />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button class="btn btn-primary btn-lg btn-block" id="submitForm"><a href="<?= site_url('Fournisseur/Login/Authentification');?>">Authentification</a></button>
                            
                        </div>
                    </div>
                <?php echo  form_close();?>
            </div>
        </div> <!--End Row-->

    </div>
</div> <!--End Registration page div-->
    <?= $footer ?>
</div> <!-- End content Area class -->

