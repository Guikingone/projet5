<?php
$this->title = "Publier un article";
?>
<h1>Mon blog</h1>
<p>En construction</p>
<div>
    <p>Le commentaire a été publié par "<?php echo htmlspecialchars($comment->getPseudo());?>" le <?php echo htmlspecialchars($comment->getDateAdded());?></p>
</div>
<div>
    <form method="post" action="../public/index.php?route=publishComment">
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?php echo htmlspecialchars($comment->getContent());?></textarea><br>
        <input type="text" id="articleId" name="articleId" value="<?php
                if(isset($_GET['idCom'])){
                    echo $_GET['idCom'];}
            ?>" hidden><br>
        <input type="submit" class="btn btn-info" value="Publier" id="submit" name="submit">
    </form> <br>
    <a href="../public/index.php?route=admin"><button class="btn btn-success">Retour à l'administration</button></a>
</div>
