<?php
$this->title = "Tous les articles";
?>
<h1>Mon blog</h1><hr>
<p>Liste des articles</p>

<div class="container">
        <div class="row">
            <?php
            foreach ($articles as $article)
            {
            ?>                
            <div class="col-sm-12">
                <div class="article">  
                    <h2><a href="../public/index.php?route=article&idArt=<?= htmlspecialchars($article->getId());?>"><strong><?= htmlspecialchars($article->getTitle());?></strong></a></h2>
                    <p>Sujet : <?= htmlspecialchars($article->getChapeau());?></p><hr>
                    <p>Créé par : <?= htmlspecialchars($article->getAuthor());?> | <?= htmlspecialchars($article->getDateAdded());?> | <?php if (htmlspecialchars($article->getEdited()) !== NULL) { ?> <em>(Modifié le <?php echo htmlspecialchars($article->getEdited());} ?>)</em></p>
                 </div><br>                    
            </div>
            <?php } ?>
        </div>
    </div>
