<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');
?>
<head>
    <?= $header ?>
</head>

<div class="content-area">

    <div class="registration-page">
        <div class="container">
    
            <div class="row">
                <!-- <div >
                    <?= $message; ?>
                    
                </div> -->
            
                <div class="col-md-8 col-md-offset-2">
                    
                    <h2 class="text-center">Compte-Client <br><br><span class="text-success"><?= $this->session->flashdata('valide');?></span></h2>
                    
                    <?php echo form_open_multipart('Client/Compte/CreerCompte');?>
                        
                        <div class="form-group row">
                            <label for="Nom" class="col-sm-2 form-control-label">Nom:</label>
                            <div class="col-sm-8">
                                <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom..." minlength="3" />
                                <span class="text-danger"><?= form_error('nom');?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Prenom" class="col-sm-2 form-control-label">Prenom :</label>
                            <div class="col-sm-8">
                                <input type="text" name="prenom" class="form-control" id="prenom" minlength="3" placeholder="Prenom..." />
                                <span class="text-danger"><?= form_error('prenom');?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-sm-2 form-control-label">Sexe:</label>
                            <div class="col-sm-8">
                                <select name="selectsexe" class="form-control" id="" >
                                    
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 form-control-label">Email:</label>
                            <div class="col-sm-8">
                                <input type="email" name="email" class="form-control email" id="email" placeholder="test@example.com">
                                <span class="text-danger"><?= form_error('email');?></span>
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
                                <span class="text-danger"><?= form_error('telephone');?> </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-2 form-control-label">Mot de passe:</label>
                            <div class="col-sm-8">
                                <input type="password" name="motdepasse" class="form-control" id="motdepasse" placeholder="Mot de passe...">
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
                                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" id="submitForm">Valider</button>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-offset-2 col-sm-8">
                                <button class="btn btn-primary btn-lg btn-block" id="submitForm"><?php echo anchor('Client/Login/Authentification', 'Login !');?></button>
                                
                            </div>
                        </div>
                    <?php echo  form_close() ?>
                </div>
            </div> <!--End Row-->

        </div>
    </div> <!--End Registration page div-->

</div> <!-- End content Area class -->



    <?= $footer ?>

</div> <!-- End wrapper -->


