<?php
$this->title = "Accueil";
?>
<h1>Mon blog</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="banner">
                    <div class="col-sm-6">
                        <div class="presentation">
                            Bonjour, je m'appelle Dimitri Subrini. Et je suis le developpeur qu'il vous FAUT !
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="image">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<p>Liste des derniers articles</p>

    <div class="container">
        <div class="row">
            <?php
            foreach ($articles as $article)
            {
            ?>                
            <div class="col-lg-6 col-sm-12">
                <div class="article">  
                    <h2><a href="../public/index.php?route=article&idArt=<?= htmlspecialchars($article->getId());?>"><strong><?= htmlspecialchars($article->getTitle());?></strong></a></h2>
                    <p><?= htmlspecialchars($article->getContent());?></p>
                    <p>Créé par : <?= htmlspecialchars($article->getAuthor());?> | <?= htmlspecialchars($article->getDateAdded());?> | <?php if (htmlspecialchars($article->getEdited()) != NULL) { ?> <em>(Modifié le <?php echo htmlspecialchars($article->getEdited());} ?>)</em></p>
                 </div><br>                    
            </div>
            <?php } ?>
        </div>
    </div>

