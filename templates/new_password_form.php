<?php
$this->title = "Mot de passe oublié";
?>
<div class="inner">
    <h2>Changement de mot de passe oublié</h2>
    <section>
        <form method="post" action="/index.php/newpassword?token=<?= $_GET['token'] ?>">
            <div class="fields">
                <div class="field half">
                        <input type="password" id="password" name="password" value="<?php
                        if(isset($post['password'])){
                            echo $post['password'];}
                    ?>" placeholder="Mot de passe" required>
                </div>
            </div>
            <div class="fields">
                <div class="field half">
                        <input type="password" id="password2" name="password2" value="<?php
                        if(isset($post['password2'])){
                            echo $post['password2'];}
                    ?>" placeholder="Confirmer mdp" required>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" class="primary" value="Modifier" id="submit" name="submit"></li>
            </ul>
        </form>
    </section>
</div>
