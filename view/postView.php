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

<h4 class="text-center text-uppercase text-secondary mb-0">Commentaires</h4>

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
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>