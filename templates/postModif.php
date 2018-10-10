<?php
$this->title = "Modification article";
?>
<div class="inner">
    <h2>Liste des articles</h2>
    <section class="tiles">
        <?php
            foreach ($articles as $article)
            { ?> 
        <article class="style2">
            <span class="image">
                <img src="/img/pic20.jpg" alt="Article" />
            </span>
            <a href="/index.php/admin/modif_article/<?= htmlspecialchars($article->getId());?>">
                <h2><?= htmlspecialchars($article->getTitle());?></h2>
                <div class="content">
                    <p>Sujet : <?= htmlspecialchars($article->getChapeau());?></p>
                    <p>Ajouté le : <?= htmlspecialchars($article->getDateAdded());?></p>
                    <p><?php if (htmlspecialchars($article->getEdited()) != NULL) { ?> <em>(Modifié le <?php echo htmlspecialchars($article->getEdited()); ?> ) <?php } ?></em></p>
                </div>
            </a>
        </article><?php } ?>
    </section><br>
    <a href="/index.php/admin"><button class="btn btn-success">Retour à l'administration</button></a>
</div>
