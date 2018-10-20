<?php
$this->title = "Article";
?>
<div class="inner">
    <h1><?= htmlspecialchars(htmlentities(strip_tags($article->getTitle())));?></h1>
    <p>Sujet : <?= htmlspecialchars(htmlentities(strip_tags($article->getChapeau())));?></p>
    <p><?= htmlspecialchars(htmlentities(strip_tags($article->getContent())));?></p><hr>
    <p>Créé par : <?= htmlspecialchars(htmlentities(strip_tags($article->getAuthor())));?> | <?= htmlspecialchars(htmlentities(strip_tags($article->getDateAdded())));?> | <?php if (\is_null(htmlspecialchars(htmlentities(strip_tags($article->getEdited()))))) { ?> <em>(Modifié le <?php echo htmlspecialchars(htmlentities(strip_tags($article->getEdited()))); ?> ) <?php } ?></em></p>
    <br>
    <a href="<?= (new Framework\UrlGenerator)->generate('articles') ?>"><button class="primary">Retour à la liste des articles</button></a><hr>
</div>
<div class="inner">
    <div class="jumbotron">
        <h3>Commentaires</h3><hr>
        <div class="col-sm">
            <?php
            foreach ($comments as $comment)
            {
                ?>
                <h4><?= htmlspecialchars(htmlentities(strip_tags($comment->getPseudo())));?></h4>
                <p><?= htmlspecialchars(htmlentities(strip_tags($comment->getContent())));?></p>
                <p>Posté le <?= htmlspecialchars(htmlentities(strip_tags($comment->getDateAdded())));?></p><hr>
                <?php
            }
            if (isset($_SESSION['user']['pseudo'])) { ?>
            <div>
                <a href="<?= (new Framework\UrlGenerator)->generate('create_comment', ['id' => $article->getId()]); ?>"><button class="primary">Poster un commentaire</button></a>
            </div>        
            <?php } else { ?>
                <p>Vous devez être connecté pour poster un commentaire</p>
                <a href="<?= (new Framework\UrlGenerator)->generate('connection') ?>">Se connecter</a>
            <?php }
            ?>
        </div>
    </div>
</div>
