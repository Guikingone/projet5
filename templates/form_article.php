<?php
$this->title = "Ajouter un article";
?>
<h1>Mon blog</h1><hr>
<p>En construction</p>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
                <div class="adminForm">
                <form method="post" action="../public/index.php?route=saveArticle">
                    <label for="title">Titre</label><br>
                    <input type="text" id="title" name="title" value="<?php
                        if(isset($post['title'])){
                            echo $post['title'];}
                    ?>"><br>
                    <label for="chapeau">Chapeau</label><br>
                    <input type="text" id="chapeau" name="chapeau" value="<?php
                        if(isset($post['chapeau'])){
                            echo $post['chapeau'];}
                    ?>"><br>
                    <label for="content">Contenu</label><br>
                    <textarea id="content" rows="8" cols="75" name="content"><?php if(isset($post['content'])){ echo $post['content']; } ?></textarea><br>
                    <input type="text" id="author" name="author" value="<?php
                        if(isset($_SESSION['user']['pseudo'])){
                            echo $_SESSION['user']['pseudo'];}
                        ?>" hidden><br>
                        <input type="submit" class="btn btn-info" value="Envoyer" id="submit" name="submit">
                </form><br>
                <a href="../public/index.php?route=admin"><button class="btn btn-success"> Retour à l'administration</button></a>
            </div>
        </div>
    </div>
</div>
