<?php
$this->title = "modifier un article";
?>
<h1>Mon blog</h1>
<p>Modification d'un article</p>
<div>
    <p>L'article a été publié par "<?php echo htmlspecialchars($article->getAuthor());?>" le <?php echo htmlspecialchars($article->getDateAdded());?></p>
</div>
<div>
    <form method="post" action="../public/index.php?route=modifyArticle">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($article->getTitle());?>"><br>
        <label for="chapeau">Chapeau</label><br>
        <input type="text" id="chapeau" name="chapeau" value="<?php echo htmlspecialchars($article->getChapeau());?>"><br>
        <label for="author">Auteur</label><br>
        <input type="text" id="author" name="author" value="<?php echo htmlspecialchars($article->getAuthor());?>"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?php echo htmlspecialchars($article->getContent());?></textarea><br>
        <input type="text" id="articleId" name="articleId" value="<?php
                if(isset($_GET['idArt'])){
                    echo $_GET['idArt'];}
            ?>" hidden><br>
        <input type="submit" class="btn btn-info" value="Modifier" id="submit" name="submit">
    </form>
    <form method="post" action="../public/index.php?route=deleteArticle">
        <input type="text" id="articleId" name="articleId" value="<?php
                if(isset($_GET['idArt'])){
                    echo $_GET['idArt'];}
            ?>" hidden><br>
        <input type="submit" class="btn btn-danger" value="Supprimer" id="submit" name="submit">
    </form> <br>

    <a href="../public/index.php?route=admin"><button class="btn btn-success"> Retour à l'administration</button></a>
</div>