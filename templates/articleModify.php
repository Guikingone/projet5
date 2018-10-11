<?php
$this->title = "modifier un article";
?>

<div class="inner">
    <h2>Modification d'un article</h2>
    <section>
    <p>L'article a été publié par "<?php echo htmlspecialchars($article->getAuthor());?>" le <?php echo htmlspecialchars($article->getDateAdded());?></p>
        <form method="post" action="/index.php/admin/modified_article">
            <div class="fields">
                <div class="field half">
                    <label for="title">Titre de l'article :</label>
                    <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($article->getTitle());?>" required>
                </div>
            </div>
            <div class="fields">
                <div class="field half">
                    <label for="chapeau">Chapeau de l'article :</label>
                    <input type="text" id="chapeau" name="chapeau" value="<?php echo htmlspecialchars($article->getChapeau());?>" required>
                </div>
            </div>
            <div class="fields">
                <div class="field half">
                    <label for="author">Auteur de l'article :</label>
                    <input type="text" id="author" name="author" value="<?php echo htmlspecialchars($article->getAuthor());?>" required>
                </div>
            </div>
            <div class="fields">
                <div class="field half">
                    <label for="content">Contenu de l'article :</label>
                    <textarea rows="4" cols="100" id="content" name="content" value="" required><?php echo htmlspecialchars($article->getContent());?></textarea>
                </div>
            </div>
            <input type="text" id="articleId" name="articleId" value="<?php echo htmlspecialchars($article->getId());?>" hidden><br>
            <ul class="actions">
                <li><input type="submit" class="primary" value="Modifier" id="submit" name="submit"></li>
            </ul>
        </form>
        <form method="post" action="/index.php/admin/deleteArticle">
            <div class="fields">
                <div class="field half">
                    <input type="text" id="articleId" name="articleId" value="<?php echo htmlspecialchars($article->getId());?>" hidden><br>
                    <input type="submit" class="btn btn-danger" value="Supprimer" id="submit" name="submit">                
                </div>
            </div>
        </form>
        <a href="/index.php/admin"><button class="btn btn-success"> Retour à l'administration</button></a><br>
    </section>
</div>
