<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon blog</title>
</head>

<body>
<div>
    <h1>Mon blog</h1>
    <p>En construction</p>
    <div>
        <h2><?= htmlspecialchars($article->getTitle());?></h2>
        <p><?= htmlspecialchars($article->getContent());?></p>
        <p><?= htmlspecialchars($article->getAuthor());?></p>
        <p>Créé le : <?= htmlspecialchars($article->getDateAdded());?></p>
    </div>
    <br>
    <a href="../public/index.php">Retour à la liste des articles</a>
    <div id="comments" class="text-left" style="margin-left: 50px">
        <h3>Commentaires</h3>
        <?php
        while($datas = $comments->fetch())
        {
            ?>
            <h4><?= htmlspecialchars($datas['pseudo']);?></h4>
            <p><?= htmlspecialchars($datas['content']);?></p>
            <p>Posté le <?= htmlspecialchars($datas['date_added']);?></p>
            <?php
        }
        $comments->closeCursor();
        ?>
    </div>
</div>
</body>
</html>