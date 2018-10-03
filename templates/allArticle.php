<?php
$this->title = "Tous les articles";
?>
<h1>Mon blog</h1>
<p>Liste des articles</p>
<?php
foreach ($articles as $article)
{
?>
    <div class="container">
        <div class="article">
            <h2><a href="../public/index.php?route=article&idArt=<?= htmlspecialchars($article->getId());?>"><strong><?= htmlspecialchars($article->getTitle());?></strong></a></h2>
            <p><?= htmlspecialchars($article->getContent());?></p>
            <p>Créé par : <?= htmlspecialchars($article->getAuthor());?> | <?= htmlspecialchars($article->getDateAdded());?> | <?php if (htmlspecialchars($article->getEdited()) != NULL) { ?> <em>(Modifié le <?php echo htmlspecialchars($article->getEdited());} ?>)</em></p>
        </div>
    </div>
        <br>
<?php
}
?>