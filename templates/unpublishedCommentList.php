<?php
$this->title = "Commentaires non publié";
?>
<h1>Mon blog</h1><hr>
<p>Liste des commentaires en attente de publication</p>
<?php
if ($comments != null) { ?>

<div class="jumbotron">
    <div class="row">
        <?php foreach ($comments as $comment)
        {
        ?>
        <div class="col-sm-12">
            <div>
                <h2><?= htmlspecialchars($comment->getId());?>
                <a href="../public/index.php?route=unpublishedComment&idCom=<?= htmlspecialchars($comment->getId());?>">
                <?= htmlspecialchars($comment->getContent());?></a></h2>
                <p>Par : <?= htmlspecialchars($comment->getPseudo());?>
                | Créé le : <?= htmlspecialchars($comment->getDateAdded());?></p>
            </div>
            <br>
        </div>
            <?php } 
            } else { ?>
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Il n'y a pas de commentaires en attente de publication.</p>
                        </div>
                    </div>
                </div> 
            <?php }
            ?>
    </div>
</div>






