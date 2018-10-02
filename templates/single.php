<?php
$this->title = "Article";
?>
<h1>Mon blog</h1>
<p>En construction</p>
<div class="article">
    <h2><?= htmlspecialchars($article->getTitle());?></h2>
    <p><?= htmlspecialchars($article->getContent());?></p>
    <p>Créé par : <?= htmlspecialchars($article->getAuthor());?> | <?= htmlspecialchars($article->getDateAdded());?> | <?php if (htmlspecialchars($article->getEdited()) != NULL) { ?> <em>(Modifié le <?php echo htmlspecialchars($article->getEdited());} ?>)</em></p>
</div>
<br>
<a href="../public/index.php">Retour à la liste des articles</a>
<div id="comments" class="text-left" style="margin-left: 50px">
    <h3>Commentaires</h3>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p>Posté le <?= htmlspecialchars($comment->getDateAdded());?></p>
        <?php
    }
    if (isset($_SESSION['user']['pseudo'])) { ?>
    <div>
        <a href="../public/index.php?route=saveComment&idArt=<?= htmlspecialchars($article->getId());?>">Poster un commentaire</a>
    </div>        
    <?php } else { ?>
        <p>Vous devez être connecté pour poster un commentaire</p>
        <a href="../public/index.php?route=connection">Se connecter</a>
    <?php }
    ?>
</div>
