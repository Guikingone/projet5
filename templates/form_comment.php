<?php
$this->title = "Poster un commentaire";
?>
<h1>Mon blog</h1><hr>
<p>En construction</p>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php if (isset($_SESSION['user']['pseudo'])) { ?>
            <div class="commentForm">
                <form method="post" action="../public/index.php?route=saveComment">
                    <input type="text" id="pseudo" name="pseudo" value="<?php
                        if(isset($_SESSION['user']['pseudo'])){
                            echo $_SESSION['user']['pseudo'];}
                    ?>" hidden><br>
                    <label for="content">Votre commentaire</label><br>
                    <textarea id="content" rows="4" cols="25"name="content"><?php if(isset($post['content'])){ echo $post['content']; } ?></textarea><br>
                    <input type="text" id="articleId" name="articleId" value="<?php
                        if(isset($_GET['idArt'])){
                            echo $_GET['idArt'];}
                    ?>" hidden><br>
                    <input type="submit" class="btn btn-info" value="Envoyer" id="submit" name="submit">
                </form>
            </div>
            <div>
                <a href="../public/index.php"> <button class="btn btn-success">Retour à la liste des articles</button></a>
            </div>        
            <?php } else { ?>
                <p>Vous devez être connecté pour poster un commentaire</p>
                <a href="../public/index.php?route=connection"><button class="btn btn-info">Se connecter</button></a>
            <?php }
            ?>
        </div>
    </div>
</div>
