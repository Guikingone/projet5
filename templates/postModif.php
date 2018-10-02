<?php
$this->title = "Modification article";
?>
<h1>Mon blog</h1>
<p>En construction</p>
<?php
foreach ($articles as $article)
{
?>
    <div>
        <h2><?= htmlspecialchars($article->getId());?><a href="../public/index.php?route=modifArticle&idArt=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
        <p>Par : <?= htmlspecialchars($article->getAuthor());?> | Créé le : <?= htmlspecialchars($article->getDateAdded());?></p>
    </div>
    <br>
<?php
}
?>
