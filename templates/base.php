<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8" />
      <title><?= $title ?></title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
      <link href="https://cdnpublic/js.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="/css/main.css" />
		  <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
  </head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="/" class="logo">
									<span class="symbol"><img src="img/logo.svg" alt="" /></span><span class="title">Blog Avenir2point0</span>
                </a>
                <p>Message du system : <?php if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                } else { ?>
                <em>Pas de message pour le moment...</em> <?php } ?>
                </p>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>
            <!-- Menu -->
            <nav id="menu">
              <h2>Menu</h2>
              <?php if (isset($_SESSION['user']['pseudo'])) { ?>
                  <h4> Bonjour :  <?= $_SESSION['user']['pseudo']; ?></h4>
              <?php } ?>
              <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/articles">Articles</a></li>
                
                <li><a href="/contact">Contact</a></li>
                <?php
                if (isset($_SESSION['user']['pseudo'])) { ?>
                  <li><a href="/disconnect">Deconnexion</a></li>
                <?php } else { ?>
                  <li><a href="/register">Enregistrement</a></li>
                  <li><a href="/connection">Se connecter</a></li>
                <?php }
                  if (isset($_SESSION['user']['admin']) && ($adminPass = $_SESSION['user']['admin']) && ($adminPass == 1)) { ?>
                  <li>
                    <a href="/admin">Administration</a>
                  </li>
                  <?php } ?>
              </ul>
            </nav>
          </header>
      <div id="main">
      <?= $content ?>
      </div>

     <!-- Footer -->
     <footer id="footer">
						<div class="inner">
							<section>
								<h2>Réseaux sociaux</h2>
								<ul class="icons">
									<li><a href="https://www.linkedin.com/in/dimitri-subrini-b48848156/" class="icon style2 fa-linkedin"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/profile.php?id=1152429246" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://github.com/avenir2point0/projet5" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>
    </div>
     <!-- Scripts -->
			<script src="public/js/jquery.min.js"></script>
			<script src="public/js/browser.min.js"></script>
			<script src="public/js/breakpoints.min.js"></script>
			<script src="public/js/util.js"></script>
      <script src="public/js/main.js"></script>
  </body>
</html>
