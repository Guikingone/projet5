<?php
$this->title = "Administration";
?>
<h1>Mon blog</h1><hr>
<p>Page Admin</p>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-3">
            <div class="button">
            <a href="../public/index.php?route=saveArticle"><button class="btn btn-info">Ajouter un article</button></a>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3">
            <div class="button">
            <a href="../public/index.php?route=postModif"><button class="btn btn-info">Modifier un article</button></a>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3">
            <div class="button">
            <a href="../public/index.php?route=commentModif"><button class="btn btn-info">Modifier un commentaire</button></a>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3">
            <div class="button">
            <a href="../public/index.php?route=unpublishedCommentList"><button class="btn btn-info">Publier les commentaires</button></a>
            </div>
        </div>
    </div>
</div>




