<?php
$this->title = "modifier un commentaire";
?>
<h1>Mon blog</h1><hr>
<p>Modification d'un article</p>

<div class="container">
    <div class="row">
        <div class="signIn">
        <p>Le commentaire a été publié par "<?php echo htmlspecialchars($comment->getPseudo());?>" le <?php echo htmlspecialchars($comment->getDateAdded());?></p>
            <form method="post" action="../public/index.php?route=modifyComment">
                <label for="content">Contenu</label><br>
                <textarea id="content" name="content" required><?php echo htmlspecialchars($comment->getContent());?></textarea><br>
                <input type="text" id="commentId" name="commentId" value="<?php
                        if(isset($_GET['idCom'])){
                            echo $_GET['idCom'];}
                    ?>" hidden><br>
                <input type="submit" class="btn btn-info" value="Modifier" id="submit" name="submit">
            </form>
            <form method="post" action="../public/index.php?route=deleteComment">
                <input type="text" id="commentId" name="commentId" value="<?php
                        if(isset($_GET['idCom'])){
                            echo $_GET['idCom'];}
                    ?>" hidden><br>
                <input type="submit" class="btn btn-danger" value="Supprimer" id="submit" name="submit">
            </form> <br>
            <a href="../public/index.php?route=admin"><button class="btn btn-success"> Retour à l'administration</button></a>
        </div>
    </div>
</div>

   

