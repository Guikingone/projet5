<?php
$this->title = "Modification commentaire";
?>
<h1>Mon blog</h1><hr>
<p>Liste des commentaires</p>

<div class="jumbotron">
    <div class="row">
        <?php
        foreach ($comments as $comment)
        {
        ?>
            <div class="col-sm-12">
                <h2><?= htmlspecialchars($comment->getId());?>
                <a href="../public/index.php?route=comment&idCom=<?= htmlspecialchars($comment->getId());?>">
                <?= htmlspecialchars($comment->getContent());?></a></h2>
                <p>Par : <?= htmlspecialchars($comment->getPseudo());?>
                | Créé le : <?= htmlspecialchars($comment->getDateAdded());?></p>
            </div>
            <br>
        <?php
        }
        ?>  
    </div>
</div>

