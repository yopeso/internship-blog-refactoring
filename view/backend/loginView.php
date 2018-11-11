<?php $title = 'Login';?>

<?php ob_start(); ?>
<header class="masthead bg-primary text-white text-center">
      <div class="container">
        <h1>Login</h1>
        <p><a href="index.php">Accueil</a></p>
        </div>
</header>


 <section id="contact">
      <div class="container">
        <h5 class="text-center text-uppercase text-secondary mb-0">Admin connexion</h5>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">

            <form action="admin.php?action=login" method="post">
                    

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label for="author">Pseudo</label>
                                <input class="form-control" type="text" id="pseudo" name="pseudo" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Password</label>
                                <input class="form-control" type="password" id="pass" name="pass" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div id="success"></div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Connexion</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>