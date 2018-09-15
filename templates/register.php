<?php
$this->title = "S'enregistrer sur le site !";
?>
<h1>Mon blog</h1>
<p>En construction</p>
<div class="signIn">
    <form method="post" action="../public/index.php?route=register">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="user_pseudo">
        </div>
        <div>
            <label for="mail">Email :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="password1">Mot de passe :</label>
            <input type="password" id="password1" name="password1">
        </div>
        <div>
            <label for="password2">Confirmer mdp :</label>
            <input type="password" id="password2" name="password2">
        </div>
        <div>
            <input type="submit" value="Envoyer" id="submit" name="submit">
        </div>
    </form>

</div>