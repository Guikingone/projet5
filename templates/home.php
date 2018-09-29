<?php
$this->title = "Accueil";
?>
<h1>Mon blog</h1>
<p>En construction</p>
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
if (isset($_SESSION['user']['pseudo']) && ($var = $_SESSION['user']['pseudo']) && ($var == 7)) {
    echo 'ca marche';
} else {
    echo 'error';
}
?>
