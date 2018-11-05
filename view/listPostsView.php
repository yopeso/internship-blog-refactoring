<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<header class="masthead bg-primary text-white text-center">
      <div class="container">
        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>
    </div>
</header>


<?php
while ($data = $posts->fetch())
{
?>
    <section id="contact">
      <div class="container">
        <h3 class="text-center text-uppercase text-secondary mb-0">
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="index.php?action=post&id=<?= $data['id'] ?>">Commentaires</a></em>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>