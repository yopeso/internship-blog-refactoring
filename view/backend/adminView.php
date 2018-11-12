<?php $title = 'Admin interface';?>

<?php ob_start(); ?>
<header class="masthead bg-primary text-white text-center">
      <div class="container">
        <h1>Admin interface</h1>
        <p><a href="index.php">Accueil</a></p>
        </div>
</header>
<section class="portfolio" id="portfolio">
  <div class="container">
    <p>
      <a href="?action=post" class="btn btn-success">Ajouter</a>
    </p>

    <table class="table">
      <thead>
        <tr>
          <td>ID</td>
          <td>Titre</td>
          <td>Dernière modification</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($dataPosts = $posts->fetch())
        {
        ?>
          <tr>
            <td><?= htmlspecialchars($dataPosts['id']) ?></td>
            <td><?= htmlspecialchars($dataPosts['title']) ?></td>
            <td><?= htmlspecialchars($dataPosts['creation_date_fr']) ?></td>
            <td>
              <a class="btn btn-primary" href="?action=previewPost&id=<?= htmlspecialchars($dataPosts['id']) ?>">Modifier</a>

              <form action="?action=delete" method="post">
                <input type="hidden" name="id" value="<?= htmlspecialchars($dataPosts['id']) ?>">
                <button type="submit" class="btn btn-danger" href="">Supprimer</button>
              </form>

            </td>
          </tr> 
        <?php
        }
        $posts->closeCursor();
        ?>
      </tbody>
    </table>
  </div>

  <div class="container">
  <table class="table">
      <thead>
        <tr>
          <td>ID</td>
          <td>Auteur</td>
          <td>Commantaire</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($dataComments = $comments->fetch())
        {
        ?>
         
          <tr>
            <td><?= htmlspecialchars($dataComments['id']) ?></td>
            <td><?= htmlspecialchars($dataComments['author']) ?></td>
            <td><?= htmlspecialchars($dataComments['comment']) ?></td>
            <td>

              <form action="?action=commentValid" method="post">
                <input type="hidden" name="id" value="<?= htmlspecialchars($dataComments['id']) ?>">
                <button type="submit" class="btn btn-success" href="">Valider</button>
              </form>

            </td>
          </tr> 
        <?php
        }
        $comments->closeCursor();
        ?>
      </tbody>
    </table>
  </div>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>