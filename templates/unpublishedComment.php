<?php
$this->title = "Publier un commentaire";
?>
<div class="inner">
    <h2>Publier un commentaire</h2>
    <section>
        <p>Le commentaire a été publié par "<?php echo htmlspecialchars($comment->getPseudo());?>" le <?php echo htmlspecialchars($comment->getDateAdded());?></p>
            <form method="post" action="/admin/publishComment">
            <div class="fields">
                <div class="field half">
                    <label for="content">Commentaire : </label><br>
                    <textarea id="content" name="content"><?php echo htmlspecialchars($comment->getContent());?></textarea><br>
                </div>
            </div>
            <input type="text" id="articleId" name="articleId" value="<?php echo htmlspecialchars($comment->getId());?>" hidden><br>
            <input type="submit" class="primary" value="Publier" id="submit" name="submit">
        </form> <br>
        <a href="/admin"><button class="btn btn-success">Retour à l'administration</button></a>
    </section>  
</div>
