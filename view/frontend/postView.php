<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<header class="masthead bg-primary text-white text-center">
      <div class="container">
        <h1>Mon super blog !</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>
        </div>
</header>

    <section class="portfolio" id="portfolio">
        <div class="container">
            <h3 class="text-center text-uppercase text-secondary mb-0">
                <?= htmlspecialchars($post['title']) ?>
                <em>le <?= $post['creation_date_fr'] ?></em>
            </h3>

            <p>
            <?= nl2br(htmlspecialchars($post['content'])) ?>
            </p>
        </div>

<h3 class="text-center text-uppercase text-secondary mb-0">Commentaires</h3>

<?php
while ($comment = $comments->fetch())
{
?>  
    <div class="container">
        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
    </div>
<?php
}
$comments->closeCursor();
?>
</section>

 <section id="contact">
      <div class="container">
        <h5 class="text-center text-uppercase text-secondary mb-0">Ajouter un commentaire</h5>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">

            <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                    

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label for="author">Auteur</label>
                                <input class="form-control" type="text" id="author" name="author" placeholder="Auteur" required="required"/>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="control-group">
                             <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Commentaire</label>
                                <textarea class="form-control" id="message" name="comment" rows="5" placeholder="Commentaire" required="required"></textarea>
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