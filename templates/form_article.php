<?php
$this->title = "Ajouter un article";
?>
<div class="inner">
    <h2>Ecrire un article</h2>
    <section>
            <form method="post" action="/index.php/admin/create_article">
            <div class="fields">
                <div class="field half">
                    <label for="title">Titre de l'article :</label>
                    <input type="text" id="title" name="title" value="<?php
                        if(isset($post['title'])){
                            echo $post['title'];}
                    ?>" required>
                </div>
            </div>
            <div class="fields">
                <div class="field half">
                    <label for="chapeau">Chapeau de l'article :</label>
                    <input type="text" id="chapeau" name="chapeau" value="<?php
                        if(isset($post['chapeau'])){
                            echo $post['chapeau'];}
                    ?>" required>
                </div>
            </div>
            <div class="fields">
                <div class="field half">
                    <label for="content">Contenu de l'article :</label>
                    <textarea rows="4" cols="100" id="content" name="content" value="<?php if(isset($post['content'])){ echo $post['content']; } ?>" required></textarea>
                </div>
            </div>
            <div class="fields">
                <div class="field half">
                    <input type="text" id="author" name="author" value="<?php
                        if(isset($_SESSION['user']['pseudo'])){
                            echo $_SESSION['user']['pseudo'];}
                        ?>" hidden>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" class="primary" value="Créer" id="submit" name="submit"></li>
            </ul>
        </form>
        <a href="/index.php/admin"><button class="btn btn-success">Retour à l'administration</button></a><br>
    </section>
</div>
