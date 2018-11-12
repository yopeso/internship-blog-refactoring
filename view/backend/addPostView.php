<?php $title = 'Admin interface';?>

<?php ob_start(); ?>
<header class="masthead bg-primary text-white text-center">
      <div class="container">
        <h1>Admin interface</h1>
        <p><a href="admin.php">admin interface</a></p>
        </div>
</header>

 <section id="contact">
      <div class="container">
        <h5 class="text-center text-uppercase text-secondary mb-0">Ajouter un article</h5>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">

                <form action="admin.php?action=addPost" method="post">
                    
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Titre</label>
                                <input class="form-control" type="text" id="titre" name="title" placeholder="Titre de l'article" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Contenu de l'article</label>
                                <textarea class="form-control" id="message" name="content" rows="10" placeholder="Contenu de l'article" required="required"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Aperçu de l'article</label>
                                <textarea class="form-control" id="message" name="chapo" rows="5" placeholder="Aperçu de l'article(Chapo)" required="required"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div id="success"></div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Envoyer</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>