<?php
/**
 * Created by PhpStorm.
 * User: ghdj9
 * Date: 22/05/2017
 * Time: 15:41
 */
?>

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row ui-15">
                    <div class="col-md-6 col-sm-6 ui-padd">
                        <!-- Ui Form -->
                        <div class="ui-form">
                            <!-- Heading -->
                            <h2>Créer Compte</h2>
                            <!-- Form -->
                            <form>
                                <!-- UI Input -->
                                <div class="ui-input">
                                    <!-- Input Box -->
                                    <input type="text" name="pseudo" placeholder="Pseudo" class="form-control">
                                    <label class="ui-icon"><i class="fa fa-user"></i></label>
                                </div>
                                <div class="ui-input">
                                    <input type="email" name="email" placeholder="Email (optionnel)" class="form-control">
                                    <label class="ui-icon"><i class="fa fa-envelope-o"></i></label>
                                </div>
                                <div class="ui-input">
                                    <input type="Password" name="pass" placeholder="Enter your Password" class="form-control">
                                    <label class="ui-icon"><i class="fa fa-lock"></i></label>
                                </div>
                                <div class="text-center">
                                    <a href="#" id="cnx-btn"> Vous avez déjà un compte? Se Connecter. </a>
                                </div>
                                <input type="submit" name="submit" value="S'inscrire" class="btn btn-red btn-lg btn-block">
                            </form>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 ui-padd">
                        <!-- UI Hero -->
                        <div class="ui-social">
                            <!-- Registre -->
                            <h2>Se connecter en utilisant les réseaux sociaux</h2>
                            <p>Cette connexion est sécurisé, cette méthode vous simplifie la connexion en utilisant votre identifiant du réseau social sélectionné.</p>
                            <!-- Social media -->
                            <ul class="list-unstyled">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> &nbsp; Se connecter avec Facebook</a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> &nbsp; Se connecter avec Twitter</a></li>
                                <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i> &nbsp; Se connecter avec Google plus</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>


