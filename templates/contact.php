<?php
$this->title = "Contactez moi";
?>
<h1>Mon blog</h1><hr>
<p>En construction</p>
<div class="signIn">
    <form method="post" action="../public/index.php?route=contact">
        <div>
            <label for="username">Votre nom :</label>
            <input type="text" id="username" name="username" value="<?php
            if(isset($post['username'])){
                echo $post['username'];}
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
            <label for="subject">Sujet :</label>
            <input type="subject" id="subject" name="subject" value="<?php
            if(isset($post['subject'])){
                echo $post['subject'];}
        ?>" required>
        </div>
        <div>
            <label for="text">Votre message :</label>
            <textarea rows="4" cols="25" id="text" name="text" value="<?php
            if(isset($post['text'])){
                echo $post['text'];}
        ?>" required></textarea>
        </div><br>
        <div>
            <input type="submit" class="btn btn-info" value="Envoyer" id="submit" name="submit">
        </div>
    </form>

</div>
