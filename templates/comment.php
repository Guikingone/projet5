<?php
$this->title = "modifier un commentaire";
?>
<div class="inner">
    <h2>Modification d'un commentaire</h2>
    <section>
    <p>Le commentaire a été publié par "<?php echo htmlspecialchars($comment->getPseudo());?>" le <?php echo htmlspecialchars($comment->getDateAdded());?></p>
        <form method="post" action="../public/index.php?route=modifyComment">
            <div class="fields">
                <div class="field half">
                    <label for="content">Commentaire :</label>
                    <input type="text" id="content" name="content" value="<?php echo htmlspecialchars($comment->getContent());?>" required>
                </div>
            </div>
            <div class="fields">
                <div class="field half">
                    <input type="text" id="commentId" name="commentId" value="<?php
                            if(isset($_GET['idCom'])){
                                echo $_GET['idCom'];}
                        ?>" hidden><br>                
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" class="primary" value="Modifier" id="submit" name="submit"></li>
            </ul>
        </form>
        <form method="post" action="../public/index.php?route=deleteArticle">
            <div class="fields">
                <div class="field half">
                    <input type="text" id="commentId" name="commentId" value="<?php
                            if(isset($_GET['idCom'])){
                                echo $_GET['idCom'];}
                        ?>" hidden><br>
                    <input type="submit" class="btn btn-danger" value="Supprimer" id="submit" name="submit">                
                </div>
            </div>
        </form>
        <a href="../public/index.php?route=admin"><button class="btn btn-success"> Retour à l'administration</button></a><br>
    </section>
</div>
