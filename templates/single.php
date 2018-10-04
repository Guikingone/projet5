<?php
$this->title = "Article";
?>
<h1>Mon blog</h1><hr>
<p>En construction</p>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="article">
                <h2><?= htmlspecialchars($article->getTitle());?></h2>
                <p>Sujet : <?= htmlspecialchars($article->getChapeau());?></p><hr>
                <p><?= htmlspecialchars($article->getContent());?></p><hr>
                <p>Créé par : <?= htmlspecialchars($article->getAuthor());?> | <?= htmlspecialchars($article->getDateAdded());?> | <?php if (htmlspecialchars($article->getEdited()) != NULL) { ?> <em>(Modifié le <?php echo htmlspecialchars($article->getEdited());} ?>)</em></p>
            </div>
            <br>
            <a href="../public/index.php"><button class="btn btn-info">Retour à la liste des articles</button></a>
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
                            <a href="../public/index.php?route=saveComment&idArt=<?= htmlspecialchars($article->getId());?>">Poster un commentaire</a>
                        </div>        
                        <?php } else { ?>
                            <p>Vous devez être connecté pour poster un commentaire</p>
                            <a href="../public/index.php?route=connection">Se connecter</a>
                        <?php }
                        ?>
                    </div>
                </div>
        </div>
    </div>
</div>

