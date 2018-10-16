<?php
$this->title = "Accueil";
?>
<div class="inner">
    <header>
        <h1>Bonjour à tous, je suis Dimitri Subrini<br />
        et je suis votre developpeur Web.<br /></h1>
        <p><span class="image"><br /><img src="img/moi.jpg" alt="C'est moi !" /></span><br />J'ai suivi la formation PHP/Symfony à Openclassrooms, j'ai plusieurs projets terminés et vous pouvez <a href="../public/img/CVweb.pdf">lire mon CV ici</a>.<br>
    Vous pouvez passer par le formulaire de contact pour me joindre ou passer par les liens sociaux en bas de la page. </p><br>
    </header>
    <h2>Liste des derniers articles</h2>            

    <section class="tiles">
        <?php
            foreach ($articles as $article)
            { ?> 
        <article class="style3">
            <span class="image">
                <img src="/img/pic20.jpg" alt="Article" />
            </span>
            <a href="<?= (new Framework\UrlGenerator)->generate('article_details', ['id' => $article->getId()]); ?>">
                <h2><?= htmlspecialchars($article->getTitle());?></h2>
                <div class="content">
                    <p>Sujet : <?= htmlspecialchars($article->getChapeau());?></p>
                    <p>Ajouté le : <?= htmlspecialchars($article->getDateAdded());?> | par : <?= htmlspecialchars($article->getAuthor());?> </p>
                    <p><?php if (htmlspecialchars($article->getEdited()) != NULL) { ?> <em>(Modifié le <?php echo htmlspecialchars($article->getEdited()); ?> ) <?php } ?></em></p>
                </div>
            </a>
        </article><?php } ?>
    </section>
    
</div>
