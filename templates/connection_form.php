<?php
$this->title = "Connexion au site !";
?>


<div class="inner">
    <h2>Se connecter au Blog</h2>
    <form method="post" action="/projet5/public/index/connection">
        <div class="fields">
            <div class="field half">
                    <input type="text" id="pseudo" name="pseudo" value="<?php
                    if(isset($post['pseudo'])){
                        echo $post['pseudo'];}
                ?>" placeholder="Votre pseudo" required>
            </div>
        </div>
        <div class="fields">
            <div class="field half">
                    <input type="text" id="email" name="email" value="<?php
                    if(isset($post['email'])){
                        echo $post['email'];}
                ?>" placeholder="Votre email" required>
            </div>
        </div>
        <div class="fields">
                <div class="field half">
                        <input type="password" id="password" name="password" value="<?php
                        if(isset($post['password'])){
                            echo $post['password'];}
                    ?>" placeholder="Votre mot de passe" required>
                </div>
            </div><br>
            <ul class="actions">
                <li><input type="submit" class="primary" value="Envoyer" id="submit" name="submit"></li>
            </ul>
    </form>

</div>
