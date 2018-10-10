<?php
$this->title = "Article";
?>
<div class="inner">
    <h1><?= htmlspecialchars($article->getTitle());?></h1>
    <p>Sujet : <?= htmlspecialchars($article->getChapeau());?></p>
    <p><?= htmlspecialchars($article->getContent());?></p><hr>
    <p>Créé par : <?= htmlspecialchars($article->getAuthor());?> | <?= htmlspecialchars($article->getDateAdded());?> | <?php if (htmlspecialchars($article->getEdited()) != NULL) { ?> <em>(Modifié le <?php echo htmlspecialchars($article->getEdited()); ?> ) <?php } ?></em></p>
    <br>
    <a href="/index.php/articles"><button class="primary">Retour à la liste des articles</button></a><hr>
</div>
<div class="inner">
    <div class="jumbotron">
        <h3>Commentaires</h3><hr>
        <div class="col-sm">
            <?php
            foreach ($comments as $comment)
            {
                ?>
                <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
                <p><?= htmlspecialchars($comment->getContent());?></p>
                <p>Posté le <?= htmlspecialchars($comment->getDateAdded());?></p><hr>
                <?php
            }
            if (isset($_SESSION['user']['pseudo'])) { ?>
            <div>
                <a href="/index.php/saveComment/article<?= htmlspecialchars($article->getId());?>"><button class="primary">Poster un commentaire</button></a>
            </div>        
            <?php } else { ?>
                <p>Vous devez être connecté pour poster un commentaire</p>
                <a href="/index.php/connection">Se connecter</a>
            <?php }
            ?>
        </div>
    </div>
</div>
