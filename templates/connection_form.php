<?php
$this->title = "Connexion au site !";
?>
<h1>Mon blog</h1>
<p>En construction</p>
<div class="signIn">
    <form method="post" action="../public/index.php?route=connection">
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
            <input type="submit" value="Envoyer" id="submit" name="submit">
        </div>
    </form>

</div>