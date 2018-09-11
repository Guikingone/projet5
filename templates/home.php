<?php
$this->title = "Accueil";
?>
<h1>Mon blog</h1>
<p>En construction</p>
<<<<<<< HEAD
<a href="../public/index.php?route=saveArticle">Ajouter un article</a>
=======
>>>>>>> 777e59b0788b5aa6b145e30142c61086ee2e962e
<?php
foreach ($articles as $article)
{
?>
    <div>
        <h2><a href="../public/index.php?route=article&idArt=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
        <p><?= htmlspecialchars($article->getContent());?></p>
        <p><?= htmlspecialchars($article->getAuthor());?></p>
        <p>Créé le : <?= htmlspecialchars($article->getDateAdded());?></p>
    </div>
    <br>
<?php
}
?>
