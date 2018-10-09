<?php
$this->title = "Poster un commentaire";
?>
<div class="inner">
    <h2>Poster un commentaire</h2>
    <h3>Article selectionné</h3>
    <h1><?= htmlspecialchars($article->getTitle());?></h1>
    <p>Sujet : <?= htmlspecialchars($article->getChapeau());?></p>
    <p><?= htmlspecialchars($article->getContent());?></p><hr>
    <p>Créé par : <?= htmlspecialchars($article->getAuthor());?> | <?= htmlspecialchars($article->getDateAdded());?> | <?php if (htmlspecialchars($article->getEdited()) != NULL) { ?> <em>(Modifié le <?php echo htmlspecialchars($article->getEdited()); ?> ) <?php } ?></em></p>
    <br>
</div>
    <section>
            <?php if (isset($_SESSION['user']['pseudo'])) { ?>
                <form method="post" action="/saveComment">
                <div class="fields">
                    <div class="field half">
                    <input type="text" id="pseudo" name="pseudo" value="<?php
                        if(isset($_SESSION['user']['pseudo'])){
                            echo $_SESSION['user']['pseudo'];}
                    ?>" hidden>
                    </div>
                </div>
                <div class="fields">
                    <div class="field half">
                    <label for="content">Votre commentaire : </label><br>
                    <textarea id="content" rows="4" cols="25"name="content"><?php if(isset($post['content'])){ echo $post['content']; } ?></textarea><br>
                    </div>
                </div>
                <div class="fields">
                    <div class="field half">                     
                    <input type="text" id="articleId" name="articleId" value="<?= htmlspecialchars($article->getId());?>" hidden>
                    </div>
                </div>                  
                    <input type="submit" class="primary" value="Envoyer" id="submit" name="submit">
                </form>
            <div>
                <a href="/articles"> <button class="btn btn-success">Retour à la liste des articles</button></a>
            </div>        
            <?php } else { ?>
                <p>Vous devez être connecté pour poster un commentaire</p>
                <a href="./connection"><button class="primary">Se connecter</button></a>
            <?php }
            ?>
    </section>
</div>
