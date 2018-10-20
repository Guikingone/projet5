<?php
$this->title = "Commentaires non publié";
if ($comments != null) { ?>
    <div class="inner">
        <h2>Liste des commentaires en attente de publication</h2>
        <section class="tiles">
            <?php
            foreach ($comments as $comment)
            {
            ?>
            <article class="style2">
                <h4><?= htmlspecialchars($comment->getId());?>
                <a href="<?= (new Framework\UrlGenerator)->generate('modif_unpublishedComment', ['id' => $comment->getId()]); ?>">
                <?= htmlspecialchars($comment->getContent());?></a></h4>
                <p>Par : <?= htmlspecialchars($comment->getPseudo());?>
                | Créé le : <?= htmlspecialchars($comment->getDateAdded());?></p>
            </article><br>
            <?php } ?> 
        </section>
    </div>
    <?php } else { ?>
    <div class="inner">
        <h4>Désolé !</h4>
        <h4>Il n'y a pas de commentaires en attente de publication.</h4>
        <a href="<?= (new Framework\UrlGenerator)->generate('admin') ?>"><button class="btn btn-success"> Retour à l'administration</button></a>
    </div>
<?php } ?>
