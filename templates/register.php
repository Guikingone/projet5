<?php
$this->title = "S'enregistrer sur le site !";
?>
<h1>Mon blog</h1><hr>
<p>En construction</p>
<div class="signIn">
    <form method="post" action="../public/index.php?route=register">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" value="<?php
            if(isset($post['name'])){
                echo $post['name'];}
        ?>" required>
        </div>
        <div>
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" value="<?php
            if(isset($post['pseudo'])){
                echo $post['pseudo'];}
        ?>" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?php
            if(isset($post['email'])){
                echo $post['email'];}
        ?>" required>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" value="<?php
            if(isset($post['password'])){
                echo $post['password'];}
        ?>" required>
        </div>
        <div>
            <label for="password2">Confirmer mdp :</label>
            <input type="password" id="password2" name="password2" required>
        </div><br>
        <div>
            <input type="submit" class="btn btn-info" value="Envoyer" id="submit" name="submit">
        </div>
    </form>

</div>
