<?php
$this->title = "Accueil";
?>
<h1>Mon blog</h1><hr>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="banner">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="presentation">
                                <h1>Présentation</h1>
                                <p>Bonjour, je m'appelle Dimitri Subrini. Et je suis le developpeur qu'il vous FAUT !</p>
                                <p>Voici mon CV : <a href="../public/img/CVweb.pdf"><button class="btn btn-info">Télécharger</button></a></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="image">
                                <img src="../public/img/moi.jpg" alt="Moi !">
                            </div>
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
                    <p>Sujet : <?= htmlspecialchars($article->getChapeau());?></p><hr>
                    <p>Créé par : <?= htmlspecialchars($article->getAuthor());?> | <?= htmlspecialchars($article->getDateAdded());?> | <?php if (htmlspecialchars($article->getEdited()) !== NULL) { ?> <em>(Modifié le <?php echo htmlspecialchars($article->getEdited());} ?>)</em></p>
                 </div><br>                    
            </div>
            <?php } ?>
        </div>
    </div>
