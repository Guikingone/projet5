<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../public/index.php">Accueil<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../public/index.php?route=register">Enregistrement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../public/index.php?route=contact">Contact</a>
            </li>
            <?php
            if (isset($_SESSION['user']['pseudo'])) { ?>
              <li class="nav-item">
              <a class="nav-link"> Bonjour :  <?= $_SESSION['user']['pseudo']; ?></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="../public/index.php?route=disconnect">Deconnexion</a>
              </li>
            <?php } else { ?>
              <li class="nav-item">
              <a class="nav-link" href="../public/index.php?route=connection">Se connecter</a>
              </li>
            <?php }
              if (isset($_SESSION['user']['admin']) && ($adminPass = $_SESSION['user']['admin']) && ($adminPass == 1)) { ?>
              <li class="nav-item">
                <a class="nav-link" href="../public/index.php?route=admin">Administration</a>
              </li>
              <?php } ?>

          </ul>
        </div>
      </nav>
    
    </header>
    <div id="content">
    <?php if (isset($_SESSION['message'])) {
      echo $_SESSION['message'];

    } ?>
        <?= $content ?>
    </div>
    <footer></footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>