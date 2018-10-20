<?php
$this->title = "Modification commentaire";
?>
<div class="inner">
    <h2>Liste des commentaires</h2>
    <section class="tiles">
        <?php
        foreach ($comments as $comment)
        {
        ?>
        <article class="style2">
            <h4><?= htmlspecialchars($comment->getId());?>
            <a href="<?= (new Framework\UrlGenerator)->generate('modif_comment', ['id' => $comment->getId()]); ?>">
            <?= htmlspecialchars($comment->getContent());?></a></h4>
            <p>Par : <?= htmlspecialchars($comment->getPseudo());?>
            | Créé le : <?= htmlspecialchars($comment->getDateAdded());?></p>
        </article><br>
        <?php } ?> 
    </section>
    <a href="<?= (new Framework\UrlGenerator)->generate('admin') ?>"><button class="btn btn-success"> Retour à l'administration</button></a>
</div>
