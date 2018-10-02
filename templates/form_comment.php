<?php
$this->title = "Poster un commentaire";
?>
<h1>Mon blog</h1>
<p>En construction</p>
<?php if (isset($_SESSION['user']['pseudo'])) { ?>
    <div class="commentForm">
        <form method="post" action="../public/index.php?route=saveComment">
            <input type="text" id="pseudo" name="pseudo" value="<?php
                if(isset($_SESSION['user']['pseudo'])){
                    echo $_SESSION['user']['pseudo'];}
            ?>" hidden><br>
            <label for="content">Contenu</label><br>
            <textarea id="content" name="content"><?php if(isset($post['content'])){ echo $post['content']; } ?></textarea><br>
            <input type="text" id="articleId" name="articleId" value="<?php
                if(isset($_GET['idArt'])){
                    echo $_GET['idArt'];}
            ?>" hidden><br>
            <input type="submit" value="Envoyer" id="submit" name="submit">
        </form>
    </div>
    <div>
        <a href="../public/index.php">Retour à la liste des articles</a>
    </div>        
    <?php } else { ?>
        <p>Vous devez être connecté pour poster un commentaire</p>
        <a href="../public/index.php?route=connection">Se connecter</a>
    <?php }
    ?>