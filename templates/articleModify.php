<?php
$this->title = "modifier un article";
?>
<h1>Mon blog</h1>
<p>En construction</p>
<div>
    <p>L'article a été publié par "<?php echo htmlspecialchars($article->getAuthor());?>" le <?php echo htmlspecialchars($article->getDateAdded());?></p>
</div>
<div>
    <form method="post" action="../public/index.php?route=modifyArticle">
    <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($article->getTitle());?>"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?php echo htmlspecialchars($article->getContent());?></textarea><br>
        <input type="text" id="articleId" name="articleId" value="<?php
                if(isset($_GET['idArt'])){
                    echo $_GET['idArt'];}
            ?>" hidden><br>
        <input type="submit" value="Modifier" id="submit" name="submit">
    </form>
    <form method="post" action="../public/index.php?route=deleteArticle">
        <input type="text" id="articleId" name="articleId" value="<?php
                if(isset($_GET['idArt'])){
                    echo $_GET['idArt'];}
            ?>" hidden><br>
        <input type="submit" value="Supprimer" id="submit" name="submit">
    </form>
    <a href="../public/index.php?route=admin">Retour à l'administration</a>
</div>