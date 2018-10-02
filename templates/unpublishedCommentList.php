<?php
$this->title = "Commentaires non publié";
?>
<h1>Mon blog</h1>
<p>En construction</p>
<?php
foreach ($comments as $comment)
{
?>
    <div>
        <h2><?= htmlspecialchars($comment->getId());?>
        <a href="../public/index.php?route=unpublishedComment&idCom=<?= htmlspecialchars($comment->getId());?>">
        <?= htmlspecialchars($comment->getContent());?></a></h2>
        <p>Par : <?= htmlspecialchars($comment->getPseudo());?>
         | Créé le : <?= htmlspecialchars($comment->getDateAdded());?></p>
    </div>
    <br>
<?php
}
?>
